<?php 

    if(isset($_GET['action']) && $_GET['action']=="add"){ 
          
        $id=intval($_GET['id']); 
          
        if(isset($_SESSION['cart'][$id])){ 
              
            $_SESSION['cart'][$id]['quantity']++; 
              
        }else{ 
              
            $sql_s="SELECT * FROM products 
                WHERE pid={$id}"; 
            $query_s=mysql_query($sql_s); 
            if(mysql_num_rows($query_s)!=0){ 
                $row_s=mysql_fetch_array($query_s); 
                  
                $_SESSION['cart'][$row_s['pid']]=array( 
                        "quantity" => 1, 
                        "price" => $row_s['price'] 
                    ); 
                  
                  
            }else{ 
                  
                $message="This product id it's invalid!"; 
                  
            } 
              
        } 
          
    } 
  
?> 
    <h1>DVD</h1> 
    <?php 
        if(isset($message)){ 
            echo "<h2>$message</h2>"; 
        } 
    ?> 
<!--     <table> 
        <tr> 
            <th>Name</th> 
            <th>Description</th> 
            <th>Price</th> 
            <th>Action</th> 
        </tr> --> 
          
        <?php 
          
            $sql="SELECT * FROM products ORDER BY name ASC"; 
            $result=mysql_query($sql); 

            if($result === FALSE) {
                die(mysql_error());
            }
              
            while ($row=mysql_fetch_array($result)) { 
            //}
                  
        ?> 
            <div class="col-md-3 col-sm-4 col-xs-6">
                <img src="images/covers/<?php echo $row['imageURL'] ?>" alt="<?php echo $row['name'] ?>" height="360" width="240">
                <p><?php echo $row['name'] ?></p> 
                <p><?php echo $row['description'] ?></p> 
                <p>$<?php echo $row['price'] ?></p> 
                <p><a href="index.php?page=products&action=add&id=<?php echo $row['pid'] ?>">Add to cart</a></p> 
            </div> 
        <?php 
                  
            } 
          
        ?> 
          
    <!-- </table>123 -->