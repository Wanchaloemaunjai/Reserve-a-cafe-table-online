<?php
session_start();
require_once "config/datadb.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration System PDO</title>
    <link rel="stylesheet" href="data.css">
</head>
<body>

    <div class="container">
        <h3 class="mt-4"></h3>
        <hr>
        <form method="post">

            <?php if (isset($_SESSION['statusMsg'])) { ?>
                <!-- แสดงข้อความสถานะ -->
                <div class="alert alert-<?php echo strpos($_SESSION['statusMsg'], 'successfully') !== false ? 'success' : 'danger'; ?>" role="alert">
                    <?php
                    echo $_SESSION['statusMsg'];
                    unset($_SESSION['statusMsg']);
                    ?>
                </div>
            <?php } ?>

        </form>
        <hr>

        <link href="//db.onlinewebfonts.com/c/a4e256ed67403c6ad5d43937ed48a77b?family=Core+Sans+N+W01+35+Light" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="form.css" type="text/css">
        <div class="body-content">
            <div class="module">
                <h1>กรอกข้อมูลศิลปิน</h1>
                <form action="data_db.php" method="post" enctype="multipart/form-data">
                    <div class="alert alert-danger"></div>
                    <input type="text" placeholder="ชื่อศิลปิน" name="name" required />
                    <input type="text" placeholder="ข้อมูลคอนเสิร์ต" name="data" required />
                    <input type="text" placeholder="ชื่อร้าน" name="shopname" required />
                    <input type="text" placeholder="วัน/เดือน/ปี" name="date" required />
                    <label class="col-sm-1 ">เวลา</label>
                        <input type="time" name="time" class="form-control" required placeholder="เวลา">
                    <div class="mb-3">
                        <br>
                        <label for="img" class="col-form-label">Img:</label>
                        <input type="file" required class="form-control" id="imgInput" name="img">
                        <img loading="lazy" width="100%" id="previewImg" alt="">
                    </div>
                    <input type="submit" value="submit" name="datasubmit" class="btn btn-block btn-primary" />
                </form>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <script>
            let imgInput = document.getElementById('imgInput');
            let previewImg = document.getElementById('previewImg');

            imgInput.onchange = evt => {
                const [file] = imgInput.files;
                if (file) {
                    previewImg.src = URL.createObjectURL(file);
                }
            }
        </script>
    </body>
</html>