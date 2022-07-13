<?php
session_start();
$_SESSION['user_logged_in_status'] = false;
$_SESSION['username'] = "Guest";
$_SESSION['user_id'] = 0;
$_SESSION['items_in_cart'] = 0;
$_SESSION['product_id'] = 0;
$_SESSION['session_id'] = "**";
echo session_id();
?>