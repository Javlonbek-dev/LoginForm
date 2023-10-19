<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <form action="login.php" method="post">
        <h2>LOGIN</h2>
        <?php if(isset( $_GET['error'])){?>
            <p class="error"> <?php echo $_GET['error'];?></p>
            <?php } ?>
        <label>User Name</label>
        <input type="text" name="uname" placeholder="User Name">
        <label>Password</label>
        <input type="number" name="password" placeholder="Password">
        <button type="submit">Login</button>
    </form>
</body>
</html>