<?php
    $products=['apple','mango','banana','orange'];
    
    $produc=[
        ['one'=>'saba','too'=>'mango','there'=>'banana','for'=>'orange'],
        ['one'=>'apple','too'=>'mango','there'=>'banana','for'=>'orange'],
        ['one'=>'apple','too'=>'mango','there'=>'banana','for'=>'orange'],
    ];

    for ($i=0; $i <count($products); $i++) { 
        # code..
        echo $products[$i].'<br>';
    }
    foreach ($produc as $key) {
        # code...
        echo $key['one'].'<br>';
    }

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
        <ul>
            <?php foreach ($products as $prod){ ?>
    </h1>
            <h3><li><?php echo $prod.'<br>'; ?></li></h3>
        </ul>
            <h1><?php } ?></h1>

   
</body>
</html>