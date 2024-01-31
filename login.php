<?php
include_once("pages/header.php");
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Login</title>
	<!--PreLoader-->
	<div class="loader">
		<div class="loader-inner">
			<div class="circle"></div>
		</div>
	</div>
	<!--PreLoader Ends-->

	<!-- Header -->


	<!-- breadcrumb-section -->
	<div class="breadcrumb-section breadcrumb-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="breadcrumb-text">
						<h1>Hi!</h1>
						<p>Welcome to Otop shop</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end breadcrumb section -->
</head>

<body class="body-login">

	<!-- Login section -->
	<div class="login-form mt-150 mb-150 animated fadeInDown">
		<div class="container">
			<h1>Login member</h1>
			<form action="check_login.php" method="post">
				<input type="text" name="username" placeholder="Username" required class="animated fadeInDown" style="animation-delay: 0.5s;">
				<input type="password" name="password" placeholder="Password" required class="animated fadeInDown" style="animation-delay: 1s;">
				<div class="text-center animated fadeInDown" style="animation-delay: 1.5s;">
					<input type="submit" value='Login'>
				</div>
			</form>
		</div>
	</div>



</body>
<footer>

	<!-- Footer-->
	<?php
	include_once('pages/footer.php')
	?>

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
</footer>

</html>