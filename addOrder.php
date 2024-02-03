<?php 
$email=$title=$ingrediant='';
$error=array('email'=>'','title'=>'','ingredients'=>'');
//to prevent XSS Attaxks we should write htmlspecialchars();Whenever we output anthing and for all inputs within globals[] with convert the input that come from them into html text 
 if(isset($_POST['submit']))
{
    echo $_POST['submit']."With =><br>";
    if(empty($_POST['email']))
            $error['email']= "An Email is required !!<br>";
    else {
        $email=$_POST['email'];
        if(!filter_var($email,FILTER_VALIDATE_EMAIL))
        {
            $error['email']="Emali Must be Valide email address<br>"; 
        }
        else{
        echo htmlspecialchars($_POST['email']);
        echo "<br>";
            }

        }
    if(empty($_POST['title']))
    $error['title']=  "A title is required <br>";
    else{
        $title=$_POST['title'];
        //Valudation Regular Expressions (RegEx)
        if(!preg_match('/^[a-z A-Z]+$/',$title))
        {
            $error['title']= "Title must be letters and spaces only<br>";  
        }else{
        echo htmlspecialchars($_POST['title']);
        echo "<br>";            
            }
    }
    if(empty($_POST['ingredients']))
    $error['ingredients']= "At least one ingrediant is required <br>";
        else
        {
            $ingrediant=$_POST['ingredients'];
        if(!preg_match('/^([a-zA-Z]+)(,\s*[a-zA-Z\s]*)*$/',$ingrediant))
        {
            $error['ingredients']=  "Title must be a comma separated list<br>";  
        }else{
        echo  htmlspecialchars($_POST['ingredients']);
            }
}
include 'config/dbConnection.php';

// Check if form has errors
if (array_filter($error)) {
    echo "form has an error<br>";
} else {
    // Check if POST variables are set
    if (isset($_POST['email'], $_POST['title'], $_POST['ingredients'])) {
        /*We use mysqli_real_escape_string() to prevent any malicious Code inserted by user (XSS)*/
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $title = mysqli_real_escape_string($conn, $_POST['title']);
        $ingredient = mysqli_real_escape_string($conn, $_POST['ingredients']);

        $sql = "INSERT INTO PizzaInfo (title, ingredients, email) VALUES ('$title', '$ingredient', '$email')";

        if (mysqli_query($conn, $sql)) {
            // Insertion successful
            echo "<mark><br>Inserted successfully</mark>";
            header('refresh:4;orders.php');
        } else {
            echo 'Query Error: ' . mysqli_error($conn);
        }
    } else {
        echo "One or more POST variables are not set.";
    }
    $conn->close();
    
}

}

?>

    <?php include 'templates/header.php'; ?>

    <section class="container grey-text">
        <h4 class="center">Add Pizza</h4>
        <form class="white" action="" method="POST">
            <label>Email:</label>
            <input type="text" name="email" value="<?php echo htmlspecialchars("$email"); ?>">
            <div class="red-text"><?php echo $error['email']; ?></div>
            <label>Pizza Title:</label>
            <input type="text" name="title" value="<?php echo htmlspecialchars("$title"); ?>">
            <div class="red-text"><?php echo $error['title']; ?></div>
            <label>Ingredients (comma separated):</label>
            <input type="text" name="ingredients" value="<?php echo htmlspecialchars("$ingrediant"); ?>">
            <div class="red-text"><?php echo $error['ingredients']; ?></div>
            <div class="center">
                <input type="submit" name="submit" value="submit" class="btn brand z-depth-0" >
            </div>
        </form>
 