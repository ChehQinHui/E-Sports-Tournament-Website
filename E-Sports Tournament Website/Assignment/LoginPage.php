<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="icon" href="image/icon.jpg">
    <link rel="stylesheet" type="text/css" href="css/style login.css">
    
</head>
<body>
<div class="container">
    <div class="login">
    <h1>LOGIN TO <span class="bon">BON</span><span class="fire">FIRE </span>ESPORTS</h1>
    <form action="LoginPageCode.php" method="POST">    
        <div class="email">
            <input class="input-field" type="text" name ="Email" placeholder="Email" required>
        </div>
        <div class="password">
            <input class="input-field" type="password" name ="Password" placeholder="Password" required>
        </div>    
        <div class="Rememberme">
            <button type="submit" class="Loginbtn" name="Loginbtn">Login</button>
        </div>
    </form>
        <div class="signup"><p>Don't have an account? <a href="SignUpPage.php" style="color:red;text-decoration: none; ">Sign up</a></p>
        </div>    
    </div>
    <div class="logo"><img src="image/LOGO.jpg" width="600px" height="400px">
    </div>  
</div>        
</div>         
</body>
</html>
