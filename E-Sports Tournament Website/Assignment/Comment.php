<?php 
$servername = "localhost";
$username = "root";        
$password = "";            
$dbname = "create account"; 

$conn=mysqli_connect($servername,$username ,$password,$dbname);
      
      
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


if ($_SERVER["REQUEST_METHOD"] == "POST") {

  $game = $_POST['game'];
  $subject = $_POST['subject'];
  $comment = $_POST['comment'];

 
  $stmt = $conn->prepare("INSERT INTO forum_comments (Game, Subject, Comment) VALUES (?, ?, ?)");
  $stmt->bind_param("sss", $game, $subject, $comment);

  if ($stmt->execute()) {
     
      header("Location:" . $_SERVER['REQUEST_URI']);
      exit();
  } else {
      echo "Error: " . $stmt->error;
  }

  $stmt->close();
}
?>