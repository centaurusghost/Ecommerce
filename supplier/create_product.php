<?php
include('../includes/connect.php');
?>
<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <title> User Registration </title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <!-- font awesome learn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<!-- css files -->
<link rel="stylesheet" href="create_product.css">

<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <div class="container vw-50 ">
        <h2 class="text-center">Add your product to shop</h2>
        <div class=" container row justify-content-md-center mb-4">

            <form action="" class="mb-5" method="POST" enctype="multipart/form-data">
                <div class="d-flex justify-content-center items-center mt-4 w-full h-50  rounded border border-gray border-2">
                    <img id="img-preview" class="img-fluid rounded shadow-sm w-full h-full">
                </div>

                <div class="input-box mt-2 ">

                    <input type="file" id="imgFile" name="product_image" accept="image/*" onchange="showPreview(event)" required style="opacity:1;">

                </div>

                <div class="form-outline mt-4">
                    <input type="text" id="form5Example1" name="product_title" class="form-control" placeholder="Product Name" maxlength="50" required/>
                </div>
                <div class="form-group mt-4">
                    <textarea rows="5" class="form-control" name="description" placeholder="Describe about product" maxlength="300"></textarea>
                </div>
                <div class="form-outline mt-4">
                    <input type="number" id="" class="form-control" name="product_price" placeholder="Product Price" pattern="\d*" maxlength="7" required />
                </div>
                <div class="form-outline mt-4">
                    <input type="text" id="" class="form-control" placeholder="Product Category" />
                </div>
                <div class="button mt-4 mb-5">
                    <button class="btn px-2 py-1 bg-success " name="insert_botton" >Insert Product</button>
                </div>
            </form>
        </div>
    </div>
    <!-- for image preview -->
    <script>
        function showPreview(event) {
            const preViewImage = document.getElementById("img-preview");
            preViewImage.src = URL.createObjectURL(event.target.files[0]);
            preViewImage.onload = function() {
                URL.revokeObjectURL(preViewImage.src)
            }
        }
    </script>
<div>
<?php
///put the values of the products into the database
if(isset($_POST['insert_botton'])){
  
    $product_title=$_POST['product_title'];
    $product_price=(int)$_POST['product_price'];

    // to acess product_images and urls or what we are learning
    $product_image=$_FILES['product_image']['name'];

    $product_temp_image=$_FILES['product_image']['tmp_name'];
    $insert_product_query="insert into temp_product(product_title, product_price, product_image) values('$product_title','$product_price','$product_image')";
    $remove_product_query="delete from temp_product where product_image='$product_image'";
    $result=mysqli_query($con,$insert_product_query);
    if(!$result){
        echo "<script>alert('Task Failed sucessfully')</script>";
       // mysqli_query($con,$remove_product_query); 
    }
    else{
        move_uploaded_file($product_temp_image,"../productimages/$product_image");
    }

// acessing image tep names
}

?>
    </div>


</body>

</html>