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

    <!-- Display member -->
    <div class="container pt-5">
        <div class="row justify-content-center">
            <div class="col-lg-12 table-responsive mb-5">
                <table class="table table-bordered text-center mb-0">
                    <thead class="bg-secondary text-dark">
                        <tr>
                            <td colspan="8">
                                <h3>ข้อมูล สมาชิก </h3>
                            </td>
                        </tr>
                        <tr>
                            <th>ลําดับ</th>
                            <th>Username</th>
                            <th>password</th>
                            <th>name</th>
                            <th>email</th>
                            <th>address</th>
                            <th>แก้ไข</th>
                            <th>ลบ</th>
                        </tr>
                    </thead>
                    <tbody class="align-middle">

                        <?php
                        $sql = $conn->display_member();
                        $i = 1;
                        while ($data = mysqli_fetch_array($sql)) {
                            // echo $data['first_name']; 
                            ?>
                            <tr>
                                <td class="align-middle"> <?php echo $i ?> </td>
                                <td class="align-middle"> <?php echo $data['username'] ?> </td>
                                <td class="align-middle"> <?php echo $data['password'] ?> </td>
                                <td class="align-middle"> <?php echo $data['name'] ?> </td>
                                <td class="align-middle"> <?php echo $data['email'] ?> </td>
                                <td class="align-middle"> <?php echo $data['address'] ?> </td>
                                <td class="align-middle"><a href="editMember.php?id=<?php echo $data['member_id'] ?>" class="btn btn-sm
        btn-primary"> Edit</a></td>
                                <td class="align-middle"><a href="delMember.php?id=<?php echo $data['member_id'] ?>" class="btn btn-sm btnprimary" onclick="return confirm('คุณต้องการลบข้อมูลใช่หรือไม่')"><i class="fa fa-times"></i></a></td>
                            </tr>
                            <?php $i++;  ?>
                            <?php
                        }
                        // ?>

                        </tr>
                    </tbody>
                </table>
            </div>

        </div>
    </div>

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