<?php
session_start();
require("includes/connection.php");
?>
<!DOCTYPE html>
<html>
<head>

	<?php
        include("commonhead.html");
    ?>

    <link rel="stylesheet" type="text/css" href="static/css/cartstyle.css">
	<title>007-PMS(Product Mangement System)</title>
</head>

<body>
<!-- navigation bar -->
<div class="nav">

    <?php
    	include("nav.html");
	?>

</div>
<!-- end of navigation bar -->

<div class="shopcontent">
<h2 class="managesystemtitle">007-Product Management System</h2>
<h3 class="managetext">Product List</h3>
<?php
if ( isset($_SESSION['error']) ) {
    echo '<p style="color:red">'.$_SESSION['error']."</p>\n";
    unset($_SESSION['error']);
}
if ( isset($_SESSION['success']) ) {
    echo '<p style="color:green">'.$_SESSION['success']."</p>\n";
    unset($_SESSION['success']);
}
echo('<table border="1">'."\n<tr><th>name</th><th>description</th><th>price</th><th>imageURL</th><th>action</th></tr>");
$sql="SELECT * FROM products ORDER BY name ASC";
$query=mysql_query($sql);
while ($row=mysql_fetch_array($query)) {
    echo "<tr><td>";
    echo(htmlentities($row['name']));
    echo("</td><td>");
    echo(htmlentities($row['description']));
    echo("</td><td>");
    echo(htmlentities($row['price']));
    echo("</td><td>");
	echo(htmlentities($row['imageURL']));
    echo("</td><td>");
    echo('<a href="editproduct.php?id_product='.htmlentities($row['id_product']).'">Edit</a> / ');
    echo('<a href="deleteproduct.php?id_product='.htmlentities($row['id_product']).'">Delete</a>');
    echo("</td></tr>\n");
}
?>
</table>
<a class="cartbutton" href="addproduct.php">Add New Product</a>

<?php 
	// require($editproduct.".php"); 
?>

</div>

</body>
</html>