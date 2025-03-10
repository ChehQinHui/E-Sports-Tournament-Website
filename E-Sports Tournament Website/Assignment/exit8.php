<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exit 8</title>
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
            <li><a href="exit8.php" class="active">EXIT 8</a></li>
            <li><a href="sonic.php">SONIC THE HEDGEHOG</a></li>
            <li><a href="mario.php" >SUPER MARIO BROS.</a></li>
            <li><a href="hneighbor.php">HELLO NEIGHBOR</a></li>
        </ul>
        <div class="content-container">
            <h1>GAME SPEEDRUNS</h1>

            <div class="video-container">

                <div class="video">
                    <img src="http://img.youtube.com/vi/3UTeiDxpD_U/hqdefault.jpg" title="Youtube Video" alt="Youtube Video">
                    <h4>The Exit 8 | SPEEDRUN | 00:01:11 RECORD | BEAT THE GAME</h4>
                    <h5>Jan 12, 2024</h5>
                </div>

                <div class="video">
                    <img src="http://img.youtube.com/vi/4-CswymFtf0/hqdefault.jpg" title="Youtube Video" alt="Youtube Video">
                    <h4>The Exit 8 (Speedrun)</h4>
                    <h5>Jul 31, 2024</h5>
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