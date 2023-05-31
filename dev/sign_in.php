<?php

@include 'config.php';

session_start();

if (isset($_POST['submit'])) {
    $name = mysqli_real_escape_string($connect, $_POST['name']);
    $email = mysqli_real_escape_string($connect, $_POST['email']);
    $password = md5($_POST['password']);
    $confirm_password = md5($_POST['confirm_password']);
    $user_type = $_POST['user_type'];

    $select = "SELECT * FROM login_form WHERE email = '$email' && password = '$password'";
    $result = mysqli_query($connect, $select);
    $count = mysqli_num_rows($result);

    if ($count > 0) {
        if ($count > 0) {
            $row = mysqli_fetch_array($result);
            if ($row['user_type'] == 'admin') {
                $_SESSION['admin_name'] = $row['name'];
                header('location:admin_dashboard.php');
            } elseif ($row['user_type'] == 'user') {
                $_SESSION['user_name'] = $row['name'];
                $_SESSION['user_email'] = $row['email'];
                $_SESSION['reg_no'] = $row['reg_no'];
                $_SESSION['mobile_no'] = $row['mobile_no'];
                $_SESSION['faculty'] = $row['faculty'];
                $_SESSION['department'] = $row['department'];
                header('location:user.php');
            }
        }
    } else {
        echo '<span class="error-msg">' . $error . '<span>';
        header('location:sign_in.php');
    }
};
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signin</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="styles.css">

    <style>
        /* #login{
            position: relative;
            border: 1px solid silver;
            border-radius: 10px;
            width: 800px;
            height: auto;
            padding: 30px;
            margin-top: 50px;
            margin-left: 300px;
            margin-bottom: 50px;
            align-items: center;
            justify-content: center;
            display: flex;
        } */
        #login form {
            padding: 20px;
            text-align: center;
        }

        #login form h3 {
            font-size: 30px;
            text-transform: uppercase;
            margin-bottom: 10px;
            color: #250722;
        }

        #login form input,
        #login form select {
            width: 75%;
            border-radius: 10px;
            padding: 10px 15px;
            font-size: 17px;
            margin: 8px 0;
            background: #f5ebf4;
            border: 1px solid silver;
        }

        #login form select option {
            background: #ffffff;
        }

        #login form .form-btn {
            background: #1877F2;
            color: #ffffff;
            cursor: pointer;
            text-transform: capitalize;
            font-size: 20px;
        }

        #login form .form-btn:hover {
            background: #104ea0;
        }

        #login form p {
            margin-top: 10px;
            margin-left: 75px;
            font-size: 20px;
            color: #333333;
            text-align: left;

        }

        #login form p a {
            color: crimson;
        }

        #login form .error-msg {
            margin: 10px 0;
            display: block;
            background: crimson;
            color: #fff;
            border-radius: 5px;
            font-size: 20px;
            padding: 10px;
        }

        #login #email_error,
        #login #pass_error {
            margin-top: 5px;
            font-size: 16px;
            color: #c62820;
            display: none;
        }
    </style>

</head>

<body>
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
                        <span class="action">Email : registraroffice@vau.ac.lk <span class="value">Tel : +94 24 222 2265</span></span>
                    </div>

                    <form class="form-inline right">
                        <!-- Facebook -->
                        <button id="social-button-facebook">
                            <a href="https://www.facebook.com/UoVavuniya"><i class="fa-brands fa-facebook"></i></a>
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

    <!-- Signin -->

    <div id="login" class="col-md-6 offset-md-3 mt-5 border">
        <form class="login_form" action="" method="post" name="form" onsubmit="return validated()">
            <h3>Login</h3>
            <br>
            <?php
            if (isset($error)) {
                foreach ($error as $error) {
                    echo '<span class="error-msg">' . $error . '</span>';
                };
            };
            ?>
            <!--<div class="font">Email or Phone</div>-->
            <input type="email" name="email" required placeholder="Enter your email">
            <div id="email_error">Please fill up your Email or Phone</div>

            <!--<div class="font font2">Password</div>-->
            <input type="password" name="password" required placeholder="Enter your password">
            <div id="pass_error">Please fill up your Password</div>
            <!--<button type="submit">Login</button>-->

            <input type="submit" name="submit" value="Sign in" class="form-btn">
            <p>Don't have an account? <a href="login.php">register now</a></p>
        </form>
    </div>
    <script src="valid.js"></script>

</body>

</html>