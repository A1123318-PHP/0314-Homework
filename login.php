<html>
    <head>
        <title>系統登入</title>
    </head>
    <body>
        <h1>Please login to use this system</h1>
        
        <?php
        if(isset($_COOKIE["userName"])){
            echo "<h2>"." Welcome back! ".$_COOKIE['userName']."!</h2>";
        }
        echo "<form action='loginCheck.php' method = 'post'>";
            echo "<h2>Please enter your username: <input type = 'text' name = 'userName'></h2>";
            echo "<h2>Please enter your password: <input type = 'password' name = 'userPassword'></h2>";
            echo "<input type = 'submit'>";
            echo "</form>";

            date_default_timezone_set("Asia/Taipei");
            echo "Time Since 1970/01/01 00:00:00(in seconds): ".time()."<br>";
            echo "Current Time(UTC+8): ".date("Y-m-d H:i:s");
        ?>
    </body>
</html>