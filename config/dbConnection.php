
<?php
// Increase visit count
if (!isset($_COOKIE['visits'])) {
    $_COOKIE['visits'] = 0;
}
$_COOKIE['visits'] = $_COOKIE['visits'] + 1;
setcookie('visits', $_COOKIE['visits'], time()+3600*24);

// Database connection parameters
$servername = "localhost";
$username = "Pizza";
$password = "12345"; // Change this to your actual password
$database = "Pizza";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection Error: " . $conn->connect_error);
}

?>