<?php 
$con=mysqli_connect('localhost','root','Saymon6993!',"ecommerce");
if($con){
   // echo "connection sucessful";
}
else{
    die(mysqli_error($con));
}

?>