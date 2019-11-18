<?php 
    include('config/connect.php');
    //connect to database
    $conn = mysqli_connect('localhost', 'sean', 'qazwsx321', 'uiux department');

    //check connection
    if(!$conn){
        echo 'Connection error' . mysqli_connect_error();
    }

    //write the query to show all users

    $sql = 'SELECT id, fName, lName, empGroup FROM users ORDER BY created_at';

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
    <h4 class = "center grey-text">Our Staff</h4>
    <div class="container">
        <div class="row">
            <?php foreach($users as $user) { ?>
                <div class = "col s4 m3 l2">
                    <div class = "card z-depth-0">
                    <img class="imgc" src="contactImage.jpg" height = "100px" width = "100px">
                        <div class="card-content center">
                            <h6><?php echo htmlspecialchars($user['fName'] . " " . $user['lName'] ) ?></h6><br>
                            <a href="details.php?id=<?php echo $user['id']?>" class="minfo">More Info</a>
                        </div>
                    </div>
                </div>
            <?php }?>
        </div>
    </div>
</body>
<?php include('templates/footer.php'); ?>

</html>