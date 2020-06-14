<?php
    session_start();
    include_once "connectDB.php";

    $height = $_POST['height'];
    $weight = $_POST['weight'];
    $gender = $_POST['gender'];

    $execute = "INSERT INTO custom (Height,Weight,Gender) VALUES ('$height','$weight','$gender');";
    $DB->query($execute);

    $execute2 = "SELECT MAX(Custom_ID) FROM Custom";
    $result = $DB->query($execute2);
    $num = mysqli_fetch_row($result);

    $execute3 = "UPDATE accounts SET Custom = '$num[0]' WHERE Username = '$_SESSION[username]'";
    $result = $DB->query($execute3);
    $_SESSION['Custom'] = $num[0];
    header("location:displayCustom.php");