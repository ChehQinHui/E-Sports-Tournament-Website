<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>
	<link rel="icon" href="image/icon.jpg">
	<link rel="stylesheet" href="css/home2.css">

</head>
<body style="background-color:black;">
<?php include 'bar.php'; ?>
<div class="slideshow-container">
        <div class="mySlides fade">
            <div class="numbertext">1 / 3</div>
            <img src="https://i.ytimg.com/vi/3Knpo5ZrD8s/maxresdefault.jpg" style="width:100%">
        </div>

        <div class="mySlides fade">
            <div class="numbertext">2 / 3</div>
            <img src="https://cdn.shopify.com/s/files/1/0581/8872/6331/files/blog-andaseat-joins-forces-with-top-esports-for-a-new-era-in-esports-excellence-1.webp?v=1705735209" style="width:100%">
        </div>

        <div class="mySlides fade">
            <div class="numbertext">3 / 3</div>
            <img src="https://elements-resized.envatousercontent.com/elements-video-cover-images/files/321166097/Image.png?w=1200&cf_fit=cover&q=85&format=auto&s=b1eb52e82de270d3a56f81f2a7f4b37f8eae9060711d2abf06174fd952f5dea8" style="width:100%">
        </div>

        <div>
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
        </div>

        <br>

        <div style="text-align:center">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
        </div>
    </div>

    <script src="js/slide.js"></script>
<br>
<br>
    <section class="latest-news">
            <h2>LATEST NEWS</h2>
            <div class="news-item">
                <img src="image/keyboard.jpg" alt="News 1">
                <div>
                    <p><strong>Hexgears announces Immersion A3 keyboard</strong></p>
                    <p>13 August 2024 | Ivan Šimić</p>
                </div>
            </div>
            <div class="news-item">
                <img src="image/car.jpg" alt="News 2">
                <div>
                    <p><strong>Asphalt Legends Unite joins forces with Ferrari</strong></p>
                    <p>13 August 2024 | Jonno Nicholson</p>
                </div>
            </div>
            <div class="news-item">
                <img src="image/eyes.jpg" alt="News 3">
                <div>
                    <p><strong>Faker partners with Stealer Eyewear</strong></p>
                    <p>13 August 2024 | Ivan Šimić</p>
                </div>
            </div>
            <div class="news-item">
                <img src="image/riot.jpg" alt="News 4">
                <div>
                    <p><strong>Riot Games reveals VCT OFF/SEASON 2024 schedule</strong></p>
                    <p>12 August 2024 | Davide Xu</p>
                </div>
            </div>
            <a href="https://esportsinsider.com/" class="view-more">View More</a>
        </section>
        <hr>
        <section class="latest-news">
          <h2>LATEST SCORES OF TOURNAMENT</h2>
            <div class="news-item">
                <img src="image/LOL.jpg" alt="News 1">
                <div>
                    <p><strong>League of Legends</strong>
                    <br>
                    <br>
                    <br>
                    | VGJ THUNDER 3 vs 2 ENHANCED</p>                    
                </div>
            </div>
            <div class="news-item">
                <img src="image/cs2.jpg" alt="News 2">
                <div>
                    <p><strong>Counter-Strike 2</strong>
                    <br>
                    <br>
                    <br>
                    | Natus Vincere 3 vs 1 Mouz</p>
                </div>
            </div>
            <div class="news-item">
                <img src="image/cs2.jpg" alt="News 3">
                <div>
                    <p><strong>Counter-Strike 2</strong>
                    <br>
                    <br>
                    <br>
                    | G2 Esport 3 vs 1 Natus Vincere</p>
                </div>
            </div>
        </section>
      </div>
</body>
</html>

<?php 
 require 'footer.php'; 
 ?>