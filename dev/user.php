<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['user_name']))
{
    header('location:sign_in.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $_SESSION['user_name'] ?></title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" 
	    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" 
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" 
        crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link rel="stylesheet" href="styles.css">
    <style>
        
    </style>
</head>
<body class="body-types">
<div id="container">
        <header class="header">
            <div>
                <nav class="navbar navbar-light bg-light justify-content-between">
                    <form class="form-inline">
                        <a class="nav-link active" id="nav-a" aria-current="page" href="https://vau.ac.lk/vice-chancellor/">Vice Chancellor</a>
                        <a class="nav-link" id="nav-a" href="https://vau.ac.lk/vision-mission/">Vision &#038; Mission</a>
                        <a class="nav-link" id="nav-a" href="https://vau.ac.lk/2655-2/">Gallery</a>
                        <a class="nav-link" id="nav-a" href="https://vau.ac.lk/alumni/">Alumni</a>
                        <a class="nav-link" id="nav-a" href="https://vau.ac.lk/download/">Downloads</a>
                        <a class="nav-link" id="nav-a" href="https://vau.ac.lk/directory/">Directory</a>
                    </form>

                    <div id="header-helpful">
                        <span class="action">Email : registraroffice@vau.ac.lk <span class="value">Tel :   +94 24 222 2265</span></span>
                    </div>
                    
                    <form class="form-inline right">
                        <!-- Facebook -->
                        <button id="social-button-facebook">
                            <a  href="https://www.facebook.com/UoVavuniya"><i class="fa-brands fa-facebook"></i></a>
                        </button>
                        <span> </span>
                        <!-- Twitter-->
                        <button id="social-button-twitter">
                            <a id="social-button-a" href="https://www.twitter.com/UoVavuniya"><i class="fa-brands fa-twitter"></i></a>
                        </button>
                        <!-- Linkedin -->
                        <button id="social-button-Linkedin">
                            <a id="social-button-a" href="https://www.linkedin.com/company/university-of-vavuniya/"><i class="fab fa-linkedin-in"></i></a>
                        </button>
                        <!-- Youtube -->
                        <button id="social-button-youtube">
                            <a id="social-button-a" href="https://www.youtube.com/channel/UCsNrb6z0_H6rGFNnMmzvREw/featured"><i class="fab fa-youtube"></i></a>
                        </button>
                    </form>
                    <div class="clear"></div>
                </nav>
            </div>
        </header>

        <!-- main-menu -->
        <div class="navbar-header-main">
            <nav id="main-navbar" class="main-navbar">
                <form class="form-inline">
                <a class="nav-link active" id="main-nav-a" aria-current="page" href="index.php">HOME</a>
                    <a class="nav-link active" id="main-nav-a" aria-current="page" href="#">ABOUT <i class="fa-solid fa-caret-down"></i></a>
                    <a class="nav-link" id="main-nav-a" href="#">ACADEMIC <i class="fa-solid fa-caret-down"></i></a>
                    <a class="nav-link" id="main-nav-a" href="#">ADMINISTRATION <i class="fa-solid fa-caret-down"></i></a>
                    <a class="nav-link" id="main-nav-a" href="#">STUDENT <i class="fa-solid fa-caret-down"></i></a>
                    <a class="nav-link" id="main-nav-a" href="login.php">PERMISSION</a>
                    <a class="nav-link" id="main-nav-a" href="#">RESEARCH <i class="fa-solid fa-caret-down"></i></a>
                    <a class="nav-link" id="main-nav-a" href="#">LIBRARY</a>
                    <a class="nav-link" id="main-nav-a" href="#">POLICY <i class="fa-solid fa-caret-down"></i></a>
                    <a class="nav-link" id="main-nav-a" href="#">INTERNAL STAFF</a>

                    <form class="form-inline right">
                        <button id="search-button"><i class="fa-solid fa-magnifying-glass"></i></button>
                    </form>
                </form>
            </nav>
        </div>
        <!-- end #main-menu -->
    </div>
    <br>
    <br>
    <div>
        <div id="types-form1">
            <ul id="types-form1-ul">
                <li>
                    <h1>Type Of Permission</h1>
                </li>
            </ul>
        </div>

        <div id="types-form2">
            <ul id="types-form2-ul">
                <br>
                <li>
                    <a href="event_form.php" id="types-form2-ul-li-a">Event</a>
                </li>
                <br>
                <li>
                    <a href="user_vehicle_reservation_form.php" id="types-form2-ul-li-a">Vehicle</a>
                </li>
                <br>
                <li>
                    <a href="sports.php" id="types-form2-ul-li-a">Sports</a>
                </li>
                <br>
                <li>
                    <a href="" id="types-form2-ul-li-a">Sponsorship</a>
                </li>
            </ul>
        </div>
    </div>
    
</body>
</html>