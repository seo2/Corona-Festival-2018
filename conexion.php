<?php
 
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
 
 
try{
    $link = new PDO('mysql:host=localhost;dbname=coronasunsets', 'c3cea81a91d7', '8d2feb7232919297');
 $link->exec("set names utf8");
}catch(PDOException $e){

    echo "ERROR: " . $e->getMessage();

} 

