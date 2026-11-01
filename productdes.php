

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>DARKO - product description</title>
  <link rel="stylesheet" href="css/index.css">
</head>
<body>

  <?php
  include 'top.php';
  ?>


  <?php

$cart = $_GET['ID'];
include 'config.php';


$record = mysqli_query($con , "SELECT * FROM `product data` WHERE ID = $cart ");
$data = mysqli_fetch_array($record);


?>

<div class="cart-container">
  <form action = 'order.php' method = 'POST'>
  <div class="product-cart-part">
  <div class="product-img">
    <img src="<?php echo $data['PIMAGE'] ?>"  alt="">
  </div>

  <div class="product-data">
    <h2 class="product-name"><?php echo $data['PNAME'] ?></h2>
    <input type ="hidden" class="product-name" name = "p-name" value="<?php echo $data['PNAME'] ?>">
    <h6 class="product-sdes">VENDOR - DARKO</h6>
    <h6 class="product-sdes"><?php echo $data['PSDES'] ?></h6>
    <div class="product-rs">
      <h3 class="product-price">RS. <?php echo $data['PPRICE'] ?></h3>
      <input type ="hidden" class="product-name" name = "p-price" value="<?php echo $data['PPRICE'] ?>">
      <h5 class="product-mrp">RS. <?php echo $data['PMRP'] ?></h5>
      
    </div>
 

   
              
    
    <div class="product-btns">
  <!-- <a href='order.php' class = 'product-buy'>BUY NOW</a> -->
      <input type="submit" name = "btn-order" class = "product-buy" value = "BUY NOW" > 
       
    </div>

  
 
                  
    <h3 class="product-des-h">Description:</h3>
    <p class="product-des"><?php echo $data['P DES'] ?></p>
  </div>
  </div>


  


  </form>
</div>


<div class="choose-container">
    
    <h2 class="chooseh1">WHY CHOOSE US </h2>
    <div class="choose-line"></div>
    <div class="choose">

    <div class="choose1">
      <img src="img/images.jpg" alt="" class="choose-img">
      <h3 class="chooseh3">Free Shipping</h3>
      <p class="choosep">Unlocking savings with every purchase – free shipping, always at Darko!</p>
    </div>


    <div class="choose1">
      <img src="img/images1.png" alt="" class="choose-img">
      <h3 class="chooseh3">COD</h3>
      <p class="choosep">Experience the convenience of cash on delivery with every order at Darko !</p>
    </div>


    <div class="choose1">
      <img src="img/images 2.jpg" alt="" class="choose-img">
      <h3 class="chooseh3">10 Returns</h3>
      <p class="choosep">Shop at Darko with confidence - 10-day hassle-free returns</p>
    </div>

  </div>
</div>


  <?php
  include 'footer.php';
  ?>


</body>
</html>