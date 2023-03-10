<?php
include_once("connectDB.php");
$conn = new DB_conn; //สร้าง object ชื่อ $condb
?>
<?php
    $sql = $conn->del_member($_GET['id']);
    if ($sql) {
        echo "<script>alert('ลบข้อมูลสําเร็จ')</script>";
        echo "<script>window.location.href='displayMember.php' </script>";
    } else {
        echo "<script>alert('เกิดข้อผิดพลาด')</script>";
    }
?>