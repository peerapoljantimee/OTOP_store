<!DOCTYPE html>
<html lang="en">
<?php
//include_once("header.php");
include_once("pages/header.php");

?>

<head>
   <!-- title -->
   <title>OTOP Nakhonpanom</title>

</head>

<body>


   <!-- hero area -->
   <div class="hero-area hero-bg">
      <div class="container">
         <div class="row">
            <div class="col-lg-9 offset-lg-2 text-center">
               <div class="hero-text">
                  <div class="hero-text-tablecell">
                     <p class="subtitle">สินค้า OTOP • จังหวัดนครพนม</p>
                     <h1>กระเป๋าสานจากต้นกก</h1>
                     <div id="navbarResponsive">
                        <div class="hero-btns">
                           <a href="shop.php" class="boxed-btn">ซื้อเลย!</a>
                        </div>
                     </div>

                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <?php
	include_once("pages/features.php");
	?>
   <!-- end hero area -->
   <div class="product-section mt-150 mb-150" id="shop">
      <div class="container">
         <div class="row ">
            <div class="col-lg-8 offset-lg-2 text-center">
               <div class="section-title">
                  <h3><span class="orange-text">สินค้า</span> ของเรา</h3>
                  <p>
                     กระเป๋าสานจากต้นกก รูปทรงสวย ทันสมัย สินค้า OTOP ผลิดโดยฝีมือของจังหวัดนครพนม
                  </p>
               </div>
            </div>
         </div>
      </div>
   </div>
   <?php
	// include_once("pages/prod_section.php");
	?>
   <div style=" margin-bottom: -100px;"></div>
   <!-- product section -->
   <div class="product-section mt-150 mb-150 ">
      <div class="container">


         <div class="row flex-row">

            <?php
				include_once("pages/connectDB.php");
				$conn = new DB_conn; //สร้าง object ชื่อ $condb
				$parentPath  = '/Shop/pages/';

				$id = 3;
				$sql = $conn->select_prod($id);
				$data = mysqli_fetch_array($sql);
				$str = $data['prod_img'];
				$pathImg = substr($str, 9); //นับเเต่ตัวที่9
				$parentPathImg  = '/Shop/p_img/' . $pathImg;

				?>

            <div class="col-lg-4 col-md-6 text-center">
               <div class="single-product-item">
                  <div class="product-image">
                     <a
                        href="<?php echo $parentPath ?>single-product.php?p_id=<?php echo $data['prod_id']; ?>">
                        <img src="<?php echo "$parentPathImg " ?>" alt="" /></a>
                  </div>
                  <h3><?php echo $data['prod_name'] ?></h3>
                  <!-- <h3>555</h3> -->
                  <p class="product-price"><span>Price</span>฿<?php echo $data['prod_price'] ?> </p>

                  <a href="<?php echo $parentPath2 ?>/cart.php?p_id=<?php echo $data['prod_id'] ?>&act=add&qty=1"
                     class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>


               </div>
            </div>


            <?php

				$id = 8;
				$sql = $conn->select_prod($id);
				$data = mysqli_fetch_array($sql);
				$str = $data['prod_img'];
				$pathImg = substr($str, 9); //นับเเต่ตัวที่9
				$parentPathImg  = '/Shop/p_img/' . $pathImg;

				?>

            <div class="col-lg-4 col-md-6 text-center">
               <div class="single-product-item">
                  <div class="product-image">
                     <a
                        href="<?php echo $parentPath ?>single-product.php?p_id=<?php echo $data['prod_id']; ?>">
                        <img src="<?php echo "$parentPathImg " ?>" alt="" /></a>
                  </div>
                  <h3><?php echo $data['prod_name'] ?></h3>
                  <p class="product-price"><span>Price</span>฿<?php echo $data['prod_price'] ?> </p>
                  <a href="<?php echo $parentPath2 ?>/cart.php?p_id=<?php echo $data['prod_id'] ?>&act=add&qty=1"
                     class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>

               </div>
            </div>

            <?php
				$id = 7;
				$sql = $conn->select_prod($id);
				$data = mysqli_fetch_array($sql);
				$str = $data['prod_img'];
				$pathImg = substr($str, 9); //นับเเต่ตัวที่9
				$parentPathImg  = '/Shop/p_img/' . $pathImg;


				?>
            <div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0 text-center">
               <div class="single-product-item">
                  <div class="product-image">
                     <a
                        href="<?php echo $parentPath ?>single-product.php?p_id=<?php echo $data['prod_id']; ?>">
                        <img src="<?php echo "$parentPathImg " ?>" alt="" /></a>
                  </div>
                  <h3><?php echo $data['prod_name'] ?></h3>
                  <p class="product-price"><span>Price</span>฿<?php echo $data['prod_price'] ?> </p>
                  <a href="<?php echo $parentPath2 ?>/cart.php?p_id=<?php echo $data['prod_id'] ?>&act=add&qty=1"
                     class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>

               </div>
            </div>

         </div>
      </div>
   </div>
   <!-- end product section -->





   <!-- testimonail-section -->

   <?php include_once('reviewSection.php')?>

   <!-- end testimonail-section -->





   <!-- advertisement section -->
   <div  style=" margin-top: 300px; margin-bottom :300px" class="feature-bg3">
   <div class="abt-section mb-150">
      <div class="container">
         <div class="row">
            <div class="col-lg-6 col-md-12">
               <!-- <div class="abt-bg">
                  <a href="https://www.youtube.com/watch?v=DBLlFWYcIGQ" class="video-play-btn popup-youtube"><i
                        class="fas fa-play"></i></a>
               </div> -->
            </div>
            <div class="col-lg-6 col-md-12">
               <div class="abt-text">
                  <!-- <p class="top-sub">ความเป็นมา</p> -->
                  <h2>Why  <span class="orange-text">OTOP</span></h2>
                  <p>ความเป็นเอกลักษณ์ของสินค้า OTOP จากจังหวัดนครพนมนั้นสร้างจากความพิถีพิถัน
                     เป็นสินค้าที่ถูกผลิตขึ้นมาจากการร่วมมือกันของชุมชนเลือกใช้วัสดุดีๆ เช่น กระเป๋าสานจากต้นกก
                     ที่ผลิตจากวัสดุพื้นบ้านที่มีความทนทานและทำให้เป็นเอกลักษณ์ของจังหวัดนครพนม
                     .</p>
                  <p>ไม่ต้องเดินทางไกล! สั่งซื้อ กระเป๋าสานจากต้นกก สินค้า OTOP จากจังหวัดนครพนมผ่านเว็บไซต์ได้ทันที
                     สินค้ามีคุณภาพและเป็นเอกลักษณ์ คุณจะได้เป็นส่วนหนึ่งในการสนับสนุนชุมชนและวัฒนธรรมของจังหวัดนครพนม
                    .</p>
                  <a href="about.php" class="boxed-btn mt-4">เพื่มเติม</a>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
   <!-- end advertisement section -->







   <?php
	include_once("pages/footer.php");
	?>





</body>