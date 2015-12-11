<?php

	if(isset($_POST['submit'])){
		
		foreach($_POST['quantity'] as $key => $val) {
			if($val==0) {
				unset($_SESSION['cart'][$key]);
			}else{
				$_SESSION['cart'][$key]['quantity']=$val;
			}
		}
		
	}

?>

<a class="backshop" href="shop.php?page=products">Go Back to Shop</a>
<form method="post" action="shop.php?page=cart">
    
	<table>

		<tr>
		    <th>Name</th>
		    <th></th>
		    <th>Quantity</th>
		    <th>Unit Price</th>
		    <th>Price</th>
		</tr>

		<?php
		
			$sql="SELECT * FROM products WHERE id_product IN (";
					
					foreach($_SESSION['cart'] as $id => $value) {
						$sql.=$id.",";
					}
					
					$sql=substr($sql, 0, -1).") ORDER BY name ASC";
					$query=mysql_query($sql);
					$totalprice=0;
					while($row=mysql_fetch_array($query)){
						$subtotal=$_SESSION['cart'][$row['id_product']]['quantity']*$row['price'];
						$totalprice+=$subtotal;
					?>
						<tr>
						    <td><?php echo $row['name'] ?></td>
						    <td><img src="./static/images/covers/<?php echo $row['imageURL'] ?>" alt="<?php echo $row['name'] ?>" height="120" width="80"></td>
						    <td><input type="text" name="quantity[<?php echo $row['id_product'] ?>]" size="5" value="<?php echo $_SESSION['cart'][$row['id_product']]['quantity'] ?>" /></td>
						    <td>$<?php echo $row['price'] ?></td>
						    <td>$<?php echo $_SESSION['cart'][$row['id_product']]['quantity']*$row['price'] ?></td>
						</tr>
					<?php
						
					}
		?>
					<tr>
					    <td>Total Price: <?php echo $totalprice ?></td>
					</tr>
		
	</table>
	<br />
	<button class="cartbutton" type="submit" name="submit">Update Cart</button>
</form>
<br />
<p>To remove an item set it's quantity to 0. </p>