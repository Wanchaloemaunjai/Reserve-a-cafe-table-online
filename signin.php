<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration System PDO</title>
    <link rel="stylesheet" href="login.css">
    <section class="container">
        <div class="login-container">
            <div class="circle circle-one"></div>
            <div class="form-container">
                <img src="https://raw.githubusercontent.com/hicodersofficial/glassmorphism-login-form/master/assets/illustration.png" alt="illustration" class="illustration" />
</head>
<body>
                <h1 class="opacity">LOGIN</h1>
                <form action="signin_db.php" method="post">
            <?php if(isset($_SESSION['error'])) { ?>
                <div class="alert alert-danger" role="alert">
                    <?php 
                        echo $_SESSION['error'];
                        unset($_SESSION['error']);
                    ?>
                </div>
            <?php } ?>
            <?php if(isset($_SESSION['success'])) { ?>
                <div class="alert alert-success" role="alert">
                    <?php 
                        echo $_SESSION['success'];
                        unset($_SESSION['success']);
                    ?>
                </div>
            <?php } ?>
            <input type="text" name="email" placeholder="email" />
            <input type="password" name="password" placeholder="PASSWORD" />

                    <button type="submit" name="signin" class="btn btn-primary">Sign In</button>
                </form>
                <div class="register-forget opacity">
                    <a href="Register.php">REGISTER</a>
            </div>
            <div class="circle circle-two"></div>
        <div class="theme-btn-container"></div>
    </section>
</body>
</html>