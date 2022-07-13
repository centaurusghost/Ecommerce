<?php
include('./includes/cart_handler.php');
//session_start();
echo "<pre>";
print_r($_SESSION['product_id_array']);
echo "</pre>";
$total= count($_SESSION['product_id_array']);
echo "<br>";
echo $total;
echo "<br>";
echo "<br>";
echo "<br>";

for($count=0; $count<$total; $count++){
    echo $_SESSION['product_id_array'][$count];
    echo "<br>";
  }
  echo "function call ";
  checkAndManageCartItems();

?>