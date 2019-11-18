<?php 
    include('config/connect.php');

    $fname = $lname = $email = $pnum = $group = $address = '';
    $errors = array('fname' => '',  'lname' => '',  'email' => '',  'pnum' =>'',  'group' => '',  'address' => '', );


    if(isset($_POST['submit'])) //isset echecks to see if a certain value has been set
    {
        if(empty($_POST['fname'])){
            $errors['fname'] = 'a first name is required <br />';
        }else{
            $fname = $_POST['fname'];
        }

        if(empty($_POST['lname'])){
            $errors['lname'] = 'a last name is required <br />';
        }else{
            $lname = $_POST['lname'];
        }

        if(empty($_POST['email'])){
            $errors['email'] = 'an email is required <br />';
        }else{
            $email = $_POST['email'];
            if(!filter_var($email, FILTER_VALIDATE_EMAIL))
            {
                $errors['email'] = 'email must be a valid email address';
            }
        }

        if(empty($_POST['pnum'])){
            $errors['pnum'] = 'a phone number is required <br />';
        }else{
            $pnum = $_POST['pnum'];
            if(!preg_match('/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/', $pnum))
            {
                $errors['pnum'] = 'not a valid phone number <br /> phone number must be in the form: <br /> ###-###-####<br />';
            }
        }

        if(empty($_POST['group'])){
            $errors['group'] = 'a group is required <br />';
        }else{
            $group = $_POST['group'];
            if(!preg_match('/^([0-9a-zA-Z\s])+(,\s*[0-9a-zA-Z\s]*)*$/', $group))
            {
                $errors['group'] = 'only letters can be used<br /> use a comma to seperate each group';
            }
        }

        if(empty($_POST['address'])){
            $errors['address'] = 'an address is required <br />';
        }else{
            $address = $_POST['address'];
        }

        if(array_filter($errors)){
            //echo "there are errors in the form";
        }else{
            //echo "form is valid";
            $fname = mysqli_real_escape_string($conn,$_POST['fname']);
            $lname = mysqli_real_escape_string($conn,$_POST['lname']);
            $email = mysqli_real_escape_string($conn,$_POST['email']);
            $pnum = mysqli_real_escape_string($conn,$_POST['pnum']);
            $group = mysqli_real_escape_string($conn,$_POST['group']);
            $address = mysqli_real_escape_string($conn,$_POST['address']);

            //create sql
            $sql = "INSERT INTO users(fName,lName,email,pnum,empGroup,address) VALUES('$fname' ,'$lname' ,'$email' ,'$pnum' ,'$group' ,'$address')";
            
            //save to db and check

            if(mysqli_query($conn, $sql)){
                //success
                header('location: index.php');
            }else{
                //error
                echo 'query error: ' . mysqli_error($conn);
            }
        }

    }

?>

<!DOCTYPE html>
<html lang="en">

<?php include('templates/header.php'); ?>

<section class = "container grey-text">
    <h4 class = "center">Add A Member</h4>
    <form class = "white" action="add.php" method="POST">

        <label>Employee first name: </label>
        <input type="text" name="fname" value="<?php echo htmlspecialchars($fname) ?>">
        <div class = "red-text">
            <?php echo $errors['fname']; ?>
        </div>
        <label>Employee last name: </label>
        <input type="text" name="lname" value="<?php echo htmlspecialchars($lname) ?>">
        <div class = "red-text">
            <?php echo $errors['lname']; ?>
        </div>
        <label>Employee email: </label>
        <input type="text" name="email" value="<?php echo htmlspecialchars($email) ?>">
        <div class = "red-text">
            <?php echo $errors['email']; ?>
        </div>
        <label>Employee phone number: </label>
        <input type="text" name="pnum" value="<?php echo htmlspecialchars($pnum )?>">
        <div class = "red-text">
            <?php echo $errors['pnum']; ?>
        </div>
        <label>Employee Group: </label>
        <input type="text" name="group" value="<?php echo htmlspecialchars($group) ?>">
        <div class = "red-text">
            <?php echo $errors['group']; ?>
        </div>
        <label>Employee address: </label>
        <input type="text" name="address" value="<?php echo htmlspecialchars($address) ?>">
        <div class = "red-text">
            <?php echo $errors['address']; ?>
        </div>

        <div class ="center">
            <input type="submit" name="submit" value="submit" class ="btn brand z-depth-0">
        </div>
    </form>
</section>

<?php include('templates/footer.php'); ?>

<head>
</head>
<body>
    
</body>
</html>