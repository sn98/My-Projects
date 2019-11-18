<?php
    // ---------> Ternary opperators

    $score = 50;
    /*
    if($score > 40 ){
        echo "High Score";
    }else{
        echo "low score";
    }
    */

    $val = $score > 40? 'high score' : 'lowscore';
    //echo $val;
?>

<?php 
    // -------------> SuperGlobals

    /*echo $_SERVER['SERVER_NAME'] . '<br />';
    echo $_SERVER['REQUEST_METHOD'] . '<br />';
    echo $_SERVER['SCRIPT_FILENAME'] . '<br />';
    echo $_SERVER['PHP_SELF'] . '<br />';*/
?>

<?php 
    // -------------> Sessions
   /*
    if(isset($_POST['submit'])){

        setcookie('gender', $_POST['gender'], time()+86400);
        session_start();

        $_SESSION['name'] = $_POST['name'];

       // echo $_SESSION['name'];

        header('Location: index.php');

    }
   */
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
        <input type="" name = "name">
        <select name="gender">
            <option value="male">male</option>
            <option value="female">female</option>
        </select>
        <input type="submit" name="submit" value = "submit">
    </form>
</body>
</html>