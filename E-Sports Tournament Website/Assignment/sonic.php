<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sonic</title>
    <link rel="icon" href="image/icon.jpg">
    <link rel="stylesheet" href="css\header.css">
    <link rel="stylesheet" href="css\videos4.css">
</head>
<body>
<?php include "bar.php"; ?>

    <hr color="red">

    <div class="videocontentcontainer">
        <ul id="vmenu">
        <li><a href="allvideos.php">ALL GAMES</a></li>
            <li><a href="mc.php">MINECRAFT</a></li>
            <li><a href="exit8.php">EXIT 8</a></li>
            <li><a href="sonic.php"class="active">SONIC THE HEDGEHOG</a></li>
            <li><a href="mario.php" >SUPER MARIO BROS.</a></li>
            <li><a href="hneighbor.php">HELLO NEIGHBOR</a></li></ul>
        <div class="content-container">
            <h1>GAME SPEEDRUNS</h1>

            <div class="video-container">

                <div class="video">
                    <img src="http://img.youtube.com/vi/ew7d8YFDiTo/hqdefault.jpg" title="Youtube Video" alt="Youtube Video">
                    <h4>[TAS] Sonic The Hedgehog - Speedrun 100%</h4>
                    <h5>Jan 21, 2023</h5>
                </div>

                <div class="video">
                    <img src="http://img.youtube.com/vi/9kOAdhUlkt0/hqdefault.jpg" title="Youtube Video" alt="Youtube Video">
                    <h4>Sonic The Hedgehog Speed Run 13:03 any% SS (Non-TAS)</h4>
                    <h5>Nov 2, 2012</h5>
                </div>
            </div>

            <div class="popup-video">
                <span>&times;</span>
                <iframe src="" allow="autoplay; encrypted-media" allowfullscreen></iframe>
            </div>

            
        </div>
    </div>

  


    <script>
        document.addEventListener('DOMContentLoaded', () => {
            document.querySelectorAll('.video-container img').forEach(vid => {
                const videoID = vid.src.split("/vi/")[1].split("/")[0];
                vid.onclick = () =>{
                    document.querySelector('.popup-video').style.display = 'block';
                    document.querySelector('.popup-video iframe').src = `https://www.youtube.com/embed/${videoID}?autoplay=1`;
                }
            });

            document.querySelector('.popup-video span').onclick = () => {
                document.querySelector('.popup-video').style.display = 'none';
                document.querySelector('.popup-video iframe').src = '';
            };
        });
    </script>
</body>
</html>
<?php 
 require 'footer.php'; 
 ?>