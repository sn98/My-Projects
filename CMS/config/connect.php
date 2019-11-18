<?php
    $conn = mysqli_connect('localhost', 'sean', 'qazwsx321', 'uiux department');

    //check connection
    if(!$conn){
        echo 'Connection error' . mysqli_connect_error();
    }

?>