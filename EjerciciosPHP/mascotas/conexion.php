<?php 
       $servername = "localhost";
       $username = "root";
       $myDB="txurdican";
       $password = "";
       
       try {
         $pdo = new PDO("mysql:host=$servername;dbname=$myDB", $username, $password);
         // set the PDO error mode to exception
         $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
       } catch(PDOException $e) {
         echo "Connection failed: " . $e->getMessage();
       }



?>