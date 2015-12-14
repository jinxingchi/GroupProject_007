<?php
session_start();
require("includes/connection.php");

if ( isset($_POST['name']) && isset($_POST['description']) && isset($_POST['price']) && isset($_POST['imageURL']) && isset($_POST['id_product']) ) {
        $name = $_POST['name'];
        $description = $_POST['description'];
        $price = $_POST['price'];
		$imageURL = $_POST['imageURL'];
        $id_product = $_POST['id_product'];
	if ( (strlen($name) > 0) && (strlen($description) > 0) && is_numeric($price) && (intval($price) > 0) && (strlen($imageURL) > 0) ) {
    
        $sql = "UPDATE products SET name = '".$name."', description = '".$description."', price = ".$price.", imageURL = '".$imageURL."' WHERE id_product = ".$id_product."";

        // $sql = sprintf("UPDATE products SET name = '%s', description = '%s', price = '%s', imageURL = '%s' WHERE id_product = '%s'",
        //     mysql_real_escape_string($name),
        //     mysql_real_escape_string($description),
        //     mysql_real_escape_string($price),
        //     mysql_real_escape_string($imageURL),
        //     mysql_real_escape_string($id_product));

        //test
        // $sql = "UPDATE products SET description = 123 WHERE id_product = '".$id_product."'";

        $query=mysql_query($sql);
        if ($query === true) {
            $_SESSION['success'] = 'Product Record Updated';
            // $_SESSION['success'] = mysql_affected_rows();
        } else {
            // $_SESSION['error'] = 'Error in Input Data';
            $_SESSION['error'] = mysql_error();
        }
    }
    header( 'Location: manage.php' ) ;
    return;
}

$sql="SELECT * FROM products WHERE id_product = ".$_GET['id_product']."";
$query=mysql_query($sql);
$row=mysql_fetch_array($query);
if ( $row === false ) {
    $_SESSION['error'] = 'Bad value for product id';
    header( 'Location: manage.php' ) ;
    return;
}

$na = htmlentities($row['name']);
$de = htmlentities($row['description']);
$p = htmlentities($row['price']);
$iu = htmlentities($row['imageURL']);
$id = htmlentities($row['id_product']);
?>

<!DOCTYPE html>
<html>
<head>

<?php
include("commonhead.html");
?>   

<link rel="stylesheet" type="text/css" href="static/css/cartstyle.css">
<title>007-PMS-Update Product</title>
</head>
<body>
<div class="shopcontent managetext">

<?php
echo ('<p>Please Update Product Info Below:</p>
<form method="post">
<p>Name: 
<input type="text" name="name" value="'.$na.'"></p>
<p>Description:
<input type="text" name="description" value="'.$de.'"></p>
<p>Price:
<input type="text" name="price" value='.$p.'></p>
<p>imageURL: 
<input type="text" name="imageURL" value="'.$iu.'"></p>
<input type="hidden" name="id_product" value='.$id.'>
<p><input type="submit" value="Update"/>
<a href="manage.php">Cancel</a></p>
</form>');
?>
</div>
</body>
</html>