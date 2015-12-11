<?php
	session_start();
	require("includes/connection.php");
	if(isset($_GET['page'])){
		
		$pages=array("products", "cart");
		
		if(in_array($_GET['page'], $pages)) {
			
			$_page=$_GET['page'];
			
		}else{
			
			$_page="products";
			
		}
		
	}else{
		
		$_page="products";
		
	}

?>
<!DOCTYPE html>
<head>

	<?php
        include("commonhead.html");
    ?>

    <link rel="stylesheet" type="text/css" href="static/css/cartstyle.css">
	<title>007-Shop</title>
</head>

<body>
<!-- navigation bar -->
<div class="nav">

    <?php
    	include("nav.html");
	?>

</div>

<!-- end of navigation bar -->

	
	<div>

		<div class="shopcontent">
			
			<?php require($_page.".php"); ?>

		</div>
		
		<div id="cartsidebar">
		<div id="sidebarcontent">
			<?php
			
				if(isset($_SESSION['cart'])){
					
					$sql="SELECT * FROM products WHERE id_product IN (";
					
					foreach($_SESSION['cart'] as $id => $value) {
						$sql.=$id.",";
					}
					
					$sql=substr($sql, 0, -1).") ORDER BY name ASC";
					$query=mysql_query($sql);
					while($row=mysql_fetch_array($query)){
						
					?>
						<p class="sidebarcontent"><?php echo $row['name'] ?> x <?php echo $_SESSION['cart'][$row['id_product']]['quantity'] ?></p>
					<?php
						
					}
				?>
					<hr />
					<a href="shop.php?page=cart" class="cartbutton">Go to Cart</a>
				<?php
					
				}else{
					
					echo "<p class='sidebarcontent'>Your cart is empty. Please add some products.</p>";
					
				}
			
			?>

		</div>
			
		</div>

	</div>

</body>
</html>
