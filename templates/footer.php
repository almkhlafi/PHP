<head>
    <style>
        .section {
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
    </footer>
</body>
</html>