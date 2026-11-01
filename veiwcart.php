<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>DARKO - view-cart</title>
  <link rel="stylesheet" href="css/cart.css">
</head>
<body>
  <?php
  include 'top.php';
  ?>

  <div class="cart-container">                                                                                                                                                                                                  
    <div class="cart-h">
      <h2>Shopping Cart</h2>
    </div>
    <div class="container-tab">
               
                <div class="table-responsive">                                                                    
                   <table class="table shadow" >
                
                   
                      <thead>
                        <th  class = "text-center"  style="background-color: #ab8e66;color: #fff; ">Cart no.</th>
                        <th class = "text-center"  style="background-color: #ab8e66;color: #fff;">Products</th>
                        <th class = "text-center" style="background-color: #ab8e66;color: #fff;" >Price</th>
                        <th class = "text-center" style="background-color: #ab8e66;color: #fff;" >Quantity</th>
                        <th class = "text-center" style="background-color: #ab8e66;color: #fff;" >Total Price</th>
                        <th class = "text-center"  style="background-color: #ab8e66;color: #fff;">Update</th>
                        <th class = "text-center" style="background-color: #ab8e66;color: #fff;" >Delete</th>
                      </thead>
                      <tbody>
                        <?php
                        //  session_start();
                        $total = 0;
                        $i = 1;
                        if(isset($_SESSION['cart'])){
                          foreach($_SESSION['cart']as $key => $value){

                            $total = $value['product_price'] * $value['product_qyt'];
                          $i= $key +1;

                            echo"
                            <form action='insertcart.php' method = 'POST'>

                            <tr class = 'text-center'>
                               <td style='height: 50px;'>$i</td>
                               <td>  <input type = 'hidden' name = 'pname' value = '$value[productname]'>   $value[productname]</td>
                               <td>  <input type = 'hidden' name = 'pprice' value = '$value[product_price]'>  $value[product_price]</td>
                               <td> <input class = 'input-qty' type = 'text' name = 'pqty' value = '$value[product_qyt]'> </td>
                               <td>$total</td>
                               <td><button class = 'btn-u' name= 'update'>Update</button></td>
                               <td><button class = 'btn-r' name= 'remove'>Delete</button></td>
                               <td><input type='hidden' name = 'item' value = '$value[productname]'></td>   
                               
                               </tr>

 
                            ";
                           }
                         
                         }
                        ?>
                        </form>
                      </tbody>
</table>

</div>

<div class="last-part-cart">
  <a href = "index.php" class = "btn-last">CONTINUE SHOPPING</a>
  <!-- <button class = "btn-last">CHECKOUT</button> -->
</div>
</div>

  </div>
  
</body>
</html>