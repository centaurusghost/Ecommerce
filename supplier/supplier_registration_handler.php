<?php
session_start();
include('../includes/connect.php');
$user_temp_id=$_SESSION['user_id'];
$supplier_name=$_POST['supplier_name'];
$supplier_address=$_POST['supplier_address'];
if(isset($_POST['supplier_register_button_pressed'])){
$insert_query_supplier="insert into supplier(user_id,supplier_name, supplier_address) values($user_temp_id,'$supplier_name','$supplier_address')";    
$result=mysqli_query($con,$insert_query_supplier) ;
if($result){
    
    echo "<script>alert('We Received Your Request')</script>";
    header("Location: ../index.php");
   // header("Location: ../index.php");
    //flush();
    //echo '<script>alert("'.mysqli_error($con).'.");</script>';
    
}
else{
  //echo "<script>alert('Task Inserted Data')</script>";
  echo '<script>alert("'.mysqli_error($con).'.");</script>';
  header("Location: ./supplier_registration_page.php");
 // echo "<script>alert('mysqli_error($con);')</script>";
 //  echo mysqli_error($con);
    
}

}

?>