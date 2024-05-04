<?php
session_start();
include_once('connection.php');
/*must login to view homepage*/
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="css/style.css"> 
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <title>Captain Marriage Center</title>
</head>
<body>
    <?php
    include ('include/user_header.php');
    ?>
    <div class="area" style="background-color: silver;">
        <div class="container" style="background-color: white;">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Thank you!</h1>
                    <p>You have successfully create your account. To Login<small class="text-danger" style="font-weight:bold;"><i> (please pay the fee). </i></small> You can check your account status.</p>
                    <a class="btn btn-danger w-15 mt-0 mx-auto" href="account_status.php">Account Status</a>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="table-responsive">
                        <table class="table table-borderless text-center">
                            <tbody>
                                <tr style="font-weight:bold;">
                                    <th class="text-danger">Payment Method 1</th>
                                    <th class="text-success">Payment Method 2</th>
                                </tr>

                                <tr>
                                    <td>Jazz Cash</td>
                                    <td>Easy Paisa</td>
                                </tr>

                                <tr>
                                    <td><img src="img/jazz.jpg" height="80px" width="200px"></td>
                                    <td><img src="img/easy.png" height="80px" width="200px"></td>
                                </tr>

                                <tr>
                                    <td>Phone No:<br> 0312-2352365</td>
                                    <td>Phone No:<br> 0351-5236589</td>
                                </tr>

                                <tr>
                                    <td><i><small style="font-weight:bold;">(Refund is not availble.)</small></i></td>
                                    <td><i><small style="font-weight:bold;">(Refund is not availble.)</small></i></td>
                                </tr>

                                <tr>
                                    <td colspan="2" class="text-danger" style="font-weight:bold;"><i><small>(If you have any issue regarding payment Please Contact with us.)</small></i></td>
                                </tr>
                            <tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    include('include/user_footer.php');
    ?>
</body>
</html>