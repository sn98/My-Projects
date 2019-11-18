<?php 
    include('config/connect.php');
    //connect to database
    $conn = mysqli_connect('localhost', 'sean', 'qazwsx321', 'uiux department');

    //check connection
    if(!$conn){
        echo 'Connection error' . mysqli_connect_error();
    }

    //write the query to show all users
    $sql = "SELECT * FROM users ORDER BY empGroup";

    //make query and get result
    $result = mysqli_query($conn, $sql);

    //fetch the resulting rows as an array
    $users = mysqli_fetch_all($result, MYSQLI_ASSOC);

    //free result form memory
    mysqli_free_result($result);
    
    //close connection to the database
    mysqli_close($conn);

    //print_r($users);

    //explode fuction is used to turn commma seperated data turn it into an array
    /*
    print_r(explode(',', $users[0]['empGroup'])); // this prints it in a list form
    <ul>
        <?php foreach(explode(',', $users['empGroup']) as $ing) { ?>
            <li><?php echo htmlspecialchars($ing) ?></li>
        <?php } ?>    
    </ul>
    */

?>


<!DOCTYPE html>
<html lang="en">

<?php include('templates/header.php'); ?>



<body>
    <h4 class = "center grey-text">Groups</h4><br>

    <div class="container">
        <div class="row">
        <h5 class = "center grey-text">Design</h5>
        <div class = "card z-depth-1">
        <div class="card-content center">
            <?php foreach($users as $user) { ?>
                <?php if(strpos($user['empGroup'], 'Design') !== false){?>
                        <h6><?php echo htmlspecialchars($user['fName'] . " " . $user['lName'] ) ?></h6>                     
                <?php }?>
            <?php }?>
            </div>
            </div>



        <h5 class = "center grey-text">Front End</h5>
        <div class = "card z-depth-1">
        <div class="card-content center">
            <?php foreach($users as $user) { ?>
                <?php if(strpos($user['empGroup'], 'Front End') !== false){?>
                        <h6><?php echo htmlspecialchars($user['fName'] . " " . $user['lName'] ) ?></h6>                     
                <?php }?>
            <?php }?>
            </div>
            </div>
    

        
        <h5 class = "center grey-text">Back End</h5>
        <div class = "card z-depth-1">
        <div class="card-content center">
            <?php foreach($users as $user) { ?>
                <?php if(strpos($user['empGroup'], 'Back End') !== false){?>
                        <h6><?php echo htmlspecialchars($user['fName'] . " " . $user['lName'] ) ?></h6>                     
                <?php }?>
            <?php }?>
            </div>
            </div>


       
        <h5 class = "center grey-text">App Development</h5>
        <div class = "card z-depth-1">
        <div class="card-content center">
            <?php foreach($users as $user) { ?>
                <?php if(strpos($user['empGroup'], 'App Development') !== false){?>
                        <h6><?php echo htmlspecialchars($user['fName'] . " " . $user['lName'] ) ?></h6>                     
                <?php }?>
            <?php }?>
            </div>
            </div>
    </div>
            
</body>
<?php include('templates/footer.php'); ?>

</html>

