<?php
$cookie_name = "user";
$cookie_value = "Jiban  sarkar";
setcookie($cookie_name, $cookie_value, time() + (3600 * 24 * 365), "/");
?>

<html>
    <head>
        <title>Cookie</title>
    </head>
<body>
    <?php
    error_reporting(0);
    if (isset($_COOKIE[$cookie_name])){
        echo "Cookie accepted, value: " . $cookie_value . "<br>";
    } else {
        echo "Cookie is not set yet" . "<br>";
    }
    //___________________delete cookie_____________________
    //$cookie_value="";
    //setcookie($cookie_name, $cookie_value, time() - 3600);
    //echo "cookie value:" . $cookie_value;
    ?>
</body>
</html>