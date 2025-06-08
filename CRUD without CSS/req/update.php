<?php
    include ("../dbconn.php");
    if (
        isset($_POST["firstname"]) &&
        isset($_POST["lastname"]) &&
        isset($_POST["email"]) &&
        isset($_POST["id"])
    ){
        $firstname = $_POST["firstname"];
        $lastname = $_POST["lastname"];
        $email = $_POST["email"];
        $id = $_POST["id"];
    }if (
        empty($firstname) ||
        empty($lastname) ||
        empty($email) ||
        empty($id)
    ){
        $error_message = "Fill in all fields";
        header ("Location: ../index.php?error=$error_message");
    } else {
        $sql = "UPDATE students SET firstname=?, lastname=?, email=? WHERE id=?";
        $statement = $conn->prepare($sql);
        $statement->execute([$firstname, $lastname, $email, $id]);

        $success_message = "Updated Successfully";
        header ("Location: ../index.php?success=$success_message");

    }
?>