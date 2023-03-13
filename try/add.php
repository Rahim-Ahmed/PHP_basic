<?php
    include('config/db_connect.php');
    // if(isset($_GET['submit']) ){
    //     echo $_GET['email'] .$_GET['title'].$_GET['Ingredients'];
    // }
    $email=$title=$Ingredients='';
    $err=array('email'=>'','title'=>'','Ingredients'=>'');
    if(isset($_POST['submit']) ){
        // echo htmlspecialchars( $_POST['email']).htmlspecialchars( $_POST['title']).htmlspecialchars( $_POST['Ingredients']);

        //CHECK EMAIL
        if(empty($_POST['email'])){
            $err['email']= " email required <br>";
        }
        else{
            $email=$_POST['email'];
            if (!filter_var($email,FILTER_VALIDATE_EMAIL)) {
                $err['email']= "valid email required<br>";
            }
              
            
        }

        if(empty($_POST['title'])){
            $err['title']=  " title required <br>";
        }else{
            $title =$_POST['title'];
            if (!preg_match('/[a-zA-Z\s]+$/',$title)) {
                $err['title']= " Char and space only <br>";
            }
        }
        

        if(empty($_POST['Ingredients'])){
            $err['Ingredients']= " Ingredients required <br>";
        }else{
            $Ingredients =$_POST['Ingredients'];
            if (!preg_match('/([a-zA-Z\s]+)(,\s*[a-zA-Z\s]*)*$/',$Ingredients)) {
                $err['Ingredients']= " coma sep list <br>";
            }
        }

        if (array_filter($err)) {
            # code...
           // echo "form is not valid";
        }else{
            $email= mysqli_real_escape_string($conn,$_POST['email']);
            $title= mysqli_real_escape_string($conn,$_POST['title']);
            $Ingredients= mysqli_real_escape_string($conn,$_POST['Ingredients']);
          
            $sql="INSERT INTO pizzas (title,ingredient,email) VALUES('$title','$Ingredients','$email')";

            if(!mysqli_query($conn,$sql)){
                echo "query error".mysqli_error($conn);
            }
            else{
                header('Location: index.php');
            }
        }


    }


?>


<!DOCTYPE html>
<?php include('templates/header.php') ?>
<section class="container grey-text">
  <h4 class="center">Add a pizza</h4>
  
  <form class="white" action="app.php" method='POST'>
    <label for="">Your Email:</label>
    <input type="text" name='email' value="<?php echo htmlspecialchars($email);?>" > 
    <div class="red-text"><?php echo $err['email']; ?></div>

    <label for="">Pizza Title:</label>
    <input type="text" name='title' value="<?php echo htmlspecialchars($title) ;?>">
    <div class="red-text"><?php echo $err['title']; ?></div>

    <label for="">Ingredients:</label>
    <input type="text" name='Ingredients' value="<?php echo  htmlspecialchars($Ingredients);?>">
    <div class="red-text"><?php echo $err['Ingredients']; ?></div>

    <div class="center">
        <input type="submit" value='submit' name='submit' class="btn brand  z-depth-0">
    </div>

  </form>
</section>
<?php include('templates/footer.php') ?>
</html>