<?php
include('../includes/connect.php');
(int)$product_id=$_GET['product_id'];
?>
<!DOCTYPE html>
<html>
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
    <title>Product Description</title>

<body>
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
              <a class="nav-link" href="../customer_registration/index.php">Register</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="#">Contact</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="#"><i class="fa-solid fa-cart-shopping"></i><sup>1</sup></a>
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
<?php
 $query="select * from temp_product where product_id=$product_id";
 $result=mysqli_query($con,$query);
 while ($row = mysqli_fetch_assoc($result)) {
$product_title=$row['product_title'];
$product_price=$row['product_price'];
$product_image=$row['product_image'];

    echo "<div class='container my-4'>
    <div class='row'>
        <div class='col-8 '>
            <div class='row'>
                <div class='col-sm w-full h-48'>
                    <img class='img-thumbnail' src='../productimages/$product_image' name='product_image' alt='product' />
                </div>
                <div class='col-sm  text-start mx-2'>
                    <!-- product title -->
                    <h2>$product_title</h2>
                    <div>
                        <!-- product_price -->
                        <p class='fw-bold'>Rs.$product_price</p>
                        <div>
                            <span>Quantity</span>
                            <input type='submit' value='+' name='increase_item_number'></input>
                            <span id='quantity' name='qty'>1</span>
                            <input type='submit' value='-' name='decrease_item_number'></input>
                        </div>

                    </div>
                    <br>
                    <div class=''>
                    <span>Remaining Quantity:50</span>
                    </div>
                    <div class='btn-container d-flex my-4'>
                        <div class='buy-now'>
                            <input type='submit' value='Buy Now'></input>
                        </div>
                        <div class='add-to-cart mx-3'>
                        <input type='submit' value='Add To Cart'></input>
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>
        <div class='col-4'>
            <div>
                <p>Delivery</p>
                <div>
                    <span></span>
                    <p>Bagmati,Kathmandu Metro 22 -Newroad</p>
                    <a>Change</a>
                </div>
            </div>
            <div>
                <div>
                    <span></span>
                    <div>
                        <p>Standard Delivery<span>2 days</span></p>
                        <!-- product_price -->
                        <h5>Rs.$product_price</h5>

                    </div>
                </div>
                <div>
                    <span></span>
                    <p>Cash on Delivery Available</p>
                </div>
            </div>
            <hr>
            <div>
            <h5>Supplier Details</h5>
                <div>
                    <span></span>
                    <div>
                        <p>7 Days Returns<br><span>Change of mind is not applicable</span><br><span>Warranty not available</span></p>
                        
                    </div>
                </div>
               
            </div>
        </div>

    </div>
    <div class='w-full'>
    <h3>Description about above product</h3>
    <p>e to having not reached adulthood. Devastated by the news of Dam-ryeong's marriage, she decides to leave him forever. Nevertheless, Dam-ryeong's love for Se-hwa forces him to leave his wife on their wedding night and jump into the ocean to look for her. A distraught Se-hwa rescues him from drowning and promptly erases his memories of her and their love so that he may not look for her again.

    After years of separation, their paths cross again when they are adults as Se-hwa is found by town folks trapped in a cave after a storm, and brought before Dam-ryeong, now a widowed town official. While Dam-ryeong does not remember Se-hwa, he takes pity on her and sets her free. This angers the town inn head, nobleman Yang Seung-gil, who had plans of exploiting Se-hwa for his monetary desires. Yang plots to overthrow Dam-ryeong, with the help of his materialistic concubine, Hong Nan, as he murders those in his way and spreads a rumour that Dam-ryeong is unfit to rule as he is bewitched by a wicked mermaid, allowing him to capture Se-hwa as the village falls into panic. Dam-ryeong rescues Se-hwa, tortured by Yang and his concubine to extract her tears, which turn into rare sea pearls. Yang and his concubine are arrested, while Dam-ryeong returns Se-hwa to the sea so that she can recuperate.
    
    Dam-ryeong, who has been experiencing dreams of himself, Se-hwa, and their foes in the future, fear that the same ill-fate that afflicts himself and Se-hwa will replay itself. To warn his future self, </p></div>

</div>
</form>";
}
      ?>

</body>

</html>