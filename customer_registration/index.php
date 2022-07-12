<?php
include('../includes/connect.php');
?>
<!DOCTYPE html>
<!-- Designined by CodingLab - youtube.com/codinglabyt -->


<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8">
  <title> User Registration </title>
  <link rel="stylesheet" href="style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
  <div class="container">
    <div class="title">Registration</div>
    <div class="content">
      <form action="#" method="POST">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Full Name</span>
            <input type="text" placeholder="Enter your name" name=user_fullname maxlength="49" required>
          </div>
          <div class="input-box">
            <span class="details">Username</span>
            <input type="text" placeholder="Enter your username" name="user_username" maxlength="25" required>
          </div>
          <div class="input-box">
            <span class="details">Email</span>
            <input type="email" placeholder="Enter your email" name="user_email" maxlength="25" required>
          </div>
          <div class="input-box">
            <span class="details">Phone Number</span>
            <input placeholder="Enter your number" name="user_phone_number" maxlength="10" type="text" pattern="\d*" required>
          </div>
          <div class="input-box">
            <span class="details">Password</span>
            <input type="text" placeholder="Enter your password" name="user_password" maxlength="25" required>
          </div>

          <div class="input-box">
            <span class="details">Confirm Password</span>
            <input type="text" placeholder="Confirm your password" name="user_confirm_password" maxlength="25" required>
          </div>
          <div class="input-box">
            <span class="details">Bank Name</span>
            <input type="text" placeholder="Enter Bank name" name="user_bank_name" maxlength="49" required>
          </div>
          <div class="input-box">
            <span class="details">Branch Name</span>
            <input type="text" placeholder="Enter Branch name" name="user_bank_branch_name" maxlength="49" required>
          </div>
          <div class="input-box">
            <span class="details">Account Number</span>
            <input placeholder="Enter bank account" name="user_bank_account_number" type="text" pattern="\d*" minlength="16" maxlength="16" required>
          </div>
        </div>
        <div class="gender-details">
          <input type="radio" name="gender" id="dot-1" checked value="male">
          <input type="radio" name="gender" id="dot-2" value="female">
          <input type="radio" name="gender" id="dot-3" value="others">
          <span class="gender-title">Gender</span>
          <div class="category">
            <label for="dot-1">
              <span class="dot one"></span>
              <span class="gender">Male</span>
            </label>
            <label for="dot-2">
              <span class="dot two"></span>
              <span class="gender">Female</span>
            </label>
            <label for="dot-3">
              <span class="dot three"></span>
              <span class="gender">Others</span>
            </label>
          </div>
        </div>
        <div class="button">
          <input name="user_registration_botton" method="POST" type="submit" value="Register">
        </div>
      </form>
    </div>
  </div>

  <?php
  // checks if botton is pressed or not
  if (isset($_POST['user_registration_botton'])) {
    $user_fullname = $_POST['user_fullname'];
    $user_username = $_POST['user_username'];
    $user_email = $_POST['user_email'];
    $user_phone_number = (int)$_POST['user_phone_number'];

    $user_password = $_POST['user_password'];
    $user_confirm_password = $_POST['user_confirm_password'];

    $user_bank_name = $_POST['user_bank_name'];
    $user_bank_branch_name = $_POST['user_bank_branch_name'];

    $user_bank_account_number = (int)$_POST['user_bank_account_number'];
    //check which gender is selected
    if (isset($_POST['gender'])) {
      $user_gender = $_POST['gender'];
    }
    $insert_query = "insert into user(user_fullname, user_username, user_email, user_phone_number, user_password, user_bank_name, user_bank_branch_name, user_bank_account_number, user_gender) VALUES('$user_fullname','$user_username', '$user_email','$user_phone_number','$user_password','$user_bank_name','$user_bank_branch_name','$user_bank_account_number','$user_gender');";
    // $user_gender=$_POST['user_gender'];
    //$user_email=$_POST[''];
    //now time to check if password matches or not
    //$insert_query_temp="insert into `email`(email_name) values('$user_email')";
    if (isset($_POST['user_password']) & $user_password == $user_confirm_password) {
      // echo "<script>alert('Passwords Matched')</script>";

      $result = mysqli_query($con, $insert_query);
      if ($result) {
        echo "<script>alert('Data added sucessfully')</script>";
      } else {
        echo "<script>alert(mysqli_error(".'$con'."))</script>";
      }
    } else {
      echo "<script>alert('Passwords Do Not Match')</script>";
    }
  }
  ?>
  <!-- <div>
    <?php
    if (isset($_POST['user_registration_botton'])) {
      // echo "The botton is working";

      if (isset($_POST['gender'])) {
        $user_gender = $_POST['gender'];
        echo "The botton is working";
        //echo $user_gender;
      }
    }
    ?>
  </div> -->

</body>

</html>