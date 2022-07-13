<?php
(int)$product_id=$_GET['product_id'];
session_start();
echo "Welcome ".$_SESSION['username'];
echo "<br>";

echo "".$_SESSION['user_id'];
echo "You added item no. ".$product_id." in the cart";

?>