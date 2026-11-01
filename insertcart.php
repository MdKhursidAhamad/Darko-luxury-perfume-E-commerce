<?php

session_start();
//  session_destroy();  

if(isset($_SESSION['user'])){


 if(isset($_POST['addcart'])){

  $product_name = $_POST['pname'];
  $product_price = $_POST['pprice'];
  $product_qyt = $_POST['pqty'];

    
   $check_p = array($_SESSION['cart'],'productname');
//    $check_p = array_column($_SESSION['cart'],'productname');

     if(in_array($product_name,$check_p)){
            echo "
            <script>
            alert('product already added');
            window.location.href = 'index.php';
            </script>
            ";
        }
        else{


               $_SESSION['cart'][]= array('productname' =>  $product_name, 
                              'product_price' => $product_price , 
                              'product_qyt' => $product_qyt);
                               header("location:veiwcart.php");
        }

    
 }



 // / remove product

 if(isset($_POST['remove'])){
    
    foreach($_SESSION['cart']as $key => $value){
        if($value['productname'] === $_POST['item']){
            unset($_SESSION['cart'][$key]);
             $_SESSION['cart'] = array_values($_SESSION['cart']);
                  header("location:veiwcart.php");
            
        }
    }
  }


 /// update product
 $product_name = $_POST['pname'];
  $product_price = $_POST['pprice'];
  $product_qyt = $_POST['pqty'];

 if(isset($_POST['update'])){
    foreach($_SESSION['cart']as $key=>$value){
        if($value['productname'] === $_POST['item']){
            $_SESSION['cart'][ $key] =array(
                                            'productname' =>  $product_name, 
                                            'product_price' => $product_price ,
                                            'product_qyt' => $product_qyt);
                                             header("location:veiwcart.php");
          
            
        }
    }
  }


}else{
    header("location:login.php");
}






?>
