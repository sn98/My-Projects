<?php

    include('config/connect.php');
    if(isset($_POST['delete'])){

        $id_to_delete = mysqli_real_escape_string($conn, $_POST['id_to_delete']);

        //make sql
        $sql = "DELETE FROM users WHERE id = $id_to_delete";

       if(mysqli_query($conn, $sql))
       {
            header('Location: index.php');
       }else{
           echo 'query error: ' . mysqli_error($conn);
       }
    }



    //check GET request id parameter
    if(isset($_GET['id'])){

        $id = mysqli_real_escape_string($conn, $_GET['id']);

        //make sql
        $sql = "SELECT * FROM users WHERE id = $id";

        //get the query results
        $result = mysqli_query($conn, $sql);

        //fetch results in array format
        $user = mysqli_fetch_assoc($result);

        mysqli_free_result($result);
        mysqli_close($conn);
    }

?>

<!DOCTYPE html>
<html>

<?php include('templates/header.php'); ?>
    <?php include('config/connect.php'); ?>
    <div class="container center">
        <?php if($user){?>
            <h4><?php echo htmlspecialchars($user['fName'] . " " . $user['lName']); ?></h4>
            <h6>_______________________________________________________________________</h6>
            <p>Email: <?php echo htmlspecialchars($user['email']); ?></p>
            <p>Contact Number: <?php echo htmlspecialchars($user['pnum']); ?> <br><br></p>
            <h6>Groups: </h6>
            <p><?php echo htmlspecialchars($user['empGroup']); ?><br><br></p>
            <p>Address: <?php echo htmlspecialchars($user['address']); ?></p>
            <p>Record created at: <?php echo htmlspecialchars($user['created_at']); ?></p>

            <!--Delete form-->
            <form action = "details.php" method="POST">
            <input type="hidden" name= "id_to_delete" value="<?php echo $user['id'] ?>">
            <input type="submit" name= "delete" value="Delete" class = "btn brand z-depth-0">
            </form>


        <?php }else{?>
            <h5>No Such Employee</h5>
        <?php }?>

    </div>

<?php include('templates/footer.php'); ?>

</html>