<?php
session_start();
$_SESSION['user_logged_in_status'] = false;
$_SESSION['username'] = "Guest";
$_SESSION['user_id'] = 0;
$_SESSION['items_in_cart'] = 0;
$_SESSION['product_id'] = 0;
$_SESSION['session_id'] = "**";
echo session_id();

$_SESSION['product_id_array']=[];
$_SESSION['product_number_respective_array']=[];

$_SESSION['product_number_respective_temp']=0;

$_SESSION['product_id_and_total_no_array']=[];

?>