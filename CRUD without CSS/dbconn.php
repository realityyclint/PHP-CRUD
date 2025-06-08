<?php
    $server = "localhost";
    $username = "root";
    $password = "";

    $dbname = "crud"; 

   try {
        $conn = new PDO("mysql: server=$server;dbname=$dbname;", $username, $password);
   } catch (PDOException $e) {
        echo "Error Connecting to the database". $e; 
   }

?>