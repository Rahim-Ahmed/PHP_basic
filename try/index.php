<?php
include('config/db_connect.php');
//write sql query
$sql='SELECT * FROM pizzas ORDER BY create_at';
//make query and get result
$result = mysqli_query($conn,$sql);

//fetch result as array
$pizza=mysqli_fetch_all($result,MYSQLI_ASSOC);


//free result from memory
mysqli_free_result($result);
//close conn
mysqli_close($conn);
// print_r($pizza);

//explor
// print_r(explode(',',$pizza[0]['ingredient']))
?>


<!DOCTYPE html>

<?php include('templates/header.php') ?>


<h4 class="center grey-text ">PIZZAS</h4>

<div class="container">
    <div class="row ">
      <?php foreach ($pizza as $pizz):?>
        <div class="col s6 md3 ">
            <div class="card z-depth-0 ">
                <div class="card-content center ">
                        <h6><?php echo htmlspecialchars($pizz['title']) ?></h6>
                        <ul>
                            <?php foreach(explode(',',$pizz['ingredient'])as $ing): ?>
                            <li><?php echo htmlspecialchars($ing); ?></li>

                            <?php endforeach; ?>
                        </ul>
                </div>
                <div class="card-action right-align">
                    <a href="details.php?id=<?php echo $pizz['id'] ?>" class="brand-text">More info</a>
                </div>
            </div>
        </div>

    <?php endforeach; ?>


    </div>

</div>
<div class="hudai center grey-text ">
<?php if(count($pizza) <= 2):?>
       <p> There are 2 pizza </p>
    <?php else: ?>
        <p> There are greater then <?php echo count($pizza); ?> pizza </p>
    <?php endif; ?>
</div>


<?php include('templates/footer.php') ?>
</html>