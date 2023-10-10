<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">   
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">
    <link rel="stylesheet" href="main.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

    <div class="container">
        <?php 
            if (isset($_SESSION['user_login'])) {
                $user_id = $_SESSION['user_login'];
                $stmt = $conn->query("SELECT * FROM users WHERE id = $user_id");
                $stmt->execute();
                $row = $stmt->fetch(PDO::FETCH_ASSOC);
            }
        ?>
    </div>

    <div class="container">
        <!-- Navbar -->
        <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
          <div class="col-md-3 mb-2 mb-md-0">
            <a href="/" class="d-inline-flex link-body-emphasis text-decoration-none">
              <a href="signin.php" class="btn btn-outline-primary me-2">Logout</a>
            </a>
          </div>
    
          
         <div class="col-md-3  ">
            

          </div>
          <ul class ="menu"  style="z-index: 9999;">
              <li class="user-icon">
                  <a href="javascript:void(0);" onclick="showPopupMenu();"><img src="https://cdn-icons-png.flaticon.com/512/64/64572.png"style="width: 32px; height: 32px; alt="></a>
                  <ul class="popup-menu" id="popupMenu">
                    <h3 class="mt-4"><?php echo $row['firstname'] . ' ' . $row['lastname'] ?></h3>
                      <li><a href="#">Home</a></li>
                      <li><a href="#">About</a></li>
                      <li><a href="#">Blog</a></li>
                      <li><a href="#">Contact</a></li>
                      <li><a href="#">Settings</a></li>
                      <li><a href="#">Support</a></li>
                  </ul>
              </li>
            </ul>         
            </nav>
            <script src="script.js"></script>  
        </header>
        <!-- Navbar -->
        
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

            // SQL query to select data from database
            $sql = "SELECT * FROM `shops` WHERE id = 6";
            $result = $mysqli->query($sql);
            $mysqli->close();
        ?>

<meta charset="UTF-8">
	<title>GFG User Details</title>
	<!-- CSS FOR STYLING THE PAGE -->
	<style>

		h1 {
			text-align: center;
			color: #006600;
			font-size: xx-large;
			font-family: 'Gill Sans', 'Gill Sans MT',
			' Calibri', 'Trebuchet MS', 'sans-serif';
		}

        th,
		td {
			font-weight: bold;
			border: 1px solid black;
			padding: 10px;
			text-align: center;
		}

	</style>
</head>

