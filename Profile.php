<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Fitness Guide | Profile</title>
    <link rel="stylesheet" href="profile-style.css" type="text/css">
    <link rel="icon" type="image/ico" href="photos/Capture.PNG" >
</head>
<body>
       
  <div class="TopNav"> 
    <header>
        <div class="title">
            <img src="photos/Capture.PNG" alt="YourFitnesGuide" class="image">
              <h1> Your Fitness Guide | Profile</h1>
        </div>
    </header>
    <nav>
        <a href="HomeYFG.php">Home</a>
        <a href="FoodYFG.html">Food</a>
        <a href="LogOut.php">Logout</a>
        
    </nav>
  </div>

    <div class="main">

        <div class="section1">
          <h1>Edit Account Information</h1>
            <form action="changePassword.php" method="POST">
            
              <div>
                <input type="password" name="password" id="password" required placeholder="Old password">
              
              </div>

              <div>
                <input type="password" name="newPassword" id="newPassword" required placeholder="New password">
                
              </div>
              <button type="submit" name="submit-button">Submit</button>
            </form>
        </div>
          
        <div class="section2">
          <h1>Account Info</h1>
          <div>
            <label for="">Firstname: </label>
            <Label><?php echo $_SESSION['name'];?></Label>
          </div>
          <div>
            <label for="">Lastname: </label>
            <Label><?php echo $_SESSION['surname'];?></Label>
          </div>
          <div>
            <label for="">Username: </label>
            <Label><?php echo $_SESSION['username'];?></Label>
          </div>
          
          <div class="age">
            <label>Birthday: </label>
            <Label><?php echo $_SESSION['age'];?></Label>
          </div> 

          <div class="email">
            <label>Your Email: </label>
            <Label><?php echo $_SESSION['email'];?></Label>
          </div>

        
        </div>

        

    </div>
           <?php
           $fullURL = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                   if(strpos($fullURL, "newpass=passwordIsNotLongEnough") == true){
                        ?>
                            <script>
                                var username = document.getElementById("newPassword");
                                username.placeholder = "Not long enough (min 6 Characters)";
                                username.style = "border: 2px solid red;";
                            </script> 
                        <?php
                    }

               ?>

  <footer>  
    <div class="footer">
        <div class="copy">
          <p>&copy; YourFitnessGuide.com </p>
        </div>
    </div>
  </footer>
</body>
</html>
