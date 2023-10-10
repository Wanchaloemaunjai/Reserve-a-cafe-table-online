<?php 
    session_start();
    require_once "config/datadb.php";

    if (isset($_POST['datasubmit'])) {
        $name = $_POST['name'];
        $data = $_POST['data'];
        $shopname = $_POST['shopname'];
        $date = $_POST['date'];
        $time = $_POST['time'];
          // เช็คว่ามีไฟล์อัปโหลดหรือไม่
    if (isset($_FILES['img']) && $_FILES['img']['size'] > 0 && $_FILES['img']['error'] == 0) {

        // File upload path
        $targetDir = "uploads/";
        $fileName = basename($_FILES["img"]["name"]);
        $targetFilePath = $targetDir . $fileName;
        $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);

        // Allow certain file formats
        $allowTypes = array('jpg', 'png', 'jpeg', 'gif', 'pdf');
        if (!in_array($fileType, $allowTypes)) {
            $_SESSION['statusMsg'] = "Sorry, only JPG, JPEG, PNG & GIF files are allowed to upload.";
            header("Location: dataindex.php");
            exit();
        }

        // Upload the file to the server
        if (move_uploaded_file($_FILES["img"]["tmp_name"], $targetFilePath)) {
            // Insert data into the database
            $sql = "INSERT INTO shops (name, data, shopname, date, img, time) VALUES (:name, :data, :shopname, :date, :img, :time)";
            $stmt = $db->prepare($sql);
            $stmt->execute([
                ':name' => $name,
                ':data' => $data,
                ':shopname' => $shopname,
                ':date' => $date,
                ':img' => $fileName,
                ':time' => $time,
            ]);

            $_SESSION['statusMsg'] = "The file " . $fileName . " has been uploaded successfully.";
        } else {
            $_SESSION['statusMsg'] = "Sorry, there was an error uploading your file.";
        }
        header("Location: dataindex.php");
        exit();
    }
}
?>