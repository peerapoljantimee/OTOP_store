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
  <meta name="description"
    content="Responsive Bootstrap4 Shop Template, Created by Imran Hossain from https://imransdesign.com/">

  <!-- title -->
  <title>Fruitkha</title>

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
    <div class="row">
      <div class="col-lg-8 offset-lg-2 text-center">
        <div class="section-title">
          <h3><span class="orange-text">Our</span> Products</h3>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
            Aliquid, fuga quas itaque eveniet beatae optio.
          </p>
        </div>
      </div>
    </div>


    <?php
    $sql = $conn->display_prod();
    $data_array = array();
    while ($data = mysqli_fetch_array($sql)) {
      $data_array[] = $data; // เก็บข้อมูลลงในอาร์เรย์
    }

    $chunks = array_chunk($data_array, 3); // แบ่งข้อมูลเป็นกลุ่มๆ ที่มีจำนวนคอลัมน์เท่ากับ 3
    
    foreach ($chunks as $chunk) { // วนลูปแสดงผลข้อมูลที่ถูกแบ่งเป็นกลุ่ม
      ?>
      <div class="container">
        <div class="row">
          <?php
          foreach ($chunk as $data) { // วนลูปแสดงผลแต่ละคอลัมน์ของแต่ละแถว
            $str = $data['prod_img'];
            // $id = $data['prod_id'];
            $pathImg = substr($str, 3);
            ?>
            <div class="col-lg-4 col-md-6 text-center">
              <div class="single-product-item">
              <a href="pages/single-product.php?q=<?php echo base64_encode($data['prod_id']); ?>">
              <img src="<?php echo $pathImg ?>" alt="" /></a>
                <h3>
                  <?php echo $data['prod_name'] ?>
                </h3>
                <p class="product-price"><span>Per Kg</span>
                  <?php echo $data['prod_price'] ?>
                </p>
                <a href="cart.html" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
                

                <!-- <a href="pages/cart3.php?p_id=<?php echo $data['prod_id'] ?>&act=add" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a> -->
                <!-- <a href="pages/cart.php?q=<?php echo base64_encode($data['prod_id']); ?>" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a> -->
              </div>
            </div>
            <?php
          }
          ?>
        </div>
      </div>
      <?php
    }
    ?>
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