<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>DARKO - Perfumes </title>
</head>




   <!-- <--------------- font awesome ----------->

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="css/index.css">

<?php
include 'top.php'
?>


<body style="background: #f1f2f6;">
  <img src="/admin/img/iphone 14 pro max.jpg" alt="">


<div class='container1'>
  


 <div class="f-collection">
   <h2 class="m-collection">PERFUMES COLLECTION</h2>
 </div>
     <div class='cart-main'>
 <?php
 
 include 'config.php';
 $record = mysqli_query($con , "SELECT * FROM `product data` ");
         



 while($row = mysqli_fetch_array($record)){
      $check_page = $row['PCATEGORY'];
      if($check_page === 'perfumes'){



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
   <!-- <div class='cart-second'>
           <div class='card_name'>
                <h5 class = 'p-name'>$row[PNAME]</h5>
                <p class = 'p-des'>$row[PSDES]</p>
               <input type='text' name = 'pname' value = '$row[PNAME]' hidden>

           </div>
       
            <div class='card_price'>
                 <p class = 'p-price'>RS. $row[PPRICE]</p>
                 <p class = 'p-mrp'>RS. $row[PMRP]</p>
                 
                  <input type='text' name = 'pmrp' value = '$row[PMRP]' hidden>
                 <input type='text' name = 'pprice' value = '$row[PPRICE]' hidden>
                 </div>
                
                   
            

             <div class='buy-card'>
                   <li class = 'li-btn'><a href='productdes.php? ID=$row[ID]' class = 'btn-shop'>Buy Now</a></li>
               </div>


               <div class='addtocart'>
                  <input type='number' name= 'pqty'  min = '1' max = '10' class = 'qut-add' placeholder = 'Quantity'>
                   
                   
                  <li class = 'li-btn'><a href='' name = '' class = 'btn-add'><input type='submit' value='cart' class = 'btn-add ' name = 'addcart' ></a></li>
            
                  </div>




           </div> -->



<?php
include 'footer.php';
?>

</body>
</html>