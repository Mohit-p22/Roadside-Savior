<?php
$servername = "localhost";
$username = "admin";
$password = "1234";
$dbname = "vbs";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    echo "Connection failed: " . $conn->connect_error;
}

// For form submission
if (
    isset($_POST['name']) && isset($_POST['phone']) && isset($_POST['email']) && isset($_POST['line1']) && isset($_POST['street']) &&
    isset($_POST['city']) && isset($_POST['state']) && isset($_POST['zipcode']) && isset($_POST['vehicleType']) && isset($_POST['vehicleInfo']) && isset($_POST['serviceType']) && isset($_POST['situation']) && isset($_POST['payment'])
) {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $address = $_POST['line1'];
    $street = $_POST['street'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $zipcode = $_POST['zipcode'];
    $vehicleType = $_POST['vehicleType'];
    $vehicleInfo = $_POST['vehicleInfo'];
    $serviceType = $_POST['serviceType'];
    $situation = $_POST['situation'];
    $payment = $_POST['payment'];

    // Insert data into request table
    $sql = "INSERT INTO request (name, phone, email, address, street, city, state, zipcode, vehicleType, vehicleInfo, serviceType, situation, payment) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssssssssssss", $name, $phone, $email, $address, $street, $city, $state, $zipcode, $vehicleType, $vehicleInfo, $serviceType, $situation, $payment);
    if ($stmt->execute()) {
        if ($payment === "online") {
            // Redirect to payment.php
            header("Location: ../otp_verify.php");
            exit();
        } else if ($payment === "cash") {
            // Redirect to user.php
            header("Location: ../user.php");
            exit();
        }
     
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
} else {
    echo "Form not submitted.";
}

$conn->close();
?>
