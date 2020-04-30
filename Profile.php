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
        <a href="HomeYFG.html">Home</a>
        <a href="HomeYFG.html">Food</a>
        <button>Log Out</button>
    </nav>
  </div>

    <div class="main">

        <div class="section1">
          <h1>Edit Account Information</h1>
            <form action="">
            
              <div>
                <input type="text" name="username" id="username" placeholder="Username">
                <button>Submit</button>
              </div>

              <div>
                <input type="password" name="password" id="password" placeholder="Old password">
                <button>Submit</button>
              </div>

              <div>
                <input type="password" name="newPassword" id="newPassword" placeholder="New password">
                <button>Submit</button>
              </div>

            </form>
        </div>
          
        <div class="section2">
          <h1>Your Account Info</h1>
          <div>
            <label for="">Your Firstname:</label>
            <input type="text" name="firstname" id="firstname" placeholder="Firstname">
          </div>
          <div>
            <label for="">Your Lastname:</label>
            <input type="text" name="Lastname" id="lastname" placeholder="Lastname">
          </div>
          <div>
            <label for="">Your Username:</label>
            <input type="text" name="username" id="username" placeholder="Username">
          </div>
          
          <div class="email">
            <label>Your Email:</label>
            <input type="email" name="email" id="email" placeholder="Email">
          </div>

        
        </div>

        

    </div>


  <footer>
    <div class="footer">
        <div class="copy">
          <p>&copy; YourFitnesGuide.com </p>
        </div>
    </div>
  </footer>
  
</body>
</html>