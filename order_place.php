<?php

if(isset($_POST['orderplace'])){


  $customername = $_POST['ocname'];
  $customeraddress = $_POST['ocaddress'];
  $customercity = $_POST['occity'];
  $customerstate = $_POST['ocstate'];
  $customerzip = $_POST['oczip'];
  $customerno = $_POST['ocno'];
  $payment_choose = $_POST['ocpay'];
  $productname = $_POST['papu'];
  $productp = $_POST['papu1'];

    // echo $productname;  
    // echo $productp;  
  // echo $customername . '<br>';
  // echo $customeraddress . '<br>';
  // echo $customercity . '<br>';
  // echo $customerstate . '<br>';
  // echo $customerzip . '<br>';
  // echo $customerno . '<br>';
  // echo $payment_choose ;


  include 'config.php';
  mysqli_query($con , " INSERT INTO `order_data`(`product_name`, `product_price`, `customer_name`, `address`, `city`, `state`, `postcode`, `number`, `payment_method`) VALUES (' $productname',' $productp','$customername','  $customeraddress','  $customercity',' $customerstate','  $customerzip',' $customerno','  $payment_choose')");

 

    echo"
        <script>
        alert('Order Place successfully !');
        alert('THANKS SHOPPING WITH US !');
        window.location.href = 'index.php';
        </script>
        ";


}



?>