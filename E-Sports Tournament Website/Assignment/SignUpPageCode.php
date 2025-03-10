<?php
include 'config.php';
if(isset($_POST['signupbtn'])){
function validate($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$Name = validate($_POST['Name']);
$Email = validate($_POST['Email']);
$Password = validate($_POST['Password']);
$RepeatPassword = validate($_POST['RepeatPassword']); 

    if ($Password !== $RepeatPassword) {
        echo "<script>alert('Passwords do not match!'); window.location.href='signup.php';</script>";
        exit(); 
    }


$CheckEmail="SELECT * From users where email='$Email'";
$result=$conn->query($CheckEmail);
if($result->num_rows>0){
    echo"Email Address Already Exists !";
}else{
    $insertQuery="INSERT INTO users(Name,Email,Password)
                    VALUES('$Name','$Email','$Password')";
        
        if ($conn->query($insertQuery) === TRUE) {
            header("Location: LoginPage.php");
            exit();
        }else{"Error;".$conn->error;
        } 
    }
}
?>
