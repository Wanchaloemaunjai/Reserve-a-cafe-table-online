<?php
// Username is root
$user = "root";
$password = "";

// Database name is geeksforgeeks
$database = "datauser";

// Server is localhost with
// port number 3306
$servername="localhost";
$mysqli = new mysqli($servername, $user,
				$password, $database);

// Checking for connections
if ($mysqli->connect_error) {
	die('Connect Error (' .
	$mysqli->connect_errno . ') '.
	$mysqli->connect_error);
}




$sql1 = "SELECT * FROM `shops` WHERE id = 1"; // แก้ไข Id ตามที่คุณต้องการ
$sql2 = "SELECT * FROM `shops` WHERE id = 2";
$sql3 = "SELECT * FROM `shops` WHERE id = 3";
$sql4 = "SELECT * FROM `shops` WHERE id = 4";
$sql5 = "SELECT * FROM `shops` WHERE id = 5";
$sql6 = "SELECT * FROM `shops` WHERE id = 6";
$sql7 = "SELECT * FROM `shops` WHERE id = 7";
$sql8 = "SELECT * FROM `shops` WHERE id = 8";

$result1 = $mysqli->query($sql1);
$result2 = $mysqli->query($sql2);
$result3 = $mysqli->query($sql3);
$result4 = $mysqli->query($sql4);
$result5 = $mysqli->query($sql5);
$result6 = $mysqli->query($sql6);
$result7 = $mysqli->query($sql7);
$result8 = $mysqli->query($sql8);

$row1 = $result1->fetch_assoc();
$row2 = $result2->fetch_assoc();
$row3 = $result3->fetch_assoc();
$row4 = $result4->fetch_assoc();
$row5 = $result5->fetch_assoc();
$row6 = $result6->fetch_assoc();
$row7 = $result7->fetch_assoc();
$row8 = $result8->fetch_assoc();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>
<body>  
  </div>
    <div class="container">
        <!-- Navbar -->
        <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
          <div class="col-md-3 mb-2 mb-md-0">
            <a href="/" class="d-inline-flex link-body-emphasis text-decoration-none">
            </a>
          </div>

    </nav>
        <script src="script.js"></script>
          <div class="col-md-3 text-end">
          <a href="signin.php" class="btn btn-outline-primary me-2">Login</a>
          <a href="Register.php" class="btn btn-outline-primary me-2">Register</a>
          </div>
        
        </header>
        <!-- Navbar -->

    </div>

      <div class="row">
      <div class="col-sm-1 col-md-3 col-lg-3">
    <div class="card">
    <img src="uploads/<?php echo $row1['img']; ?>" id="previewImg" class="card-img-top" alt="..." style="width: 360px; height: 400px;">
        <div class="card-body">
            <h5 class="card-title"><?php echo $row1['name']; ?></h5>
            <h7 style="color:#33CC00"><?php echo $row1['date']; ?></h7>
            <p class="card-text"></p>
            <script>(function(d, s, id) { var js, pjs = d.getElementsByTagName(s)[0]; if (d.getElementById(id)) return; js = d.createElement(s); js.id = id; js.src = "//www.tickcounter.com/static/js/loader.js"; pjs.parentNode.insertBefore(js, pjs); }(document, "script", "tickcounter-sdk"));</script>
            <a data-type="countdown" data-id="4341838" class="tickcounter" style="display:block; left:0; width:100%; height:0; position:relative; padding-bottom:25%; margin:0 auto;" title="My countdown" href="//www.tickcounter.com/">My countdown</a>
            <p class="card-text"></p>
            <a href="" class="btn btn-primary">รายละเอียด</a>
        </div>
    </div>
