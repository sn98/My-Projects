<?php 
    /*
    session_start();

    if ($_SERVER['QUERY_STRING'] == 'noname')
    {
       // unset($_SESSION['name']);// clears a single variable
       session_unset(); //clears them all
    }
    $name = $_SESSION['name'] ?? 'Guest'; //?? id used to set default option
    
    // get cookie
   // $gender = $_COOKIE['gender'] ?? 'Unknown';
    */
    /* to be in the html tags
    <li class = "grey-text">Hello <?php echo htmlspecialchars($name)?></li> 
    <li class = "grey-text">(<?php echo htmlspecialchars($gender)?>)</li> 
    */
?>

<head>
    <title>UI/UX Department</title>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
    <style type = "text/css">
        .brand{
            background: #49A2B6 !important;
        }
        .brandtext{
            color: #49A2B6 !important;
            font-weight:bolder;
            font-size:1.3rem;
        }
        form{
            max-width: 460px;
            margin: 20px auto;
            padding: 20px;
        }
        .N-av{
            color: #49A2B6 ;
            font-size: 1 rem;
        }
        a:hover{
            color:grey;
        }
        .imgc{
            margin: 20px auto -15px;
            display: block;
            position:relative;
        }
        .minfo
        {
            color: #49A2B6 !important;
            font-weight:bold;
            font-size:1rem;
        }
    </style>

</head>
<body class = "grey lighten-4">
    <nav class="white z-depth-0">
        <div class = "container">
            <a href="index.php" class="brandtext">Our Members</a>
            <ul id = "nav-mobile" class= "right hide-on-small-and-down">
                <li><a class ="N-av" href="add.php">Add a Member</a></li>
                <li><a class ="N-av" href="group.php">Department/Groups</a></li>
            </ul>
        </div>
    </nav>
</body>