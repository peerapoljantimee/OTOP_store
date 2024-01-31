<?php
$parentPath = '/Shop';
$parentPath2 = '/Shop/pages';
// $cart=$_SESSION["cart"];
include_once("header.php");

include_once("connectDB.php");
$conndb = new DB_conn; //สร้าง object ชื่อ $condb
$con = $conndb->conn;


if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) { // ตรวจสอบสถานะการล็อกอิน
	$member_id = $_SESSION['member_id'];
	$username = $_SESSION['username'];
	$name = $_SESSION['name'];
	$email = $_SESSION['email'];
	$address = $_SESSION['address'];
} else {
	$member_id = "";
	$username = "";
	$name = "Name";
	$email = "Email";
	$address = "Address";
	$total = 0;
}
//สำหรับทดสอบค่า
// echo "<br>=============================";
// echo "<br>id : " . $member_id;
// echo "<br>username : " . $username;
// echo "<br>name : " . $name;
// echo "<br>email : " . $email;
// echo "<br>address : " . $address;
// echo "<br>=============================<br>";
?>
<!DOCTYPE html>

<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Responsive Bootstrap4 Shop Template, Created by Imran Hossain from https://imransdesign.com/">

	<!-- title -->
	<title>Checkout</title>

	<!-- favicon -->
	<link rel="shortcut icon" type="image/png" href="assets/img/favicon.png">
	<!-- google font -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
	<!-- fontawesome -->
	<link rel="stylesheet" href="assets/css/all.min.css">
	<!-- bootstrap -->
	<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
	<!-- owl carousel -->
	<link rel="stylesheet" href="assets/css/owl.carousel.css">
	<!-- magnific popup -->
	<link rel="stylesheet" href="assets/css/magnific-popup.css">
	<!-- animate css -->
	<link rel="stylesheet" href="assets/css/animate.css">
	<!-- mean menu css -->
	<link rel="stylesheet" href="assets/css/meanmenu.min.css">
	<link rel="stylesheet" href="assets/css/meanmenu.min.css">
	<!-- main style -->
	<link rel="stylesheet" href="assets/css/main.css">
	<!-- responsive -->
	<link rel="stylesheet" href="assets/css/responsive.css">

</head>

