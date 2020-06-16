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
<main>
        <script>
            var videodiv = document.createElement("div");
            var video = document.createElement("video");
            var videopath =  localStorage.getItem("storageName");
            video.src = "videos/"+videopath;
            video.controls = true;
            videodiv.style = "border:10px solid black;"
            videodiv.style = "text-align: center;";
           videodiv.style.margin = "30px 0";

            let h1 = document.createElement("h1");
                h1.innerHTML = localStorage.getItem("storageName1");
                h1.style.textAlign = "Center";
                h1.style.padding = "5px"
                h1.style.fontSize = "30px";
                h1.style.margin = "10px 0 30px 0";
                h1.style.fontWeight = "900";
                h1.style.letterSpacing = "5px";
                document.body.appendChild(h1);
            videodiv.appendChild(video);
            document.body.appendChild(videodiv);



         </script>
</main>




    <footer>
        <div class="footer">


                <div class="copy">
                       <p> &copy; YourFitnesGuide.com </p>
                </div>
        </div>
      </footer>

</body>
</html>
