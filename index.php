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
	<meta charset="UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="./static/images/icons/007-icon.png"/>
    <link rel="stylesheet" type="text/css" href="./static/css/normalize.css">
	<link rel="stylesheet" type="text/css" href="./static/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="./static/css/007style.css">
    <script src="./static/js/jquery.min.js"></script>
    <script src="./static/js/bootstrap.min.js"></script>

    <link rel="stylesheet" type="text/css" href="static/css/cartstyle.css">
	<title>007 Shop</title>
</head>

<body>
<!-- navigation bar -->
<div class="nav">

    <div class="newsblog_menuitem_wrapper">
        <div class="newsblog_menuitem_innerwrapper">
            <a class="newsblog_menuitem" href="index.html">Home</a>
        </div>
    </div>

    <div class="contact_menuitem_wrapper">
        <div class="contact_menuitem_innerwrapper">
            <a class="contact_menuitem" href="contact.html">Contact</a>
        </div>
    </div>

    <div class="projects_menuitem_wrapper">
        <div class="projects_menuitem_innerwrapper">
            <a class="projects_menuitem" href="shop.html">Shop</a>
        </div>
    </div>

    <div class="about_menuitem_wrapper">
        <div class="about_menuitem_innerwrapper">
            <a class="about_menuitem" href="biography.html">Biography</a>
        </div>
    </div>

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
					<a href="index.php?page=cart" class="cartbutton">Go to Cart</a>
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
