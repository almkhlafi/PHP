
<!DOCTYPE html>
<html>

<?php
if (!isset($_COOKIE['visits']))
 $_COOKIE['visits'] = 0;

$_COOKIE['visits'] = $_COOKIE['visits'] + 1;
setcookie('Pizza', $_COOKIE['visits'], time()+3600*24);
?>

<?php include 'add.php'; ?> 
<?php include 'templates/footer.php'; ?>
</html>