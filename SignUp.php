<?php
include_once "connectDB.php";

session_start();
header('location:index.html');

$FirstName = $_POST["first-name"];
$LastName = $_POST["last-name"];
$Age = $_POST["mosha"];
$Email = $_POST["email"];
$Username = $_POST["user-name"];
$Ppassword = $_POST["password"];



$usernametaken = "SELECT * FROM acc WHERE Username = '$Username'";
$result = $DB->query($usernametaken);
$num = mysqli_num_rows($result);
if($num == 1){
    //username taken
}else{
    $myquery = "INSERT INTO accounts VALUES ('$FirstName','$LastName',$Age,'$Email','$Username','$Ppassword');";
    $DB->query($myquery);

}
?>
