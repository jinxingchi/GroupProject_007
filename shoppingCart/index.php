  <?php 
    require("connection.php");
    session_start(); 
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
<html> 
<head> 
      
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<!--     <link rel="stylesheet" href="css/reset.css" /> 
    <link rel="stylesheet" href="css/style.css" />  -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
      
  
    <title>Shopping Cart</title> 
  
  
</head> 
  
<body> 
      
    <div id="container"> 
  
        <div id="main"> 
              
            <?php require($_page.".php"); ?> 
  
        </div><!--end of main--> 
          
        <div id="sidebar"> 
              
        </div><!--end of sidebar--> 
  
    </div><!--end container--> 
  
</body> 
</html>