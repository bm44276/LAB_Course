<?php
   session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Fitness Guide</title>
    <link rel="stylesheet" href="HomeYFG.css" type="text/css">
    <link rel="icon" type="image/ico" href="photos/Capture.PNG" >
</head>
<body> 

  <div class="topNav">
     <header>
          <div class="title">
              <img src="photos/Capture.PNG" alt="YourFitnesGuide" class="image">
                 <h1>Your Fitness Guide</h1>
         </div>

     </header>
    <nav>
      <div class="navigation" id="mynav">
         <div class="list">
              <a href="#home" class="activ al" >Home</a>
                <div class="subnav" id="subnav" >
                      <a href="#workout" class="btn al" onclick="myfun()">Workout</a>
                         <div class="subnav2" id="subnav2">
                            <a href="#Full-Body" class="sb">Full Body</a>
                            <a href="#Upper-Body" class="sb">Upper Body</a>
                            <a href="#Lower-Body" class="sb">Lower Body</a>
                            <a href="#Cardio" class="sb">Cardio</a>
                         </div>
              </div>
                     <a href="FoodYFG.html" class="btn al" >Food</a>
                      <a href="costum.html" class="al">Costum</a>
          </div>
            <div class="search">
                 <input type="search" name="search" id="search" placeholder="Search...">
               <button>Search</button>
             </div>
                <div class="profile">
                    <a href="#" onclick="myFunction()">
                          <img src="photos//settings1.png" alt="setting" id="settings">
                    </a>

             <ul class="profile-items" id="navi">
                 <li id="exit">
                  <a href="#" onclick="secFunction()"><img src="photos/x-button.png" alt="exit" class="exit"></a>
                  </li>
                     <li>
                     <a href="Profile.php" class="styler">Profile</a>
                     </li>
                          <li>
                          <a href="#AddWorkOut"  class="styler">AddWorkOut</a>
                         </li>
                             <li>
                             <a href="LogOut.php">Logout</a>
                            </li>
             </ul>



                 </div>
         </div>

     </nav>
  </div>

  <div class="Home">
     <div class="Titul">

     <img src="photos/Capture.PNG" alt="YourFitnesGuide">
        <h1>
        Your Fitness Guide
      </h1>

     </div>

      <p>
        Walking, lifting weights, doing chores – it’s all good. Regardless of what you do, regular exercise and physical activity is the path to health and well-being.
         Exercise burns fat, builds muscle, lowers cholesterol, eases stress and anxiety, lets us sleep restfully.
         In this guide, we match resources to your exercise needs at every fitness level.
      </p>
  </div>




  <!--Javcript code to create the buttons and add images and video links when you click them-->
  <script>
              function SetVideos(section,PhotoPath,VideoPath){

                let a = document.getElementById(section);
                let diving = document.createElement("div");
                diving.className = "Item";

                let b = document.createElement("button");
                b.style.height = "300px";
                b.style.width = "400px";
                b.style.margin = "10px";

                b.style.backgroundImage = "url('videos/"+PhotoPath+"')";
                b.onclick = function(){
                localStorage.setItem("storageName",VideoPath);
                location.href = "displayvideo.php";
                }
                diving.appendChild(b);
                a.appendChild(diving);

              }

            </script>
            <!--The end of this part-->
              <!--The php function gets the path of videos and phots from  database and calls the javascript function to create the buttons ans set them up-->
              <?php
                function getPaths($sectionName,$type){

              $DB = new mysqli('localhost',"root","","test") or die;
             $execute = "SELECT * FROM workouts WHERE FolderName = '$type';";
             $result = $DB->query($execute);
            $sectionName = "\"".$sectionName."\"";

            while($row = mysqli_fetch_assoc($result)){

               $path = "'".$row['FolderName']."/".$row['Video']."/".$row['Photo'].".jpg"."'";
               $path2 = "'".$row['FolderName']."/".$row['Video']."/".$row['Video'].".mp4"."'";

        ?>

           <script>
                SetVideos(<?php echo $sectionName;?>,<?php echo $path;?>,<?php echo $path2;?>);
          </script>
        <?php
         }
          }
           ?>




<div class="main" id="main">


  <div class="Items" id= "Full-Body">

<h1 >Full Body</h1>
  <div class="Sector" id="FullBodyDIV">
   <?php
      getPaths("FullBodyDIV","Full-Body");
  ?>
</div>
</div>


<!--  -->
<div class="Items" id="Upper-Body">
  <h1 >Upper Body</h1>
   <p>
    Upper body workout can be done with dumbbells or a barbell. It works the back, chest, shoulders, and arms. <br>
    Engage your core so you keep your back straight. Using the barbell,
     start below your knee and in a smooth motion, and leading with your elbows, bring the weight up to your upper abdominals.
    </p>
   <div class="Sector" id="UpperBodyDIV">

   <?php
      getPaths("UpperBodyDIV","Upper-Body");
  ?>

   </div>
 </div>

 <div class="Items" id="Lower-Body">
  <h1>Lower Body</h1>
   <p>
    Lower body exercises are primarily for the legs, thighs, hips, and buttocks. <br>
     They are designed to tone and strengthen the major lower body muscles: gluteus maximus and gluteus minimus, also called the glutes (butt); quadriceps, also called quads (front upper-legs);
 hamstrings (rear upper legs); calves (rear lower legs); hips (abductors); and feet (plantar fascia).
    </p>
   <div class="Sector" id="LowerBodyDIV">
   <?php
       getPaths("LowerBodyDIV","Lower-Body");
       ?>
  ?>

   </div>
 </div>

 <div class="Items" id="Cardio">
  <h1>Cardio</h1>
   <p>
    Cardio exercise is any exercise that raises your heart rate. Face it our bodies were made to move. <br>
     Your heart is a muscle. Therefore working it makes it stronger. <br>
     A stronger cardio-vascular system means more capillaries delivering more oxygen to cells in your muscles.
    </p>
   <div class="Sector" id="CardioDIV">
   <?php
    //  getPaths();
  ?>

   </div>
 </div>

</div>

<footer>
  <div class="footer">


          <div class="copy">
                 <p> &copy; YourFitnesGuide.com </p>
          </div>
  </div>
</footer>






<!------------------------------------------------------------------------------------------------------------------->
<script>
function  myFunction() {
  document.getElementById("navi").style.width = "300px";
}
function secFunction() {
  document.getElementById("navi").style.width = "0";
}
window.onscroll = function() {navFunction()};

var navbar = document.getElementById("mynav");
var sticky = navbar.offsetTop;

function navFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}

function navFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}

var subnav = document.getElementById("subnav2");
        function myfun(){
         if(subnav.style.display == "block"){
          subnav.style.display = "none";
         }
         else
         {
           subnav.style.display = "block"
         }

        }

//-------------------------------------------------------

</script>
<!------------------------------------------------------------------------------------------------------------------->


</body>
</html>
