<?php 

session_start();
require_once "config/datadb.php";

if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $data = $_POST['data'];
    $shopname = $_POST['shopname'];
    $date = $_POST['date'];
    $img = $_FILES['img'];
    $time = $_POST['time'];

    $img2 = $_POST['img2'];
    $upload = $_FILES['img']['name'];

    if ($upload != '') {
        $allow = array('jpg', 'jpeg', 'png');
        $extension = explode('.', $img['name']);
        $fileActExt = strtolower(end($extension));
        $fileNew = $img['name']; // ใช้ชื่อไฟล์เดิม
        $filePath = 'uploads/'.$fileNew;
    
        if (in_array($fileActExt, $allow)) {
            if ($img['size'] > 0 && $img['error'] == 0) {
                move_uploaded_file($img['tmp_name'], $filePath);
            }
        }
    
    } else {
        $fileNew = $img2;
    }

    $sql = $db->prepare("UPDATE shops SET name = :name, data = :data, shopname = :shopname, date = :date, img = :img, time = :time WHERE id = :id");
    $sql->bindParam(":id", $id);
    $sql->bindParam(":name", $name); // Removed extra space after :name
    $sql->bindParam(":data", $data);
    $sql->bindParam(":shopname", $shopname);
    $sql->bindParam(":date", $date);
    $sql->bindParam(":img", $fileNew);
    $sql->bindParam(":time", $time);
    $sql->execute();

    if ($sql) {
        $_SESSION['success'] = "อัพเดทข้อมูลสำเร็จ";
        header("location: admin.php");
    } else {
        $_SESSION['error'] = "อัพเดทข้อมูลไม่สำเร็จ";
        header("location: admin.php");
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <style>
        .container {
            max-width: 550px;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h1>Edit Data</h1>
        <hr>
        <form action="edit.php" method="post" enctype="multipart/form-data">
            <?php
                if (isset($_GET['id'])) {
                        $id = $_GET['id'];
                        $stmt = $db->query("SELECT * FROM shops WHERE id = $id");
                        $stmt->execute();
                        $data = $stmt->fetch();
                }
            ?>
                <div class="mb-3">
                    <label for="id" class="col-form-label">ID:</label>
                    <input type="text" readonly value="<?php echo $data['id']; ?>" required class="form-control" name="id" >
                    <label for="name" class="col-form-label">name:</label>
                    <input type="text" value="<?php echo $data['name']; ?>" required class="form-control" name="name" >
                    <input type="hidden" value="<?php echo $data['img']; ?>" required class="form-control" name="img2" >
                </div>
                <div class="mb-3">
                    <label for="name" class="col-form-label">data:</label>
                    <input type="text" value="<?php echo $data['data']; ?>" required class="form-control" name="data">
                </div>
                <div class="mb-3">
                    <label for="name" class="col-form-label">shopname:</label>
                    <input type="text" value="<?php echo $data['shopname']; ?>" required class="form-control" name="shopname">
                </div>
                <div class="mb-3">
                    <label for="name" class="col-form-label">date:</label>
                    <input type="text" value="<?php echo $data['date']; ?>" required class="form-control" name="date">
                </div>
                <div class="mb-3">
                    <label for="img" class="col-form-label">Image:</label>
                    <input type="file" class="form-control" id="imgInput" name="img">
                    <img width="100%" src="uploads/<?php echo $data['img']; ?>" id="previewImg" alt="">
                </div>
                <div class="mb-3">
                    <label for="name" class="col-form-label">time:</label>
                    <input type="text" value="<?php echo $data['time']; ?>" required class="form-control" name="time">
                </div>
                <a href="admin.php" class="btn btn-secondary">Go Back</a>
                <button type="submit" name="update" class="btn btn-primary">Update</button>
        
    </div>
    <script>
        let imgInput = document.getElementById('imgInput');
        let previewImg = document.getElementById('previewImg');

        imgInput.onchange = evt => {
            const [file] = imgInput.files;
                if (file) {
                    previewImg.src = URL.createObjectURL(file)
            }
        }

    </script>
</body>
</html>