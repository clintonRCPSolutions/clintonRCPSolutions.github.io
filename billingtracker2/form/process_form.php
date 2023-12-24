<?php
// Database configuration
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sample";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$name = $_POST['name'];
$deviceName = $_POST['deviceName'];
$imei = $_POST['imei'];
$price = $_POST['price'];
$description = $_POST['description'];
$otherCharge = $_POST['otherCharge'];
$readyStatus = $_POST['readyStatus'];
$phoneNumber = $_POST['phoneNumber'];
$model = $_POST['model'];
$fault = $_POST['fault'];
$userName = $_POST['userName'];
$advanceAmount = $_POST['advanceAmount'];
$totalAmount = $_POST['totalAmount'];
$deliveryStatus = $_POST['deliveryStatus'];

// Insert data into the database
$sql = "INSERT INTO billing_data (name, device_name, imei, price, description, other_charge, ready_status, phone_number, model, fault, user_name, advance_amount, total_amount, delivery_status)
        VALUES ('$name', '$deviceName', '$imei', '$price', '$description', '$otherCharge', '$readyStatus', '$phoneNumber', '$model', '$fault', '$userName', '$advanceAmount', '$totalAmount', '$deliveryStatus')";

if ($conn->query($sql) === TRUE) {
    echo "Record inserted successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close connection
$conn->close();
?>
