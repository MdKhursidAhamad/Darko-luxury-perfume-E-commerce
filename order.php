
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>DARKO - order page</title>
  <link rel="stylesheet" href="css/index.css">
</head>
<body>

<?php
include 'top.php';
?>


  
<div class="order-container">

  <div class="order-part">
      <form action="order_place.php" method = "POST"  class="order-form">

      <h2 class="order-h">ORDER INFORMATION</h2>

        <div class="orderdiv">
          <input type="text" class="order-input" name = "ocname" placeholder = "Enter Full Name">
        </div>
        <div class="orderdiv">
          <input type="text" class="order-input" name = "ocaddress"  placeholder = "Enter Street Address">
        </div>
        <div class="orderdiv">
          <input type="text" class="order-input" name = "occity"  placeholder = "Enter Your City">
        </div>
        <div class="orderdiv">
          <input type="text" class="order-input" name = "ocstate"  placeholder = "Enter Your State">
        </div>
        <div class="orderdiv">
          <input type="text" class="order-input" name = "oczip"  placeholder = "Enter Post Code/Zip">
        </div>
        <div class="orderdiv">
          <input type="number" class="order-input" name = "ocno"  placeholder = "Enter Phone Number">
        </div>

        <div class="orderdiv">
                   <label  class=" l-name ">Select Payment Method : </label>
                   <select  class = "order-input" name="ocpay">
                    <option value="cod" >COD</option>
                   </select>
                </div>

                
                      <?php
                         if(isset($_POST['btn-order'])){
                            $productname = $_POST['p-name'];
                            $productprice = $_POST['p-price'];
  
     
                                echo "
                                  <input type='hidden'name = 'papu' value= '  $productname'>
                                  <input type='hidden'name = 'papu1' value= '  $productprice'>
                                ";
                         }
                                ?>

                



            <div class="orderdiv">
          <input type="submit" class="order-input-submit" name = "orderplace" value = "SUBMIT">
        </div>    
      </form>

      
      <?php
if(isset($_POST['btn-order'])){
  $productname = $_POST['p-name'];
  $productprice = $_POST['p-price'];
  
  
  echo "
  
  
  <div class='order_data_show'>
  <h3 class = 'order_show_h'>Your Order</h3>

  <div class='product_show'>
    <h3 class='product_show_name'>$productname</h3>
    <h6 class='product_show_price'>RS. $productprice </h6>
  </div>
 <div class='total-pay'>

  <h5 class = 'total_payh5'>Total Payment</h5>
  <h6 class = 'total_payh6'>RS. $productprice </h6>
 </div>
</div>
  
  
  ";
  



}
?>


  </div>

</div>



<?php
include 'footer.php';
?>

</body>
</html>




