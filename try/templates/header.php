<?php 
  session_start();
   if($_SERVER['QUERY_STRING']=='noname'){
    unset($_SESSION['name']);
   }
  $name=$_SESSION['name'] ?? 'Guest';
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ninja pizza</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
   <link rel="stylesheet" href="istyle.css">
   

</head>
<body class="grey lighten-4">
  <nav class="white z-depth-0">
    <div class="container">
        <a href="index.php" class="brand-logo center brand-text">Ninja pizza</a>
        <ul id="nav-mobile" class="right hide-on-small-and-down"> 
          <li class="brand-text" >Hello, <?php echo htmlspecialchars($name);?> </li>
            <li><a href="add.php" class='btn brand z-depth-0'>Add a pizza</a></li>
        </ul>
    </div>

  </nav>
