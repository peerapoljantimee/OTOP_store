<!-- 6430250229 ภมรพล ทีทอง -->
<?php
include_once("connectDB.php");
$conn = new DB_conn; //สร้าง object ชื่อ $condb
?>
<!DOCTYPE html>
<html lang="en">
<html>

<head>
</head>

<body>
    <div class="container pt-5">
        <div class="row">
            <div class="col-lg-8 table-responsive mb-5">
                <table class="table table-bordered text-center mb-0">
                    <thead class="bg-secondary text-dark">
                        <tr>
                            <td colspan="7">
                                <h3>ข้อมูล สมาชิก </h3>
                            </td>
                        </tr>
                        <tr>
                            <th>ลําดับ</th>
                            <th>ชื่อ</th>
                            <th>นามสกุล</th>
                            <th>email</th>
                            <th>username</th>
                            <th>แก้ไข</th>
                            <th>ลบ</th>
                        </tr>
                    </thead>
                    <tbody class="align-middle">

                        <?php
                        $sql = $conn->display_prod();
                        $i = 1;
                        while ($data = mysqli_fetch_array($sql)) {
                            // echo $data['first_name']; 
                            ?>
                            <tr>
                                <td class="align-middle"> <?php echo $data['prod_id'] ?> </td>
                                <td class="align-middle"> <?php echo $data['prod_name'] ?> </td>
                                <td class="align-middle"> <?php echo $data['prod_detail'] ?> </td>
                                <td class="align-middle"> <?php echo $data['prod_price'] ?> </td>
                                <td class="align-middle"> <?php echo $data['prod_img'] ?> </td>
                                <td class="align-middle"><a href="formMemberEdit.php?id=<?php echo $data['member_id'] ?>" class="btn btn-sm
        btn-primary"> Edit</a></td>
                                <td class="align-middle"><a href="del.php?id=<?php echo $data['member_id'] ?>" class="btn btn-sm btnprimary" onclick="return confirm('คุณต้องการลบข้อมูลใช่หรือไม่')"><i class="fa fa-times"></i></a></td>
                            </tr>
                            <?php $i = $i + 1;  ?>
                            <?php
                        }
                        // ?>

                        </tr>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</body>

</html>