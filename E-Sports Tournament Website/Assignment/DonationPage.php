<?php
include("php/Donation.php");

$conn = mysqli_connect("localhost", "root", "", "create account");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donation Page</title>
    <link rel="icon" href="image/icon.jpg">
    <link rel="stylesheet" href="css/donation1.css">
    <link rel="stylesheet" href="css/aboutus.css">
   
    
</head>

<body style="background-color:black;"> 

<div class="about-section" style="color: black">
        <h1>Donate To Us</h1>
        <p>Some text about who we are and what we do.</p>
        <p>Resize the browser window to see that this page is responsive by the way.</p>
      </div>
      <br>
      
        <div class="main-container">
            <div class="form-container">
                <h2>Donation Form</h2>
                <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="POST">
                    <label for="name">Donor Name:</label>
                    <input type="text" id="name" name="name" placeholder="Your Full Name" required>
    
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" placeholder="Your Email" required>
    
                    <label for="phone">Phone Number:</label>
                    <input type="tel" id="phone" name="phone" placeholder="Your Phone Number" required>
    
                    <label for="address">Address:</label>
                    <textarea id="address" name="address" rows="3" placeholder="Your Address" required></textarea>
    
                    <label for="amount">Donation Amount:</label>
                    <input type="number" id="amount" name="amount" placeholder="Amount In Ringgit" required>
    
                    <label for="card_number">Card Number:</label>
                    <input type="text" id="card_number" name="card_number" placeholder="Your Card Number" required>
    
                    <label for="ccv">CCV:</label>
                    <input type="text" id="ccv" name="ccv" placeholder="Your CCV" required>
    
                    <label for="message">Message (Optional):</label>
                    <textarea id="message" name="message" placeholder="Leave a message"></textarea>
    
                    <label for="type">Payment Type:</label>
                    <select id="type" name="type" required>
                        <option value="one_time">One-Time Payment</option>
                        <option value="monthly">Monthly</option>
                    </select>
    
                    <input type="submit" value="DONATE NOW">
                    <br>
                    <input type="submit" value="Back To About Us" onclick="location.href='About_us.php'">
                     
                </form>
            </div>
        </div>
      
<?php 
 require 'footer.php'; 
 ?>   
</body>

</html>

<?php
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $name = filter_input(INPUT_POST, "name",FILTER_SANITIZE_SPECIAL_CHARS);
      $email = filter_input(INPUT_POST, "email",FILTER_SANITIZE_SPECIAL_CHARS);
      $phone = filter_input(INPUT_POST, "phone",FILTER_SANITIZE_SPECIAL_CHARS);
      $address = filter_input(INPUT_POST, "address",FILTER_SANITIZE_SPECIAL_CHARS);
      $amount = filter_input(INPUT_POST, "amount",FILTER_SANITIZE_SPECIAL_CHARS);
      $card_number = filter_input(INPUT_POST, "card_number",FILTER_SANITIZE_SPECIAL_CHARS);
      $ccv = filter_input(INPUT_POST, "ccv",FILTER_SANITIZE_SPECIAL_CHARS);
      $type = filter_input(INPUT_POST, "type",FILTER_SANITIZE_SPECIAL_CHARS);
      $message = filter_input(INPUT_POST, "message",FILTER_SANITIZE_SPECIAL_CHARS);
      
      if(empty($name)){
          echo"Please Enter a name";
      }
      elseif(empty($email)){
            echo "Please Enter Email Address ";
      }
      elseif(empty($phone )){
            echo "Please Enter Phone Number";
      }
      elseif(empty($address)){
            echo "Please Enter Home Address";
      }
      elseif(empty($amount)){
            echo "Please Enter Amount You would Like To Donate";
      }
      elseif(empty($card_number)){
            echo "Please Enter Card Details ";
      }
      elseif(empty($ccv)){
            echo "Please Enter CCV Code ";
      }
      elseif(empty($message)){
            echo "Please Enter Message";
      }
      elseif(empty($type)){
            echo "Please Choose Type ";
      }
      else{
        $sql = "INSERT INTO `donorinfo` (`Name`, `Email`, `Phone Number`, `Address`, `Amount Donated`, `Card Number`, `CCV`, `Type`, `Message`)
        VALUES ('$name', '$email', '$phone', '$address', '$amount', '$card_number', '$ccv', '$type', '$message')";
        if (mysqli_query($conn, $sql)) {
          header("Location: Thanks_Donation.php");
          exit();
      } else {
          echo "Error: " . mysqli_error($conn);
      }
    }
 }
 mysqli_close($conn)
?>

