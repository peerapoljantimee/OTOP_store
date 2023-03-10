<!-- <?php
include_once("connectDB.php");
$conn = new DB_conn; //สร้าง object ชื่อ $condb
?> -->

<!DOCTYPE html>
<html lang="en">



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



  <body>
    <!--PreLoader-->
    <div class="loader">
      <div class="loader-inner">
        <div class="circle"></div>
      </div>
    </div>
    <!--PreLoader Ends-->

    <!-- header -->
    <?php
    include_once("header.php")
    ?> 
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
              <p>Admin</p>
              <h1>Add Product</h1>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- end breadcrumb section -->

    <!-- displayProd -->
    

    <div class="cart-section mt-150 mb-150">
      <div class="container">
        <div class="row justify-content-center " >
          <div class="col-lg-8 col-md-12">
            <div class="cart-table-wrap">
              <table class="cart-table">
                <thead class="cart-table-head">
                  <tr class="table-head-row">
                    <!-- <th class="product-remove"></th> -->
                    <th class="product-image">Product Image</th>
                    <th class="product-name">Name</th>
                    <th class="product-price">Price</th>
                    <th class="product-Detail">Detail</th>
                    <th class="product-Prod_id">Prod_id</th>
                  </tr>
                </thead>
                <tbody >

                <?php
                        $sql = $conn->display_prod();
                        $i = 1;
                        while ($data = mysqli_fetch_array($sql)) {
                            // echo $data['first_name']; 
                            ?>
                            <tr>
                                <td class="product-image"> 
                                <img src= <?php echo $data['prod_img'] ?> alt="" />
                              </td>
                                
                                <td class="product-name"> <?php echo $data['prod_name'] ?> </td>
                                <td class="product-price"> <?php echo $data['prod_price'] ?> </td>
                                <td class="product-Detail"> <?php echo $data['prod_detail'] ?> </td>
                                
                                <td class="product-Prod_id"> <?php echo $data['prod_id'] ?> </td>
        
                            </tr>
                            <?php $i = $i + 1;  ?>
                            <?php
                        }
                        // ?>



                  <tr class="table-body-row">
                    <td class="product-image">
                      <!-- <img src="../assets/img/products/product-img-1.jpg" alt="" /> -->
                      <img src="../p_img/product-img-1.jpg" alt="" />
                      
                    </td>
                    <td class="product-name">Strawberry</td>
                    <td class="product-price">$85</td>
                    <td class="product-Detail">xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx</td>
                    <td class="product-Prod_id">000</td>
                  </tr>


                </tbody>
              </table>
            </div>
          </div>
          </div>
          </div>
          </div>

          


    <!-- end displayProd -->

    <!-- addProd -->
     <div class="container">
                            <h3 class="mt-5">เพื่มข้อมูลสินค้า</h3>

                            <form method="POST" action="insert_product.php"enctype="multipart/form-data">
                                          <div class="mb-3">
                                                        <label class="form-label">Name :</label>
                                                        <input type="text" class="form-control" id="name" name="name">
                                          </div>
                                          <div class="mb-3">
                                                        <label class="form-label">Detail :</label>
                                                        <input type="text" class="form-control" id="detail"
                                                                      name="detail">
                                          </div>
                                          <div class="mb-3">
                                                        <label class="form-label">Price : </label>
                                                        <input type="text" class="form-control" id="price" name="price">
                                          </div>
                                          <div class="mb-3">
                                                        <label class="form-label">รูปภาพสินค้า</label>
                                                        <input type="file" class="form-control" id="picture"
                                                                      name="picture">

                                                                      
                                          </div>
                                      
                                          <button type="submit" class="btn btn-primary" id="submit"
                                                        name="submit">บันทึกข้อมูลสินค้า </button>
                            </form>
              </div>


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

  

  