<body>


	<?php
	include_once('header.php');

	?>

	<!-- breadcrumb-section -->
	<div class="breadcrumb-section breadcrumb-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="breadcrumb-text">
						<p>Detail for shipping</p>
						<h1>Checkout</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end breadcrumb section -->


	<!-- check out section -->
	<div class="checkout-section mt-150 mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-8">
					<div class="checkout-accordion-wrap">
						<div class="accordion" id="accordionExample">
							<div class="card single-accordion">
								<div class="card-header" id="headingOne">
									<h5 class="mb-0">
										<button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
											Billing Address
										</button>
									</h5>
								</div>

								<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
									<div class="card-body">
										<div class="billing-address-form">
											<?php
											if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) { // ตรวจสอบสถานะการล็อกอิน
												echo "
												<form id='userForm' method='POST' action='addOrder.php'>
												<p><input type='text' id='name' name='name' value='$name'></p>
												<p><input type='email' id='name' name='email' value='$email'></p>
												<p><input type='text' id='name' name='address' value='$address'></p>
												<p><input type='tel' name='phone' placeholder='Phone' required></p>
												<p><input type='hidden' name='id' value='<?php echo $member_id ?>'></p>
												</form>";
											} else {
												echo "
												<form id='userForm' method='POST' action='addOrder.php'>
												<p><input type='text' id='name' name='name' placeholder='Name' required></p>
												<p><input type='email' id='name' name='email' placeholder='email' required></p>
												<p><input type='text' id='name' name='address' placeholder='address' required></p>
												<p><input type='tel' name='phone' placeholder='Phone' required></p>
												<p><input type='hidden' name='id' value='<?php echo $member_id ?>'></p>
												</form>";
											}
											?>
										</div>
									</div>
								</div>
							</div>
						 
						</div>

					</div>
				</div>

				<div class="col-lg-4">
					<div class="order-details-wrap">
						<table class="order-details">
							<tr>
								<td style="background-color: #efefef;">Your order Detail</td>
								<td style="background-color: #efefef;">Price</td>

							</tr>
							<tbody class="order-details-body">
								<tr>
									<td>Product</td>
									<td>Total</td>
								</tr>

								<!-- <form action="checkout.php"> -->

								<?php


								// ตรวจสอบว่ามีการส่งค่า $_POST['product_id'] และ $_POST['product_qty'] มาหรือไม่

								if (isset($_POST['product_id']) && isset($_POST['product_qty'])) {
									$product_ids = $_POST['product_id'];
									$product_qtys = $_POST['product_qty'];
							
									// นับจำนวนสินค้าที่ถูกสั่งซื้อ
									$num_items = count($product_ids);

									// print_r($product_ids);
									// echo "<br> ================== <br> ";
									// แสดงรายละเอียดสินค้าที่ถูกสั่งซื้อ

									$total = 0;
									for ($i = 0; $i < $num_items; $i++) {
										$product_id = $product_ids[$i];
										$id =  $product_id;
										$product_qty = $product_qtys[$i];

										// echo $id;
										// echo "<br> ================== <br> ";
										// echo $product_id;
										// echo "<br> ================== <br> ";
										$sql = $conndb->select_product($product_id);
										while ($data = mysqli_fetch_array($sql)) {

											$sum = $data['prod_price'] * $product_qty;

											$total += $sum;

											$shipping = 45;
											$totalsumship = $total + $shipping;

								?>
											<tr>
												<td><?php echo $data['prod_name'] ?></td>
												<td>฿<?php echo $sum ?></td>

											</tr>

									<?php }
										$_SESSION['totalPrice'] = $totalsumship;
									} ?>
									<!-- </form> -->


							</tbody>



							<!-- ราคารวม -->
							<tbody class="checkout-details">
								<tr>
									<td>Subtotal</td>
									<td>฿<?php echo $total ?></td>
								</tr>
								<tr>
									<td>Shipping</td>
									<td>฿<?php echo $shipping ?></td>
								</tr>
								<tr>
									<td>Total</td>
									<td>฿<?php echo $totalsumship ?></td>
								</tr>
							</tbody>
						</table>


					<?php }
					?>

		
			
					<br>
					<button class="cart-btn-b" type="submit" form="userForm">Checkout</button>
					<!-- </form> -->
					<?php
					// $sql = $conn->insert_product($p_name, $p_detail, $p_price, $path_img);
					?>
					<style>
						.button-container-b {
							display: flex;
							justify-content: flex-start;
							gap: 20px;
						}

						.cart-btn-b {
							font-family: 'Poppins', sans-serif;
							display: inline-block;
							background-color: #F28123;
							color: #fff;
							width: 120px;
							height: 45px;
							background-color: #F28123;
							border-radius: 30px;
							border: none;
							/* กำหนดขอบเป็น none เพื่อเอาขอบออก */
						}

						.cart-btn-b:hover {
							background-color: #051922;
							color: #F28123;
						}
					</style>



					</div>
				</div>
				<!-- <button class="cart-btn-b" type="submit" form="userForm">Checkout</button> -->

			</div>
		</div>
	</div>
	<!-- end check out section -->


	<!-- <br><br><br> -->

	<!-- jquery -->
	<script src="assets/js/jquery-1.11.3.min.js"></script>
	<!-- bootstrap -->
	<script src="assets/bootstrap/js/bootstrap.min.js"></script>
	<!-- count down -->
	<script src="assets/js/jquery.countdown.js"></script>
	<!-- isotope -->
	<script src="assets/js/jquery.isotope-3.0.6.min.js"></script>
	<!-- waypoints -->
	<script src="assets/js/waypoints.js"></script>
	<!-- owl carousel -->
	<script src="assets/js/owl.carousel.min.js"></script>
	<!-- magnific popup -->
	<script src="assets/js/jquery.magnific-popup.min.js"></script>
	<!-- mean menu -->
	<script src="assets/js/jquery.meanmenu.min.js"></script>
	<!-- sticker js -->
	<script src="assets/js/sticker.js"></script>
	<!-- main js -->
	<script src="assets/js/main.js"></script>

</body>
<footer>
	<?php
	include_once("footer.php");
	?>
</footer>

</html>