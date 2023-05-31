<?php
@include 'config.php';

$id = $_GET['id'];

$query = "SELECT * FROM `vehicle_reservation` WHERE `id` = '$id'";
$result = mysqli_query($connect, $query);
$row = mysqli_fetch_array($result);
?>
<div>
    <div class="row">
        <label class="form-label" for="">Applicant Name</label>
        <input type="text" class="form-control" value="<?php print $row['applicant_name'] ?>" disabled>
    </div>
    <br>
    <div class="row">
        <label class="form-label" for="">Email</label>
        <input type="text" class="form-control" value="<?php print $row['email'] ?>" disabled>
    </div>
    <br>
    <div class="row">
        <label class="form-label" for="">Mobile Number</label>
        <input type="text" class="form-control" value="<?php print $row['mo_num'] ?>" disabled>
    </div>
    <br>
    <div class="row">
        <label class="form-label" for="">Faculty</label>
        <input type="text" class="form-control" value="<?php print $row['faculty'] ?>" disabled>
    </div>
    <br>
    <div class="row">
        <label class="form-label" for="">Registration Number</label>
        <input type="text" class="form-control" value="<?php print $row['reg_num'] ?>" disabled>
    </div>
    <br>
    <div class="row">
        <label class="form-label" for="">Purpose of traveling</label>
        <input type="text" class="form-control" value="<?php print $row['purpose'] ?>" disabled>
    </div>
    <br>
    <div class="row">
        <label class="form-label" for="">Type of vehicle required</label>
        <input type="text" class="form-control" value="<?php print $row['vehicle_type'] ?>" disabled>
    </div>
    <br>
    <div class="row">
        <label class="form-label" for="">Number of person/s traveling</label>
        <input type="text" class="form-control" value="<?php print $row['num_persons'] ?>" disabled>
    </div>
    <br>
    <div class="row">
        <label class="form-label" for="">Date</label>
        <input type="text" class="form-control" value="<?php print $row['date'] ?>" disabled>
    </div>
    <br>
    <div class="row">
        <label class="form-label" for="">Travel Date</label>
        <input type="text" class="form-control" value="<?php print $row['traval_date'] ?>" disabled>
    </div>
    <br>
    <div class="row">
        <label class="form-label" for="">Location From</label>
        <input type="text" class="form-control" value="<?php print $row['l_from'] ?>" disabled>
    </div>
    <br>
    <div class="row">
        <label class="form-label" for="">Location To</label>
        <input type="text" class="form-control" value="<?php print $row['l_to'] ?>" disabled>
    </div>
    <br>
    <div class="row">
        <label class="form-label" for="">Other Places</label>
        <input type="text" class="form-control" value="<?php print $row['other_places'] ?>" disabled>
    </div>
    <br>
    <div class="row">
        <label class="form-label" for="">Departure Time</label>
        <input type="text" class="form-control" value="<?php print $row['dep_time'] ?>" disabled>
    </div>
    <br>
    <div class="row">
        <label class="form-label" for="">Return Time</label>
        <input type="text" class="form-control" value="<?php print $row['ret_time'] ?>" disabled>
    </div>
</div>