<?php
// fix path 
$parentPath = '/Shop';
$parentPath2 = '/Shop/pages'
?>

<?php

include_once("header.php");
?>
<title>Order</title>
<?php
include_once("connectDB.php");
$conn = new DB_conn; //สร้าง object ชื่อ $condb
$order_id = $_POST['order_id'];
?>
<html>


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
            <p>status</p>
            <h1>Tracking Order</h1>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php

  $sql = $conn->select_order($order_id);
  $i = 1;
  while ($data = mysqli_fetch_array($sql)) {
    $date = $data['date'];
    $member_id = $data['member_id'];
    $name = $data['name'];
    $email = $data['email'];
    $address = $data['address'];
    $total_ship = $data['total_ship'];
    $phone = $data['phone'];
    $quantity = $data['status'];
    $status = $data['status'];
  }



  ?>


  <!-- Body -->

  <!-- cart -->
  <div class="cart-section mt-150 mb-150">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-12">
          <div class="cart-table-wrap">




            <div class="center-order">

              <table class="cart-table">

                <thead class="cart-table-head">
                  <tr class="table-head-row">
                    <th class="product-remove">No.</th>
                    <th class="product-image">Product Image</th>
                    <th class="product-name">Name</th>
                    <th class="product-price">Price</th>
                    <th class="product-quantity">Quantity</th>
                    <th class="product-total">Total</th>
                  </tr>
                </thead>

                <tbody>

                  <?php


                  $sql = $conn->select_orderAll($order_id);
                  $i = 1;
                  $Subtotal = 0;
                  while ($data = mysqli_fetch_array($sql)) {
                    $quantity = $data['quantity'];
                    $sumPeritem = $data['sumPeritem'];
                    $prod_name = $data['prod_name'];
                    $prod_price = $data['prod_price'];
                    $prod_img = $data['prod_img'];
                    $Subtotal += $sumPeritem;
                  ?>

                    <tr class="table-body-row">
                      <td class="product-remove"><?php echo $i ?></td>
                      <td class="product-image"><img src="<?php echo $prod_img ?>" alt=""></td>
                      <td class="product-name"><?php echo $prod_name ?></td>
                      <td class="product-price"><?php echo $prod_price ?></td>
                      <td class='product-quantity'><?php echo $quantity ?></td>
                      <td class="product-total"><?php echo $sumPeritem ?></td>
                    </tr>
                  <?php
                    $i++;
                  }
                  ?>
                </tbody>
              </table>
              </table>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="total-section">
            <table class="total-table">
              <thead class="total-table-head">
                <tr class="table-total-row">
                  <th>Detail of the order</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                <tr class="total-data">
                  <td><strong>Name: </strong></td>
                  <td><?php echo $name ?></td>
                </tr>
                <tr class="total-data">
                  <td><strong>E-mail: </strong></td>
                  <td><?php echo $email ?></td>
                </tr>
                <tr class="total-data">
                  <td><strong>Phone Number: </strong></td>
                  <td><?php echo $phone ?></td>
                </tr>
                <tr class="total-data">
                  <td><strong>Subtotal: </strong></td>
                  <td><?php echo "฿$Subtotal" ?></td>
                </tr>
                <tr class="total-data">
                  <td><strong>Shipping: </strong></td>
                  <td><?php echo "฿45" ?></td>
                </tr>
                <tr class="total-data">
                  <td><strong>Total: </strong></td>
                  <td><?php echo "฿$total_ship " ?></td>
                </tr>
                <tr class="total-data">
                  <td><strong>Status: </strong></td>
                  <td><?php echo $status  ?></td>
                </tr>
              </tbody>
            </table>
          </div>
          <br><br><br>
          <div class="coupon-section">
            <h3>Delivery address</h3>
            <div class="register-from">
              <form action="<?php echo $parentPath ?>/index.php#shop">
                <!-- <p><input class="address" type="text" value="<?php echo $address; ?>" style="width: 350px; height: 100px; white-space: pre-wrap; overflow: auto;"disabled></p> -->
               
                <p><textarea name="address" id="address" cols="44" rows="5"  disabled><?php echo $address;?></textarea></p>
                
                <p><input type="submit" value="ซื้ออีก!"></p>
              </form>
            </div>
          </div> 
          <style>
            .address {
              font-size: 15px;
              padding: 15px;
              margin: 0 auto;
              margin-bottom: 5px;
              text-align: center;
              word-wrap: break-word;
              word-break: break-all;
              width: 180px;
              text-align: justify;
              text-justify: inter-word;

              
 
 
 



            }
          </style>
        </div>
      </div>
    </div>
  </div>
  </div>
  <!-- end cart -->





  <!-- END Body -->


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