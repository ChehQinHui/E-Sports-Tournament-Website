<!DOCTYPE html>
<html>
<head>
	<title>Session Page</title>
	<link rel="icon" href="image/icon.jpg">
	<style>
		body {
			background-color: black;
			color: black;
		}
		main {
			margin: 20px;
		}
		a {
			color: white;
		}
		a:hover {
			color: gray;
		}
		.navbar {
    overflow: hidden;
    background-color: black;
  }
  
  .navbar a {
    float: right;
    font-size: 16px;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
  }

  .navbar b {
    float: left;
    font-size: 16px;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
  }
  
  .dropdown {
    float: right;
    overflow: hidden;
  }
  
  .dropdown .dropbtn {
    font-size: 16px;  
    border: none;
    outline: none;
    color: white;
    padding: 14px 16px;
    background-color: inherit;
    font-family: inherit;
    margin: 0;
  }
  

  
  .dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
  }
  
  .dropdown-content a {
    float: none;
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
  }
  
  .dropdown-content a:hover {
    background-color: #BB4D4D;
  }
  
  .dropdown:hover .dropdown-content {
    display: block;
  }

	</style>
</head>
<body>
<div class="navbar">
        
        <img src= "image/BONFIRE.png" style="width: 150px">
        <i class="fa fa-smile-o" style="font-size:48px;color:red;"></i>
        <a href="logout.inc.php">LOGOUT</a>
        
        <a href="About_Us.php">OUR TEAM</a>

        <div class="dropdown">
          <button class="dropbtn">COMMUNITY
            <i class="fa fa-caret-down"></i>
          </button>
          <div class="dropdown-content">
            <a href="Game Forums.php">Game Forums</a>
            <a href="community.php">Community Activity</a>
          </div>
        </div> 
        <div class="dropdown">
          <button class="dropbtn">VIDEO
            <i class="fa fa-caret-down"></i>
          </button>
          <div class="dropdown-content">
            <a href="allvideosstrat.php">Game Strategies</a>
            <a href="allvideos.php">Game Speedruns</a>
            <a href="allvideoslive.php">Live Stream</a>
          </div>
          
        </div> 
        <a href="homepage.php">HOME</a>
       
      </div>


	
</body>
</html>
