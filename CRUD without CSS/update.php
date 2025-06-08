<!--FrontEnd-->
<?php
    include("dbconn.php");
    include("req/read.php");
    if (isset($_GET["id"])) {
        $id = $_GET["id"];
        $student = update($conn, $id);
    }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP CRUD - UPDATE</title>
</head>
<body>
   
    <form action="req/update.php" method="post">
        <label>Firstname</label>
        <input type="text" name="firstname" value="<?=$student["firstname"]?>"> <br>

        <label>Lastname</label>
        <input type="text" name="lastname" value="<?=$student["lastname"]?>"> <br>

        <label>Email</label>
        <input type="text" name="email" value="<?=$student["email"]?>"> <br>

        <input hidden type="text" name="id" value="<?=$student["id"]?>"> <br>

        <button class="submit">UPDATE</button>
    </form>
</body>
</html>