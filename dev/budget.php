<?php

@include 'config.php';

if (isset($_POST['budget_submit']))
{
    $reaason1 = $_POST['reaason1 '];
    $value1 = $_POST['value1'];
    $reaason2 = $_POST['reaason2'];
    $value2 = $_POST['value2'];
    $reaason3 = $_POST['reaason3'];
    $value3 = $_POST['value3'];
    $reaason4 = $_POST['reaason4'];
    $value4 = $_POST['value4'];
    $reaason5 = $_POST['reaason5'];
    $value5 = $_POST['value5'];

    $query = "INSERT INTO budget(reaason1, value1, reaason2, value2, reaason3, value3,	reaason4, value4, reaason5, value5) 
    VALUES('$reaason1', '$value1', '$reaason2', '$value2', '$reaason3', '$value3', '$reaason4', '$value4', '$reaason5', '$value5')";

    $res = mysqli_query($connect,$query);

    if($res)
    {
        header('location:user.php');
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
            <a href="user.php">Budget</a>
        </nav>
    </div>

    <!-- Budget form -->

    <div class="container">
        <form class="event-form" action="" method="post" name="form">
            
            <br>
            <hr>
            <br>

                    <!-- Budget -->
            <div>
                <ul>
                    <li>
                        Budget
                    </li>
                    <p>(Should be certified by the senior tresure)</p>
                </ul>
                <br>
                    <table class="bgt-table">
                        <tr>
                            <th>Reason</th>
                            <th>Value</th>
                        </tr>
                        <tr>
                            <td><input type="text" name="reaason1"  placeholder="Enter reason"></td>
                            <td><input type="text" name="value1"  placeholder="Enter value"></td>
                        </tr>
                        <tr>
                            <td><input type="text" name="reaason2"  placeholder="Enter reason"></td>
                            <td><input type="text" name="value2"  placeholder="Enter value"></td>
                        </tr>
                        <tr>
                            <td><input type="text" name="reaason3"  placeholder="Enter reason"></td>
                            <td><input type="text" name="value3"  placeholder="Enter value"></td>
                        </tr>
                        <tr>
                            <td><input type="text" name="reaason4"  placeholder="Enter reason"></td>
                            <td><input type="text" name="value4"  placeholder="Enter value"></td>
                        </tr>
                        <tr>
                            <td><input type="text" name="reaason5"  placeholder="Enter reason"></td>
                            <td><input type="text" name="value5"  placeholder="Enter value"></td>
                        </tr>
                        <tr>
                            <td colspan="2">
                            <input type="text" name="total_ammount"  placeholder="Total Ammount">
                            </td>
                        </tr>
                    </table>
            </div>
            <br>
            <hr>
            <br>
            <button class="btn-submit" type="submit" name="budget_submit">submit</button>
            <br>
            <br>
        </form>
</body>
</html>