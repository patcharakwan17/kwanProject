<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Wedding Studio</title>
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        
        <!-- font awlay some -->
        <link rel="stylesheet" type="text/css" href="/webfontswithcss1/css/fontawesome-all.min.css">
        
        <link href="https://fonts.googleapis.com/css?family=Athiti|Indie+Flower|Montserrat|Quicksand|Raleway|Sunflower:300" rel="stylesheet">
        
        <style>
            body{
                margin: 0;
                background-color: #f7fed6;
            }
            .myNav{
                width: 100%;
                height: 45px;
                float: left;
                background-color: #df4118;
                position: absolute;
                font-family: 'Indie Flower', cursive;
            }
            .navTextHead a{
                text-decoration: none;
            }
            .logo a{
                margin-top: 10px;
                color: white;
                
            }
            .logoa{
                margin-left: 2%;
                font-size: 30px;
            }
            .likRight{
                float: right;
                font-size: 25px;
                margin-right: 15px;
            }
            .caption{
                color: dimgray;
            }
            
        </style>
    </head>
    <body>
        <nav class="navbar navbar-expand-md myNav navbar-dark">
            <a class="navbar-brand" href="{{ url('/') }}">Wedding Studio</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="{{ route('product') }}">Product</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('promotion') }}">Promotion</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>  
                    <li class="nav-item"><a class="nav-link" href="#">Map</a></li>  
                </ul>
            </div>  
        </nav>
        <br>
        <main class="py-4">
            <center>
                @yield('content')
            </center>
            <br>
            <br>
            <br>
        </main>
        
        
        
        
        <!--
        <div class="myNav">
            <div class="navTextHead">
                <div class="logo">
                    <a href="#" class="logoa">Wedding Studio</a>
                    <a href="#" class="likRight">Map</a>
                    <a href="#" class="likRight">Contact</a>
                    <a href="#" class="likRight">Promotion</a>
                    <a href="#" class="likRight">Product</a>
                </div>
            </div>
        </div>
-->
    </body>
</html>


