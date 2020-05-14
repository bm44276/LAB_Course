<?php
include_once "connectDB.php";


    if(isset($_POST['submit'])){

$FirstName = mysqli_real_escape_string($DB,$_POST["first-name"]);
$LastName = mysqli_real_escape_string($DB,$_POST["last-name"]);
$Age = mysqli_real_escape_string($DB,$_POST["date"]);
$Age = str_replace("-","/",$Age); 
$Email = mysqli_real_escape_string($DB,$_POST["email"]);
$Username = mysqli_real_escape_string($DB,$_POST["user-name"]);
$Password = mysqli_real_escape_string($DB,$_POST["password"]);

        if(empty($FirstName) || empty($FirstName) || empty($LastName) || empty($Age) || empty($Email) || empty($Username) || empty($Password)){
            header("Location: index.php?signup=empty");
        }else{
            
$usernametaken = "SELECT * FROM accounts WHERE Username = '$Username'";
$result = $DB->query($usernametaken);
$num = mysqli_num_rows($result);
if($num == 1){
    header("Location: index.php?signup=usernameIsTaken");
}else{

    if(strlen("$Password") < 6){
        header("Location: index.php?signup=passwordIsNotLongEnough");
    }else{
    $myquery = "INSERT INTO accounts (Name,Surname,Age,Email,Username,Password) VALUES ('$FirstName','$LastName','$Age','$Email','$Username','$Password');";
    $DB->query($myquery);
    header("Location:thankYouPage.html");
}
}
  }
    }else{
        header("Location: index.php?signup=error");
    }
?>
