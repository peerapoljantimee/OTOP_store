<?php
include_once("connectDB.php");
$conn = new DB_conn; //สร้าง object ชื่อ $condb
?> 

    <!-- header -->
    <?php
    include_once("header.php")
    ?> 
<!DOCTYPE html>
<html lang="en">



<head>
	<!-- title -->
	<title>Add Member</title>
</head>



  <body class= "body-addProd">
    <!--PreLoader-->
    <div class="loader">
      <div class="loader-inner">
        <div class="circle"></div>
      </div>
    </div>
    <!--PreLoader Ends-->

    <!-- end header -->


    <!-- search area -->
    <div class="search-area">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <span class="close-btn"><i class="fas fa-window-close"></i></span>
            <div class="search-bar">
              <div class="search-bar-tablecell">
                <h3>Search For:</h3>
                <input type="text" placeholder="Keywords" />
                <button type="submit">
                  Search <i class="fas fa-search"></i>
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- end search arewa -->

    <!-- breadcrumb-section -->
    <div class="breadcrumb-section breadcrumb-bg">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 offset-lg-2 text-center">
            <div class="breadcrumb-text">
              <p>ADMIN PANEL</p>
              <h4>Add Product</h4>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- end breadcrumb section -->



    <!-- addProd -->
     <div class="container">
                            <h1>Add Product</h1>
                            <form method="POST" action="insert_product.php"enctype="multipart/form-data">
                                          <div class="mb-3">
                                                        <h2><label class="form-label">Product Name :</label><h2>
                                                        <input type="text" class="form-control" id="name" name="name" placeholder="ชื่อสินค้า" required>
                                          </div>
                                          <div class="mb-3">
                                                        <h2><label class="form-label">Detail :</label><h2>
                                                        <!-- <input type="text" class="form-control" id="detail" name="detail"> -->
                                                        <textarea class="form-control" name="detail" id="detail" cols="auto" rows="auto" placeholder="รายละเอียด" required></textarea>
                                          </div>
                                          <div class="mb-3">
                                                        <h2><label class="form-label">Price : </label><h2>
                                                        <input type="text" class="form-control" id="price" name="price" placeholder="ราคาสินค้า" required>
                                          </div>
                                          
                                          <div class="mb-3">
                                                        <h2><label class="form-label">Picture : </label><h2>
                                                        <input type="file"  class="form-control" id="picture"name="picture" required>

                                                                      
                                          </div>

                                          </div>

                                          
                                        
                                          <br></br>

                                          <div class="text-center"><input type="submit" value="   S A V E   "></form>
                                          <a href="/Shop/pages/displayProd.php">
                                          <?Php echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'?>
                                          <input type="submit" value=" Display Product "></a>
                                          </div>
                                        

                                        <br></br><br></br><br></br><br></br> 
                                                
     


    <!-- end addProd -->
 
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