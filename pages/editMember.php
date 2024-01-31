<!-- 6430250229 ภมรพล ทีทอง -->
<?php
include_once("connectDB.php");
$conn = new DB_conn; //สร้าง object ชื่อ $condb
?>
<!DOCTYPE html>
<html lang="en">
<html>

<head>
<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Responsive Bootstrap4 Shop Template, Created by Imran Hossain from https://imransdesign.com/">

	<!-- title -->
	<title>Edit Member</title>

	<!-- favicon -->
	<link rel="shortcut icon" type="image/png" href="../assets/img/favicon.png">
	<!-- google font -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
	<!-- fontawesome -->
	<link rel="stylesheet" href="../assets/css/all.min.css">
	<!-- bootstrap -->
	<link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
	<!-- owl carousel -->
	<link rel="stylesheet" href="../assets/css/owl.carousel.css">
	<!-- magnific popup -->
	<link rel="stylesheet" href="../assets/css/magnific-popup.css">
	<!-- animate css -->
	<link rel="stylesheet" href="../assets/css/animate.css">
	<!-- mean menu css -->
	<link rel="stylesheet" href="../assets/css/meanmenu.min.css">
	<!-- main style -->
	<link rel="stylesheet" href="../assets/css/main.css">
	<!-- responsive -->
	<link rel="stylesheet" href="../assets/css/responsive.css">

</head>

<body>
	<!--PreLoader-->
	<div class="loader">
	<div class="loader-inner">
		<div class="circle"></div>
	</div>
    </div>
    <!--PreLoader Ends-->
	
	    <!-- Header -->
	<?php
	include_once("header.php");
	?>
	
	<!-- breadcrumb-section -->
	<div class="breadcrumb-section breadcrumb-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="breadcrumb-text">
                        <p>Admin panel</p>
						<h1>Edit User</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end breadcrumb section -->

    <!-- Display edit member -->
    <?php
    $sql = $conn->display_member_edit($_GET['id']);
    while ($data = mysqli_fetch_array($sql)) {
        $username = $data['username'];
        $password = $data['password'];
        $name = $data['name'];
        $email = $data['email'];
        $address = $data['address'];
    }
    ?>
    
    <div class="container">
        <h3 class="mt-5">แก้ไขข้อมูลสมาชิก</h3>
        <form method="POST">
            <div class="mb-3">
                <label for="username" class="form-label">username:</label>
                <input type="text" class="form-control" id="username" name="username" value=<?php echo $username ?>>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">password:</label>
                <input type="text" class="form-control" id="password" name="password" value=<?php echo $password ?>>
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">name: </label>
                <input type="name" class="form-control" id="name" name="name" value="<?php echo $name ?>">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">email:</label>
                <input type="text" class="form-control" id="email" name="email" value=<?php echo
                                                                                                        $email; ?>>
            </div>
            <div class="mb-3">
                <label for="address" class="form-label">address:</label>
                <input type="text" class="form-control" id="address" name="address" value=<?php echo $address; ?>>
            </div>
            <button type="submit" class="cart-btn" id="edit" name="edit">บันทึกการเปลี่ยนแปลง </button>
        </form>
    </div>
    <?php
    $id = $_GET['id'];
    if (isset($_POST['edit'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $sql = $conn->edit_member($username, $password, $name, $email, $address, $id);
        echo $sql;
        if ($sql) {
            echo "<script>alert('บันทึกข้อมูลสําเร็จ')</script>";
            echo "<script>window.location.href='displayMember.php' </script>";
        } else {
            echo "<script>alert('เกิดข้อผิดพลาด')</script>";
        }
    }
    ?>
<br><br><br>
    <!-- Footer-->
    <?php
	 include_once('footer.php')
    ?>
    
  
    <!-- jquery -->
	<script src="../assets/js/jquery-1.11.3.min.js"></script>
	<!-- bootstrap -->
	<script src="../assets/bootstrap/js/bootstrap.min.js"></script>
	<!-- count down -->
	<script src="../assets/js/jquery.countdown.js"></script>
	<!-- isotope -->
	<script src="../assets/js/jquery.isotope-3.0.6.min.js"></script>
	<!-- waypoints -->
	<script src="../assets/js/waypoints.js"></script>
	<!-- owl carousel -->
	<script src="../assets/js/owl.carousel.min.js"></script>
	<!-- magnific popup -->
	<script src="../assets/js/jquery.magnific-popup.min.js"></script>
	<!-- mean menu -->
	<script src="../assets/js/jquery.meanmenu.min.js"></script>
	<!-- sticker js -->
	<script src="../assets/js/sticker.js"></script>
	<!-- main js -->
	<script src="../assets/js/main.js"></script>
    
    

</body>

</html>