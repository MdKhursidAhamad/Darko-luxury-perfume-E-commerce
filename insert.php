

<?php

if(isset($_POST['upload'])){
    include 'config.php';
    $product_name = $_POST['pname'];
    $product_mrp = $_POST['pmrp'];
    $product_price = $_POST['pprice'];
    $product_image = $_FILES['pimg'];
    $image_loc =  $_FILES['pimg']['tmp_name'] ;
    $image_name =  $_FILES['pimg']['name'] ;
    $img_des = "upload-img/".$image_name;
    move_uploaded_file($image_loc, "upload-img/".$image_name);
    $product_categori = $_POST['pcategories'];
    $product_sdes = $_POST['psdes'];
    $product_des = $_POST['pdes'];

    // insert product

    mysqli_query($con, "INSERT INTO `product data`( `PNAME`, `PIMAGE`, `PMRP`, `PPRICE`, `PCATEGORY`, `PSDES`, `P DES`) VALUES (' $product_name ',' $img_des ','$product_mrp ','$product_price ','$product_categori','$product_sdes',' $product_des')");

      header("location:index.php");

}


?>









