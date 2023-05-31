<?php

@include 'config.php';

session_start();

if (!isset($_SESSION['user_name'])) {
    header('location:sign_in.php');
}

$event_query = "SELECT * FROM event_form WHERE `reg_no` = '" . $_SESSION['reg_no'] . "'";
$event_res = mysqli_query($connect, $event_query);
$row = mysqli_num_rows($event_res);

if (isset($_POST['submit'])) {
    $title = $_POST['title'];
    $president = $_POST['president'];
    $reg_no = $_POST['reg_no'];
    $batch = $_POST['batch'];
    $faculty = $_POST['faculty'];
    $contact_no = $_POST['contact_no'];
    $program_date = $_POST['program_date'];
    $venue = $_POST['venue'];
    $commencement_time = $_POST['commencement_time'];
    $expected_time = $_POST['expected_time'];
    $participant_faculties = $_POST['participant_faculties'];
    $participant_departments = $_POST['participant_departments'];
    $num_student = $_POST['num_student'];
    $num_ac_stf = $_POST['num_ac_stf'];
    $num_nonac_stf = $_POST['num_nonac_stf'];
    $commitee_president = $_POST['commitee_president'];
    $commitee_vice_president = $_POST['commitee_vice_president'];
    $commitee_secretary = $_POST['commitee_secretary'];
    $commitee_vice_secretary = $_POST['commitee_vice_secretary'];
    $commitee_senior_treasure = $_POST['commitee_senior_treasure'];
    $commitee_treasure = $_POST['commitee_treasure'];
    $agre = $_POST['agre'];

    $query = "INSERT INTO event_form(title, president, reg_no, batch, faculty, contact_no, program_date, venue, commencement_time,
     expected_time, participant_faculties, participant_departments, num_student, num_ac_stf, num_nonac_stf, commitee_president,
      commitee_vice_president, commitee_secretary, commitee_vice_secretary, commitee_senior_treasure, commitee_treasure, agre) 
    VALUES('$title', '$president', '$reg_no', '$batch', '$faculty', '$contact_no', '$program_date', '$venue', '$commencement_time',
     '$expected_time', '$participant_faculties', '$participant_departments', '$num_student', '$num_ac_stf', '$num_nonac_stf',
      '$commitee_president', '$commitee_vice_president', '$commitee_secretary', '$commitee_vice_secretary', '$commitee_senior_treasure',
       '$commitee_treasure', '$agre')";

    $res = mysqli_query($connect, $query);

    if ($res) {
        header('location:agenda.php');
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
    <title>Events</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="event_styles.css">

    <style>
        .upl-sig {
            background: #ffffff;
            border: 1px solid silver;
            border-radius: 5px;
            height: 100px;
            width: 100px;
        }

        .sig-table {
            margin-left: auto;
            margin-right: auto;
        }

        /* --- Budget Table */
        .bgt-table {
            margin-left: 100px;
            width: 75%;
        }

        .bgt-table input {
            text-align: center;
        }

        /* --- Agenda Table */
        .agend-table {
            margin-left: 100px;
            width: 75%;
        }

        .agend-table input {
            text-align: left;
        }

        /* --- Add Button --- */
        .add-btn {
            background: #097d47;
            color: #ffffff;
            cursor: pointer;
            text-transform: capitalize;
            font-size: 20px;
            width: 75px;
            border: 1px solid silver;
            border-radius: 5px;
            margin-left: 75%;
        }

        #chk-bx {
            margin-left: 5px;
        }

        /*.bgt-table tr:hover {
            background-color: coral;
        }*/
    </style>

</head>

