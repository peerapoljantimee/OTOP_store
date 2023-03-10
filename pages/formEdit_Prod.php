
<?php
include_once("connectDB.php");
$conn = new DB_conn;
?>

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


              <!-- icon -->
              <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
              <!-- <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
              <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet"> -->

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

    <!-- breadcrumb-section -->
    <div class="breadcrumb-section breadcrumb-bg">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 offset-lg-2 text-center">
            <div class="breadcrumb-text">
              <p>Admin</p>
              <h1>Edit Product</h1>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- end breadcrumb section -->


<?php
$sql = $conn->display_prod_edit($_GET['id']);
while ($data = mysqli_fetch_array($sql)) {
    $p_name = $data['prod_name'];
    $p_price = $data['prod_price'];
    $p_detail = $data['prod_detail'];
//     $u_name = $data['username'];
//     $t_ype = $data['type'];
}

?>




<div class="container">
    <h3 class="mt-5">Edit Product</h3>
    <form method="POST">
        <div class="mb-3">
            <label for="pname" class="form-label">Name : </label>
            <input type="text" class="form-control" id="pname" name="pname" value=<?php echo $p_name ?>>
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Price : </label>
            <input type="text" class="form-control" id="price" name="price" value=<?php echo $p_price ?>>
        </div>
        <div class="mb-3">
            <label for="detail" class="form-label">Detail : </label>
            <input type="text" class="form-control" id="detail" name="detail" value=<?php echo $p_detail; ?>>
        </div>
   

        <button type="submit" class="btn btn-primary" id="edit" name="edit">SAVE </button>
    </form>
</div>






<?php
$id = $_GET['id'];
if (isset($_POST['edit'])) {
    $pname = $_POST['pname'];
    $price = $_POST['price'];
    $detail = $_POST['detail'];

    $sql = $conn->edit_prod($pname, $price, $detail, $id);
    echo $sql;
    if ($sql) {
        echo "<script>alert('บันทึกข้อมูลสําเร็จ')</script>";
        echo "<script>window.location.href='displayProd.php' </script>";
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