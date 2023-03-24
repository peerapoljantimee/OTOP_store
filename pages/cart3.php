<?php
    error_reporting( error_reporting() & ~E_NOTICE );
    session_start(); 
    $p_id = $_REQUEST['p_id']; 
	$act = $_REQUEST['act'];

	if($act=='add' && !empty($p_id))
	{
		if(!isset($_SESSION['shopping_cart']))
		{
			 
			$_SESSION['shopping_cart']=array();
		}else{
		 
		}
		if(isset($_SESSION['shopping_cart'][$p_id]))
		{
			$_SESSION['shopping_cart'][$p_id]++;
		}
		else
		{
			$_SESSION['shopping_cart'][$p_id]=1;
		}
	}

	if($act=='remove' && !empty($p_id))  //ยกเลิกการสั่งซื้อ
	{
		unset($_SESSION['shopping_cart'][$p_id]);
	}

	if($act=='update')
	{
		$amount_array = $_POST['amount'];
		foreach($amount_array as $p_id=>$amount)
		{
			$_SESSION['shopping_cart'][$p_id]=$amount;
		}
	}
	?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Shopping Cart devbanban</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>

<body>
<!-- <?php include("menu.php");?> -->
<br>
<br>
<div class="container">
  <div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-7">
      <form id="frmcart" name="frmcart" method="post" action="?act=update">
        <table width="100%" border="0" align="center" class="table table-hover">
        <tr>
          <td height="40" colspan="7" align="center" bgcolor="#CCCCCC"><strong><b>ตะกร้าสินค้า</span></strong></td>
        </tr>
        <tr>
          <td align="center" bgcolor="#EAEAEA"><strong>No.</strong></td>
          <td align="center" bgcolor="#EAEAEA"><strong>image</strong></td>
          <td align="center" bgcolor="#EAEAEA"><strong>สินค้า</strong></td>
          <td align="center" bgcolor="#EAEAEA"><strong>ราคา</strong></td>
          <td align="center" bgcolor="#EAEAEA"><strong>จำนวน</strong></td>
          <td align="center" bgcolor="#EAEAEA"><strong>รวม/รายการ</strong></td>
          <td align="center" bgcolor="#EAEAEA"><strong>ลบ</strong></td>
        </tr>
        <?php


// $sql = $conn->display_prod_edit($id);//เลือก
// while ($data = mysqli_fetch_array($sql)) {
//       $p_name = $data['prod_name'];
//       $p_price = $data['prod_price'];
//       $p_detail = $data['prod_detail'];
//       $p_img = $data['prod_img'];
// }


include_once("connectDB.php");
$conn = new DB_conn; //สร้าง object ชื่อ $condb


if(!empty($_SESSION['shopping_cart']))
{
	$total = 0;
	$i = 0;
	foreach($_SESSION['shopping_cart'] as $p_id=>$p_qty)
	{
		// $sql = "select * from shop_prod where prod_id=$p_id";
		// $query = mysql_db_query($database_condb, $sql);
		// while($row = mysql_fetch_array($query))
		// {
                            $sql = $conn->display_prod_edit($p_id);//เลือก

		// $total = 0;
		// $i = 0;
                            while ($row = mysqli_fetch_array($sql)) {		
                                        		 
		$sum = $row['prod_price'] * $p_qty;
		$total += $sum;
		echo "<tr>";
		echo "<td>";
                            echo $i += 1;
                            echo ".";
		echo "</td>";
		echo "<td width='100'>"."<img src='$row[prod_img]'  width='50'/>"."</td>";
		echo "<td width='334'>"." " . $row["prod_name"] . "</td>";
		echo "<td width='100' align='right'>" . $row["prod_price"] . "</td>";
		
		echo "<td width='57' align='right'>";  
		echo "<input type='text' name='amount[$p_id]' value='$p_qty' size='2'/></td>";
		
		echo "<td width='100' align='right'>" .number_format($sum,2)."</td>";
		echo "<td width='100' align='center'><a href='cart3.php?p_id=$p_id&act=remove' class='btn btn-danger btn-xs'>ลบ</a></td>";
		
		echo "</tr>";
		}
 
	}
	echo "<tr>";
  	echo "<td colspan='5' bgcolor='#CEE7FF' align='right'>Total</td>";
  	echo "<td align='right' bgcolor='#CEE7FF'>";
  	echo "<b>";
  	echo  number_format($total,2);
  	echo "</b>";
  	echo "</td>";
  	echo "<td align='left' bgcolor='#CEE7FF'></td>";
	echo "</tr>";
}
?>
        <tr>
          <td></td>
          <td colspan="5" align="right">
          <button type="submit" name="button" id="button" class="btn btn-warning"> คำนวณราคาใหม่ </button>
            <!-- <button type="button" name="Submit2"  onclick="window.location='confirm.php';" class="btn btn-primary"> 
            <span class="glyphicon glyphicon-shopping-cart"> </span> สั่งซื้อ </button> -->
            <button type="button" name="Submit2"  onclick="window.location='confirm.php';" class="btn btn-primary"> 
            <span class="glyphicon glyphicon-shopping-cart"> </span> สั่งซื้อ </button>

	</td>
        </tr>
      </form>
      <p align="center"> <a href="../index.php" class="btn btn-primary">กลับไปเลือกสินค้า</a> </p>
      <!-- <p align="center"> <a href="index.php" class="btn btn-primary">กลับไปเลือกสินค้า</a> </p> -->
    </div>
  </div>
</div>
</body>
</html>


<!-- จากCode นี้ Warning: Undefined variable $total in D:\xampp\htdocs\Shop\pages\cart2.php on line 103 ต้องเเก้อย่างไง -->