<body>
    <div>
        <nav class="event-nav">
            <a href="user.php">Events</a>
        </nav>
    </div>

    <!-- Event form -->
    <div class="container">
        <form class="event-form" action="" method="post" name="form">
            <h3>University of Vavuniya</h3>
            <br>
            <img src="University-of-Vavuniya-Logo.png" alt="University-of-Vavuniya-Logo.png">
            <br>
            <h5>Event form for students</h5>
            <br>
            <p>Application for prior approval for faculty-level events/activities organized by a perticular batch of students</p>

            <input type="text" name="title" required placeholder="Title of the program">
            <input type="text" name="president" required placeholder="President/Secretary of the ad hoc commitee">
            <input type="text" name="reg_no" required placeholder="Registration Number" value="<?php echo $_SESSION['reg_no'] ?>">
            <input type="text" name="batch" required placeholder="Batch year/level">
            <select name="faculty" id="" value="<?php $_SESSION['faculty'] ?>">
                <option value="fot">Faculty of Technological Studies </option>
                <option value="fas">Faculty of Applied Science</option>
                <option value="bs">Faculty of Business Studies</option>
            </select>
            <input type="text" name="contact_no" required placeholder="Contact Number of the applicant">
            <br>
            <label for="">Program Date</label>
            <br>
            <input type="date" name="program_date" required placeholder="yyyy:mm:dd">
            <br>
            <label for="">Venue</label>
            <br>
            <input type="text" name="venue" required placeholder="Enter venue">
            <br>
            <label for="">Commencement Time</label>
            <br>
            <input type="time" name="commencement_time" required placeholder="hh:mm:ss">
            <br>
            <label for="">Expected Time</label>
            <br>
            <input type="time" name="expected_time" required placeholder="hh:mm:ss">
            <br>
            <br>
            <hr>
            <br>

            <!-- Participant -->
            <div>
                <ul>
                    <li>Participant</li>
                    <p>upload the participant details</p>
                    <ul>
                        <li>
                            Faculties
                            <input type="text" name="participant_faculties" required placeholder="enter faculties">
                        </li>
                        <br>
                        <li>
                            Departments
                            <input type="text" name="participant_departments" required placeholder="enter departments">
                        </li>
                        <br>
                        <li>
                            Number of students
                            <input type="text" name="num_student" required placeholder="enter number of students">
                        </li>
                        <br>
                        <li>
                            Number of academic staff
                            <input type="text" name="num_ac_stf" required placeholder="enter number of academic staff">
                        </li>
                        <br>
                        <li>
                            Number of non-academic staff
                            <input type="text" name="num_nonac_stf" required placeholder="enter number of non-academic staff">
                        </li>
                    </ul>
                </ul>
            </div>
            <br>
            <hr>
            <br>

            <!-- Ad hoc commitee details -->
            <div>
                <ul>
                    <li>Ad hoc commitee details</li>
                    <p>(One senior tresure should be included)</p>
                    <ul>
                        <li>
                            President
                            <input type="text" name="commitee_president" required placeholder="enter president">
                        </li>
                        <br>
                        <li>
                            Vice President
                            <input type="text" name="commitee_vice_president" required placeholder="enter vice president">
                        </li>
                        <br>
                        <li>
                            Secretary
                            <input type="text" name="commitee_secretary" required placeholder="enter secretary">
                        </li>
                        <br>
                        <li>
                            Vice Secretary
                            <input type="text" name="commitee_vice_secretary" required placeholder="enter vice secretary">
                        </li>
                        <br>
                        <li>
                            Senior Treasure
                            <input type="text" name="commitee_senior_treasure" required placeholder="enter senior treasure">
                        </li>
                        <br>
                        <li>
                            Treasure
                            <input type="text" name="commitee_treasure" required placeholder="enter treasure">
                        </li>
                    </ul>
                </ul>
            </div>
            <br>
            <hr>
            <br>

            <p>We, undersigned, shall take all the responsibility for the Faculty/University
                properties and agree to recover the cast from me/us if any damage found
                after the activity.
            </p>

            <br>
            <label for="">Agreed</label>
            <input id="chk-bx" type="checkbox" name="agre" required value="agreed">

            <!--<table class="sig-table">
                <tr>
                    <td>
                        <div class="upl-sig"></div>
                        <p>(upload a photo of signature)<br><a href="upload_form.php"><i class="fa-solid fa-arrow-up-from-bracket"></i></a><br>Tresure</p>
                    </td>
                    <td>
                        <div class="upl-sig"></div>
                        <p>(upload a photo of signature)<br><a href="upload_form.php"><i class="fa-solid fa-arrow-up-from-bracket"></i></a><br>Secretary</p>
                    </td>
                    <td>
                        <div class="upl-sig"></div>
                        <p>(upload a photo of signature)<br><a href="upload_form.php"><i class="fa-solid fa-arrow-up-from-bracket"></i></a><br>President</p>
                    </td>
                </tr>
            </table>-->
            <br>
            <br>
            <button class="btn-submit" type="submit" name="submit">submit</button>
            <br>
            <br>
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
                foreach ($event_res as $row) {
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
            <button class="btn-home"><a href="index.php">Result</a></button>
            <button class="btn-logout"><a href="logout.php">logout</a></button>
        </div>
    </div>
</body>

</html>