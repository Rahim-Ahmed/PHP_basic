<?php 
 if(isset($_POST['Submit'])){
    session_start();
    $_SESSION['name']=$_POST['name'];
    header('Location: index.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sand Box</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
    <input type="text"  name="name">
    <input type="submit" value="Submit" name="Submit">
    </form>
    
</body>
</html>