<?php
include_once("pages/connectDB.php");
// require "pages/connectDB.php";
$conndb = new DB_conn; //สร้าง object ชื่อ $condb
$con = $conndb->conn; //การเข้าถึงตัวแปรใน class ตั้งชื่อเป็น $con

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get username and password from form
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Prepare SQL statement to retrieve member details
    $sql = "SELECT * FROM member WHERE username = '$username' AND password = '$password'";
    $result = $conndb->conn->query($sql);

    if ($result->num_rows == 1) {
        // Member exists in database
        $row = $result->fetch_assoc();
        $member_id = $row["member_id"];
        $name = $row["name"];
        $email = $row["email"];
        $address = $row["address"];
        echo "Welcome, " . $username . "!";
        echo "<script>alert('ล็อกอินสำเร็จ Welcome, " . $username . "!')</script>";
        echo "<script>window.location.href='pages/displayMember.php' </script>";
        // Redirect to member profile page or display member details
        // Example: header("Location: profile.php?member_id=$member_id");
    } else {
        // Member does not exist in database
        echo "<script>alert('เกิดข้อผิดพลาด')</script>";
        echo "<script>window.location.href='login.php' </script>";
    }
}

mysqli_close($con);
?>