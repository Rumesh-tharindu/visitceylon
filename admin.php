<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/admin.css">
</head>
<body>
    <div class="container">
        <h1>ADMIN LOGIN</h1>
        <form action="include/admin.inc.php" method="POST">
            <div class="form-group">
            <label for="">Username</label>
            <input type="text" name="username">
            </div>
            <div class="form-group">
            <label for="">Password</label>
            <input type="password" name="password">
            </div>
            <div class="btn">
                <input type="submit" name="submit" value="countinue">
            </div>
        </form>
    </div>
</body>
</html>