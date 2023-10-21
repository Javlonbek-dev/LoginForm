<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
        <p>If you haven't account, You will be Register</p>
        <button type="submit"><a href="register.php" class="btn btn-dark mb-3">Register</a></button>
    </form>
</body>
</html>