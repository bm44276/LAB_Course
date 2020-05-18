<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YourFitnessGuide</title>
    <link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
    <div class="topNav">
        <header>
             <img src="Capture.PNG" alt="YourFitnesGuide" class="image">
             <h1>YourFitnessGuide</h1>
        </header>
        <nav>
            <form action="LogIn.php" method="POST">
                 <input type="text" name="login-username" id="login-username" required placeholder="Username">
                     <input type="password" name="login-password" id="login-password"  required placeholder="Password">
                         <input type="submit" name="logInSub" id="logInSub" value="Log In">
            </form>
        </nav>

    </div>
        <hr>
        <div id="quote"><h1>Be the best version of yourself</h1></div>
        <div id="quote-line"><img src="Path 2.png" alt=""></div>
        <div id="background">
            <div id="signup">
                <h1>
                    Sign UP
                </h1>
               <form action="SignUp.php" method="POST">
                   <section class="firstName">

                           <input type="text" name="first-name" id="first-name" required placeholder="First Name">

                            <input type="text" name="last-name" id="last-name" required placeholder="Last Name">
                   </section>

                <section class="Sign-email">
                    <input type="date" id="date" name="date">
                 <input type="email" name="email" id="user-email" required placeholder="Email" >
                </section>

               <section class="Sign-username">

                        <input type="text" name="user-name" id="user-name" required placeholder="Username">

                        <input type="password" name="password" id="user-password" required min="6" max = "10" placeholder="Password">
                </section>



                <section class="submit-button">
                     <input type="submit" name="submit" id="submit" value="Sign Up">
                </section>


               </form>
               <?php 
                    $fullURL = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                    if(strpos($fullURL, "signup=usernameIsTaken") == true){
                        ?>
                            <script>
                                var username = document.getElementById("user-name");
                                username.placeholder = "Username Is Taken";
                                username.style = "border: 2px solid red;";
                            </script>
                        <?php
                    }
                    if(strpos($fullURL, "signup=passwordIsNotLongEnough") == true){
                        ?>
                            <script>
                                var username = document.getElementById("user-password");
                                username.placeholder = "Not long enough (min 6 Characters)";
                                username.style = "border: 2px solid red;";
                            </script>
                        <?php
                    }


               ?>
            </div>
        </div>
        <div id="info">
            <div id="info1">
                <h3>Why exercise</h3>
                <p>Exercising is more than just keeping your body in shape and looking good.<br> Excercising reduces your risk of heart disease, high blood pressure, osteoporosis, diabetes, and obesity.</p>
            </div>
            <div id="info2">
                <h3>Why use us</h3>
                <p>As a new begginer anyone needs help, with our website we will show you different<br>types of exercises shall they be homeworkout or gym ones</p>
            </div>
            <div id="info3">
                <h3>Nutrition Information</h3>
                <p>In our page you will also find information about foods that help you in a healthier diet and to build muscle</p>
            </div>
        </div>
        <footer>
            <p> &copy; YourFitnessGuide </p>
        </footer>
</body>
</html>
