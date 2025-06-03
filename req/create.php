<?php
//Confirmation

if (
    isset($_POST["firstname"]) &&
    isset($_POST["lastname"]) &&
    isset($_POST["email"])
){
    //Validation
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $email = $_POST["email"];
}
if (
    //Verification
    empty($firstname) ||
    empty($lastname) ||
    empty($email)
){
    $error_message = "Fill in all fields";
    header ("Location: ../create.php?error=$error_message");
}
?>