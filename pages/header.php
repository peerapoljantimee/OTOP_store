<?php
// fix path 
$parentPath = '/Shop';
$parentPath2 = '/Shop/pages';
session_start(); // เริ่มต้น session
if (!isset($_SESSION['shopping_cart'])) {

				$_SESSION['shopping_cart'] = array();
			}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Responsive Bootstrap4 Shop Template, Created by Imran Hossain from https://imransdesign.com/">

  <!-- favicon -->
  <?php echo "<link rel='shortcut icon' type='image/png' href=' $parentPath/assets/img/favicon.png'>"; ?>
  <!-- google font -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
  <!-- fontawesome -->
  <?php echo "<link rel='stylesheet' href='$parentPath/assets/css/all.min.css'>"; ?>

  <!-- bootstrap -->
  <?php echo "<link rel='stylesheet' href='$parentPath/assets/bootstrap/css/bootstrap.min.css'>"; ?>

  <!-- owl carousel -->
  <?php echo "<link rel='stylesheet' href='$parentPath/assets/css/owl.carousel.css'>"; ?>

  <!-- magnific popup -->
  <?php echo "<link rel='stylesheet' href='$parentPath/assets/css/magnific-popup.css'>"; ?>

  <!-- animate css -->
  <?php echo "<link rel='stylesheet' href='$parentPath/assets/css/animate.css'>"; ?>

  <!-- mean menu css -->
  <?php echo "<link rel='stylesheet' href='$parentPath/assets/css/meanmenu.min.css'>"; ?>

  <!-- main style -->
  <?php echo "<link rel='stylesheet' href='$parentPath/assets/css/main.css'>"; ?>

  <!-- responsive -->
  <?php echo "<link rel='stylesheet' href='$parentPath/assets/css/responsive.css'>"; ?>

  <!-- extra icon back-to-top -->
  <?php echo "<link rel='stylesheet' href='$parentPath/assets/webfonts/simple-line-icons.css'>"; ?>

  <!-- icon -->
  <?php echo "<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>"; ?>
</head>
<!-- header -->
<div class="top-header-area" id="sticker">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-sm-12 text-center">
        <div class="main-menu-wrap">
          <!-- logo -->
          <div class="site-logo">
            <?php echo "<a href='$parentPath/index.php'><img src='$parentPath/assets/img/logo1.png' alt=''></a>" ?>
          </div>
          <!-- logo -->

          <!-- menu start -->
          <nav class="main-menu">
            <ul>
              <li class="current-list-item">
                <a href="<?php echo $parentPath ?>/index.php#">Home</a>
              </li>
              <li><a href="<?php echo $parentPath ?>/about.php">About</a></li>
              <li>
                <a href="<?php echo $parentPath ?>/shop.php">Shop</a>
              </li>

              <?php
              if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) { // ตรวจสอบสถานะการล็อกอิน
                $username = $_SESSION['username'];
                if ($username == 'admin') {
                  echo "<li><a href='$parentPath2/admin-panel.php'>Admin Panel</a>
                          <ul class='sub-menu'>
                            <li><a href='$parentPath2/displayMember.php'>Display member</a></li>
                            <li><a href='$parentPath2/displayProd.php'>Display product</a></li>
                            <li><a href='$parentPath2/dp-order.php'>Display order</a></li>
                          </ul>
                          </li>
                  ";
                }
                echo "<li style='float:right'>
                        <a href='#'><i class='fa fa-user'> welcome, $username</i></a>
                          <ul class='sub-menu'>
                            <li><a href='$parentPath/logout.php'>Logout</a></li>
                          </ul>
                      </li>";
              } else {
                echo "<li style='float:right'>
                          <a href='#'><i class='fa fa-user'></i></a>
                          <ul class='sub-menu'>
                              <li><a href='$parentPath/login.php'>Login</a></li>
                              <li><a href='$parentPath/addMember.php'>Register</a></li>
                          </ul>
                      </li>";
              }

              ?>
              
              <li style="float:right">
                <?php echo "<a href='$parentPath2/cart.php'><i class='fa fa-shopping-cart'></i></a>"; ?>
              </li>
            </ul>
          </nav>
          <div class="mobile-menu"></div>
          <!-- menu end -->
        </div>
      </div>
    </div>
  </div>
</div>


<!-- search area -->
<div class="search-area">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <span class="close-btn"><i class="fas fa-window-close"></i></span>
        <div class="search-bar">
          <div class="search-bar-tablecell">
            <h3>Search For:</h3>
            <input type="text" placeholder="Keywords">
            <button type="submit">Search <i class="fas fa-search"></i></button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- end search area -->

<!-- Go to Top Link -->
<a href="#" class="back-to-top">
  <i class="icon-arrow-up"></i>
</a>


<!-- end header -->

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