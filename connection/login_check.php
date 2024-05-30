<?php

session_start();

$servername = "localhost";
$username = "admin";
$password = "1234";
$dbname = "vbs";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['login-username'];
    $password = $_POST['login-password'];
    $userType = $_POST['user-type'];
    
    // Check if user is admin
    if ($username === "admin" && $password === "admin123" && $userType === "admin") {
        // Redirect to admin panel
        $_SESSION['username'] = $username;
        $_SESSION['user_type'] = 'admin';
        
        
            
                header('Location: ../admin.php');
           
        exit();
    }
    else{
        //provide error on textfield at login.php page form
    }
    
    // Check if user is customer
    if ($userType === "customer") {
        $sql = "SELECT * FROM register_cus WHERE username='$username' AND password='$password'";
        $result = $conn->query($sql);
        
        if ($result->num_rows == 1) {
            // Valid customer credentials, redirect to customer panel
            $_SESSION['username'] = $username;
            $_SESSION['user_type'] = 'customer';
            $sql = "SELECT * FROM register_cus WHERE username = '$username' AND password = '$password'";
            $result = $conn->query($sql);
        
            if ($result->num_rows > 0) {
                $fetch = $result->fetch_assoc();
                $_SESSION['fetch'] = $fetch;
                header('Location: ../user.php');
            } else {
                echo "Invalid username or password.";
            }
            exit();
        }  else{
            //provide error on textfield at login.php page form
        }
    }
    
    // Check if user is mechanic
    if ($userType === "mechanic") {
        $sql = "SELECT * FROM register_mec WHERE username='$username' AND password='$password'";
        $result = $conn->query($sql);
        
        if ($result->num_rows == 1) {
            // Valid mechanic credentials, redirect to mechanic panel
            $_SESSION['username'] = $username;
            $_SESSION['user_type'] = 'mechanic';
        
            $sql = "SELECT * FROM register_mec WHERE username = '$username' AND password = '$password'";
            $result = $conn->query($sql);
        
            if ($result->num_rows > 0) {
                $fetch = $result->fetch_assoc();
                $_SESSION['fetch'] = $fetch;
                header('Location: ../mechanic.php');
            } else {
                echo "Invalid username or password.";
            }

          
            exit();
        } else {
            echo "<script>showPopup('Incorrect username or password.');</script>";
        }
    }
}
?>
if (isset($_POST['login'])) {
   
}