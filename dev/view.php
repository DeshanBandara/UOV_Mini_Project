<?php
include "config.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View-Image</title>
    <style>
        body{
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
            min-height: 100vh;
        }
        .alb{
            width: 200px;
            height: 200px;
            padding: 5px;
        }
        .alb img{
            width: 100%;
            height: 100%;
        }
        a{
            text-decoration: none;
            color: black;
        }
    </style>
</head>
<body>
    <a href="upload_form.php">&#8592;</a>
    <?php
        $sql = "SELECT * FROM images ORDER BY id DESC";
        $res = mysqli_query($connect, $sql);

        if (mysqli_num_rows($res) > 0)
        {
            while ($images = mysqli_fetch_assoc($res))
            {
                ?>
                <div class="alb">
                    <img src="uploads/<?=$images['image_url']?>" alt="">
                </div>
                <?php
            }
        }
    ?>
</body>
</html>