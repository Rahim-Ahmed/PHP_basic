<?php
    define("age","30");//constant variable

    $var="KENO KENO KENOOO";
    $var2="She";

    echo $var. $var2."<br>";//add 2 string
    echo strlen($var)."<br>";
    // echo strtoupper($var);
    // echo strtolower($var);
    echo str_replace('h','W',$var2)."<br>"


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>
    <?php echo "kmn acho ";?>
    </h1>
    <p><?php echo "why so \"serious\"!! ".$var[0];?> <br> <?php echo "my age is: ".age;?> </p>
</body>
</html>