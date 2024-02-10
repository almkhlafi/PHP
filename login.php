
<?php include 'session.php'; ?>
<!DOCTYPE html>
<html>
<?php include 'templates/header.php';?>
<center><fieldset style="width:350px; margin-top:30%; border-radius:20px; border-width:4px; border-color:gray;">
    <legend style="color:grey ;font-size:1.5em;">Login</legend>
<form action="templates/session.php" method="POST">
<input type="text" name="username">

<input type="submit" name="submit" value="submit"> 
</form>

<?php 

if (!isset($_POST['username']) || empty($_POST['username'])) {
    echo '<p>Please enter a username.</p>';
}

?>

</fieldset></center>

</html>