<?php
session_start();
include ('connection.php');
if(isset($_POST['update_user']))
{
    $id=$_SESSION['id'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    /*Personal Info*/
    $bio = $_POST['bio'];
    $self = $_POST['self'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $martial = $_POST['martial'];
    $religion = $_POST['religion'];
    $caste = $_POST['caste'];
    $sect = $_POST['sect'];
    $color = $_POST['color'];
    $height = $_POST['height'];
    $study = $_POST['study'];
    $occup = $_POST['occup'];
    $income = $_POST['income'];
    $nation = $_POST['nation'];
    $city = $_POST['city'];
    $whatsapp = $_POST['whatsapp'];

    $new_image = $_FILES['user_image']['name'];
    $old_image = $_POST['user_old_image'];

    if($new_image != '')
    {
        $update_filename = $_FILES['user_image']['name'];
    }
    else
    {
        $update_filename = $old_image;
    }

    $query = "UPDATE registerinfo SET username='$username', email='$email', password='$password', user_image='$update_filename', bio='$bio', self='$self', gender='$gender', age='$age', martial='$martial',
    religion='$religion', caste='$caste', sect='$sect', color='$color', height='$height', study='$study', occup='$occup', income='$income', nation='$nation', city='$city', whatsapp='$whatsapp' WHERE id='$id'";
    $query_run = mysqli_query($con,$query);

    if($query_run){
        if($_FILES['user_image']['name'] !='')
        {
            move_uploaded_file($_FILES["user_image"]["tmp_name"],"profile/".$_FILES["user_image"]["name"]);
            unlink("profile/".old_image);
        }
        echo"Profile is updated successfully";
        header('location:view_profile.php');
    }
    else{
        echo"Profile is updated successfully";
        header('location:update_profile.php');
    }
}
?>