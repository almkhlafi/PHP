<?php include 'templates/header.php'; ?>
<?php include 'dbConnection.php';?>
<h4 class="center grey-text">Pizzas!</h4>
    <div class="container">
        <div class="row">
            <?php foreach($pizzas as $pizza){ ?>
            <div class="col s6 md3">
                <div class="card z-depth-0">
                    <div class="card-content center">
                        <h6><?php echo htmlspecialchars($pizza['title']);?></h6>
                        <div>
                            <?php echo htmlspecialchars($pizza['ingredients']);?></div>
                    </div>
                    <div class="card-action right-align">
                        <a class="brand-text" herf="#">more into</a>
                    </div>
                </div>
            </div>
            <?php }?>
        </div>
    </div>  <?php include 'templates/footer.php'; ?>