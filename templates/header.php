<?php include 'cookies.php';?>
<?php 
session_start();
$username=$_SESSION['username'];
if(isset($_POST['exit'])){
    unset($_SESSION['username']);
    $username=$_SESSION['username'];
    header('refresh:2; ../userSession.php');
}
?>

<head>
<title>Pizza</title>

 <!-- Compiled and minified CSS -->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">


 <style type="text/css">
.brand{
    background: #cbb09c !important;
}
.brand-text{
    color:#cbb09c !important;
}
.form{
    max-width:460px;
    margin:20px auto;
    padding:20px;
}
.pizza{
    width:100px;
    margin:-40px auto 13px;
    display":block;
    position: relative;
    top: -30px;
}
.footer.section {
            background-color: #333;
            color: #fff;
            padding: 10px 0;
            text-align: center;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body class="grey lighten-4">
    <nav class="wite z-depth-0">
        <div class="container">
        <a href="orders.php" cass="brand-logo brand-text">Pizza </a>
        <ul id="nav-mobile" class="right hide-on-small-and-down"> 
            <li class="white-text">Hello! <?php echo htmlspecialchars($username);?><li>
         <li><a href="addOrder.php" class="btn brand z-depth-0">Add a Pizza</a></li>
</ul>
    </div>
</nav>