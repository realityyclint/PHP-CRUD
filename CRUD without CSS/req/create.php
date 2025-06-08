<?php
    include ("../dbconn.php");
    if (
        isset($_POST["firstname"]) &&
        isset($_POST["lastname"]) &&
        isset($_POST["email"])
    ){
        $firstname = $_POST["firstname"];
        $lastname = $_POST["lastname"];
        $email = $_POST["email"];
    }if (
        empty($firstname) ||
        empty($lastname) ||
        empty($email)
    ){
        $error_message = "Fill in all fields";
        header ("Location: ../create.php?error=$error_message");
    } else {
        $sql = "INSERT INTO students (firstname, lastname, email) VALUES (?,?,?)";
        $statement = $conn->prepare($sql);
        $statement->execute([$firstname, $lastname, $email]);

        $success_message = "Created Successfully";
        header ("Location: ../create.php?success=$success_message");

    }
?>