<?php 
    include('config/db_connect.php');

    if(isset($_POST['delete'])){
        $id_to_delete=mysqli_real_escape_string($conn,$_POST['id_to_delete']);
        $sql="DELETE FROM pizzas WHERE id='$id_to_delete'";

        if(mysqli_query($conn,$sql)){
         header('Location: index.php');
        }else{
            echo "query error".mysqli_error($conn);
        }
    }

    if(isset($_POST['back'])){
        header('Location: index.php');
    }

    //checking req id
    if(isset($_GET['id'])){
    $id= mysqli_real_escape_string($conn,$_GET['id']);

    $sql="SELECT * FROM pizzas WHERE id= '$id'";

    //echo $_GET['id'] ;

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

    <div class="container center white">
        <?php if($pizza): ?>
            <h4> <?php echo htmlspecialchars($pizza['title']) ?> </h4>
            <p>Created By: <?php echo htmlspecialchars($pizza['email']) ?> </p>
            <p>Time: <?php echo date($pizza['create_at']) ?> </p>
            <h5>Ingreditents are-</h5>
            <p><?php echo htmlspecialchars($pizza['ingredient']) ?></p>

        <form action="details.php" method="POST"> 
            <input type="hidden" name="id_to_delete" value="<?php echo $pizza['id'] ?>">
            <div class="container grey lighten-2 col "> 
            <input type="Submit" name="delete" value="delete" class="btn brand z-depth-0">
            <input type="Submit" name="back" value="Back" class="btn brand z-depth-0">
            </div>
           
        </form>
        <?php else: ?>
            <h5>No such pizza exist!!</h5>
        <?php endif ?>
    </div>


<?php include('templates/footer.php') ?>




</body>
</html>