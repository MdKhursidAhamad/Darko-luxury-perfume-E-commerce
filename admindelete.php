<?php

$did = $_GET['ID'];
include 'config.php';

mysqli_query($con, "DELETE FROM `product data` WHERE ID = '$did' ");

header("location:index.php");
?>
