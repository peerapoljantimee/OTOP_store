<?php

$p_name = $_POST['name'];
$p_detail = $_POST['detail'];
$p_price = $_POST['price'];
// $p_category = $_POST['category'];


//------File upload-----
#'test.jpg'

$name = $_FILES['picture']['name']; 
$tmp_name = $_FILES['picture']['tmp_name'];

#-------------Finding file extension--------
$position = strpos($name, ".");
$fileextension = substr($name, $position + 1);
$fileextension = strtolower($fileextension);
echo $fileextension;
if ($fileextension == 'jpg' or $fileextension == 'png') {
              if (isset($name)) {
                            // $path = '../p_img/';
                            $path = '../p_img/';
                           
                            if (!empty($name)) {
                                          if (move_uploaded_file($tmp_name, $path . $name)) {
                                                        $path_img = $path . $name;
                                                        $sql = $conn->insert_product($p_name, $p_detail, $p_price, $path_img);
                                                        if ($sql) {
                                                                      echo "<script>alert('บันทึกข้อมูลของท่านเรียบร้อยแล้ว')</script>";
                                                                      // echo "<script>window.location='addProd.php'</script>";
                                                        } else {
                                                                      echo "<script>alert( Error: " . $sql . ":-" . mysqli_error($conn) . ")</script>";
                                                        }
                                          }
                            }
              }
}

?>