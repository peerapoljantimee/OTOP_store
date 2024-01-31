<?php
include_once("pages/connectDB.php");
// require "pages/connectDB.php";
$conndb = new DB_conn; //สร้าง object ชื่อ $condb
$con = $conndb->conn; //การเข้าถึงตัวแปรใน class ตั้งชื่อเป็น $con
session_start(); // เริ่มต้น session
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get username and password from form
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Prepare SQL statement to retrieve member details
    $sql = "SELECT * FROM member WHERE username = '$username' AND password = '$password'";
    // $result = $conndb->conn->query($sql);
    $result = mysqli_query($con,$sql);

    if ($result->num_rows == 1) {
        // Member exists in database
        $row = $result->fetch_assoc();
        $member_id = $row["member_id"];
        $name = $row["name"];
        $email = $row["email"];
        $address = $row["address"];

        $_SESSION['loggedin'] = true; // กำหนดค่าใน session
        $_SESSION['member_id'] = $member_id;
        $_SESSION['username'] = $username;
        $_SESSION['name'] = $name;
        $_SESSION['email'] = $email;
        $_SESSION['address'] = $address;
        echo "======================";
        print_r($_SESSION['member_id']);
        if($username == 'admin'){
            echo "<script>alert('Hi ! Welcome back, " . $username . "!')</script>";
            echo "<script>window.location.href='pages/admin-panel.php' </script>";
            // exit;
        }
        else{
            echo "<script>alert('ล็อกอินสำเร็จ Welcome, " . $username . "!')</script>";
            echo "<script>window.location.href='index.php' </script>";
        }
    } else {
        // Member does not exist in database
        echo "<script>alert('username หรือ password ไม่ถูกต้อง')</script>";
        echo "<script>window.location.href='login.php' </script>";
    }
}

mysqli_close($con);
?>