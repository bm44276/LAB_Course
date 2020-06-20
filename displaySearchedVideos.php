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
              function SetVideos(PhotoPath,VideoPath,NamePath){

                let a = document.getElementById("Searched-Videos");
                let diving = document.createElement("div");
                diving.className = "Item";
                diving.style.display = "flex";
                diving.style.alignItems = "center";
                diving.style.borderTop = "1px gray solid";
                diving.style.padding = "20px 0";
                let h1 = document.createElement("h1");
                h1.innerHTML = NamePath;
                h1.style.textAlign = "left";
                h1.style.padding = "5px 10px"
                h1.style.fontSize = "30px";
                h1.style.marginLeft = "15px";
  
                let b = document.createElement("button");
                b.style.height = "300px";
                b.style.width = "400px";
                b.style.margin = "10px";

                b.style.backgroundImage = "url('videos/"+PhotoPath+"')";
                b.style.backroundRepeat = "no-repeat";
                b.style.backgroundSize = "cover";
                b.onclick = function(){
                localStorage.setItem("storageName",VideoPath);
                localStorage.setItem("storageName1",NamePath);
                location.href = "displayvideo.php";
                }
                diving.appendChild(b);
                diving.appendChild(h1);
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
               $path3 =  "'".$row['Video']."'";
        ?>

           <script>
                SetVideos(<?php echo $path;?>,<?php echo $path2;?>, <?php echo $path3;?>);
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
