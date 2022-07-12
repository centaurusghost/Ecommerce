<?php
include('./includes/connect.php');
?>


<form name="form" action="" method="POST">
    <label for="membership" class="category">Choose a category:</label>
    <select name="membership" id="membership">



    <?php
$category_array;

$get_category_list_query = "select * from `category`";
$get_sub_category_list_query = "select * from subcategory";

$result = mysqli_query($con, $get_category_list_query);
$insert_category = "insert into category(category_name), values()";
// if($result){
// echo  $result;
// }
while ($row = mysqli_fetch_assoc($result)) {
    $category_name=$row['category_name'];
   echo "<option value=''>$category_name</option>";
}
?>
    
        <!-- <option value="bronze">Bronze</option>
        <option value="silver" selected>Silver</option>
        <option value="Gold">Gold</option> -->
    </select>
</form>
<div>

    <form action="" method="POST">
        <input type="submit" name="botton_pressed" value="Submit" />
    </form>

    <?php
    if (isset($_POST['botton_pressed'])) {
        header('Location:index.php');
        // if (isset($_POST['email_id'])) {
        //     $email = $_POST['email_id'];
        //     $insert_query = "insert into `email` (email_name) values('$email')";
        //     $result = mysqli_query($con, $insegit rt_query);
        //     if ($result) {
        //         echo "<script>alert('Email added sucessfully')</script>";
        //     } else {
        //         echo "<script>alert('$email')</script>";
        //     }
        //     echo 'The category you entered is ' . $email;
        // }
    }

    ?>
</div>