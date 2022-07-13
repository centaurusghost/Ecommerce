<?php
session_start();
$total=count($_SESSION['product_id_array']);
function checkAndManageCartItems(){
  global $total;
  echo $total;
}

// if($total!=0){
//   for($count=1; $count<=$total; $count++){
//     if($product_add_to_cart_id==$_SESSION['product_id_array'][$count-1]){
//       echo "<script>alert('Item Is Already Present In The Cart')</script>";
//     }
//     else{
//       array_push($_SESSION['product_id_array'],$product_add_to_cart_id);
//       ++$_SESSION['items_in_cart'];
//       echo "<script>alert('Item Added To Your Cart')</script>";
//       echo "<script>window.open('./index.php','_self')</script>";
//       break;
//     }
//     }
// }
?>