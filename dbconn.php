<?php
    $server = "localhost";
    $username = "root";
    $password = "";

    $dbname = "crud";
    $port = 3306;
    try {
        $conn = new PDO("mysql: server=$server; dbname=$dbname; port=$port;", $username, $password);
        echo "connected successfully!";
    } catch(PDOException $e) {
        echo "error connecting to the database". $e;
    }
    //Server
?>