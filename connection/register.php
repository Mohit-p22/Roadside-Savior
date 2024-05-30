<?php

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

// For Customer Registration
if(isset($_POST['register-username']) && isset($_POST['register-email']) && isset($_POST['register-phone']) && isset($_POST['register-password']) && isset($_POST['register-confirm-password'])) {
    $username = $_POST['register-username'];
    $email = $_POST['register-email'];
    $phone = $_POST['register-phone'];
    $password = $_POST['register-password'];
    
    // Insert data into register_cus table
    $sql = "INSERT INTO register_cus (username, email, phone, password) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssss", $username, $email, $phone, $password);
    if ($stmt->execute()) {
      
        header('Location: ../login.php');
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// For Mechanic Registration
if(isset($_POST['register-username-mechanic']) && isset($_POST['register-email-mechanic']) && isset($_POST['register-phone-mechanic']) && isset($_POST['service-type']) && isset($_POST['register-password-mechanic']) && isset($_POST['register-confirm-password-mechanic'])) {
    $username = $_POST['register-username-mechanic'];
    $email = $_POST['register-email-mechanic'];
    $phone = $_POST['register-phone-mechanic'];
    $serviceType = $_POST['service-type'];
    $password = $_POST['register-password-mechanic'];
    
    // Insert data into register_mec table
    $sql = "INSERT INTO register_mec (username, email, phone,serviceType, password) VALUES (?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssss", $username, $email, $phone,$serviceType, $password);

    if ($stmt->execute()) {
      
        header('Location: ../login.php');
        exit();
    } else {
     
        echo "Error: " . $stmt->error;
    }
}

$conn->close();
?>
