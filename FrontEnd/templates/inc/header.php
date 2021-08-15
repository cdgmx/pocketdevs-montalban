


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

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;700&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="css/blog.css">

         <script src="sidenav.js" async defer></script>
    <script src="js/sign-btn.js" async defer></script>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    </head>
    <body>
      
            <div class="navmain">
            
                <div id="logo">
                    <img src="https://i.ibb.co/DKNMyDP/Logo-2-2.png">
                    <a> LE FIUME CUISINE</a>
                </div>

                <a href="javascript:void(0);" class="navbar-toggle">
                    <i class="fas fa-bars"></i>
                </a>
                
                <ul class="navbar-nav">
                    <a href="javascript:void(0);" class="snav-close-btn">
                        <i class="fas fa-times-circle"></i>
                    </a>
                    
                    <li class="nav-item" ><a href="index.php?page=Home">Home</a></li>
                    <li class="nav-item"><a href="#contact">Contact</a> </li>
                    <li class="nav-item"><a href="#about">About</a></li>
                    <li class="nav-item" ><a href="index.php?page=Feed">Blog</a></li>

                    
                    <div class="navbar-sign">

                        <form id='signup' action='login.php'>
                            <input type='submit' name='signin'  value='Sign in'>
                        </form>
                        <form id='login' action='register.php'>
                            <input type='submit' name='signup' value='Sign up'>
                        </form>
                    </div>
                    <div id='user-info'>
                        <a> Welcome <var></var> </a> 
                        <a onclick='logout()'> 
                        <input  type='button' value='Logout'>
                        </a>
                    </div>
                   
                </ul>
            </div>

        
        