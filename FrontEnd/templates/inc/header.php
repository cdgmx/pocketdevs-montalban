


<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/main.css" />
        <link rel="stylesheet" href="css/mediaquery.css" />

        <link rel="stylesheet" href="css/blog.css">
       
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    </head>
    <body>
        <div class="topnav">
            <div class="navmain">
            
                <div id="logo">
                    <img src="https://i.ibb.co/DKNMyDP/Logo-2-2.png">
                    <h5> LE FIUME CUISINE</h5>
                </div>

                <a href="javascript:void(0);" class="navbar-toggle">
                    <i class="fas fa-bars"></i>
                </a>
                
                <ul class="navbar-nav">
                    <a href="javascript:void(0);" class="nav-close-btn">
                        <i class="fas fa-times-circle"></i>
                    </a>
                    
                <li class="nav-item" ><a href="index.php?page=home">Home</a></li>
                <li class="nav-item"><a href="#contact">Contact</a> </li>
                <li class="nav-item"><a href="#about">About</a></li>
                <li class="nav-item" ><a href="index.php?page=blog">Blog</a></li>

                
                        <div class="navbar-sign"></div>
                </ul>
            </div>

            <div class="feed-switch">
                <form action='<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>' method="get">
                    <input type="submit" name="page"  value="Feed">
                    <input type="submit" name="page" value="Post">
                </form>
            </div>
        </div>