<?php 

    session_start();
    require_once 'config/db.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration System PDO</title>
    <link rel="stylesheet" href="register.css">
</head>
<body>

    <div class="container">
        <h3 class="mt-4"></h3>
        <hr>
        <form method="post">
                    <div class="mb-3">
                <?php if(isset($_SESSION['error'])) { ?>
                    <div class="alert alert-danger" role="alert">
                        <?php 
                            echo $_SESSION['error'];
                            unset($_SESSION['error']);
                        ?>
                    </div>
                <?php } ?>
            </div>
            <?php if(isset($_SESSION['success'])) { ?>
                <div class="alert alert-success" role="alert">
                    <?php 
                        echo $_SESSION['success'];
                        unset($_SESSION['success']);
                    ?>
                </div>
            <?php } ?>
            <?php if(isset($_SESSION['warning'])) { ?>
                <div class="alert alert-warning" role="alert">
                    <?php 
                        echo $_SESSION['warning'];
                        unset($_SESSION['warning']);
                    ?>
                </div>
            <?php } ?>

           
            <div class="mb-3">
                
        </form>
        <hr>
        
        <link href="//db.onlinewebfonts.com/c/a4e256ed67403c6ad5d43937ed48a77b?family=Core+Sans+N+W01+35+Light" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" href="form.css" type="text/css">
<div class="body-content">
  <div class="module">
    <h1>Register</h1>
    <form action="Register_db.php" method="post">
      <div class="alert alert-danger"></div>
      <input type="text" placeholder="first Name" name="firstname" required />
    <input type="text" placeholder="last Name" name="lastname" required />
      <input type="email" placeholder="email" name="email" required />
      <input type="password" placeholder="password" name="password" autocomplete="password" required />
      <input type="password" placeholder="Confirm Password" name="c_password" autocomplete="c_password" required />
      <input type="submit" value="Register" name="signup" class="btn btn-block btn-primary" />
    </form>
    <p>เป็นสมาชิก คลิ๊กที่นี่เพื่อ <a href="signin.php">เข้าสู่ระบบ</a></p>
  </div>
</body>
</html>