<!DOCTYPE html>
<html>
<head>
	<title>Community</title>
	<link rel="icon" href="image/icon.jpg">
	<link rel="stylesheet" href="css/fontcolor1.css">
	<link rel="stylesheet" href="css/community1.css">
  
</head>
<style>
    #submitBtn {
        background-color: red ;    
        color: black ;             
        border: 2px solid black ;  
        padding: 10px 20px ;       
        text-align: center ;       
        text-decoration: none ;    
        display: inline-block ;    
        font-size: 16px ;          
        cursor: pointer ;          
    }

    #submitBtn:hover {
        background-color: darkred ; 
    }
    #postBtn {
        background-color: red ;    
        color: black ;             
        border: 2px solid black ;  
        padding: 10px 20px ;       
        text-align: center ;       
        text-decoration: none ;    
        display: inline-block ;    
        font-size: 16px ;          
        cursor: pointer ; 
    }
     #postBtn:hover {
        background-color: darkred ; 
    }
    
</style>
<body style="background-color:black;">
<?php 
include 'bar.php';
include 'Comment.php'

?>
<div class="h1">
        Community Activity
      </div>
      <p style="color: red;">Community groups are user-created hubs where members can share interests, coordinate gaming activities and host discussions in group-specific forums</p>
  
      <div class="container">   
        <div class="grid" >
            <div class="item">
                <video controls>
                <source src="video/Funniest & Epic Moments in VCT BERLIN! (KEKW).mp4">
                <source src="video/Funniest & Epic Moments in VCT BERLIN! (KEKW).ogg">
              </video>
                <p>Funniest Epic Moments in VCT BERLIN! (KEKW)</p>
            </div>
            <div class="item">
              <video controls>
              <source src="video/4th Anniversary Theme Song_ _Passing Memories_ - Faouzia _ Genshin Impact.mp4">
              <source src="video/4th Anniversary Theme Song_ _Passing Memories_ - Faouzia _ Genshin Impact.ogg">
            </video>
              <p>4th Anniversary Theme Song_ _Passing Memories_ - Faouzia _ Genshin Impact</p>
          </div>

            <div class="item">
              <video controls>
                <source src="video/Corner With Love!【Funny Moment .mp4">
                <source src="video/Corner With Love!【Funny Moment .ogg">
              </video>  
              <p>[Funny Moments] Corner with Love! Don't move, you are dead here!</p>
            </div>
            <div class="item">
                <img src="image/fox.jpeg" alt="Fox Tessa">
                <p>Fox Tessa (Rating)...</p>
            </div>
            <div class="item">
                <img src="image/NFS.jpeg" alt="Need for Speed Unbound">
                <p>Need for Speed™ Unbound</p>
            </div>
            <div class="item">
                <img src="image/one.jpeg" alt="ONE Anime">
                <p>ONE.</p>
            </div>
        </div>

        <br>
        
        <button id="postBtn" class="background-color:red ;" style="float: right;">Post a Comment</button>
        <br>
        
   
    <br><br>
    <div id="commentFormSection" style="display: none; margin-top: 20px;">
    <div class="main-container" style="color: red;">
    <div class="form-container">
        <h2 style="color: red;">Post a Comment</h2>
        <form id="commentForm" method="POST" action="community.php">
            <label for="game">Game Title:</label><br>
            <input type="text" id="game" name="game" placeholder="Enter Game Title" required><br><br>

            <label for="subject">Subject:</label><br>
            <input type="text" id="subject" name="subject" placeholder="Enter Subject" required><br><br>

            <label for="comment">Write your comment:</label><br>
            <textarea id="comment" name="comment" placeholder="Enter Your Comment" rows="4" cols="50" required></textarea><br><br>
            
            
            <input type="submit" value="Post Comment" id="submitBtn">
        </form>
    </div>
</div>
      </div>
    
    <div class="reviews"> 
        <?php
        $sql = "SELECT Game, Subject, Comment FROM forum_comments ORDER BY id DESC";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<div class='item'>";
                echo "<p><strong>" . htmlspecialchars($row['Game']) . ": " . htmlspecialchars($row['Subject']) . "</strong></p>";
                echo "<hr>";
                echo "<p><span class='thumb-up'>👍</span> " . htmlspecialchars($row['Comment']) . "</p>";
                echo "</div><br>";
            }
        } else {
            echo "<p>No comments yet. Be the first to comment!</p>";
        }
        ?>
    </div>
    <script src="js/comment.js"></script>
    
<?php 
 require 'footer.php'; 
 ?>

	

</body>
</html>

<?php $conn->close(); ?>