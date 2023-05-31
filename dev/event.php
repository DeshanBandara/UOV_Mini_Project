<?php

@include 'config.php';

session_start();

if (!isset($_SESSION['admin_name'])) {
    header('location:sign_in.php');
}

$query = "SELECT * FROM `event_form`";
$result = mysqli_query($connect, $query);
$count = mysqli_num_rows($result);

if (isset($_GET['approve'])) {
    $id = $_GET['approve'];
    $query = "UPDATE `event_form` SET `status` = 1 WHERE `id` = '$id'";
    $result = mysqli_query($connect, $query);
    if ($result) {
        header('location:event.php');
    }
} else if (isset($_GET['reject'])) {
    $id = $_GET['reject'];
    $query = "UPDATE `event_form` SET `status` = 2 WHERE `id` = '$id'";
    $result = mysqli_query($connect, $query);
    if ($result) {
        header('location:event.php');
    }
}


if (isset($_POST['message']) && isset($_POST['id'])) {
    $id = $_POST['id'];
    $message = $_POST['message'];
    $query = "UPDATE `event_form` SET `message` = '$message' WHERE `id` = '$id'";
    $result = mysqli_query($connect, $query);
    if ($result) {
        header('location:event.php');
    }
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
                            <!-- <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="users" class="align-text-bottom"></span>
                  Customers
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="bar-chart-2" class="align-text-bottom"></span>
                  Reports
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="layers" class="align-text-bottom"></span>
                  Integrations
                </a>
              </li> -->
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
                        <h1 class="h2">Event Page</h1>
                    </div>

                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Reg No.</th>
                                <th scope="col">Program Date</th>
                                <th scope="col">View Application</th>
                                <th scope="col">Status</th>
                                <th scope="col">Message</th>
                                <th scope="col">Action</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($result as $row) {
                            ?>
                                <tr>
                                    <td><?php echo $row['reg_no']; ?></td>
                                    <td><?php echo $row['program_date']; ?></td>
                                    <td class="text-start"><button class="btn btn-primary" onclick="viewAppInModal(<?php echo $row['id'] ?>)">View Application</button></td>
                                    <td>
                                        <?php if ($row['status'] == 0) {
                                            echo '<span class="badge bg-warning text-dark">Pending</span>';
                                        } else if ($row['status'] == 1) {
                                            echo '<span class="badge bg-success">Approved</span>';
                                        } else if ($row['status'] == 2) {
                                            echo '<span class="badge bg-danger">Rejected</span>';
                                        }
                                        ?>
                                    </td>

                                    <td>
                                        <form action="event.php" method="POST">
                                            <div class="row">
                                                <div class="col-10">
                                                    <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
                                                    <input type="text" value="<?php if (isset($row['message'])) {
                                                                                    echo $row['message'];
                                                                                } ?>" name="message" class="form-control" placeholder="Message">
                                                </div>
                                                <button type="submit" name="send_message" class="btn btn-primary col-2">Send</button>
                                            </div>
                                        </form>
                                    </td>

                                    <td>
                                        <div class="btn-group" role="group" aria-label="Basic example">
                                            <a href="event.php?approve=<?php echo $row['id'] ?>" class="btn btn-success">Approve</a>
                                            <a href="event.php?reject=<?php echo $row['id'] ?>" class="btn btn-danger">Reject</a>
                                        </div>
                                    </td>
                                </tr>

                            <?php
                            }
                            ?>
                        </tbody>


                    </table>

                </main>
            </div>
        </div>


        <div class="modal modal-lg fade" id="viewAppModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Event Application</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body" id="modal_body">

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <script src="bootstrap.bundle.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/chart.js@4.2.1/dist/chart.umd.min.js" integrity="sha384-gdQErvCNWvHQZj6XZM0dNsAoY4v+j5P1XDpNkcM3HJG1Yx04ecqIHk7+4VBOCHOG" crossorigin="anonymous"></script>
        <script src="dashboard.js"></script>
        <script src="asset/js/bootstrap.bundle.min.js"></script>
        <script>
            function viewAppInModal(id) {

                var r = new XMLHttpRequest();
                r.onreadystatechange = function() {
                    if (r.readyState == 4) {
                        var text = r.responseText;



                        var m = document.getElementById("viewAppModal");
                        bm = new bootstrap.Modal(m);
                        var body = document.getElementById('modal_body');
                        body.innerHTML = text;
                        bm.show();

                    }
                };
                r.open("GET", "view_event.php?id=" + id, true);
                r.send();
            }
        </script>
    </body>

    </html>