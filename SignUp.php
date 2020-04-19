<?php
include_once "connectDB.php";

session_start();
header('location:index.html');

$FirstName = mysqli_real_escape_string($DB,$_POST["first-name"]);
$LastName = mysqli_real_escape_string($DB,$_POST["last-name"]);
$Age = mysqli_real_escape_string($DB,$_POST["date"]);
$Age = str_replace("-","/",$Age); 
//$Age = mysqli_real_escape_string($DB,$AGE);
$Email = mysqli_real_escape_string($DB,$_POST["email"]);
$Username = mysqli_real_escape_string($DB,$_POST["user-name"]);
$Password = mysqli_real_escape_string($DB,$_POST["password"]);


$usernametaken = "SELECT * FROM accounts WHERE Username = '$Username'";
$result = $DB->query($usernametaken);
$num = mysqli_num_rows($result);
if($num == 1){
    //username taken
}else{
    $myquery = "INSERT INTO accounts (Name,Surname,Age,Email,Username,Password) VALUES ('$FirstName','$LastName','$Age','$Email','$Username','$Password');";
    $DB->query($myquery);
    header("location:thankYouPage.html");
}
?>
