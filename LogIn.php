<?php 
session_start();
include_once "connectDB.php";


$LogIn_Username = $_POST['login-username'];
$LogIn_Password = $_POST['login-password'];


$usernameExist = "SELECT * FROM accounts WHERE Username = '$LogIn_Username' && Password = '$LogIn_Password'";
$result = $DB->query($usernameExist);
$num = mysqli_num_rows($result);

if($num == 1){
    $row = mysqli_fetch_array($result);
    $_SESSION['username'] = $row['Username'];
    $_SESSION['password'] = $row['Password'];
    $_SESSION['name'] = $row['Name'];
    $_SESSION['surname'] = $row['Surname'];
    $_SESSION['age'] = $row['Age'];
    $_SESSION['email'] = $row['Email'];
    
    
    header("location:HomeYFG.php");
}  
else{
    header("location:index.php");
}
    ?>




