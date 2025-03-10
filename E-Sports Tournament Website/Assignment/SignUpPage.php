<!DOCTYPE html>
<html>
<head>
    <title>Sign Up</title>
    <link rel="icon" href="image/icon.jpg">
    <link rel="stylesheet" type="text/css" href="css/signup1.css">
</head>
<body>
    <div class="container">
        <div class="detail">
        <h1>SIGN UP TO <span class="bon">BON</span><span class="fire">FIRE </span>ESPORTS</h1>
        <form method="POST" action="SignUpPageCode.php">
        <div class="Name">
            <input class="input-field" type="text" placeholder="Name" name="Name">
        </div>
        <div class="Email">
            <input class="input-field" type="text" placeholder="Email" name="Email" required>
        </div>
        <div class="Password">
            <input class="input-field" type="text" placeholder="Password" name="Password" required>
        </div>
        <div class="RepeatPassword">
            <input class="input-field" type="text" placeholder="Confirm Password" name="RepeatPassword" required>
        </div>
        <div class="signup">
            <button type="submit" class="signupbtn" name="signupbtn">Sign Up</button>
        </div> 
        </form>
        <div class="Login"><p>Already have an account? <a href="LoginPage.php"style="color:red;text-decoration: none; ">Login</a></p>
        </div>
        </div>
        <div class="logo"><img src="image/LOGO.jpg" width="600px" height="400px">
        </div>       
    </div>
</body>
</html>
