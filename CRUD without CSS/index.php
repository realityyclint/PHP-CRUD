<?php
    include("dbconn.php");
    include("req/read.php");
    $students = read($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP CRUD</title>
</head>
<body>
    <h2>PHP - CRUD</h2>
    
     <?php 
        if(isset($_GET["error"])) {?>
            <p class="message"><?=htmlspecialchars($_GET["error"])?></p>
    <?php }?>

    <?php 
        if(isset($_GET["success"])) {?>
            <p class="message"><?=htmlspecialchars($_GET["success"])?></p>
    <?php }?>

    <a href="create.php">create</a>
    <table>
        <tr>
            <td>ID</td>
            <td>FIRSTNAME</td>
            <td>LASTNAME</td>
            <td>ACTION </td>
        </tr>
        <?php
            foreach($students as $student) { ?>
                <tr>
                    <td><?=$student["id"]?></td>
                    <td><?=$student["firstname"]?></td>
                    <td><?=$student["lastname"]?></td>
                    <td><?=$student["email"]?></td>
                    <td>
                        <a href="update.php?id=<?=$student["id"]?>">Update</a>
                        <a href="req/delete.php?id=<?=$student["id"]?>">Delete</a>
                    </td>
                </tr>
        <?php    }
        ?>
    </table>
</body>
</html>