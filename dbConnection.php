
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

// Fetch pizza data from the database
$sql = 'SELECT title, ingredients, id FROM PizzaInfo ORDER BY created_at ';
$result = mysqli_query($conn, $sql);
if (!$result) {
    die("Error fetching pizza data: " . mysqli_error($conn));
}
$pizzas = mysqli_fetch_all($result, MYSQLI_ASSOC);

// Output pizza data
/*foreach ($pizzas as $pizza) {
    echo "<p>Title: " . $pizza['title'] . ", Ingredients: " . $pizza['ingredients'] . ", ID: " . $pizza['id'] . "</p>";
}*/

// Close connection
$conn->close();
?>