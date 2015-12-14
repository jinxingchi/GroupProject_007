<?php
session_start();
require("includes/connection.php");

if ( isset($_POST['delete']) && isset($_POST['id_product']) ) {
    $sql = "DELETE FROM products WHERE id_product = ".$_POST['id_product']."";
    $query=mysql_query($sql);
    $_SESSION['success'] = 'Record deleted';
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
?>

<!DOCTYPE html>
<html>
<head>

<?php
include("commonhead.html");
?>   

<link rel="stylesheet" type="text/css" href="static/css/cartstyle.css">
<title>007-PMS-Delete Confirmation</title>
</head>
<body>
<div class="shopcontent managetext">
<?php
echo "<p>Confirm: Deleting ".htmlentities($row['name'])."</p>\n";
echo('<form method="post"><input type="hidden" ');
echo('name="id_product" value="'.htmlentities($row['id_product']).'">'."\n");
echo('<input type="submit" value="Delete" name="delete">');
echo('<a href="manage.php">Cancel</a>');
echo("\n</form>\n</div></body></html>");
?>