<html>
    <head>
        <title>Admin Welcome!</title>
    </head>
    <body>
        <?php
        session_start();
        if($_SESSION["check"] == 1){
            echo "<h1>Welcome, Admin!</h1>";
            echo "<h1>You can now access the administrative functions</h1>";
            echo "<a href = 'logout.php'><input type = 'button' value = 'Logout'></a>";
        }else{
            echo "Illegal Access!";
            header("Refresh:3; url='login.php'");
        }
        ?>
    </body>
</html>