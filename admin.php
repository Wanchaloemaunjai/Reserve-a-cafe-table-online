<?php 

    session_start();
    require_once 'Config/datadb.php';
    if (!isset($_SESSION['admin_login'])) {
        $_SESSION['error'] = 'กรุณาเข้าสู่ระบบ!';
        header('location: signin.php');
    }
    if (isset($_GET['delete'])) {
        $delete_id = $_GET['delete'];
        $deletestmt = $conn->query("DELETE FROM users WHERE id = $delete_id");
        $deletestmt->execute();

        if ($deletestmt) {
            echo "<script>alert('ลบข้อมูลสำเร็จ');</script>";
            header("refresh:1; url=admin.php");
        }
        
    }
    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <?php 

            if (isset($_SESSION['admin_login'])) {
                $admin_id = $_SESSION['admin_login'];
                $stmt = $db->query("SELECT * FROM shops WHERE id = $admin_id");
                $stmt->execute();
                $row = $stmt->fetch(PDO::FETCH_ASSOC);
            }
        ?>
    </div>
                <table class="table">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">name</th>
                <th scope="col">data</th>
                <th scope="col">shopname</th>
                <th scope="col">date</th>
                <th scope="col">img</th>
                <th scope="col">time</th>

                </tr>
            </thead>
            <tbody>
                <?php 
                    $stmt = $db->query("SELECT * FROM shops");
                    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
                    
                    if (empty($rows)) {
                        echo "<p><td colspan='6' class='text-center'>No data available</td></p>";
                    } else {
                        foreach ($rows as $row) {
                    ?>
                        <tr>
                            <th scope="row"><?php echo $row['id']; ?></th>
                            <td><?php echo $row['name']; ?></td>
                            <td><?php echo $row['data']; ?></td>
                            <td><?php echo $row['shopname']; ?></td>
                            <td><?php echo $row['date']; ?></td>
                            <td width="250"><img width="100%" src="uploads/<?= $row['img']; ?>" class="rounded" alt=""></td>
                            <td><?php echo $row['time']; ?></td>
                            <td>
                                <a href="edit.php?id=<?php echo $row['id']; ?>" class="btn btn-warning">Edit</a>
                                <a onclick="return confirm('คุณต้องการที่จะลบข้อมูล?');" href="?delete=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                <?php
                        }
                    }
                ?>
                    
            </tbody>
            </table>
            <a href="logout.php" class="btn btn-danger">Logout</a>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>