<?php
    include("../dbconn.php");

    if(isset($_GET["id"])) {
        $id = $_GET["id"];
        
        $sql = "DELETE FROM students WHERE id=?";
        $statement = $conn->prepare($sql);
        $statement->execute([$id]);

        $success_message = "Deleted Successfully";
        header ("Location: ../index.php?success=$success_message");
    }
?>