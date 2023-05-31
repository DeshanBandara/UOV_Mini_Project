<?php

@include 'config.php';

if (isset($_POST['submit'])) {
    $name = mysqli_real_escape_string($connect, $_POST['name']);
    $email = mysqli_real_escape_string($connect, $_POST['email']);
    $password = md5($_POST['password']);
    $confirm_password = md5($_POST['confirm_password']);
    $user_type = $_POST['user_type'];
    $reg_no = $_POST['reg_no'];
    $faculty = $_POST['faculty'];
    $department = $_POST['department'];
    $mobile_no = $_POST['mobile_no'];

    $select = "SELECT * FROM login_form WHERE email = '$email' && password = '$password'";
    $result = mysqli_query($connect, $select);

    if (mysqli_num_rows($result) > 0) {
        $error[] = 'user already exist!';
    } else {
        if ($password != $confirm_password) {
            $error[] = 'password not matched!';
        } else {
            $insert = "INSERT INTO login_form(name, email, password, user_type, reg_no, faculty, department, mobile_no) VALUES('$name', '$email', '$password', '$user_type', '$reg_no', '$faculty', '$department', '$mobile_no')";
            mysqli_query($connect, $insert);
            header('location:sign_in.php');
        }
    }
    
};

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

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
            margin-left: 90px;
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

    <!-- Login -->

    <div id="login">
        <form action="" method="post" class="col-md-6 offset-3 mt-5 border">
            <h3>Register Now</h3>
            <br>
            <?php
            if (isset($error)) {
                foreach ($error as $error) {
                    echo '<span class="error-msg">' . $error . '</span>';
                };
            };
            ?>
            <input type="text" name="name" required placeholder="Enter your name">
            <input type="email" name="email" required placeholder="Enter your email">
            <input type="text" name="mobile_no" required placeholder="Enter your phone number">
            <input type="text" name="reg_no" required placeholder="Enter your register number">
            <select name="faculty" id="">
                <option value="fot">Faculty of Technological Studies </option>
                <option value="fas">Faculty of Applied Science</option>
                <option value="bs">Faculty of Business Studies</option>
            </select>
            <input type="text" name="department" required placeholder="Enter your Department">
            <input type="password" name="password" title="Password should be of 6-10 length and should contain atleast one character and one number" required placeholder="Enter your password">
            <input type="password" name="confirm_password" required placeholder="Confirm your password">
            <br>
            <select name="user_type" id="" style="display: none;">
                <option value="user" selected>User</option>
                <!-- <option value="admin">Admin</option> -->
            </select>
            <br>
            <input type="submit" name="submit" value="Register" class="form-btn">
            <p>Already have an account? <a href="sign_in.php">Sign In</a></p>
        </form>
    </div>

</body>

</html>