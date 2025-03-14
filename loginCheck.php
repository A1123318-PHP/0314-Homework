<html>
    <head>
    </head>
    <body>
        <?php
        session_start();

        $defaultAdminName = "Admin";  // not recommanded method to check password
        $defaultAdminbPwd = "Admin";
        $defaultUserName = "User";
        $defaultUserPwd = "User";

        $userName = $_POST["userName"];
        $userPassword = $_POST["userPassword"];
        $cookieTime = strtotime("+300 seconds",time());
        if($userName == $defaultAdminName && $userPassword == $defaultAdminbPwd){
            echo "Admin Login Success";
            $_SESSION["check"] = 1; // 1 = admin, 2 = normal user
            setcookie("userName",$defaultAdminName,$cookieTime);
            header("location:adminWelcome.php");
        }else if($userName == $defaultUserName && $userPassword == $defaultUserPwd){
            echo "User Login Success";
            $_SESSION["check"] = 2; // 1 = admin, 2 = normal user
            setcookie("userName",$defaultUserName,$cookieTime);
            header("location:userWelcome.php");
        }else{
            echo "<h1>Login Failed, will send you back to login again</h1>";
            setcookie("userName", "", time() - 3600); // delete the cookie to make the logic reasonable
            header("Refresh:3; url='login.php'");
        }
        date_default_timezone_set("Asia/Taipei");
        echo "<br>Time Since 1970/01/01 00:00:00(in seconds): ".time()."<br>";
        echo "Current Time(UTC+8): ".date("Y-m-d H:i:s");
        ?>
    </body>
</html>