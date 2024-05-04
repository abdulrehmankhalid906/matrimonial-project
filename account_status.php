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
<style>
.table{
    vertical-align:bottom;
    width: 100%;
}

.table>:not(caption)>*>* {
    padding:0.1em;
}
</style>
<body>
    <?php
    include ('include/user_header.php');
    ?>
    <div class="area" style="background-color: silver;">
        <div class="container" style="background-color: white; height:none;">
            <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <h2>Enter Your Email:</h2>
                        <p class="text-danger fw-bold"><i>Users can check verification through email only.</i></p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-8">
                        <label for="fname" class="form-label">Email:</label>
                        <input type="email" class="form-control" name="email" required>
                    </div>
                </div>

                <div class="row">
                    <div class="d-grid gap-2 col-6 mx-auto">
                        <button type="submit" class="btn btn-success" value="check" name="check">Check</button>
                    </div>
                </div>
            </form>


            <hr>
            <!--Dispaly Status-->

            <!--Search Menu Backend-->
          <?php
          if(isset($_POST['check']))
          {
                $email = $_POST['email'];
                $search = "select * from registerinfo where email='$email'";
                $search = mysqli_query($con,$search);
                ?>
                <?php
                if(mysqli_num_rows($search)>0)
                {
                    while($res = mysqli_fetch_assoc($search))
                    {
                        ?>
                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th colspan="4" class="text-center"><h4>User Details</h4></th>
                                    </tr>

                                    <tr>
                                        <td colspan="4"><h5 style="color:#d16565; font-weight:650;" ><?php echo $res['bio'];?></h5></td>
                                    </tr>

                                    <tr>
                                        <td rowspan="5" style="width:150px;">
                                            <span>
                                                <?php
                                                if(!isset($_SESSION['id'])){
                                                    ?>
                                                    <script>
                                                    $(document).ready(function(){
                                                    $(this).hide();
                                                    });
                                                    </script>
                                                    <?php
                                                    if($res['gender']=="Male"){
                                                    ?>
                                                    <img src="img/logout_male.png" height="175px" width="150px" alt="logout_male">
                                                    <?php
                                                    }
                                                    else{
                                                    ?>
                                                    <img src="img/logout_female.png" height="175px" width="150px" alt="logout_female">
                                                    <?php
                                                    }
                                                }
                                                else if(($res['user_image'] !=''))
                                                {
                                                    ?>
                                                    <img src="<?php echo "profile/".$res['user_image'];?>" height="175px" width="150px" alt="Image">      
                                                    <?php
                                                }
                                                else
                                                {
                                                    if($res['gender']=="Male")
                                                    {
                                                    ?>
                                                    <img src="img/logout_male.png" height="175px" width="150px" alt="logout_male">
                                                    <?php
                                                    }
                                                    else
                                                    {
                                                    ?>
                                                    <img src="img/logout_female.png" height="175px" width="150px" alt="logout_female">
                                                    <?php
                                                    }
                                                }
                                                ?>
                                            </span>
                                        </td>
                                        <td><b>Name: </b><?php echo $res['username'];?></td>
                                        <td><b>Email: </b><?php echo $res['email'];?></td>
                                        <td><b>City: </b><?php echo $res['city'];?></td>                                      
                                    </tr>
                                    
                                    <tr>
                                        <td><b>Martail Status: </b><?php echo $res['martial'];?></td>
                                        <td><b>Caste: </b><?php echo $res['caste'];?></td>
                                        <td><b>Verfication Status:</b>
                                        <?php
                                        if($res['status']==0){
                                            ?>
                                            <span class="text-danger fw-bold"><img src="img/pending.png" height="25px" width="25px"><i>Pending</i></span>
                                            <?php
                                        }
                                        else if($res['status']==1){
                                            ?>
                                            <span class="text-success fw-bold"><img src="img/verified.png" height="25px" width="25px"><i>Verified</i></span>
                                            <?php
                                        }
                                        else{
                                            ?>
                                            <span class="text-secondary fw-bold"><img src="img/block.png" height="25px" width="25px"><i>Blocked</i></span>
                                            <?php
                                        }
                                        ?>
                                        </td>
                                    </tr>                         
                                </tbody>
                            </table>
                        </div>

                        <?php
                    }
                }
                else{
                    ?>
                    <h4 style="color:red;">No Record Found</h4>
                    <?php
                }   
            }
            ?>
        </div>
    </div>
    <?php include('include/user_footer.php'); ?>
</body>
</html>