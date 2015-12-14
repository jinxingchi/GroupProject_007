<?php
session_start();
require("includes/connection.php");

if ( isset($_POST['name']) && isset($_POST['description']) && isset($_POST['price']) && isset($_POST['imageURL']) ) {
  $name = $_POST['name'];
  $description = $_POST['description'];
  $price = $_POST['price'];
  $imageURL = $_POST['imageURL'];
  if ( (strlen($name) > 0) && (strlen($description) > 0) && is_numeric($price) && (intval($price) > 0) && (strlen($imageURL) > 0) ) {
    $sql = "INSERT INTO products (name, description, price, imageURL) VALUES ('".$name."', '".$description."', ".$price.", '".$imageURL."')";
    $query=mysql_query($sql);
    if ($query === true) {
      $_SESSION['success'] = 'Product Record Added';
      // $_SESSION['success'] = mysql_affected_rows();
    } else {
      // $_SESSION['error'] = 'Error in Input Data';
      $_SESSION['error'] = mysql_error();
    }
  }
  header( 'Location: manage.php' ) ;
  return;
}
?>

<!DOCTYPE html>
<html>
<head>

<?php
include("commonhead.html");
?>   

<link rel="stylesheet" type="text/css" href="static/css/cartstyle.css">
<title>007-PMS-Add Product</title>
</head>

<body>
<div class="shopcontent managetext">
<p>Add A New Product</p>
<form method="post">
  <p>Name:
  <input type="text" name="name"></p>
  <p>Description:
  <input type="text" name="description"></p>
  <p>Price:
  <input type="text" name="price"></p>
  <p>imageURL:
  <input type="text" name="imageURL"></p>
  <p><input type="submit" value="Add It"/>
  <a href="manage.php">Cancel</a></p>
</form>
</div>
</body>
</html>