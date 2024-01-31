<?php
include_once("connectDB.php");
$conn = new DB_conn; //สร้าง object ชื่อ $condb
?>

<!DOCTYPE html>
<html lang="en">


<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Responsive Bootstrap4 Shop Template, Created by Imran Hossain from https://imransdesign.com/">

  <!-- title -->
  <title>สินค้าทั้งหมด</title>

  <!-- favicon -->
  <link rel="shortcut icon" type="image/png" href="assets/img/favicon.png">
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

<!-- product section -->
<div class="product-section mt-150 mb-150">
  <div class="container">

    <div class="row flex-row">


      <?php
      $sql = $conn->display_prod();
      while ($data = mysqli_fetch_array($sql)) {
      ?>


        <?php
        $str = $data['prod_img'];
        $pathImg = substr($str, 9); //นับเเต่ตัวที่9

        $parentPathImg  = '/Shop/p_img/' . $pathImg;
        $parentPath  = '/Shop/pages/';
        $parentPath2  = '/Shop/';

        ?>
        <div class="col-lg-4 col-md-6 text-center">
          <div class="single-product-item">
            <div class="product-image">
							<a href="<?php echo $parentPath ?>single-product.php?p_id=<?php echo $data['prod_id']; ?>">
								<img src="<?php echo "$parentPathImg " ?>" alt="" /></a>
						</div>
            <h3>
              <?php echo $data['prod_name'] ?>
            </h3>
            <p class="product-price"><span>Price</span>
              <?php echo $data['prod_price'] . "฿" ?>
            </p>
            <!-- ค่าที่ส่ง p_id,act=add,qty=1 -->
            <a href="<?php echo $parentPath ?>cart.php?p_id=<?php echo $data['prod_id'] ?>&act=add&qty=1" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>

          </div>
        </div>
      <?php
      }
      ?>
    </div>
  </div>

</div>
<!-- end product section -->



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