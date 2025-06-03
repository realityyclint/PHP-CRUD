<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP CRUD - CREATE</title>
</head>
<body>
<?php
    if(isset($_GET["error"])){?>
    <p class="message"><?=htmlspecialchars($_GET["error"])?></p>    
<?php}?>
    <form action="req/create.php" method="post">
        <label>Firstname</label>
        <input type="text" name="firstname"> <br>

        <label>Lastname</label>
        <input type="text" name="lastname"> <br>

        <label>Email</label>
        <input type="text" name="email"> <br>

        <button type="submit">Create</button>

    </form>
</body>
</html>