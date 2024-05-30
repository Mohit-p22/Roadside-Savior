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
if (isset($_GET['id']) && !empty($_GET['id'])) {

    // Get the ID from the URL parameter
    $id = $_GET['id'];

    // SQL to select data from the request table
    $sql_select = "SELECT * FROM request WHERE req_id = $id";
    $result = $conn->query($sql_select);

    if ($result->num_rows > 0) {
       
        // Fetch the row
        $row = $result->fetch_assoc();

        // Insert data into the new table
        $sql_insert = "INSERT INTO approved (name, phone, address, city, vehicleType, serviceType, payment) 
                       VALUES ('$row[name]', '$row[phone]', '$row[address]', '$row[city]', '$row[vehicleType]', '$row[serviceType]', '$row[payment]')";
        
        // Execute the insertion query
        if ($conn->query($sql_insert) === TRUE) {

            
            // SQL to delete the record from the request table
            $sql_delete = "DELETE FROM request WHERE req_id = $id";
            
            // Execute the deletion query
            if ($conn->query($sql_delete) === TRUE) {
                header('Location: ../mechanic.php');
            } else {
                echo "Error deleting record: " . $conn->error;
            }
        } else {
            echo "Error: " . $sql_insert . "<br>" . $conn->error;
        }
    } else {
        echo "No data found with ID: $id";
    }
 
}

// Close the connection
$conn->close();
?>
