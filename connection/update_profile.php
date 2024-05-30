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

if (isset($_POST['update'])) {
    $current_username = $_SESSION['fetch']['username']; // Get the current username from the session
    $current_password = $_SESSION['fetch']['password']; // Get the current password from the session

    $new_username = $_POST['username'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    // Password validation
    if ($password !== $confirm_password) {
        echo "Passwords do not match.";
        exit();
    }

    if ($user_type == 'customer') {
        $sql = "UPDATE register_cus SET username='$new_username', email='$email', phone='$phone', password='$password' WHERE username='$current_username' AND password='$current_password'";
    } else if ($user_type == 'mechanic') {
        $sql = "UPDATE register_mech SET username='$new_username', email='$email', phone='$phone', password='$password' WHERE username='$current_username' AND password='$current_password'";
    } else {
        echo "Invalid user type.";
        exit();
    }
    // Ensure to hash the password in a production environment
    // $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    $sql = "UPDATE register_cus SET username='$new_username', email='$email', phone='$phone', password='$password' WHERE username='$current_username' AND password='$current_password'";

    if ($conn->query($sql) === TRUE) {
        // Update the session data
        $_SESSION['fetch'] = [
            'username' => $new_username,
            'email' => $email,
            'phone' => $phone,
            'password' => $password
        ];
        header('Location: ../user.php');
        exit();
    } else {
        echo "Error updating profile: " . $conn->error;
    }
}
$conn->close();
?>
