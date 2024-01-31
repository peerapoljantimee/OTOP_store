<!-- 6430250229 ภมรพล ทีทอง -->
<?php
// fix path 
$parentPath = '/Shop';
$parentPath2 = '/Shop/pages'
?>
<title>Admin</title>
<?php
include_once("header.php");
?>

<?php
include_once("connectDB.php");
$conn = new DB_conn; //สร้าง object ชื่อ $condb
?>
<!DOCTYPE html>
<html lang="en">
<html>



<body class="admin-panel">
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
                        <p>Admin panel</p>
                        <h1>Welcome Admin!</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end breadcrumb section -->

    <!-- Body -->
    <div class="admin-menu">
    <h2 class="animated fadeInDown ">Tools</h2>
    <div class="item-container">
        <a href="displayMember.php" class="item-box animated fadeInDown services-item-box" style="animation-delay: 1.5s;">Member</a>
        <a href="displayProd.php" class="item-box animated fadeInDown services-item-box" style="animation-delay: 2s;">Product</a>
        <a href="dp-order.php" class="item-box animated fadeInDown services-item-box" style="animation-delay: 2.25s;">Order</a>
    </div>
    </div>

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