<?php

@include 'config.php';

session_start();

$vehicle_query = "SELECT * FROM event_form WHERE `reg_no` = '" . $_SESSION['reg_no'] . "'";
$vehicle_res = mysqli_query($connect, $vehicle_query);
$row = mysqli_num_rows($vehicle_res);


if (isset($_POST['submit'])) {
    $applicant_name = $_POST['applicant_name'];
    $email = $_POST['email'];
    $mobile_no = $_POST['mobile_no'];
    $faculty = $_POST['faculty'];
    $reg_no = $_POST['reg_no'];
    $purpose = $_POST['purpose'];
    $vehicle_type = $_POST['vehicle_type'];
    $num_persons = $_POST['num_persons'];
    $date = $_POST['date'];
    $traval_date = $_POST['traval_date'];
    $l_from = $_POST['l_from'];
    $l_to = $_POST['l_to'];
    $other_places = $_POST['other_places'];
    $dep_time = $_POST['dep_time'];
    $ret_time = $_POST['ret_time'];

    $query = "INSERT INTO vehicle_reservation(applicant_name, email, mo_num, faculty, reg_num, purpose, vehicle_type, num_person, date, traval_date, l_from, l_to, other_places, dep_time, ret_time) 
    VALUES('$applicant_name', '$email', '$mobile_no', '$faculty', '$reg_no', '$purpose', '$vehicle_type', '$num_persons', '$date', '$traval_date', '$l_from', '$l_to', '$other_places', '$dep_time', '$ret_time')";

    $res = mysqli_query($connect, $query);

    if ($res) {
        header('location:user.php');
    } else {
        header('location:error_form.php');
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vehicle Reservation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="user_forms_styles.css">

    <style>
        .vehicle-form .btn-submit {
            background: #1877F2;
            color: #ffffff;
            cursor: pointer;
            text-transform: capitalize;
            font-size: 20px;
            width: 25%;
            border: 1px solid silver;
            border-radius: 10px;
        }

        .h-l-btn {
            margin-bottom: 50px;
            margin-right: 50px;
            text-align: right;
        }

        .btn-home {
            background: #3fde8e;
            color: #ffffff;
            text-transform: capitalize;
            font-size: 20px;
            border: 1px solid silver;
            border-radius: 10px;
            width: 150px;
        }

        .btn-home a {
            text-decoration: none;
            color: #ffffff;
        }

        .btn-logout {
            background: crimson;
            color: #ffffff;
            text-transform: capitalize;
            font-size: 20px;
            border: 1px solid silver;
            border-radius: 10px;
            width: 150px;
        }

        .btn-logout a {
            text-decoration: none;
            color: #ffffff;
        }
    </style>

</head>

<body>
    <div>
        <nav class="veh-nav">
            <a href="user.php">Vehicle Reservation</a>
        </nav>
    </div>

    <!-- Vehicle reservation form -->

    <div class="container">
        <form class="vehicle-form" action="" method="post" name="form">
            <h3>University of Vavuniya</h3>
            <br>
            <img src="University-of-Vavuniya-Logo.png" alt="University-of-Vavuniya-Logo.png">
            <br>
            <h5>Vehicle reservation form for students</h5>
            <br>
            <p>This form should be submit to the Administration Branch at least two days before the journy</p>

            <input type="text" name="applicant_name" required placeholder="Name of applicant">
            <input type="text" name="email" required placeholder="Email id">
            <input type="text" name="mobile_no" required placeholder="Mobile number">
            <select name="faculty" required id="">
                <option value="fot">Faculty of Technological Studies</option>
                <option value="fas">Faculty of Applied Science</option>
                <option value="bs">Faculty of Business Studies</option>
            </select>
            <input type="text" name="reg_no" required placeholder="Registration number">
            <input type="text" name="purpose" placeholder="Purpose of travelling">
            <br>
            <br>
            <label for="">Type of vehicle required</label>
            <br>
            <select name="vehicle_type" required id="">
                <option value="bus">Bus</option>
                <option value="three_wheeler">Three Wheeler</option>
                <option value="van">Van</option>
                <option value="lorry">Lorry</option>
                <option value="cab">Cab</option>
            </select>
            <input type="text" name="num_persons" required placeholder="Number of person/s travelling">
            <label for="">Date</label>
            <br>
            <input type="date" name="date" required placeholder="yyyy-mm-dd">
            <br>
            <br>
            <label for="">Date of Taval</label>
            <br>
            <input type="date" name="traval_date" required placeholder="yyyy-mm-dd">
            <br>
            <br>
            <label for="">Location</label>
            <br>
            <input type="text" name="l_from" required placeholder="From">
            <input type="text" name="l_to" required placeholder="To">
            <input type="text" name="other_places" required placeholder="Other places">
            <br>
            <br>
            <label for="">Departure time</label>
            <br>
            <input type="time" name="dep_time" required placeholder="hh:mm:ss">
            <br>
            <br>
            <label for="">Return time</label>
            <br>
            <input type="time" name="ret_time" required placeholder="hh:mm:ss">
            <br>
            <br>
            <a href="user.php"><button class="btn-submit" type="submit" name="submit">submit</button></a>

            <br><br>


            <p>After submition your form will submit according to following order</p>
            <ul>
                <li><a href="">Student Counsellor</a></li>
                <li><a href="">Head of the Department</a></li>
                <li><a href="">Assistant Registrar</a></li>
                <li><a href="">Dean of Faculty</a></li>
                <li><a href="">Administrative Branch</a></li>
            </ul>
            <p>Check your mail to see results.</p>
        </form>


        <div class="col-md-8 offset-2">
            <table class="table">
                <tr>
                    <th>Registration No.</th>
                    <th>Program Date</th>
                    <th>Status</th>
                    <th>Message</th>
                </tr>
                <?php
                foreach ($vehicle_res as $row) {
                ?>
                    <tr>
                        <td><?php echo $row['reg_no'] ?></td>
                        <td><?php echo $row['program_date'] ?></td>
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
                        <td><?php echo $row['message'] ?></td>
                    </tr>

                <?php
                }
                ?>
            </table>
        </div>

        <div class="h-l-btn">
            <button class="btn-home"><a href="index.php">home</a></button>
            <button class="btn-logout"><a href="logout.php">logout</a></button>
        </div>
    </div>
</body>

</html>