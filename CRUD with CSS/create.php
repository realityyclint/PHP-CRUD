<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Student</title>
    <style>
        body { font-family: Arial, sans-serif; max-width: 500px; margin: 50px auto; padding: 20px; }
        .message { padding: 10px; margin: 10px 0; border-radius: 5px; }
        .success { background: #d4edda; color: #155724; }
        .error { background: #f8d7da; color: #721c24; }
        form { background: #f8f9fa; padding: 20px; border-radius: 8px; }
        label { display: block; margin: 10px 0 5px; font-weight: bold; }
        input { width: 100%; padding: 8px; margin-bottom: 15px; border: 1px solid #ddd; border-radius: 4px; }
        .btn { padding: 10px 20px; background: #28a745; color: white; border: none; border-radius: 5px; cursor: pointer; }
        .btn:hover { background: #218838; }
        .back-btn { background: #6c757d; text-decoration: none; display: inline-block; margin-bottom: 20px; }
        .back-btn:hover { background: #5a6268; }
    </style>
</head>
<body>
    <a href="index.php" class="btn back-btn">← Back</a>
    <h2>Add New Student</h2>
    
    <?php if(isset($_GET["error"])): ?>
        <div class="message error"><?=htmlspecialchars($_GET["error"])?></div>
    <?php endif; ?>

    <?php if(isset($_GET["success"])): ?>
        <div class="message success"><?=htmlspecialchars($_GET["success"])?></div>
    <?php endif; ?>

    <form action="req/create.php" method="post">
        <label>First Name</label>
        <input type="text" name="firstname" required>

        <label>Last Name</label>
        <input type="text" name="lastname" required>

        <label>Email</label>
        <input type="email" name="email" required>

        <button type="submit" class="btn">Create Student</button>
    </form>
</body>
</html>
