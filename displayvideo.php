<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Fitnes Guide </title>
    <link rel="icon" type="image/ico" href="photos/Capture.PNG">
    <link rel="stylesheet" href="displayvideostyle.css">
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
            var videodiv = document.createElement("div");
            var video = document.createElement("video");
            var videopath =  localStorage.getItem("storageName");
            video.src = "videos/"+videopath;
            video.controls = true;
            videodiv.style = "border:10px solid black;"
            videodiv.style = "text-align: center;";
            videodiv.style.margin = "50px 0";
            videodiv.appendChild(video);
            document.body.appendChild(videodiv);


         </script>





    <footer>
        <div class="footer">


                <div class="copy">
                       <p> &copy; YourFitnesGuide.com </p>
                </div>
        </div>
      </footer>

</body>
</html>
