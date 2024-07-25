<?php

$DATABASE_HOST='localhost';
$DATABASE_USER='root';
$DATABASE_PASS='';
$DATABASE_NAME='project';

$conn=mysqli_connect($DATABASE_HOST,$DATABASE_USER,$DATABASE_PASS,$DATABASE_NAME);

if (!$conn) {
    die('Could not connect to the database.');
}    


//echo"connected successfuly";   
if((isset($_POST['full_name'])&&isset($_POST['user_name']) && isset($_POST['birthdate']) &&
isset($_POST['phone']) && isset($_POST['email']) &&
isset($_POST['address']) && isset($_POST['password'])&&isset($_POST['confirm_password']))) {

    $imgName=$_FILES['user_image']['name'];
    $imgTmp=$_FILES['user_image']['tmp_name']; // Added to get temporary file path
   
    $target = 'C:\Users\ahmed\OneDrive\Desktop\form\form\images';
    $full_name = $_POST['full_name'];
    $user_name = $_POST['user_name'];
    $birthdate = $_POST['birthdate'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    $email = $_POST['email'];

    $query = mysqli_query($conn,"SELECT * FROM `users` WHERE user_name='$user_name'");

    if(mysqli_num_rows($query) > 0 ) { //check if there is already an entry for that username
        echo "Username already exists!";
    }else{
        mysqli_query($conn,"INSERT INTO `users` (full_name, user_name, birthdate, phone, address, password, email, image) VALUES ('$full_name', '$user_name', '$birthdate', '$phone', '$address', '$password', '$email', '$imgName')");
        move_uploaded_file($imgTmp, $target . '/' . $imgName);
        header("location:index.php");
    }

}
mysqli_close($conn) ; 

?>
