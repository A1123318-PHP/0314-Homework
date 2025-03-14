<html>
    <head>
        <title>User Welcome!</title>
    </head>
    <body>
        <?php
        session_start();
        if($_SESSION["check"] == 2){
            echo "<h1>Welcome User!</h1>";
            echo "<h1>You can now use the system functions</h1>";
            echo "<a href = 'logout.php'><input type = 'button' value = 'Logout'></a>";
        }else{
            echo "Illegal Access!";
            header("Refresh:3; url='login.php'");
        }
        ?>
    </body>
</html>