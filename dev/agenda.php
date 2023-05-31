<?php

@include 'config.php';

if (isset($_POST['agenda_submit']))
{
    $time1 = $_POST['time1'];
    $event1 = $_POST['event1'];
    $time2 = $_POST['time2'];
    $event2 = $_POST['event2'];
    $time3 = $_POST['time3'];
    $event3 = $_POST['event3'];
    $time4 = $_POST['time4'];
    $event4 = $_POST['event4'];
    $time5 = $_POST['time5'];
    $event5 = $_POST['event5'];

    $query = "INSERT INTO agenda(time1,	event1, time2, event2, time3, event3, time4, event4, time5, event5) 
    VALUES('$time1', '$event1', '$time2', '$event2', '$time3', '$event3', '$time4', '$event4', '$time5', '$event5')";

    $res = mysqli_query($connect,$query);

    if($res)
    {
        header('location:budget.php');
    }
    else
    {
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" 
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="event_styles.css">

    <style>
        .upl-sig{
            background: #ffffff;
            border: 1px solid silver;
            border-radius: 5px;
            height: 100px;
            width: 100px;
        }
        .sig-table{
            margin-left: auto;
            margin-right: auto;
        }
        /* --- Budget Table */
        .bgt-table{
            margin-left: 100px;
            width: 75%;
        }
        .bgt-table input{
            text-align: center;
        }
        
        /* --- Agenda Table */
        .agend-table{
            margin-left: 100px;
            width: 75%;
        }
        .agend-table input{
            text-align: left;
        }
        /* --- Add Button --- */
        .add-btn{
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

        #chk-bx{
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
            <a href="user.php">Agenda</a>
        </nav>
    </div>

    <!-- Agenda form -->

    <div class="container">
        <form class="event-form" action="" method="post" name="form">
            
            <br>
            <hr>
            <br>

                    <!-- Agenda -->
            <div>
                <ul>
                    <li>Agenda</li>
                </ul>
                <table class="agend-table">
                    <tr>
                        <th>Time</th>
                        <th>Event</th>
                    </tr>
                    <tr>
                        <td><input type="time" name="time1"  placeholder="hh:mm:ss"></td>
                        <td><input type="text" name="event1"  placeholder="Enter event"></td>
                    </tr>
                    <tr>
                        <td><input type="time" name="time2"  placeholder="hh:mm:ss"></td>
                        <td><input type="text" name="event2"  placeholder="Enter event"></td>
                    </tr>
                    <tr>
                        <td><input type="time" name="time3"  placeholder="hh:mm:ss"></td>
                        <td><input type="text" name="event3"  placeholder="Enter event"></td>
                    </tr>
                    <tr>
                        <td><input type="time" name="time4"  placeholder="hh:mm:ss"></td>
                        <td><input type="text" name="event4"  placeholder="Enter event"></td>
                    </tr>
                    <tr>
                        <td><input type="time" name="time5"  placeholder="hh:mm:ss"></td>
                        <td><input type="text" name="event5"  placeholder="Enter event"></td>
                    </tr>
                </table>
            </div>
            <br>
            <hr>
            <br>
            <button class="btn-submit" type="submit" name="agenda_submit">submit</button>
            <br>
            <br>
        </form>
</body>
</html>