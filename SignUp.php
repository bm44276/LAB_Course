<?php
include_once "connectDB.php";

session_start();
header('location:index.html');

$FirstName = $_POST["first-name"];
$LastName = $_POST["last-name"];
$Age = $_POST["date"];
$Email = $_POST["email"];
$Username = $_POST["user-name"];
$Password = $_POST["password"];
$Age = str_replace("-","/",$Age); 

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
