<!DOCTYPE html>
<html lang="en">
<html>

<head>
<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Responsive Bootstrap4 Shop Template, Created by Imran Hossain from https://imransdesign.com/">

	<!-- title -->
	<title>Fruitkha</title>

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
	<!-- main style -->
	<link rel="stylesheet" href="assets/css/main.css">
	<!-- responsive -->
	<link rel="stylesheet" href="assets/css/responsive.css">

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
	include_once("pages/header.php");
	?>

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




    <?php
    // file path ที่จะเชื่อมกับ index
    //ส่วนบน search faq help support and social media
    //../เพื่อให้หาroot path เอง
    //Banner category menu
    // head

    // head


    ?>
    <!-- Header-->

    <!-- Form สำหรับ สมัครสมาชิก -->
	<div class="form-container">
  <div class="contact-from-section mt-150 mb-150">
    <div class="container">
      <div class="text-center mb-4">
        <h2 class="form-title px-5 "><span class="px-2">Register member</span></h2>
      </div>
      <div class="row">
        <div class="col-lg-8 mb-5 mb-lg-0" >
          <div class="contact-form" >
            <form name="fruitkha-contact" id="fruitkha-contact" action="member.php" method='POST'>
              <p>
                <input type="text" id="name" name="name" placeholder="Your firstname and lastname" required="required"/>
              </p>
              <p>
                <input type="email" id="email" name="email" placeholder="Your Email" required="required"/>
              </p>
              <p>
                <input type="text" id="username" name="username" placeholder="Your Username" required="required"/>
              </p>
              <p>
                <input type="password" id="password" name="password" placeholder="Your Password" required="required"/>
              </p>
              <p>
                <textarea name="address" id="address" cols="10" rows="20" placeholder="Your address"></textarea>
              </p>
              <div class="cart-buttons">
                <p><input type="submit" value="Submit"></p>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

    <!-- Footer-->
    <?php
    ?>

    <!-- Back to Top -->
    <a href="#" class="btn btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>
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

</html>