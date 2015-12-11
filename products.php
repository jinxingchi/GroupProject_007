<?php

	if(isset($_GET['action']) && $_GET['action']=="add"){
		
		$id=intval($_GET['id']);
		
		if(isset($_SESSION['cart'][$id])){
			
			$_SESSION['cart'][$id]['quantity']++;
			
		}else{
			
			$sql_s="SELECT * FROM products
				WHERE id_product={$id}";
			$query_s=mysql_query($sql_s);
			if(mysql_num_rows($query_s)!=0){
				$row_s=mysql_fetch_array($query_s);
				
				$_SESSION['cart'][$row_s['id_product']]=array(
						"quantity" => 1,
						"price" => $row_s['price']
					);
				
				
			}else{
				
				$message="This product id it's invalid!";
				
			}
			
		}
		
	}

?>
	<!-- <h1>DVD</h1> -->
	<?php
		if(isset($message)){
			echo "<h2>$message</h2>";
		}
	?>
			<div class="row">
				<?php
				
					$sql="SELECT * FROM products ORDER BY name ASC";
					$query=mysql_query($sql);
					
					while ($row=mysql_fetch_array($query)) {
						
				?>	
					<div class="eachitem col-md-3 col-sm-4 col-xs-6">
                		<img src="./static/images/covers/<?php echo $row['imageURL'] ?>" alt="<?php echo $row['name'] ?>" height="270" width="180">
		                <p class="iteminfo"><?php echo $row['name'] ?></p> 
		                <p class="iteminfo"><?php echo $row['description'] ?></p> 
		                <p class="iteminfo">$<?php echo $row['price'] ?></p> 
		                <p class="iteminfo"><a class="cartbutton" href="shop.php?page=products&action=add&id=<?php echo $row['id_product'] ?>">Add to Cart</a></p> 
		            </div> 
				<?php
						
					}
				
				?>
			    
			</div>