</div>


        <div class="col-sm-1 col-md-3 col-lg-3">
            <div class="card" >
            <img src="uploads/<?php echo $row2['img']; ?>" id="previewImg" class="card-img-top" alt="..." style="width: 360px; height: 400px;">
                <div class="card-body">
                  <h5 class="card-title"><?php echo $row2['name']; ?></h5>
                  <h7 style="color:#33CC00"><?php echo $row2['date']; ?></h7>
                  <p class="card-text"> </p>
                  <script>(function(d, s, id) { var js, pjs = d.getElementsByTagName(s)[0]; if (d.getElementById(id)) return; js = d.createElement(s); js.id = id; js.src = "//www.tickcounter.com/static/js/loader.js"; pjs.parentNode.insertBefore(js, pjs); }(document, "script", "tickcounter-sdk"));</script><a data-type="countdown" data-id="4341838" class="tickcounter" style="display:block; left:0; width:100%; height:0; position:relative; padding-bottom:25%; margin:0 auto;" title="My countdown" href="//www.tickcounter.com/">My countdown</a>
                  <p class="card-text"></p>
                  <a href="" class="btn btn-primary">รายละเอียด</a>
                </div>
            </div>
        </div>
        <div class="col-sm-1 col-md-3 col-lg-3">
            <div class="card"   >
            <img src="uploads/<?php echo $row3['img']; ?>" id="previewImg" class="card-img-top" alt="..." style="width: 360px; height: 400px;">
                <div class="card-body">
                  <h5 class="card-title"><?php echo $row3['name']; ?></h5>
                  <h7 style="color:#33CC00"><?php echo $row3['date']; ?></h7>
                  <p class="card-text"> </p>
                  <script>(function(d, s, id) { var js, pjs = d.getElementsByTagName(s)[0]; if (d.getElementById(id)) return; js = d.createElement(s); js.id = id; js.src = "//www.tickcounter.com/static/js/loader.js"; pjs.parentNode.insertBefore(js, pjs); }(document, "script", "tickcounter-sdk"));</script><a data-type="countdown" data-id="4341838" class="tickcounter" style="display:block; left:0; width:100%; height:0; position:relative; padding-bottom:25%; margin:0 auto;" title="My countdown" href="//www.tickcounter.com/">My countdown</a>
                  <p class="card-text"></p>
                  <a href="" class="btn btn-primary">รายละเอียด</a>
                </div>
            </div>
        </div>

        <div class="col-sm-1 col-md-3 col-lg-3">
            <div class="card"   >
            <img src="uploads/<?php echo $row4['img']; ?>" id="previewImg" class="card-img-top" alt="..." style="width: 360px; height: 400px;">
                <div class="card-body">
                  <h5 class="card-title"><?php echo $row4['name']; ?></h5>
                  <h7 style="color:#33CC00"><?php echo $row4['date']; ?></h7>
                  <p class="card-text"></p>
                  <script>(function(d, s, id) { var js, pjs = d.getElementsByTagName(s)[0]; if (d.getElementById(id)) return; js = d.createElement(s); js.id = id; js.src = "//www.tickcounter.com/static/js/loader.js"; pjs.parentNode.insertBefore(js, pjs); }(document, "script", "tickcounter-sdk"));</script><a data-type="countdown" data-id="4341838" class="tickcounter" style="display:block; left:0; width:100%; height:0; position:relative; padding-bottom:25%; margin:0 auto;" title="My countdown" href="//www.tickcounter.com/">My countdown</a>
                  <p class="card-text"></p>
                  <a href="" class="btn btn-primary">รายละเอียด</a>
                </div>
            </div>
        </div>

        <div class="my-3"></div>

        <div class="col-sm-1 col-md-3 col-lg-3">
            <div class="card"   >
            <img src="uploads/<?php echo $row5['img']; ?>" id="previewImg" class="card-img-top" alt="..." style="width: 360px; height: 400px;">
                <div class="card-body">
                  <h5 class="card-title"><?php echo $row5['name']; ?></h5>
                  <h7 style="color:#33CC00"><?php echo $row5['date']; ?></h7>
                  <p class="card-text"></p>
                  <script>(function(d, s, id) { var js, pjs = d.getElementsByTagName(s)[0]; if (d.getElementById(id)) return; js = d.createElement(s); js.id = id; js.src = "//www.tickcounter.com/static/js/loader.js"; pjs.parentNode.insertBefore(js, pjs); }(document, "script", "tickcounter-sdk"));</script><a data-type="countdown" data-id="4341838" class="tickcounter" style="display:block; left:0; width:100%; height:0; position:relative; padding-bottom:25%; margin:0 auto;" title="My countdown" href="//www.tickcounter.com/">My countdown</a>
                  <p class="card-text"></p>
                  <a href="" class="btn btn-primary">รายละเอียด</a>
                </div>
            </div>
        </div>

        <div class="col-sm-1 col-md-3 col-lg-3">
            <div class="card"   >
            <img src="uploads/<?php echo $row6['img']; ?>" id="previewImg" class="card-img-top" alt="..." style="width: 360px; height: 400px;">
                <div class="card-body">
                  <h5 class="card-title"><?php echo $row6['name']; ?></h5>
                  <h7 style="color:#33CC00"><?php echo $row6['date']; ?></h7>
                  <p class="card-text"> </p>
                  <script>(function(d, s, id) { var js, pjs = d.getElementsByTagName(s)[0]; if (d.getElementById(id)) return; js = d.createElement(s); js.id = id; js.src = "//www.tickcounter.com/static/js/loader.js"; pjs.parentNode.insertBefore(js, pjs); }(document, "script", "tickcounter-sdk"));</script><a data-type="countdown" data-id="4341838" class="tickcounter" style="display:block; left:0; width:100%; height:0; position:relative; padding-bottom:25%; margin:0 auto;" title="My countdown" href="//www.tickcounter.com/">My countdown</a>
                  <p class="card-text"></p>
                  <a href="" class="btn btn-primary">รายละเอียด</a>
                </div>
            </div>
        </div>

        <div class="col-sm-1 col-md-3 col-lg-3">
            <div class="card"   >
            <img src="uploads/<?php echo $row7['img']; ?>" id="previewImg" class="card-img-top" alt="..." style="width: 360px; height: 400px;">
                <div class="card-body">
                  <h5 class="card-title"><?php echo $row7['name']; ?></h5>
                  <h7 style="color:#33CC00"><?php echo $row3['date']; ?></h7>
                  <p class="card-text"> </p>
                  <script>(function(d, s, id) { var js, pjs = d.getElementsByTagName(s)[0]; if (d.getElementById(id)) return; js = d.createElement(s); js.id = id; js.src = "//www.tickcounter.com/static/js/loader.js"; pjs.parentNode.insertBefore(js, pjs); }(document, "script", "tickcounter-sdk"));</script><a data-type="countdown" data-id="4341838" class="tickcounter" style="display:block; left:0; width:100%; height:0; position:relative; padding-bottom:25%; margin:0 auto;" title="My countdown" href="//www.tickcounter.com/">My countdown</a>
                  <p class="card-text"></p>
                  <a href="" class="btn btn-primary">รายละเอียด</a>
                </div>
            </div>
        </div>

        <div class="col-sm-1 col-md-3 col-lg-3">
            <div class="card"   >
            <img src="uploads/<?php echo $row8['img']; ?>" id="previewImg" class="card-img-top" alt="..." style="width: 360px; height: 400px;">
                <div class="card-body">
                  <h5 class="card-title"><?php echo $row8['name']; ?></h5>
                  <h7 style="color:#33CC00"><?php echo $row8['date']; ?></h7>
                  <p class="card-text"> </p>
                  <script>(function(d, s, id) { var js, pjs = d.getElementsByTagName(s)[0]; if (d.getElementById(id)) return; js = d.createElement(s); js.id = id; js.src = "//www.tickcounter.com/static/js/loader.js"; pjs.parentNode.insertBefore(js, pjs); }(document, "script", "tickcounter-sdk"));</script><a data-type="countdown" data-id="4341852" class="tickcounter" style="display:block; left:0; width:100%; height:0; position:relative; padding-bottom:25%; margin:0 auto;" title="My countdown" href="//www.tickcounter.com/">My countdown</a>
                  <p class="card-text"></p>
                  <a href="" class="btn btn-primary">รายละเอียด</a>
                </div>
            </div>
        </div>
</div>

       
      </div>

        
        

        <footer class="py-3 my-4">
    
            <p class="text-center text-body-secondary">© 2023 Company, Inc</p>
        </footer>
      </div>


      
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" ></script>

</body>
</html>