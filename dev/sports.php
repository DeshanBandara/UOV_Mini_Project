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
            <label for="">Type of sport event</label>
            <input type="text" name="sport_type" required placeholder="Sport type">
            <br>
            <input type="text" name="num_persons" required placeholder="Number of person/s travelling">
            <label for="">Date</label>
            <br>
            <input type="text" name="date" required placeholder="yyyy-mm-dd">
            <br>
            <br>
            <label for="">Venue</label>
            <br>
            <input type="text" name="venue" required placeholder="Venue">
            <br>
            <br>
            
            <br>
            
            <br>
            <br>
            
            <br>
            
            <br>
            <br>
            <button class="btn-submit" type="submit" name="submit">submit</button>

            <br><br>


            <p>After submition your form will submit according to following order</p>
            <ul>
                <li><a href="">Student Counsellor</a></li>
                <li><a href="">Head of the Department</a></li>
                <li><a href="">Assistant Registrar</a></li>
                <li><a href="">Dean of Faculty</a></li>
                <li><a href="">Administrative Branch</a></li>
            </ul>
            <p>Pending results...</p>
        </form>




        <br><br><hr><br>
        <div class="h-l-btn">
            <button class="btn-home"><a href="index.php">home</a></button>
            <button class="btn-logout"><a href="logout.php">logout</a></button>
        </div>
    </div>
</body>

</html>