<?php
session_start();
include ('connection.php');
if(isset($_SESSION['id']))
{
  header('location: home.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Login Account</title>

<style>
.btn-success, .btn-danger{
    width: 100%;
}
</style>
</head>
<body style="font-family:osnovapro,sans-serif;">
    <?php
    include('include/user_header.php');
    ?>
    <!--Main Areaa-->

    <div class="area" style="background-color: silver;">
        <div class="container" style="background-color: white; height:none;">
        <div class="class"></div>
            <div class="row">
                <form action="logincode.php" method="post">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <h2>Login Account:</h2>
                        </div>
                    </div>
        
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <p>Enter the your and password.</p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-4 col-md-12 col-sm-12">
                            <label for="Email" class="form-label" style="font-weight: bold;">Email:</label>
                            <input type="email" name="email" placeholder="abc@gmail.com" maxlength="50" class="form-control" required>
                
                            <label for="Password" class="form-label" style="font-weight: bold;">Password:</label>
                            <input type="password" name="password" class="form-control" required>
                        </div>


                    </div>

                    <div class="row">
                        <div class="col-lg-4 col-md-12 col-sm-12">
                            <button type="submit" class="btn btn-success my-3" name="login" value="submit">Login</button>
                            <p>Login as Admin: <a href="admin_login.php" class="btn btn-danger my-2">Admin Login</a> </p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <?php include('include/user_footer.php'); ?>
</body>
</html>