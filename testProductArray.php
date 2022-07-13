<?php
include('./includes/cart_handler.php');
//session_start();
$total= count($_SESSION['product_id_array']);
$total_number=count($_SESSION['product_number_respective_array']);
echo "Total number of items:".$total;
echo "<br>";
echo "Total number of id:".$total_number;
echo "<br>";
echo "<pre>";
print_r($_SESSION['product_id_array']);
echo "</pre>";


echo "<pre>";
print_r($_SESSION['product_number_respective_array']);
echo "</pre>";






 
?>