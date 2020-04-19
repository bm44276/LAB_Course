<?php 
include_once "connectDB.php";
session_start();


$LogIn_Username = $_POST['login-username'];
$LogIn_Password = $_POST['login-password'];


$usernameExist = "SELECT * FROM accounts WHERE Username = '$LogIn_Username' && Password = '$LogIn_Password'";
$result = $DB->query($usernameExist);
$num = mysqli_num_rows($result);

if($num == 1){
    header("location:HomeYFG.php");
}else{
    header("location:index.html");
}
    ?>




