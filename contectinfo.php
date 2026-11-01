<?php

include 'config.php';

if(isset($_POST['c-btn'])){
  $customer_name = $_POST['cname'];
  $customer_email = $_POST['cemail'];
  $customer_no = $_POST['cno'];
  // $customer_company = $_POST['ccompany'];
  $customer_msg = $_POST['cmsg'];

  mysqli_query($con ,"INSERT INTO `customer_msg`( `cname`, `cemail`, `cno`, `cmsg`) VALUES ('$customer_name','$customer_email','$customer_no','$customer_msg ')");


  echo"
        <script>
        alert('Message send successfully !');
        window.location.href = 'index.php';
        </script>
        ";


}



?>