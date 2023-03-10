
<?php
include_once("connectDB.php");
$conn = new DB_conn;
?>


<?php

$sql = $conn->del_prod($_GET['id']);
echo $sql;

?>

<?php
echo "<script>window.location='displayProd.php'</script>";
?>