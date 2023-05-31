<?php

@include 'config.php';

session_start();

if (!isset($_SESSION['admin_name'])) {
  header('location:sign_in.php');
}

$query = "SELECT * FROM `login_form` WHERE `user_type` = 'admin';";
$user_result = mysqli_query($connect, $query);
$user_count = mysqli_num_rows($user_result);

if (isset($_POST['submit'])) {
  $name = mysqli_real_escape_string($connect, $_POST['name']);
  $email = mysqli_real_escape_string($connect, $_POST['email']);
  $password = md5($_POST['password']);
  $confirm_password = md5($_POST['confirm_password']);
  $user_type = $_POST['user_type'];

  $select = "SELECT * FROM login_form WHERE email = '$email' && password = '$password'";
  $result = mysqli_query($connect, $select);

  if (mysqli_num_rows($result) > 0) {
    $error[] = 'user already exist!';
  } else {
    if ($password != $confirm_password) {
      $error[] = 'password not matched!';
    } else {
      $insert = "INSERT INTO login_form(name, email, password, user_type) VALUES('$name','$email','$password','$user_type')";
      mysqli_query($connect, $insert);
      header('location:admin_dashboard.php');
    }
  }
};

if (isset($_GET['delete'])) {
  $id = $_GET['delete'];
  $delete = "DELETE FROM `login_form` WHERE `id` = '$id'";
  mysqli_query($connect, $delete);
  header('location:admin_dashboard.php');
}



?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>DashBoard</title>
  <link rel="stylesheet" href="asset/css/bootstrap.min.css">
  <link rel="stylesheet" href="asset/css/styel.css">
</head>

<body>


  <!doctype html>
  <html lang="en" data-bs-theme="auto">

  <head>
    <script src="../assets/js/color-modes.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.111.3">
    <title>Dashboard</title>
    <link href="asset/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        width: 100%;
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }

      .btn-bd-primary {
        --bd-violet-bg: #712cf9;
        --bd-violet-rgb: 112.520718, 44.062154, 249.437846;

        --bs-btn-font-weight: 600;
        --bs-btn-color: var(--bs-white);
        --bs-btn-bg: var(--bd-violet-bg);
        --bs-btn-border-color: var(--bd-violet-bg);
        --bs-btn-hover-color: var(--bs-white);
        --bs-btn-hover-bg: #6528e0;
        --bs-btn-hover-border-color: #6528e0;
        --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
        --bs-btn-active-color: var(--bs-btn-hover-color);
        --bs-btn-active-bg: #5a23c8;
        --bs-btn-active-border-color: #5a23c8;
      }

      .bd-mode-toggle {
        z-index: 1500;
      }

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


    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">
  </head>

  <body>

    <header class="navbar navbar-light sticky-top bg-light flex-md-nowrap p-0 shadow">
      <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6" href="#">UOV Dashboard</a>
      <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <input class="form-control form-control-dark w-100 rounded-0 border-0" type="text" placeholder="Search" aria-label="Search">
      <div class="navbar-nav">
        <div class="nav-item text-nowrap">
          <a class="nav-link px-3" href="logout.php">Sign out</a>
        </div>
      </div>
    </header>

    <div class="container-fluid">
      <div class="row">
        <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-body-tertiary sidebar collapse">
          <div class="position-sticky pt-3 sidebar-sticky">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="admin_dashboard.php">
                  <span data-feather="home" class="align-text-bottom"></span>
                  Dashboard
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="event.php">
                  <span data-feather="file" class="align-text-bottom"></span>
                  Event
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="vehicle.php">
                  <span data-feather="shopping-cart" class="align-text-bottom"></span>
                  Vehicle
                </a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="#">
                      <span data-feather="shopping-cart" class="align-text-bottom"></span>
                      Sports
                  </a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="#">
                      <span data-feather="shopping-cart" class="align-text-bottom"></span>
                      Sponsorship
                  </a>
              </li>

            </ul>

            <!-- <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-body-secondary text-uppercase">
              <span>Saved reports</span>
              <a class="link-secondary" href="#" aria-label="Add a new report">
                <span data-feather="plus-circle" class="align-text-bottom"></span>
              </a>
            </h6>
            <ul class="nav flex-column mb-2">
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="file-text" class="align-text-bottom"></span>
                  Current month
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="file-text" class="align-text-bottom"></span>
                  Last quarter
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="file-text" class="align-text-bottom"></span>
                  Social engagement
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="file-text" class="align-text-bottom"></span>
                  Year-end sale
                </a>
              </li>
            </ul> -->
          </div>
        </nav>

        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Main Page</h1>
          </div>
          <div id="login">
            <div class="row">
              <div class="col-md-6">
                <h3>Add New Admins</h3>
                <form action="" method="post">

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
                  <input type="password" name="password" title="Password should be of 6-10 length and should contain atleast one character and one number" required placeholder="Enter your password">
                  <input type="password" name="confirm_password" required placeholder="Confirm your password">
                  <br>
                  <select name="user_type" id="" style="display: none;">
                    <!-- <option value="user">User</option> -->
                    <option value="admin" selected>Admin</option>
                  </select>
                  <br>
                  <input type="submit" name="submit" value="Add" class="form-btn">

                </form>
              </div>


              <div class="col-md-6">
                <h2>
                  Current Users
                </h2>
                <div class="table-responsive">
                  <table class="table table-striped table-sm">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>User Type</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      foreach ($user_result as $user) {
                      ?>
                        <tr>
                          <td><?php echo $user['id']; ?></td>
                          <td><?php echo $user['name']; ?></td>
                          <td><?php echo $user['email']; ?></td>
                          <td><?php echo $user['user_type']; ?></td>
                          <td>
                            <a href="admin_dashboard.php?delete=<?php echo $user['id']; ?>" class="btn btn-danger">Delete</a>
                          </td>
                        </tr>

                      <?php
                      }

                      ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </main>
      </div>
    </div>


    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
    <script src="bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.2.1/dist/chart.umd.min.js" integrity="sha384-gdQErvCNWvHQZj6XZM0dNsAoY4v+j5P1XDpNkcM3HJG1Yx04ecqIHk7+4VBOCHOG" crossorigin="anonymous"></script>
    <script src="dashboard.js"></script>
  </body>

  </html>




  <script src="asset/js/bootstrap.bundle.min.js"></script>
</body>

</html>