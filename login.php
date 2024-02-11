<?php 
session_start();

// Check if the user is already logged in
if(isset($_SESSION['username'])){
    header('Location: addOrder.php'); 
    exit();
}

// Check if the form is submitted
if(isset($_POST['submit'])){
    // Check if username is provided
    if (isset($_POST['username']) && !empty($_POST['username'])) {
        // Set the username in session
        $_SESSION['username'] = $_POST['username'];
        // Redirect to addOrder.php after successful login
        header('Location: addOrder.php'); 
        exit();
    } else {
        // Display error if username is not provided
        $error = "Please enter a username.";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>

<center><fieldset style="width:350px; margin-top:30%; border-radius:20px; border-width:4px; border-color:gray;">
    <legend style="color:grey ;font-size:1.5em;">Login</legend>
    <form action="" method="POST">
        <input type="text" name="username">
        <?php 
        // Display error message if username is not provided
        if (isset($error)) {
            echo '<p>'.$error.'</p>';
        }
        ?>
        <input type="submit" name="submit" value="Submit"> 
    </form>
</fieldset></center>

</body>
</html>
