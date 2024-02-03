<?php ?>
<!DOCTYPE html>
<html lang="en">

<?php
// The $conn to the database 
include 'config/dbConnection.php';

if (isset($_GET['id'])) {
    // Prepare and bind the statement
    $id = $_GET['id'];
    $sql = "SELECT * FROM PizzaInfo WHERE id = ?";
    if ($stmt = mysqli_prepare($conn, $sql)) {
        // Bind variables to the prepared statement as parameters
        mysqli_stmt_bind_param($stmt, "i", $id);
        
        // Execute the prepared statement
        if (mysqli_stmt_execute($stmt)) {
            // Get the result set
            $result = mysqli_stmt_get_result($stmt);

            // Fetch data
            $pizza = mysqli_fetch_assoc($result);

            // Print or process fetched data
          //  print_r($pizza);

            // Free result set
            mysqli_free_result($result);
        } else {
            echo "Error: " . mysqli_error($conn);
        }

        // Close statement
        mysqli_stmt_close($stmt);
    } else {
        echo "Error: " . mysqli_error($conn);
    }

    // Close connection
    mysqli_close($conn);
}

?>

    <?php include 'templates/header.php';?>
    <div class="container center">
        <?php if($pizza):?>
        <h4><?php echo htmlspecialchars($pizza['title']);?></h4>
        <p><?php echo htmlspecialchars($pizza['email']);?></p>
        <p><?php echo htmlspecialchars($pizza['created_at']);?></p>
        <h5>Ingredients</h5>
        <p><?php echo htmlspecialchars($pizza['ingredients']);?></p>
    <?php else:?>
        <h5>No such Pizza Exists!</h5>
        <?php endif;?>

    </div>
    <?php include 'templates/footer.php'?>

</html>