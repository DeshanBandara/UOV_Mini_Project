<?php
@include 'config.php';

$id = $_GET['id'];

$query = "SELECT * FROM `event_form` WHERE `id` = '$id'";
$result = mysqli_query($connect, $query);
$row = mysqli_fetch_array($result);
?>

<div>
    <div class="row">
        <label class="form-label" for="">Title</label>
        <input type="text" class="form-control" value="<?php print $row['title'] ?>" disabled>
    </div>
    <br>
    <div class="row">
        <label class="form-label" for="">President</label>
        <input type="text" class="form-control" value="<?php print $row['president'] ?>" disabled>
    </div>
    <br>
    <div class="row">
        <label class="form-label" for="">Reg No</label>
        <input type="text" class="form-control" value="<?php print $row['reg_no'] ?>" disabled>
    </div>
    <br>
    <div class="row">
        <label class="form-label" for="">Batch</label>
        <input type="text" class="form-control" value="<?php print $row['batch'] ?>" disabled>
    </div>
    <br>
    <div class="row">
        <label class="form-label" for="">Faculty</label>
        <input type="text" class="form-control" value="<?php print $row['faculty'] ?>" disabled>
    </div>
    <br>
    <div class="row">
        <label class="form-label" for="">Contact No</label>
        <input type="text" class="form-control" value="<?php print $row['contact_no'] ?>" disabled>
    </div>
    <br>
    <div class="row">
        <label class="form-label" for="">Program Date</label>
        <input type="text" class="form-control" value="<?php print $row['program_date'] ?>" disabled>
    </div>
    <br>
    <div class="row">
        <label class="form-label" for="">Venue</label>
        <input type="text" class="form-control" value="<?php print $row['venue'] ?>" disabled>
    </div>
    <br>
    <div class="row">
        <label class="form-label" for="">Commencement Time</label>
        <input type="text" class="form-control" value="<?php print $row['commencement_time'] ?>" disabled>
    </div>
    <br>
    <div class="row">
        <label class="form-label" for="">Expected Time</label>
        <input type="text" class="form-control" value="<?php print $row['expected_time'] ?>" disabled>
    </div>
    <br>
    <div class="row">
        <label class="form-label" for="">Participant Faculties</label>
        <input type="text" class="form-control" value="<?php print $row['participant_faculties'] ?>" disabled>
    </div>
    <br>
    <div class="row">
        <label class="form-label" for="">Participant Departments</label>
        <input type="text" class="form-control" value="<?php print $row['participant_departments'] ?>" disabled>
    </div>
    <br>
    <div class="row">
        <label class="form-label" for="">Number of Students</label>
        <input type="text" class="form-control" value="<?php print $row['num_student'] ?>" disabled>
    </div>
    <br>
    <div class="row">
        <label class="form-label" for="">Number of Academic Staff</label>
        <input type="text" class="form-control" value="<?php print $row['num_ac_stf'] ?>" disabled>
    </div>
    <br>
    <div class="row">
        <label class="form-label" for="">Number of Non-Academic Staff</label>
        <input type="text" class="form-control" value="<?php print $row['num_nonac_stf'] ?>" disabled>
    </div>
    <br>
    <div class="row">
        <label class="form-label" for="">Committee President</label>
        <input type="text" class="form-control" value="<?php print $row['commitee_president'] ?>" disabled>
    </div>
    <br>
    <div class="row">
        <label class="form-label" for="">Committee Vice President</label>
        <input type="text" class="form-control" value="<?php print $row['commitee_vice_president'] ?>" disabled>
    </div>
    <br>
    <div class="row">
        <label class="form-label" for="">Committee Secretary</label>
        <input type="text" class="form-control" value="<?php print $row['commitee_secretary'] ?>" disabled>
    </div>
    <br>
    <div class="row">
        <label class="form-label" for="">Committee Vice Secretary</label>
        <input type="text" class="form-control" value="<?php print $row['commitee_vice_secretary'] ?>" disabled>
    </div>
    <br>
    <div class="row">
        <label class="form-label" for="">Committee Senior Treasure</label>
        <input type="text" class="form-control" value="<?php print $row['commitee_senior_treasure'] ?>" disabled>
    </div>
    <br>
    <div class="row">
        <label class="form-label" for="">Committee Treasure</label>
        <input type="text" class="form-control" value="<?php print $row['commitee_treasure'] ?>" disabled>
    </div>
    <br>
    <div class="row">
        <label class="form-label" for="">Agreement</label>
        <input type="text" class="form-control" value="<?php print $row['agre'] ?>" disabled>
    </div>


</div>