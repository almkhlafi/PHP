<?php 
if(isset($_POST['submit'])){
session_start();
echo $_SESSION['username']=$_POST['username'];

header('Location:index.php');
}

?>


<!DOCTYPE html>
<html>
<?php include 'template/header.php';?>

<form action="<?php $_SERVER['PHP_SELFE']?>" method="POST">
<input type="text" name="username">
<input type="submit" name="submit" value="submit"> 
</form>
<?php include 'template/footer.php';?>

</html>