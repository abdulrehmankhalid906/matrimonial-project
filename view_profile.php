<?php
include'connection.php';
session_start();
if(!isset($_SESSION['id'])){
  header('location:login.php');
}
?>
<html>
  <head>
    <title>User Details</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css"> 
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  </head>
<body>
  <?php
  include ('header_info.php');
  include 'header_top.php';
  ?>
<!--main areaa-->
<!--main areaa-->
<!--main areaa-->
<div class="area" style="background-color: silver;">
  <div class="container" style="background-color: white; border-left:1px solid black;border-right:1px solid black;">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 py-2">
        <h2 class="text-success">My Profile</h2>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 py-1">
        <p class="text-secondary fw-bold">You can edit your profile. If you have any issue contact us</p>     
      </div>
    </div>
          
      <!--User Data table-->
          <div class="row">
            <div class="table-responsive">
              <table class="table table-border">
                <tbody>
                <?php
                  $id=$_SESSION['id'];
                  $query= "SELECT * FROM `registerinfo` WHERE id='$id'";
                  $search_query = mysqli_query($con,$query);
                  $res=mysqli_fetch_array($search_query);
                  ?>
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
                            <img src="img/logout_male.jpg" height="170px" width="170px" alt="Logout_Male">
                            <?php
                          }
                          else{
                            ?>
                            <img src="img/logout_female.jpg" height="170px" width="170px" alt="Logout_Female">
                            <?php
                          }
                        }
                        else if(($res['user_image'] !=''))
                        {
                          ?>
                          <img src="<?php echo "profile/".$res['user_image'];?>" height="170px" width="170px" alt="Image">      
                          <?php
                        }
                        else
                        {
                          if($res['gender']=="Male")
                          {
                            ?>
                            <img src="img/no_pic_male.jpg" height="170px" width="170px" alt="No_Pic_Male">
                            <?php
                          }
                          else
                          {
                          ?>
                          <img src="img/no_pic_female.jpg" height="170px" width="170px" alt="No_Pic_Female">
                          <?php
                          }
                        }
                        ?>
                    </span>
                  </td>
                  <td><b>Name: </b><?php echo $res['username'];?></td>
                  <td><b>Looking For: </b><?php echo $res['self'];?></td>
                  <td><b>Gender: </b><?php echo $res['gender'];?></td>
                </tr>

                <tr>
                  <td><b>Age: </b><?php echo $res['age'];?></td>
                  <td><b>Martail Status: </b><?php echo $res['martial'];?></td>
                  <td><b>Religion: </b><?php echo $res['religion'];?></td>
                </tr>

                <tr>
                  <td><b>Caste: </b><?php echo $res['caste'];?></td> 
                  <td><b>Sect: </b><?php echo $res['sect'];?></td>
                  <td><b>Complexility: </b><?php echo $res['color'];?></td>  
                </tr>

                <tr>
                  <td><b>Height: </b><?php echo $res['height'];?></td>
                  <td><b>Occupation: </b><?php echo $res['occup'];?></td>
                  <td><b>Income: </b><?php echo $res['income'];?> <small class="text-danger" style="font-weight:bold;"><i>(Per Month)</i></small></td>
                </tr>

                <tr>
                  <td><b>Nationalility: </b><?php echo $res['nation'];?></td>
                  <td><b>City: </b><?php echo $res['city'];?></td>
                  <td><b>Whatsapp:</b><?php echo $res['whatsapp'];?></td>
                </tr>

                <tr>
                  <td colspan="2">
                    <b>Verification Status:</b>
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
                  <td>
                    <form action="update_profile.php" method="POST">
                      <button type="submit" name="edit_btn" class="btn btn-success w-75 mt-0 mx-auto">Update Profile</button>
                    </form>
                  </td>
                </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
<?php
include "include/user_footer.php";
?>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>