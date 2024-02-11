<?php
session_start();
// Check if the session variable 'username' exists
if(!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit(); // Make sure to stop execution after redirecting
}
// User is logged in, continue with the rest of your code...
?>
