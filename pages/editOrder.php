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
	<meta name="description"
		content="Responsive Bootstrap4 Shop Template, Created by Imran Hossain from https://imransdesign.com/">

	<!-- title -->
	<title>Edit order</title>

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
						<h1>Edit order</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end breadcrumb section -->

	<!-- Display edit member -->
	<?php
	$sql = $conn->chosen_order($_GET['id']);
	while ($data = mysqli_fetch_array($sql)) {
		$order_id = $data['order_id'];
		$member_id = $data['member_id'];
		$phone = $data['phone'];
		$name = $data['name'];
		$email = $data['email'];
		$address = $data['address'];
		$status = $data['status'];
	}
	?>

	<div class="container">
		<h3 class="mt-5">แก้ไขข้อมูลรายการสั่งซื้อ</h3>
		<form method="POST">
			<div class="mb-3">
				<label for="username" class="form-label">UserID:</label>
				<input type="text" class="form-control" id="order_id" name="order_id" value=<?php echo $order_id ?>>
			</div>
			<div class="mb-3">
				<label for="password" class="form-label">ชื่อผูรับ:</label>
				<input type="text" class="form-control" id="name" name="name" value=<?php echo $name ?>>
			</div>
			<div class="mb-3">
				<label for="name" class="form-label">MemberID: </label>
				<input type="name" class="form-control" id="memberid" name="memberid" value="<?php echo $member_id ?>">
			</div>
			<div class="mb-3">
				<label for="email" class="form-label">email:</label>
				<input type="text" class="form-control" id="email" name="email" value=<?php echo $email; ?>>
			</div>
			<div class="mb-3">
				<label for="email" class="form-label">Address:</label>
				<input type="text" class="form-control" id="adress" name="address" value=<?php echo $address; ?>>
			</div>
			<div class="mb-3">
				<label for="email" class="form-label">Phone:</label>
				<input type="text" class="form-control" id="phone" name="phone" value=<?php echo $phone; ?>>
			</div>
			<div class="mb-3">
				<label for="address" class="form-label">Status:</label>
				<select name="status" id="staus">
					<option value="<?php echo $status ?>">
						<?php echo $status ?>
					</option>
					<option value="กำลังจัดเตรียมสินค้า">กำลังจัดเตรียมสินค้า</option>
					<option value="กำลังจัดส่ง">กำลังจัดส่ง</option>
					<option value="จัดส่งไม่สำเร็จ">จัดส่งไม่สำเร็จ</option>				
					<option value="รับสินค้าเเล้ว">รับสินค้าเเล้ว</option>
					<option value="สินค้าถูกส่งกลับ">สินค้าถูกส่งกลับ</option>
				</select>
			</div>
			<button type="submit" class="cart-btn" id="edit" name="edit">บันทึกการเปลี่ยนแปลง </button>
		</form>
	</div>
	<?php
	$id = $_GET['id'];
	if (isset($_POST['edit'])) {
		$order_id = $_POST['order_id'];
		$member_id = $_POST['memberid'];
		$phone = $_POST['phone'];
		$name = $_POST['name'];
		$email = $_POST['email'];
		$address = $_POST['address'];
		$status = $_POST['status'];
		$sql = $conn->edit_order($order_id,$member_id,$phone,$name,$email,$address,$status);
		echo $sql;
		if ($sql) {
			echo "<script>alert('บันทึกข้อมูลสําเร็จ')</script>";
			echo "<script>window.location.href='dp-order.php' </script>";
		} else {
			echo "<script>alert('เกิดข้อผิดพลาด')</script>";
		}
	}
	?>

	<br><br><br>
	<!-- Footer-->
	<?php
	include_once("footer.php")
	?>

	<!-- Back to Top -->
	<!-- <a href="#" class="btn btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a> -->
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