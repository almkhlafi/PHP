<?php 
session_start();
if(isset($_POST['submit']) && !empty($_POST['username'])){
    $_SESSION['username'] = $_POST['username'];
    echo  $_SESSION['username'];
    header('Location:../index.php');

   // Ensure script stops execution after redirect
}else  header('Location:/opt/lampp/htdocs/PHP_Course/login.php');
?>
