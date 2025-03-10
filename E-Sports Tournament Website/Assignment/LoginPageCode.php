<?php
include 'config.php';

if (isset($_POST['Loginbtn'])) {
    function validate($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $Email = validate($_POST['Email']);
    $Password = validate($_POST['Password']);

    $stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->bind_param("s", $Email); 
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        
        
        if ($Password === $row['Password']) {
            session_start();
            $_SESSION['email'] = $row['email'];
            header("Location: homepage.php");
            exit();
        } else {
            echo "<script>alert('Incorrect Password'); window.location.href='LoginPage.php';</script>"; 
        }
    } else {
        echo "<script>alert('Incorrect Email'); window.location.href='LoginPage.php';</script>"; 
    }

    $stmt->close();
}
?>
