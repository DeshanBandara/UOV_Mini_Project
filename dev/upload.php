<?php



if (isset($_POST['submit']) && isset($_FILES['image']))
{
    @include "config.php";

    echo "<pre>";
    print_r($_FILES['image']);
    echo "</pre>";

    $img_name = $_FILES['image']['name'];
    $img_size = $_FILES['image']['size'];
    $tmp_name = $_FILES['image']['tmp_name'];
    $error = $_FILES['image']['error'];

    if($error == 0)
    {
        if($img_size > 125000)
        {
            $em = "Sorry, your file is too large.";
            header('location:upload_form.php?error=$em');
        }
        else
        {
            $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
            $img_ex_lc = strtolower($img_ex);

            $allowed_exs = array("jpg","jpeg","png");

            if (in_array($img_ex_lc, $allowed_exs))
            {
                $new_img_name = uniqid("IMG-",true).'.'.$img_ex_lc;
                $img_upload_path = 'uploads/'.$new_img_name;
                move_uploaded_file($tmp_name, $img_upload_path);

                //Insert into Database
                $sql = "INSERT INTO images(image_url) VALUES('$new_img_name')";
                mysqli_query($connect,$sql);
                header("location:view.php");
            }
            else
            {
                $em = "you can't upload files of this type";
                header('location:upload_form.php?error=$em');
            }
        }

    }
    else
    {
        $em = "unknown error occurred!";
        header('location:upload_form.php?error=$em');
    }

}
else
{
    header('location:upload_form.php');
}


?>

