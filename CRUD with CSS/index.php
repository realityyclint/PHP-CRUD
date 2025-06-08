
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
    <style>
        body { font-family: Arial, sans-serif; max-width: 800px; margin: 50px auto; padding: 20px; }
        .message { padding: 10px; margin: 10px 0; border-radius: 5px; }
        .success { background: #d4edda; color: #155724; }
        .error { background: #f8d7da; color: #721c24; }
        .btn { padding: 8px 15px; background: #007bff; color: white; text-decoration: none; border-radius: 5px; }
        .btn:hover { background: #0056b3; }
        .btn-delete { background: #dc3545; }
        .btn-delete:hover { background: #c82333; }
        table { width: 100%; border-collapse: collapse; margin: 20px 0; }
        th, td { padding: 12px; text-align: left; border-bottom: 1px solid #ddd; }
        th { background: #f8f9fa; }
        tr:hover { background: #f5f5f5; }
    </style>
</head>
<body>
    <h2>Student Management</h2>
    
    <?php if(isset($_GET["error"])): ?>
        <div class="message error"><?=htmlspecialchars($_GET["error"])?></div>
    <?php endif; ?>

    <?php if(isset($_GET["success"])): ?>
        <div class="message success"><?=htmlspecialchars($_GET["success"])?></div>
    <?php endif; ?>

    <a href="create.php" class="btn">+ Add Student</a>
    
    <table>
        <tr>
            <th>ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Actions</th>
        </tr>
        <?php foreach($students as $student): ?>
            <tr>
                <td><?=$student["id"]?></td>
                <td><?=$student["firstname"]?></td>
                <td><?=$student["lastname"]?></td>
                <td><?=$student["email"]?></td>
                <td>
                    <a href="update.php?id=<?=$student["id"]?>" class="btn">Edit</a>
                    <a href="req/delete.php?id=<?=$student["id"]?>" class="btn btn-delete" 
                       onclick="return confirm('Delete this student?')">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>