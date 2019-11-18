<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
            
    <style>
        body{
            background-color: grey;
        }
        nav ul {
            list-style: none;
            margin: 0 2px;
            padding: 0;
        }

        nav li {
            padding: 5px 5px;
        }
    </style>
    
    <title>APL Project</title>
</head>
<body>
    @section('navbar')
    <header>
        <nav class="nav-wrapper transparent z-depth-0 hide-on-none">
            <div>
                <a href="" class="sidenav-trigger show-on-large" data-target="slide-out">
                    <i class="material-icons">menu</i>
                </a>
                <ul class="sidenav grey lighten-2" id="slide-out">
                    <li><a href="home">Home</a></li>
                    <li><a href="about">About</a></li>
                    <li><a href="operational">Operataional Semantics</a></li>
                    <li><a href="denotational">Denotaional Semantics</a></li>
                    <li><a href="axiomatic">Axiomatic Semantics</a></li>
                    <li><a href="https://www.google.com/">Exit</a></li>
                </ul>
            </div>
        </nav>
    </header>
    @yield('content')

</body>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
<script>
        $(document).ready(function() {
            $('.sidenav').sidenav();
        });
</script>
</html>