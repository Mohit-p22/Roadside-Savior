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

// For Contact Form Submission
if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['message'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];
    
    // Insert data into contact table
    $sql = "INSERT INTO contact (name, email, phone, message) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssss", $name, $email, $phone, $message);
    if ($stmt->execute()) {
        // Redirect back to index.php after successful submission
        header('Location: ../index.php');
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $stmt->error; // Display error message
    }
}

$conn->close();
?>
