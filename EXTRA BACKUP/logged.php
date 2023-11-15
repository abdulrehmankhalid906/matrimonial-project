<?php
include ('connection.php');
    if(isset($_POST['login'])){
        $email = $_POST['email'];
        $password = $_POST['password'];

        $search_info = "select * from registerinfo where email='$email' and password='$password' ";
        $query = mysqli_query($con,$search_info);
        if(mysqli_num_rows($query)==1)
        {
            session_start();
            $_SESSION['auth']='true';
            header('location:home.php');
        }
        else{
            echo"Invalid Email or Password";
        }
    }
?>