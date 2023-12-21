<html>
<head>
    <title>Log-in</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action= "login.php" method="post" class="card">

        <h2>Welcome</h2>

        <?php 
            if (isset($_GET['error'])){ ?>
                <p class="error"><?php echo $_GET['error']; ?></p>
            <?php } ?>

        <label>Username: </label>
        <input type="text" name="username" placeholder="Username" class="textinput">
        <br>
        <label>Password: </label>
        <input type="text" name="password" placeholder="Password">
        <br>
        <button type="submit">Login</button>
        
    </form>

</body>
</html>