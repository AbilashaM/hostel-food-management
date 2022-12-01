<!DOCTYPE html>

<html>

<head>

    <title>LOGIN</title>

    <link rel="stylesheet" type="text/css" href="style.css">

</head>

<body>
    
    <header>
        <h1> FOOD REPARATORY</h1>
    </header>
    <div class="box">
        <div class="form">

     <form action="login.php" action='details.php' method="post">

        <h2>LOGIN</h2><br><br><br><br>

        <?php if (isset($_GET['error'])) { ?>

            <p class="error"><?php echo $_GET['error']; ?></p>

        <?php } ?>

        <label>User Name</label><br>

        <input type="text" name="uname" placeholder="REG NO"><br><br><br><br>

        <label>Password</label><br>

        <input type="password" name="password" placeholder="Password"><br> <br><br><br>

        <button type="submit">Login</button>

     </form>
</div>
</div>
</body>

</html>
