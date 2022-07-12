<?php
include('./includes/connect.php');
//session_start();
$_SESSION['user_logged_in_status']=false;
$_SESSION['username']="Guest";
$_SESSION['user_id']=0;
$_SESSION['items_in_cart']=0;

?>
<!DOCTYPE html>
<html lang="en">
<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

<!-- font awesome learn -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<!-- css files -->
<link rel="stylesheet" href="style.css">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ecommerce Website learning from a video</title>

<body>
  <?php
//echo $_SESSION['user_id'];
  ?>
  <!-- navigation bar -->
  <div class="container-fluid p-0">
    <!-- first child -->
    <nav class="navbar navbar-expand-lg bg-warning">
      <div class="container-fluid">
        <img src="./images/mainlogo.png" alt="" class="MainLogo">
        <a class="navbar-brand" href="#">Logo</a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" id="home_button" aria-current="page" href="./index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Products</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="./customer_registration/index.php">Register</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="#">Contact</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="#"><i class="fa-solid fa-cart-shopping"></i><sup>
              <?php 
              $tempvar=$_SESSION['user_id'];
              echo "<script>
               if($tempvar==0){document.write(0);}
               else{
                document.write(12);
               // document.write();
               }
              </script>";
               ?>
                
            
            </sup></a>
            </li>

            <li class="nav-item">
              <!-- <a class="nav-link" href="#">Total Price:100</a> -->
            </li>

          </ul>
          <form class="d-flex" role="search" method="POST">
            <input class="form-control me-2" type="search" name="search_text" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" name="search_botton" type="submit">Search</button>
          </form>
        </div>
      </div>
    </nav>

    <!-- second child -->
    <nav class="navbar navbar-expand-lg  navbar-dark bg-dark">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link" href="#">
            <?php
            session_start();
            echo "Welcome ". $_SESSION['username'];
            
            ?>
          </a>
        </li>

        <li class="nav-item">
         
          <div class="modal-footer d-flex">
            <button class="btn btn-success" type="button" data-bs-toggle="modal" data-bs-target="#myModal">Login</button>
             <form method="POST" action="loginhandler/logout.php">
              <?php
              if ($_SESSION['user_logged_in_status'] == true) {
                echo "<input class='btn btn-danger mx-4' name='logout_botton' type='submit' name='logout_botton' value='Logout'></input>";
               // header("Refresh:0");
              }
              // if(isset($_POST['logout_botton'])){
              //   session_destroy();
              //   echo "<script>
              //   window.open('http://localhost/Ecommerce%20Website/index.php,'_self');
              // </script>";
              //   session_start();
              //   $_SESSION['user_logged_in_status'] = false;
              //   $_SESSION['username']="Guest";
              // }
              ?>
             
          </form>

          </div>



          <div class="modal" id="myModal">
            <div class="modal-dialog">
              <div class="modal-content">

                <div class="modal-header text-center">
                  <h4 class="modal-title w-100 font-weight-bold">Login </h4>
                  <button type="button" class="btn btn-danger" data-bs-dismiss="modal">
                    <span class="fs-5 fw-bold text-center" aria-hidden="true">&times;</span>
                  </button>


                </div>
                <form method="POST" action="loginhandler/login.php">
                  <div class="modal-body mx-3">
                    <div class="md-form mb-5 d-flex">
                      <input type="email" maxlength="35" id="defaultForm-email" name="user_email" class="form-control validate" placeholder="Email" required>
                    </div>

                    <div class="md-form mb-4 d-flex align-items-center justify-content-center">

                      <input type="password" id="defaultForm-pass" maxlength="25" name="user_password" class="form-control validate" placeholder="Password" required>
                    </div>

                  </div>
                  <div class="modal-footer d-flex justify-content-center">
                    <input class="btn btn-success fs-5 fw-bold" name="user_login_submit_button" type="submit" value="Login" />
                  </div>
              </div>
              </form>
            </div>

          </div>
        </li>
        <!-- check user registration status -->
       <?php
//  <!-- use this later on very imp -->
if($_SESSION['user_logged_in_status'] == true){
  $user_temp_id=$_SESSION['user_id'];
  echo " <li class='nav-item'>
  <a href='./supplier/supplier_registration_page.php?user_temp_id=$user_temp_id' class='btn nav-link'>Become A Supplier?</a>
</li>";

// echo "<div class='col-md-4 mb-2'>
// <div class='card'>
//   <img class='card-img-top w-full h-25' src='./productimages/$product_image' alt='Card image cap'>
//   <div class='card-body'>
//     <h5 class='card-title'>$product_title</h5>
//     <p class='card-text'>Rs.$product_price</p>
//     <a href='#' class='btn btn-primary'>Add To Cart</a>
//     <a href='./pages/detail_page.php?product_id=$product_id' class='btn btn-warning paddingbetweenbotons' >View More</a>
//   </div>
// </div>

// </div>";
}
       ?>
        

      </ul>
    </nav>

    <!-- third child -->
    <div class="bg-light">
      <h3 class="text-center">Ozone & Tilak</h3>
      <p class="text-center">
        They shall do it alone. We shall do it together.
      </p>
    </div>

    <!-- fourth child -->
    <div class="row">
      <div class="col-md-10">
        <!-- display products here -->
        <div class="row">
          <!-- to display 3 carts we are using 3 divisions -->

          <!-- lets apply while loop to display the items -->
          <!-- <div class="col-md-4 mb-2"-->

          <?php
          $display_product_query = "select * from temp_product";
          $searched_text = "";
          $display_searched_items = "select * from temp_product where product_title like '%$searched_text%'";

          $result = mysqli_query($con, $display_searched_items);
          if (isset($_POST['search_botton'])) {
            $searched_text = $_POST['search_text'];
            $display_searched_items = "select * from temp_product where product_title like '%$searched_text%'";
            $result = mysqli_query($con, $display_searched_items);
          }


          if ($result) {
            while ($row = mysqli_fetch_assoc($result)) {
              $product_id = $row['product_id'];
              $product_title = $row['product_title'];
              $product_price = $row['product_price'];
              $product_image = $row['product_image'];
              echo "<div class='col-md-4 mb-2'>
              <form method='POST' action=''>
      <div class='card'>
        <img class='card-img-top w-full h-25' src='./productimages/$product_image' alt='Card image cap'>
        <div class='card-body'>
          <h5 class='card-title'>$product_title</h5>
          <p class='card-text'>Rs.$product_price</p>
          <a href='#' class='btn btn-primary' onclick=''>Add To Cart</a>
          <a href='./pages/detail_page.php?product_id=$product_id' class='btn btn-warning paddingbetweenbotons' >View More</a>
        </div>
      </div>
</form>
    </div>";
            }
          }
         
          ?>
        </div>
        

      </div>


    </div>





    <!-- last child -->
    <div class="bg-warning p-3 text-center text-light">
      <p>Ozone & Tilak. Feel Free To Contact Us</p>
    </div>
  </div>
  <?php

  ?>
  <!-- bootstrap js link -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

</body>

</html>