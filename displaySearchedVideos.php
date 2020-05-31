<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Fitnes Guide </title>
    <link rel="icon" type="image/ico" href="photos/Capture.PNG">
    <link rel="stylesheet" href="displaySearchedVideos.css">
</head>
<body>

    <header class="topNav"> 
            <a href="HomeYFG.php">Back</a>
            <div class="title">
                <img src="photos/Capture.PNG" alt="YourFitnesGuide" class="image">
                  <h1> Your Fitness Guide </h1>
           </div>
    </header>

    <script>
              function SetVideos(PhotoPath,VideoPath){

                let a = document.getElementById("Searched-Videos");
                let diving = document.createElement("div");
                diving.className = "Item";

                let b = document.createElement("button");
                b.style.height = "300px";
                b.style.width = "400px";
                b.style.margin = "10px";

                b.style.backgroundImage = "url('videos/"+PhotoPath+"')";
                b.style.backroundRepeat = "no-repeat";
                b.style.backgroundSize = "cover";
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
                function getPaths(){
                $DB = new mysqli('localhost',"root","","yourfitnessguidedb") or die;
                $as = $_POST['search'];
                $execute = "SELECT * from Videos WHERE (video LIKE '%$as%');";
                $result = $DB->query($execute);
            

            while($row = mysqli_fetch_assoc($result)){

               $path = "'".$row['FolderName']."/".$row['Video']."/".$row['Photo'].".jpg"."'";
               $path2 = "'".$row['FolderName']."/".$row['Video']."/".$row['Video'].".mp4"."'";

        ?>

           <script>
                SetVideos(<?php echo $path;?>,<?php echo $path2;?>);
          </script>
        <?php
         }
          }
           ?>
        <h1 id="results">Results:</h1>
        <div class="Items" id= "Searched-Videos">

        <div class="Sector" id="FullBodyDIV">
        <?php
            getPaths();
        ?>
        </div>
        </div>

    <footer>
        <div class="footer">
                <div class="copy">
                       <p> &copy; YourFitnessGuide.com </p>
                </div>
        </div>
      </footer>

</body>
</html>
