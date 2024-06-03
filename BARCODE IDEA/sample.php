<?php
// Database connection details
$host = 'localhost';
$username = 'your_username';
$password = 'your_password';
$dbname = 'your_database_name';

// Connect to the database
$conn = new mysqli($host, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form has been submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Retrieve the barcode input from the form
    $barcode = $_POST['barcode'];

    // Insert the barcode input into the database
    $sql = "INSERT INTO barcodes (barcode) VALUES ('$barcode')";
    if ($conn->query($sql) === TRUE) {
        echo "Barcode input saved successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Save Barcode Input</title>
</head>
<body>
    <h1>Save Barcode Input</h1>
    <form method="post">
        <label for="barcode">Barcode:</label>
        <input type="text" name="barcode" id="barcode">
        <button type="submit">Save</button>
    </form>
</body>
</html>
