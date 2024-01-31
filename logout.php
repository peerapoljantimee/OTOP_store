<?php
    session_start(); // เริ่มต้น session
    $_SESSION = array(); // ลบข้อมูลใน session
    session_destroy(); // ทำลาย session
    header("location: login.php"); // กลับไปยังหน้าล็อกอิน
    exit;
?>