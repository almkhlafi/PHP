
<footer class="section">
        <div class="center gray-text">
            Copy right 2024 Pizzas</div>
        <?php
        // Additional server information
        echo "<div class='center gray-text'>";
        echo "Server Name: " . $_SERVER['SERVER_NAME'] . "<br>";
        echo "Server Method: " . $_SERVER['REQUEST_METHOD'] . "<br>";
        echo "Script Filename: " . $_SERVER['SCRIPT_FILENAME'] . "<br>";
        echo "PHP Self: " . $_SERVER['PHP_SELF'];
        echo "</div>";
        ?>
        <form action="templates/killsessions.php" method="POST">
    <div class="container">
        <ul id="nav-mobile" class="right hide-on-small-and-down">
            <li class="white-text">Hello!
                <?php echo htmlspecialchars($_SESSION['username']);?>
            <li>
            <li><input type="submit" name="exit" class="btn brand z-depth-0"></li>
        </ul>
    </div>
</form>
</footer>
</body>
</html>