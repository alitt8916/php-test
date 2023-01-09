<?php

include 'config/db_connect.php';
if (isset($_POST['delet'])) {
    $id_to_delete = mysqli_real_escape_string($conn , $_POST['id-to-delete']);

    $sql = "DELETE FROM pizzas WHERE id =  $id_to_delete";

    if(mysqli_query($conn , $sql)){

        header('location: index.php');


    }else{
        echo 'Query error' . mysqli_error($conn);
    }
}

if (isset($_GET['id'])) {
    $id = mysqli_real_escape_string($conn , $_GET['id']);

    $sql = "SELECT * FROM pizzas WHERE id = $id ";

    $result = mysqli_query($conn , $sql);

    $pizza = mysqli_fetch_assoc($result);

    mysqli_free_result($result);

    mysqli_close($conn);

    // print_r($pizza);
}







?>

<!DOCTYPE html>
<html lang="en">
<?php include'templates/header.php'?>



    <div class="container center">
        <?php if($pizza){?>
            <h2><?php echo $pizza['title']?></h2>
            <p>created-by<?php echo $pizza['email'] ?></p>
            <p><?php echo $pizza['created_at'] ?></p>
            <h5>Ingredients</h5>
            <p><?php echo $pizza['ingredients'] ?></p>
            <form action="details.php" method="POST">
                <input type="hidden" name="id-to-delete" value="<?php echo $pizza['id']?>">
                <input type="submit" name="delet" value="DELET" class="btn brand">
            </form>
        <?php }else{?>
            <p>this pizza no exist</p>
        <?php }?>

        
    </div>











    
<?php include'templates/footer.php'?>
</html>