<?php

$uid = $_GET['ID'];
include 'config.php';
mysqli_query($con , "DELETE FROM `userlogin` WHERE id=$uid");
header("location:mystore.php");

?>