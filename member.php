<!-- Pamornpon Teethong 6430250229 -->
<?php
include_once("pages/connectDB.php");
$conndb = new DB_conn; //สร้าง object ชื่อ $condb
$con = $conndb->conn; //การเข้าถึงตัวแปรใน class ตั้งชื่อเป็น $con

#------ ทำการรับค่าจากหน้าสมาชิก ---------------
$name = $_POST['name'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];
$address = $_POST['address'];


$sql_check = "SELECT * FROM member WHERE username = '$username'";
$sql_insert = $conndb->insert_member($name,$email,$username,$password,$address);

$result = mysqli_query($con, $sql_check);
if(mysqli_num_rows($result) > 0) {
    echo "<script>alert('username นี้ ถูกใช้งานแล้ว')</script>";
    echo "<script>window.location.href='addMember.php' </script>";
  } 
else {
    if(mysqli_query($con, $sql_insert)){
        echo "<script>alert('สมัครสมาชิกสำเร็จ')</script>";
        echo "<script>window.location.href='login.php' </script>";
    } 
    else {
        echo "<script>alert('เกิดข้อผิดพลาด')</script>";
        echo "<script>window.location.href='addMember.php' </script>";
        }
}


mysqli_close($con);
?>