<section>
    <h1>รายละเอียดศิลปิน</h1>
    <?php
        // ดึงข้อมูลเดียว
        $row = $result->fetch_assoc();

        // ตรวจสอบว่าข้อมูลถูกดึงออกมาหรือไม่
        if ($row !== null) {
    ?>
    <!-- ตรวจสอบว่ามีรูปภาพหรือไม่ ถ้าไม่มีก็ไม่ต้องแสดงรูปภาพ -->
<?php if (!empty($row['img'])): ?>
    <div class="col-md-auto">
        <div class="card"> 
            <img src="uploads/<?php echo $row['img']; ?>" id="previewImg" class="card-img-top mx-auto" alt="..." style="width: 600px; height: 600px;">
        
            <div class="card-body text-center">
                <div class="text">
                    <h1><?php echo $row['name']; ?></h1> 
                </div>

                <div class="data">
                    <p><?php echo $row['data']; ?></p>
                </div>

                <a href="javascript:void(0);" class="btn btn-danger" onclick="showBuyTicketModal();">ซื้อบัตร</a>
            </div>
        </div>
    </div>
        
        <!-- กล่องซื้อ -->
    <div id="buyTicketModal" class="modal" style="display: none;">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">ซื้อบัตร</h5>
                </div>
            <div class="modal-body text-center">
                <div class="row">
                    <div class="col-md-6">
                        <!-- รูปภาพ -->
                        <img src="uploads/<?php echo $row['img']; ?>" id="previewImg" class="card-img-top mx-auto" alt="..." style="width: 200px; height: 200px;">
                        <h3> <?php echo $row['name']; ?> </h3>
                        <hr>
                        <h4 id="price" style="margin: 0;">ราคา: 2500 บาท</h4>
                    </div>
                    <div class="col-md-6 d-flex justify-content-end align-items-center">
                        <div class="carlist-right text-center" style="display: flex; align-items: center;">
                            <i class="fas fa-minus-circle btnc fa-lg" onclick="decreaseQuantity()"></i>
                            <p id="quantity" style="margin: 0 10px;">1</p>
                            <i class="fas fa-plus-circle btnc fa-lg" onclick="increaseQuantity()"></i>
                        </div>
                    </div>
                </div>
            </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" onclick="hideBuyTicketModal()" id="closeButton" >ปิด</button>
                    <button type="button" class="btn btn-primary" onclick="window.location.href='table.php'">ยืนยัน</button>

                </div>
            </div>
        </div>

     <script>
            // เลือกตัวแสดงจำนวน
        var quantityDisplay = document.getElementById("quantity");
            // ค่าจำนวนเริ่มต้น
        var quantity = 1;
            // ระบุฟังก์ชันเพื่อเพิ่มจำนวน
        function increaseQuantity() {
            quantity++;
                updateQuantityDisplay();
            }
            // ระบุฟังก์ชันเพื่อลดจำนวน
        function decreaseQuantity() {
            if (quantity > 1) {
            quantity--;
            updateQuantityDisplay();
            }
        }
            // ระบุฟังก์ชันเพื่ออัปเดตตัวแสดงจำนวน
        function updateQuantityDisplay() {
            quantityDisplay.textContent = quantity;
        }
    //--------------------------------------------------
           function showBuyTicketModal() {
            // ใช้ jQuery เพื่อแสดงกล่องสี่เหลี่ยม
            $('#buyTicketModal').modal('show');
        }
        function hideBuyTicketModal() {
            // ใช้ jQuery เพื่อซ่อนกล่องสี่เหลี่ยม
            $('#buyTicketModal').modal('hide');
        }
    //--------------------------------------------------
            // เพิ่มการจัดการคลิกปุ่ม "ปิด"
        document.getElementById('closeButton').addEventListener('click', function() {
            // ดำเนินการเมื่อปุ่ม "ปิด" ถูกคลิก
            // ให้ซ่อน modal โดยการเปลี่ยน style.display เป็น "none"
            var modal = document.getElementById('buyTicketModal');
            modal.style.display = 'none';
        });
    </script> 
    
    <script>
    // ราคาเริ่มต้น
    let price = 2500;

    function increaseQuantity() {
        // เพิ่มจำนวนและอัปเดตราคา
        const quantityElement = document.getElementById('quantity');
        const priceElement = document.getElementById('price');
        let quantity = parseInt(quantityElement.textContent);
        quantity++;
        quantityElement.textContent = quantity;
        price += 2500; // เพิ่มราคา 50 บาท ต่อหนึ่งรายการ
        priceElement.textContent = `ราคา: ${price} บาท`;
    }

    function decreaseQuantity() {
        // ลดจำนวนและอัปเดตราคา
        const quantityElement = document.getElementById('quantity');
        const priceElement = document.getElementById('price');
        let quantity = parseInt(quantityElement.textContent);
        if (quantity > 1) {
            quantity--;
            quantityElement.textContent = quantity;
            price -= 2500; // ลดราคา 50 บาท ต่อหนึ่งรายการ
            priceElement.textContent = `ราคา: ${price} บาท`;
        }
    }
</script>

    <?php else: ?>
        <p>ไม่มีรูปภาพสำหรับศิลปินนี้</p>
    <?php endif; ?>

    <?php
        } else {
            echo "No data available.";
        }
    ?>

</section>

</body>
</html>
        


      
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" ></script>

</body>