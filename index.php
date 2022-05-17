<!DOCTYPE html>

<?php
$cookie_name = "user";
$cokie_value = "Mikołaj Białecki";
setcookie($cookie_name, $cokie_value, time() + (10), "/")
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
    session_start();
 
    if(isset($_SESSION['views'])){
       $_SESSION['views'] = $_SESSION['views']+ 1;
    }else{
       $_SESSION['views'] = 1;
    }
    echo "Total page views = ". $_SESSION['views']."<br>";?>
</head>

<body>
    <?php
    if (!isset($_COOKIE[$cookie_name])) {
        echo "cookie named " . $cookie_name . " is not set";
    } else {
        echo "cookie named " . $cookie_name . " set!<br>";
        echo "Value is: " . $_COOKIE[$cookie_name];
    }
    
    ?>
</body>

</html>