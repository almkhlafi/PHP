<?php 

session_start();

if(isset($_POST['username']) && !empty($_POST['username'])){
    $_SESSION['username'] = $_POST['username'];
    header('refresh:2;index.php');
    exit(); // Ensure script stops execution after redirect
}
?>


<!DOCTYPE html>
<html>
<?php include 'template/header.php';?>

<form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
<input type="text" name="username">
<input type="submit" name="submit" value="submit"> 
</form>

<?php 
if (!isset($_POST['username']) || empty($_POST['username'])) {
    echo '<p>Please enter a username.</p>';
}
?>
<?php include 'template/footer.php';?>

</html>