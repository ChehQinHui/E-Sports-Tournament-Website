<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>League Of Legends</title>
    <link rel="icon" href="image/icon.jpg">
    <link rel="stylesheet" href="css\header.css">
    <link rel="stylesheet" href="css\videos4.css">
</head>
<body>
<?php include "bar.php"; ?>

    <hr color="red">

    <div class="videocontentcontainer">
        <ul id="vmenu">
        <li><a href="allvideoslive.php" >ALL GAMES</a></li>
            <li><a href="csgolive.php">CS:GO</a></li>
            <li><a href="valorantlive.php">VALORANT</a></li>
            <li><a href="lollive.php" class="active">LEAGUE OF LEGENDS</a></li>
        </ul>
        <div class="content-container">
            <h1>GAME LIVESTREAMS</h1>

            <div class="video-container">

                <div class="video">
                    <img src="http://img.youtube.com/vi/fnqArY-5J2A/hqdefault.jpg" title="Youtube Video" alt="Youtube Video">
                    <h4>T1.Faker is streaming [01/23/2024]</h4>
                    <h5>Streamed Jan 23, 2024</h5>
                </div>

                <div class="video">
                    <img src="http://img.youtube.com/vi/iIXxk5PgB14/hqdefault.jpg" title="Youtube Video" alt="Youtube Video">
                    <h4>Worlds 2024 - Swiss Stage - Round 1</h4>
                    <h5>Streamed Oct 3, 2024</h5>
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