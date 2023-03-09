<!-- Pamornpon Teethong 6430250229 -->
<?php
include_once("connectDB.php");
$conndb = new DB_conn; //สร้าง object ชื่อ $condb
$con = $conndb->conn; //การเข้าถึงตัวแปรใน class ตั้งชื่อเป็น $con

#------ ทำการรับค่าจากหน้าสมาชิก ---------------
$name = $_POST['name'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];
$address = $_POST['address'];
//echo $fname,$lname,$mname,$email,$username,$password,$type;

$sql = $conndb->insert_member($name,$email,$username,$password,$address);
// $sql = $conndb->insert_member();
if(mysqli_query($con,$sql)){
    printf("%d Row insert. \n",mysqli_affected_rows($con));
}
if($sql){
    echo "<script>alert('สมัครสมาชิกสำเร็จ')</script>";
    echo "<script>window.location.href='login.php' </script>";
    } 
else {
    echo "<script>alert('เกิดข้อผิดพลาด')</script>";
    echo "<script>window.location.href='register.php' </script>";
     }
mysqli_close($con);
?>
