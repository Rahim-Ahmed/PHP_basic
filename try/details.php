<?php 
    include('config/db_connect.php');
    
    //checking req id
    if(isset($_GET['id'])){
    $id= mysqli_real_escape_string($conn,$_GET['id']);

    $sql="SELECT * FROM pizzas WHERE id= '$id'";

    $result = mysqli_query($conn,$sql);

    $pizza=mysqli_fetch_assoc($result);

    mysqli_free_result($result);
    mysqli_close($conn);

   // print_r($pizza);

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
<?php include('templates/header.php') ?>

    <div class="container center">
        <?php if($pizza): ?>
            <h4> <?php echo htmlspecialchars($pizza['title']) ?> </h4>
            <p>Created By: <?php echo htmlspecialchars($pizza['email']) ?> </p>
            <p>Time: <?php echo date($pizza['create_at']) ?> </p>
            <h5>Ingreditents are-</h5>
            <p><?php echo htmlspecialchars($pizza['ingredient']) ?></p>
        <?php else: ?>

        <?php endif ?>
    </div>


<?php include('templates/footer.php') ?>




</body>
</html>