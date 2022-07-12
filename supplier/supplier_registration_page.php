<?php
$user_temp_id=$_GET['user_temp_id'];
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
    <div class="container my-4">
        <div class="row">
            <div class="col-md-5 mx-auto p-4">

                <div class="bg-dark rounded">
                    <div class=" mb-3">
                        <div class="col-md-12 text-center">
                            <h1 class="text-light p-2 ">Register Store</h1>
                            <p class="text-light p-2 ">(Our Team Will Contact You Soon)</p>
                        </div>
                    </div>
                    <form action="supplier_registration_handler.php" method="POST">
                    <div class="p-2">
                        <div class="form-group mt-4">
                            <input type="text" name="supplier_name" class="form-control" placeholder="Store Name" required>
                        </div>
                        <div class="form-group mt-4">
                            <input type="text" id="password" name="supplier_address" class="form-control" placeholder="Store Location" required>
                        </div>

                        <div class="col-md-12 text-center mt-4">
                            <input type="submit" name="supplier_register_button_pressed" class=" btn btn-block mybtn btn-primary tx-tfm" value="Register"></input>
                        </div>

                    </div>
</form>
                </div>

            </div>
        </div>
    </div>
</body>


</html>