<?php
try {
    $pdo = new PDO('mysql:host=localhost;port=3306;dbname=si539', 'root', '');
} catch (Exception $e) {
echo($e->getMessage());
    die("You need to create the database and table for this application:
<pre>
CREATE DATABASE si539 DEFAULT CHARACTER SET utf8;
GRANT ALL ON si539.* TO 'fred'@localhost IDENTIFIED BY 'zap';
GRANT ALL ON si539.* TO 'fred'@127.0.0.1 IDENTIFIED BY 'zap';

Switch to the si539 database:

CREATE TABLE products (
  pid INT UNSIGNED NOT NULL
     AUTO_INCREMENT KEY,
  name VARCHAR(100),
  description VARCHAR(250),
  price decimal(10,2),	 
  imageURL VARCHAR(250),  
  PRIMARYKEY(pid)
);
</pre>
");
}
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
