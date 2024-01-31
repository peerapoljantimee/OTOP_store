<?php
include_once("connectDB.php");
$conn = new DB_conn; //สร้าง object ชื่อ $condb
$parentPath = '/Shop';
?>

<!DOCTYPE html>
<html lang="en">
<!-- title -->
<title>DispayProduct</title>


<head>
  <!-- header -->
  <?php
  include_once("header.php")
  ?>
  <!-- end header -->

</head>

<body>


  <!--PreLoader-->
  <div class="loader">
    <div class="loader-inner">
      <div class="circle"></div>
    </div>
  </div>
  <!-- breadcrumb-section -->
  <div class="breadcrumb-section breadcrumb-bg">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 offset-lg-2 text-center">
            <div class="breadcrumb-text">
              <p>ADMIN PANEL</p>
              <h1>Display Product</h1>
            </div>
          </div>
        </div>
      </div>
    </div>
  <!-- end breadcrumb section -->
  <!-- <br><br><br><br><br><br> -->

  <!-- displayProd -->


  <div class="cart-section mt-150 mb-150">
    <div class="container">
      <div class="row justify-content-center ">
        <div class="col-lg-8 col-md-12">

          <div class="text-center">
            <div class="">
              <h1 class = "PRODUCTLIST">PRODUCT LIST</h1>
            </div>
          </div>

          <style>
            .PRODUCTLIST {
              font-family: "Poppins", sans-serif;
              font-size: 2rem;;
              letter-spacing: 0.1px;
              line-height: 1.8;
              color: #F28123;
              overflow-x: hidden;
              margin-top: -20px;
            }
          </style>

    
          <br></br>
          <div class="cart-table-wrap">
            <table class="cart-table">
              <thead class="cart-table-head">
                <tr class="table-head-row">

                  <th class="product-image">Product Image</th>
                  <th class="product-name">Name</th>
                  <th class="product-price">Price</th>
                  <th class="product-Detail">Detail</th>
                  <th class="product-Prod_id">Prod_id</th>
                  <th class="product-edit">Edit</th>
                  <th class="product-del">Remove</th>


                </tr>
              </thead>
              <tbody>

                <?php
                $sql = $conn->display_prod();
                $i = 1;
                while ($data = mysqli_fetch_array($sql)) {
                  // echo $data['first_name']; 
                ?>

                  <tr>




                    <td class="product-image">
                      <img src=<?php echo $data['prod_img'] ?> alt="" />
                    </td>

                    <td class="product-name"> <?php echo $data['prod_name'] ?> </td>
                    <td class="product-price"> ฿<?php echo $data['prod_price'] ?> </td>
                    <td class="product-Detail"> <?php echo $data['prod_detail'] ?> </td>
                    <td class="product-Prod_id"> <?php echo $data['prod_id'] ?> </td>

                    <td class="product-edit"><a href="formEdit_Prod.php?id=<?php echo $data['prod_id'] ?>">
                        <i class="bx bx-edit bx-md"></i></a></td>

                    <td class="product-del"><a href="del_Prod.php?id=<?php echo $data['prod_id'] ?>" onclick="return confirm('คุณต้องการลบข้อมูลใช่หรือไม่')">
                        <i class="bx bx-x-circle bx-md"></i></a></td>

                  </tr>


                  <?php $i = $i + 1;  ?>
                <?php
                }
                // 
                ?>
              </tbody>
            </table>
          </div>

          <br></br>
          <div class="text-center">
            <a href="<?php echo '/Shop/pages/' ?>addProd.php" class="cart-btn"><i class='bx bx-add-to-queue '></i>Add Product</a>
            <!-- <?Php echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;' ?> -->
            <a style="margin-left: 15px" href="<?php echo '/Shop/pages/' ?>admin-panel.php" class="cart-btn">Admin Panel</a>
          </div>
        </div>
      </div>
    </div>
  </div>


  <!-- end displayProd -->


  <?php
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

</html>