<?php
    session_start();
    include_once "connectDB.php";
     

    if(isset($_POST['submit-button'])){
    header('Location: Profile.php');
    $currentPassword = $_POST['password'];
    $newPassword = $_POST['newPassword'];
    
    if(empty($currentPassword) ){
        header('Location: Profile.php?password=oldfieldempty');
    }else{
        if(empty($newPassword)){
            header('Location: Profile.php?password=newfieldempty');
        }else{
            $usernametaken = "SELECT * FROM accounts WHERE Username = '$_SESSION[username]' AND Password = '$currentPassword'";
            $result = $DB->query($usernametaken);
            $num = mysqli_num_rows($result);
            if($num == 1){
                if(strlen("$newPassword") < 6){
                    header("Location: Profile.php?newpass=passwordIsNotLongEnough");
                }else{
                $changePasswordQuery = "UPDATE accounts SET Password = '$newPassword' where Username = '$_SESSION[username]'";
                $DB->query($changePasswordQuery);
            }
    }
}
    }
}