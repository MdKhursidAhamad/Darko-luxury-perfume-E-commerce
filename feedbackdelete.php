<?php

$cid = $_GET['ID'];
include 'config.php';
mysqli_query($con , "DELETE FROM `customer_msg` WHERE id=$cid");
header("location:mystore.php");

?>