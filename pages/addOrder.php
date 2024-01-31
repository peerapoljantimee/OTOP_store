

<?php
session_start(); // เริ่มต้น session
// include_once('header.php');
include_once('connectDB.php');
$conndb = new DB_conn;
$server = $conndb->conn;

$member_id = $_POST["id"];
$name = $_POST["name"];
$email = $_POST["email"];
$address = $_POST["address"];
$phone = $_POST["phone"];
// print_r($phone);
// print_r($_SESSION['shopping_cart']);




if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) { // ตรวจสอบสถานะการล็อกอิน
    $member_id = $_SESSION['member_id'];
    $username = $_SESSION['username'];
    $name = $_SESSION['name'];
    $email = $_SESSION['email'];
    $address = $_SESSION['address'];
   

} else {
    $member_id = "";
    $total = 0;
}
$total = $_SESSION['totalPrice'];



$sql = $conndb->insert_order($member_id, $name, $email, $address, $total, $phone);
if (mysqli_query($server, $sql)) {
    $last_id = mysqli_insert_id($server);
    foreach ($_SESSION['shopping_cart'] as $p_id => $p_qty) {
        $prod_id = $p_id;
        $quantity = $p_qty;
        $sqlSelectProduct = $conndb->select_product($prod_id);
        while ($data = mysqli_fetch_array($sqlSelectProduct)) {
            $sumPerItem = $data['prod_price'] * $quantity;
        }
        $sql = $conndb->insert_orderProduct($last_id,$prod_id,$quantity,$sumPerItem);
        mysqli_query($server, $sql);

    $_SESSION['shopping_cart'] = array();
}
}
echo "<script>alert('บันทึกข้อมูลของท่านเรียบร้อยแล้ว')</script>";
// echo "<script>window.location='order.php?order_id=$last_id'</script>";
// echo "<script>window.location='order.php?order_id=" . urlencode($last_id) . "'</script>";

echo '<form style="display: none" action="order.php" method="POST" id="form">';
echo '<input type="hidden" id="order_id" name="order_id" value="' . $last_id . '"/>';
echo '</form>';



?>
<script>
    document.getElementById("form").submit();  
</script>


