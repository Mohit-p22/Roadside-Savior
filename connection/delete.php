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

// Check if the ID is provided in the URL
if(isset($_GET['id']) && !empty($_GET['id'])) {
    // Get the ID from the URL parameter
    $id = $_GET['id'];

    // Determine the table name based on the ID prefix
    $table_name = '';
    if (strpos($id, 'mec_') === 0) {
        // If mec_id is passed
        $table_name = 'register_mec';
    } elseif (strpos($id, 'cus_') === 0) {
        // If cus_id is passed
        $table_name = 'register_cus';
    }

    if (!empty($table_name)) {
        // Remove the prefix from the ID
        $id = substr($id, 4);

        // SQL to delete a record
        $sql = "DELETE FROM $table_name WHERE ";
        
        // Add condition based on the table name
        if ($table_name === 'register_mec') {
            $sql .= "mec_id = $id";
        } elseif ($table_name === 'register_cus') {
            $sql .= "cus_id = $id";
        }

        if ($conn->query($sql) === TRUE) {
            header('Location: ../admin.php');
        exit();
        } else {
            echo "Error deleting record: " . $conn->error;
        }
    } else {
        echo "Invalid ID format";
    }
}

// Close the connection
$conn->close();
?>
