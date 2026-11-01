<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <title>DARKO - home page</title>
</head>



   <!-- <--------------- font awesome ----------->

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="css/index.css">

<?php
include 'top.php'
?>

<body style="background: #f1f2f6;">



<div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner carousel-banner">
    <div class="carousel-item active">
      <div class="fpart">
         <h5> Sale up to 40% off!</h5>
         <h2 class="fhead">Spring Summer <br> Collection</h2>
         <p class = "fpera">New Price: <span>$270.00</span></p>
         <button class="fbbtn"> <a href="perfume.php">Shop Now</a>  </button>
      </div>

      <img src="./admin/img/Showcase-img-1.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
    <div class="fpart">
         <h5>Take A perfume</h5>
         <h2 class="fhead">Up to 25% Off<br>order now</h2>
         <p class = "fpera">New Price: <span>$170.00</span></p>
         <button class="fbbtn"> <a href="perfume.php">Shop Now</a>  </button>
      </div>
      <img src="./admin/img/showcase-img-2.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
    <div class="fpart">
         <h5>Stelina Best Collection</h5>
         <h2 class="fhead">A range of<br>perfume</h2>
         <p class = "fpera">Save Price: <span>$250.00</span></p>
         <button class="fbbtn"> <a href="perfume.php">Shop Now</a>  </button>
      </div>
      <img src="./admin/img/showcase-img-3.png" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
    <span class="carousel-control-next-icon " aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>










<div class='container1'>
  


 <div class="f-collection">
   <h1 class="m-collection ">OUR PRODUCTS</h1>
 </div>
     <div class='cart-main'>
      

 <?php
 
 
 include 'config.php';
 $record = mysqli_query($con , "SELECT * FROM `product data` ");
//  $data = mysqli_fetch_array($record);

         


//  $cartno = 0;
 while($row = mysqli_fetch_array($record)){
      $check_page = $row['PCATEGORY'];
      if($check_page === 'home'){


   echo"
     

<form action = 'insertcart.php' method = 'POST'>


        <div class='product data item card-1'>
         <h5 class = 'p-name'hidden>$row[ID]</h5>
           <div class='card_img'>
        <img src='$row[PIMAGE]' alt='image not found'>
           </div>
             <div class='overlay'>
          <span>$row[PNAME]</span>
          <input type='text' name = 'pname' value = '$row[PNAME]' hidden>
          <span>₹.$row[PPRICE]</span>
         <input type='text' name = 'pprice' value = '$row[PPRICE]' hidden>
 <a href='productdes.php? ID=$row[ID]'>
<span style='font-size: 35px;'>↓</span>
        </a>

              <div class='addtocart'>
                  <input type='number' name= 'pqty'  min = '1' max = '10' class = 'qut-add' placeholder = 'Quantity'>
                   
                   
                  <li class = 'li-btn'><a href='' name = '' class = 'btn-add'><input type='submit' value='cart' class = 'btn-add ' name = 'addcart' ></a></li>
            
                  </div>
                  
        </div>
        </div>

   
       </form> 
        
        
        
        ";
       
 }
}
 ?>
      </div>
   </div>


<?php
include 'darko_part.php';
?>

<?php
include 'footer.php';
?>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>


</body>
</html>
