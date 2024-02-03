<?php include 'templates/header.php'; ?>
<?php include 'dbConnection.php';?>
<?php 
// Fetch pizza data from the database
$sql = 'SELECT title, ingredients, id FROM PizzaInfo ORDER BY created_at ';
$result = mysqli_query($conn, $sql);
if (!$result) {
    die("Error fetching pizza data: " . mysqli_error($conn));
}
$pizzas = mysqli_fetch_all($result, MYSQLI_ASSOC);

// Output pizza data
/*foreach ($pizzas as $pizza) {
    echo "<p>Title: " . $pizza['title'] . ", Ingredients: " . $pizza['ingredients'] . ", ID: " . $pizza['id'] . "</p>";
}*/

// Close connection

$conn->close();

?>

<h4 class="center grey-text">Pizzas!</h4>
<div class="container">
    <div class="row">
        <?php 
        
            foreach($pizzas as $pizza): ?>
        <div class="col s6 md3">
            <div class="card z-depth-0">
                <div class="card-content center">
                    <h6><?php echo htmlspecialchars($pizza['title']);?></h6>
                    <ul>

                        <?php foreach(explode(',',$pizza['ingredients']) as $ing):?>

                        <li><?php echo htmlspecialchars($ing) ?>
                            <li>
                                <?php endforeach; ?>
                        </ul>
                    </div>
                    <div class="card-action right-align">
                        <a class="brand-text" herf="#">more into</a>
                    </div>
                </div>
            </div>
            <?php endforeach;?>
            <!-- more readable when for closing brackets-->
        </div>
        <?php if(count($pizzas)>0){?> 
                            <p style="background-color:lightgray;">There are :<?php echo count($pizzas); ?></p>
                        <?php }else{?>
                            <p style="background-color:lightgray;">No Pizzz</p>
                            <?php }?>
    </div>
    <?php include 'templates/footer.php'; ?>