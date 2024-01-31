<?php
	include_once("pages/header.php");
?>
<header>
  <title>Register</title>
</header>
<!DOCTYPE html>
<html lang="en">
<html>
<body class="body-register">
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
    <div class="register-form animated fadeInDown" style="animation-delay: 0.5s;">
        <h1>Register member</h1>
        <form action="member.php" method="post">
          <input type="text" id="name" name="name" placeholder="Your firstname and lastname" required="required"/>
          <input type="email" id="email" name="email" placeholder="Your Email" required="required"/>
          <input type="text" id="username" name="username" placeholder="Your Username" required="required"/>
          <input type="password" id="password" name="password" placeholder="Your Password" required="required"/>
          <textarea name="address" id="address" cols="10" rows="20" placeholder="Your address"></textarea>
            <div class="text-center">
                <input type="submit" value="SIGN UP">
            </div>
        </form>
    </div>


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

</body>

</html>