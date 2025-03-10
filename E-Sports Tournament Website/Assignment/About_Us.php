<?php
include("php/Donation.php");

$conn = mysqli_connect("localhost", "root", "", "create account");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());}
    
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $name = filter_input(INPUT_POST, "name",FILTER_SANITIZE_SPECIAL_CHARS);
      $email = filter_input(INPUT_POST, "email",FILTER_SANITIZE_SPECIAL_CHARS);
      $subject = filter_input(INPUT_POST, "subject",FILTER_SANITIZE_SPECIAL_CHARS);
      $feedback= filter_input(INPUT_POST, "feedback",FILTER_SANITIZE_SPECIAL_CHARS);
      
      if(empty($name)){
          echo"Please Enter a name";
      }
      elseif(empty($email)){
            echo "Please Enter Email Address ";
      }
      elseif(empty($subject)){
            echo "Please Enter Subject Matter";
      }
      elseif(empty($feedback)){
            echo "Please Enter Feedback";
      }
      else{
        $sql = "INSERT INTO `feedback` (`Name`, `Email`, `Subject`, `Feedback`)
        VALUES ('$name', '$email', '$subject', '$feedback')";
        if (mysqli_query($conn, $sql)) {
          header("Location: Thanks_Feedback.php");
          exit();
      } else {
          echo "Error: " . mysqli_error($conn);
      }
    }
}
 mysqli_close($conn)
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link rel="icon" href="image/icon.jpg">
    <link rel="stylesheet" href="css/fontcolor1.css">
    <link rel="stylesheet" href="css/aboutus5.css">

    
    
</head>
<body style="background-color:black;">
    <?php include "bar.php"; ?>

     
      <div class="about-section" style="color: black">
        <h1>About Us Page</h1>
        <h2 style="color: black;">Meet the team</h2>
    
      </div>
      
      <h2 style="text-align:center; color:red">Our Team</h2>
      <div class="profile-container">
        <div class="column">
              <div class="profile">
                <div class="container3">
                    <img src="image/christen.jpg" alt="Avatar" class="image">
                        <div class="overlay3">
                          <img src="image/christen_hover.jpg" alt="Overlay Image">
                    </div>
                </div>
            <div class="container" style="color: black;">             
            <h2 style="text-align:center;color:black">Christen </h2>
              <p class="title">CEO & Founder</p>
              <p>Age:23 </p>
              <p>christendecastro@gmail.com</p>
              <p><button class="button2" onclick="location.href='Christen.php'">Information</button></p>
            </div>
          </div>
        </div>
      
       
        <div class="column">
          <div class="profile">
            <div class="container3">
                <img src="image/qinhuiprof.jpg" alt="Avatar" class="image">
                    <div class="overlay3">
                      <img src="image/qinhuifun.jpg" alt="Overlay Image">
                </div>
            </div>
        <div class="container" style="color: black;">             
        <h2 style="text-align:center;color:black">Qin Hui </h2>
          <p class="title"> Head of Design</p>
          <p>Age:21</p>
          <p>qinhui@gmail.com</p>
          <p><button class="button2" onclick="location.href='QinHui.php'">Information</button></p>
        </div>
      </div>
    </div>
  
    
          <div class="column">
            <div class="profile">
              <div class="container3">
              <img src="image/aidanpro.jpg" alt="Avatar" class="image">
                  <div class="overlay3">
                  <img src="image/Smart-monkey.jpg" alt="Overlay Image">
              </div>
          </div>
          <div class="container" style="color: black;">             
            <h2 style="text-align:center;color:black">Aidan Go</h2>
            <p class="title">Head Of Cyber Security</p>
            <p>Age:18</p>
            <p>aidangokun@yahoo.com</p>
            <p><button class="button2" onclick="location.href='Aidan.php'">Information</button></p>
          </div>
        </div>
      </div>
    
      
      <div class="column">
        <div class="profile">
          <div class="container3">
          <img src="image/Yuhong.jpg" alt="Avatar" class="image">
                  <div class="overlay3">
                  <img src="image/drill-monkey-01.jpg" alt="Overlay Image">
              </div>
          </div>
        
      <div class="container" style="color: black;">             
      <h2 style="text-align:center;color:black">Yu Hong</h2>
        <p class="title">Head Of Sales</p>
        <p>Age:99</p>
        <p>yuhonggg@hotmail.com</p>
        <p><button class="button2" onclick="location.href='YuHong.php'">Information</button></p>
        </div>
        </div>
      </div>
      
    
     
          <div class="column">
            <div class="profile">
              <div class="container3">
              <img src="image/munpro.jpg" alt="Avatar" class="image">
                  <div class="overlay3">
                  <img src="image/mun.jpg" alt="Overlay Image">
                  </div>
              </div>
          <div class="container" style="color: black;">             
          <h2 style="text-align:center;color:black">Mun Hei </h2>
            <p class="title">Head of Engineering.</p>
            <p>Age:20</p>
            <p>munmun@yahoo.com</p>
            <p><button class="button2" onclick="location.href='mun.php'">Information</button></p>
          </div>
          </div>
          </div>
        </div>  
      
      

<br>
<div class="about-section" style="color: black">
  <h1>Donate To Us</h1>
  <p>If you would like to donate to us, you may use this link
    Please donate according to what you can give. We appreciate the effort and the thought
    of you donating. So please, donate within your capabilities.
  </p>
 
</div>
<br>

  
  <div class="dbutton-textalign">
    <p><button class="dbutton" type="submit" onclick="location.href='DonationPage.php'" >DONATE NOW</button></p>
  </div>

<br>

<div class="about-section" style="color: black " >
  
  <h1>Feedback</h1>
  <p>
    Please leave some feedback on the operations of our website
    We would like to hear your honest opinions on what we did good or what we can do better.
    We appreciate your honesty to improve the website as much as possible. You may leave feedback on what we did wrong, or 
    you can let us know what you would like to see in the future of our website.
  </p>
</div>
<br> 
<div class="main-container" style="color: red;">
      <div class="form-container">
          <h2 style="color: red;">Feedback Form</h2>
          <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
          <label for="name">Name:</label>
            <input type="text" id="name" name="name" placeholder="Your Full Name" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" placeholder="Your Email" required>

            <label for="subject">Subject:</label>
            <input type="text" id="subject" name="subject" placeholder="Enter Subject Here" required>              
             
            <label for="feedback">Feedback:</label>
            <textarea id="feedback" name="feedback" placeholder="Enter Feedback Here" required></textarea>
         
          <br>
          
          <input type="submit" value="Submit Feedback" >
          </form>
</div>
</div>









<div class="about-section" style="color: black">
  <h1>Join Us On Discord</h1>
  
</div>
<div class="discord-section" style="color: red;">
  <div class="discord-description">
    <h2 style="color: red; text-align:left">Join Our Discord Community!</h2>
    <p>
      Looking for a place to connect with fellow gamers? Join our Discord community! <br>
      It’s a friendly space where you can chat about your favorite games, share tips, and join in on fun events. <br>
      Whether you’re a casual player or a hardcore gamer,you’ll find like-minded friends here. <br>
      Click the link and dive into the fun with us!</p>
  </div>
  <div class="discord-image">
    <img src="image/discordred.jpg" onclick="location.href= 'https://discord.gg/cgCau9mNqK'" alt="Discord Community" style="width: 100%;">
  </div>
</div>
 
  

  
   
<?php 
 require 'footer.php'; 
 ?>
</body>

</html>

