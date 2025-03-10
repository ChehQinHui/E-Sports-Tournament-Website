<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strategies</title>
    <link rel="icon" href="image/icon.jpg">
    <link rel="stylesheet" href="css\header.css">
    <link rel="stylesheet" href="css\videos4.css">
</head>
<body>
<?php include "bar.php"; ?>

    <hr color="red">

    <div class="videocontentcontainer">
        <ul id="vmenu">
            <li><a href="allvideosstrat.php" class="active" >ALL GAMES</a></li>
            <li><a href="darksoulsstrat.php">DARK SOULS</a></li>
            <li><a href="valorantstrat.php" >VALORANT</a></li>
            <li><a href="lolstrat.php">LEAGUE OF LEGENDS</a></li>
        </ul>
        <div class="content-container">
            <h1>GAME STRATEGIES</h1>

            <div class="video-container">

                <div class="video">
                    <img src="http://img.youtube.com/vi/O59ulAK8xQg/hqdefault.jpg" title="Youtube Video" alt="Youtube Video">
                    <h4>50 Game Changing Valorant Tips in 10 MINUTES | Valorant Tips, Tricks, and Guides</h4>
                    <h5>Aug 7, 2021</h5>
                </div>

                <div class="video">
                    <img src="http://img.youtube.com/vi/MC4tQml955Q/hqdefault.jpg" title="Youtube Video" alt="Youtube Video">
                    <h4>Top 10 Tips and Tricks for Dark Souls 1 Remastered (for Beginners/Starters/Noobs)</h4>
                    <h5>May 27, 2018</h5>
                </div>

                <div class="video">
                    <img src="http://img.youtube.com/vi/qkzALNaBK-4/hqdefault.jpg" title="Youtube Video" alt="Youtube Video">
                    <h4>Tips for starting out in Dark Souls 2</h4>
                    <h5>Apr 14, 2020</h5>
                </div>

                <div class="video">
                    <img src="http://img.youtube.com/vi/wGIg5mfrL50/hqdefault.jpg" title="Youtube Video" alt="Youtube Video">
                    <h4>9 Tips for Dark Souls III Beginners</h4>
                    <h5>Apr 12, 2016</h5>
                </div>

                <div class="video">
                    <img src="http://img.youtube.com/vi/kjBo6jNKfPw/hqdefault.jpg" title="Youtube Video" alt="Youtube Video">
                    <h4>ULTIMATE Beginner's Guide to League of Legends</h4>
                    <h5>Jan 12, 2023</h5>
                </div>

                <div class="video">
                    <img src="http://img.youtube.com/vi/YEcdIGfwLVw/hqdefault.jpg" title="Youtube Video" alt="Youtube Video">
                    <h4>Why YOU SUCK at TOP LANE (And How To Fix It) - League of Legends</h4>
                    <h5>Apr 12, 2024</h5>
                </div>

                <div class="video">
                    <img src="http://img.youtube.com/vi/q8Sm9zwUBio/hqdefault.jpg" title="Youtube Video" alt="Youtube Video">
                    <h4>The ONLY Deadlock Guide You'll EVER Need! (2024)</h4>
                    <h5>Aug 18, 2024</h5>
                </div>

                <div class="video">
                    <img src="http://img.youtube.com/vi/b5rLc5Z474I/hqdefault.jpg" title="Youtube Video" alt="Youtube Video">
                    <h4>VALORANT Tips and Tricks to get you started as a Beginner!</h4>
                    <h5>Jul 22, 2024</h5>
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