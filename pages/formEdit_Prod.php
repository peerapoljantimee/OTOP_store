<?php
include_once("connectDB.php");
$conn = new DB_conn;
?>

<head>
  <title>Edit Product</title>


  <!-- header -->
  <?php
  include_once("header.php")
  ?>
  <!-- end header -->

</head>

<body >
  <!--PreLoader-->
  <div class="loader">
    <div class="loader-inner">
      <div class="circle"></div>
    </div>
  </div>
  <!--PreLoader Ends-->





  <!-- breadcrumb-section -->
  <div class="breadcrumb-section breadcrumb-bg">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 offset-lg-2 text-center">
          <div class="breadcrumb-text">
            <p>Admin PANEL</p>
            <h1>Edit Product</h1>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- end breadcrumb section -->


  <?php
  $id = $_GET['id'];
  $sql = $conn->display_prod_edit($id);
  while ($data = mysqli_fetch_array($sql)) {
    $p_name = $data['prod_name'];
    $p_price = $data['prod_price'];
    $p_detail = $data['prod_detail'];
    $p_Img = $data['prod_img'];
    //     $u_name = $data['username'];
    //     $t_ype = $data['type'];
  }
  ?>

  <?php
  $str = $p_Img;
  $pathImg = substr($str, 9); //นับเเต่ตัวที่9

  $parentPathImg  = '/Shop/p_img/' . $pathImg;
  $parentPath  = '/Shop/pages/';
  $parentPath2  = '/Shop/';

  ?>

  <br>
  <div class="container" style="display:flex; justify-content:center;">
    <div class="col-lg-4 col-md-6 text-center" style="margin:auto;">
      <div class="single-product-item">
        <img src="<?php echo "$parentPathImg " ?>" alt="" />
        <h3><?php echo $p_name ?></h3>
        <p class="product-price"><span>Price</span><?php echo $p_price . "฿" ?></p>
        <p><?php echo $p_detail ?></p>
      </div>
    </div>
  </div>


  <div class="container">
    <h3 class="mt-5">Edit Product</h3>
    <form method="POST">
      <div class="mb-3">
        <label for="pname" class="form-label">Product Name : </label>
        <input type="text" class="form-control" id="pname" name="pname" value="<?php echo $p_name ?>" readonly>
      </div>
      <div class="mb-3">
        <label for="price" class="form-label">Price : </label>
        <input type="text" class="form-control" id="price" name="price" value=<?php echo $p_price ?>>
      </div>
      <div class="mb-3">
        <label for="detail" class="form-label">Detail : </label>
        <input type="text" class="form-control" id="detail" name="detail" value=<?php echo $p_detail; ?>>
      </div>


      <!-- <button type="submit" class="btn btn-primary" id="edit" name="edit">SAVE </button> -->

  </div>
  <br></br>
  <div class="text-center"><input type="submit" id="edit" name="edit" value="   S A V E   "></form>
    <?Php echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;' ?>
    <a href="/Shop/pages/displayProd.php"><input type="submit" value=" Display Product "></a>


  </div>

  <br></br>
  <br></br>
  <br></br>



  <?php
  $id = $_GET['id'];
  if (isset($_POST['edit'])) {
    $pname = $_POST['pname'];
    echo $pname;
    $price = $_POST['price'];
    $detail = $_POST['detail'];

    $sql = $conn->edit_prod($pname, $price, $detail, $id);
    echo $sql;
    if ($sql) {
      echo "<script>alert('บันทึกข้อมูลสําเร็จ')</script>";
      // echo "<script>window.location.href='displayProd.php' </script>";
      echo "<script>window.location.href='formEdit_Prod.php?id=$id' </script>";
    } else {
      echo "<script>alert('เกิดข้อผิดพลาด')</script>";
    }
  }


  // footer
  include_once("footer.php");



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