<?php 
session_start();
$username=$_SESSION['username'];
if(isset($_POST['exit'])){
    session_destroy();
    unset($_SESSION['username']);
    $username=$_SESSION['username'];
    header('refresh:0; ../login.php');
}
?>