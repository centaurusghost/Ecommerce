<?php
include('../includes/connect.php');
session_start();
?>
<?php
              if(isset($_POST['logout_botton'])){
                session_destroy();
                session_start();
                $_SESSION['user_logged_in_status'] = false;
                $_SESSION['username']="Guest";
                $_SESSION['user_id']=0;
                header("Location: ../index.php");
              }
              ?>