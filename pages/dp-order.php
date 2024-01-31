<!-- 6430250229 ภมรพล ทีทอง -->
<?php
// fix path 
$parentPath = '/Shop';
$parentPath2 = '/Shop/pages'
  ?>

<?php
include_once("header.php");
include_once("connectDB.php");
$conn = new DB_conn; //สร้าง object ชื่อ $condb
?>
<!DOCTYPE html>
<html lang="en">
<html>

<head>
  <title>Display Products</title>
</head>

<body>
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
            <h1>Display Orders</h1>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- end breadcrumb section -->

  <!-- new Display Member -->

  <table class="layout-table">
    <div class="container">
      <thead class="cart-table-head text-center ">

        <tr>
          <th class="column-name">OrderID</th>
          <th class="column-name">ชื่อผูรับ</th>
          <th class="column-name">MemberID</th>
          <th class="column-name">email</th>
          <th class="column-name">Address</th>
          <th class="column-name">Phone</th>
          <th class="column-name">Total</th>
          <th class="column-name">Status</th>
          <th class="column-name">แก้ไข</th>
          <th class="column-name">ลบ</th>
        </tr>
      </thead>
      <?php
      $sql = $conn->display_order();
      while ($data = mysqli_fetch_array($sql)) {
        ?>
        <tbody class="align-middle table-bordered">
          <tr>
            <td class="row-text">
              <?php echo $data['order_id'] ?>
            </td>
            <td class="row-text">
              <?php echo $data['name'] ?>
            </td>
            <td class="row-text">
              <?php echo $data['member_id'] ?>
            </td>
            <td class="row-email">
              <?php echo $data['email'] ?>
            </td>
            <td class="row-address">
              <?php echo $data['address'] ?>
            </td>
            <td class="row-text">
              <?php echo $data['phone'] ?>
            </td>
            <td class="row-text">
              <?php echo $data['total_ship'] ?>
            </td>  <td class="row-text">
              <?php echo $data['status'] ?>
            </td>
            <td class="member-edit"><a href="editOrder.php?id=<?php echo $data['order_id'] ?>"><i
                  class="bx bx-edit bx-md"></i></a></td>
            <td class="member-del"><a href="delOrder.php?id=<?php echo $data['order_id'] ?>" class="btn btn-sm btnprimary"
                onclick="return confirm('คุณต้องการลบข้อมูลใช่หรือไม่')"><i class="bx bx-x-circle bx-md"></i></a></td>

          </tr>
        </tbody>
        <?php
      }
      ?>
    </div>

  </table>
  <div class="text-center">
    <?Php echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;' ?>
    <a href="<?php echo '/Shop/pages/' ?>admin-panel.php" class="cart-btn">Admin PANEL</a>
  </div>
  <!-- end new Display -->
  <br>    </br>
  
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