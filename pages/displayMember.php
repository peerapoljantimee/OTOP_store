<!-- 6430250229 ภมรพล ทีทอง -->
<?php
// fix path 
$parentPath = '/Shop';
$parentPath2 = '/Shop/pages'
?>

<?php
include_once("header.php");
?>

<?php
include_once("connectDB.php");
$conn = new DB_conn; //สร้าง object ชื่อ $condb
?>
<!DOCTYPE html>
<html lang="en">
<html>
<header>
    <title>Display Member</title>
</header>


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
                        <h1>Manage User</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end breadcrumb section -->
    <br><br><br><br><br><br><br><br>



    <!-- new Display Member -->
    <table class="layout-table">
        <div class="container">
            <thead class="cart-table-head text-center">
                <div class="text-center">
                    <div class="table-header">
                        <h1 class="PRODUCTLIST">Member Information</h1>
                    </div>
                </div>


                <style>
                    .PRODUCTLIST {
                        font-family: "Poppins", sans-serif;
                        font-size: 2rem;
                        letter-spacing: 0.1px;
                        line-height: 1.8;
                        color: #F28123;
                        overflow-x: hidden;

                    }
                </style>
                <tr>
                    <th class="column-name">ลําดับ</th>
                    <th class="column-name">Username</th>
                    <th class="column-name">password</th>
                    <th class="column-name">name</th>
                    <th class="column-name">email</th>
                    <th class="column-name">address</th>
                    <th class="column-name">แก้ไข</th>
                    <th class="column-name">ลบ</th>
                </tr>
            </thead>

            <tbody class="align-middle-table table-bordered">
                <?php
                $sql = $conn->display_member();
                $i = 1;
                while ($data = mysqli_fetch_array($sql)) {
                    // echo $data['first_name']; 
                ?>
                    <tr>
                        <td class="row-text"> <?php echo $i ?> </td>
                        <td class="row-text"> <?php echo $data['username'] ?> </td>
                        <td class="row-text"> <?php echo $data['password'] ?> </td>
                        <td class="row-text"> <?php echo $data['name'] ?> </td>
                        <td class="row-email"> <?php echo $data['email'] ?> </td>
                        <td class="row-address"> <?php echo $data['address'] ?> </td>
                        <td class="member-edit"><a href="editMember.php?id=<?php echo $data['member_id'] ?>"><i class="bx bx-edit bx-md"></i></a></td>
                        <td class="member-del"><a href="delMember.php?id=<?php echo $data['member_id'] ?>" class="btn btn-sm btnprimary" onclick="return confirm('คุณต้องการลบข้อมูลใช่หรือไม่')"><i class="bx bx-x-circle bx-md"></i></a></td>
                        <?php $i++;  ?>
                    <?php
                }
                // 
                    ?>
                    </tr>
            </tbody>
        </div>
    </table>

    <div class="text-center">
        <a href="<?php echo '/Shop/pages/' ?>admin-panel.php" style="margin-top: -50px; margin-bottom: 50px;" class="cart-btn">Admin Panel</a>
    </div>
    <!-- end new Display -->

    <style>
        .table-bordered {
            border-collapse: collapse;
        }

        .table-bordered td,
        .table-bordered th {
            border: 1px solid #efefef;
            padding: 8px;
        }
    </style>

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