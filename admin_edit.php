<?php
session_start();
if(!isset($_SESSION['name'])){
  header('location:login.php');
}
include("include/admin_header.php");
include('include/admin_topbar.php');
include('include/admin_sidebar.php');

?>
  <div class="content-wrapper">
    <!--matbe add model here-->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
            <h1 class="m-0">Registered Users</h1>
          </div>

          <div class="card">
              <div class="card-header">
                <h3 class="card-title">All the Registered Users</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-responsive table-hover">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>UserID</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Password</th>
                      <th>Image</th>
                      <th>Bio</th>
                      <th>Self</th>
                      <th>Gender</th>
                      <th>Age</th>
                      <th>Martial Status</th>
                      <th>Religion</th>
                      <th>Caste</th>
                      <th>Sect</th>
                      <th>Color</th>
                      <th>Height</th>
                      <th>Study</th>
                      <th>Occupation</th>
                      <th>Income</th>
                      <th>Nationality</th>
                      <th>City</th>
                      <th>Whatsapp</th>
                      <th>Created</th>
                      <th>Status</th>
                      <th>Operation</th>
                      <th>Action</th>
                    </tr>
                  </thead>

			              <?php
                      include ('connection.php');
                      $query = "select * from registerinfo";
                      $query_run = mysqli_query($con,$query);

                      if(mysqli_num_rows($query_run) > 0)
                      {
                        while($res = mysqli_fetch_assoc($query_run))
                          {
                            ?>
                            <tbody>
                              <tr>
                                <td><?php echo $res['id'];?></td>
                                <td><?php echo $res['userid'];?></td>
                                <td><?php echo $res['username'];?></td>
                                <td><?php echo $res['email'];?></td>
                                <td><?php echo $res['password'];?></td>
                                <td>Image</td>
                                <td>Bio</td>
                                <td><?php echo $res['self'];?></td>
                                <td><?php echo $res['gender'];?></td>
                                <td><?php echo $res['age'];?> Years</td>
                                <td><?php echo $res['martial'];?></td>
                                <td><?php echo $res['religion'];?></td>
                                <td><?php echo $res['caste'];?></td>
                                <td><?php echo $res['sect'];?></td>
                                <td><?php echo $res['color'];?></td>
                                <td><?php echo $res['height'];?></td>
                                <td><?php echo $res['study'];?></td>
                                <td><?php echo $res['occup'];?></td>
                                <td><?php echo $res['income'];?></td>
                                <td><?php echo $res['nation'];?></td>
                                <td><?php echo $res['city'];?></td>
                                <td><?php echo $res['whatsapp'];?></td>
                                <td><?php echo $res['created'];?></td>
                                <td><?php echo $res['status'];?></td>
                                <td>
                                  <a href="admin_update.php?id=<?php echo $res['id']?>">Edit</a>
                                  <a href="admin_delete.php?id=<?php echo $res['id']?>">Delete</a>
                                </td>

                                <td>
                                  <?php
                                  if($res['status']==0){
                                    echo '<p><a href="admin_status.php?id='.$res['id'].'&status=1">Progress</a></p>';
                                  }
                                  else if($res['status']==1){
                                    echo '<p><a href="admin_status.php?id='.$res['id'].'&status=0">Verified</a></p>';
                                  }
                                  else{
                                    echo '<p><a href="admin_status.php?id='.$res['id'].'&status=2">Block</a></p>';
                                  }
                                  ?>
                                </td>
                              </tr>
                              <?php
                            }
                      }
                    ?>
                  </tbody>
                </table>
              </div>
            </div>
        </div>
      </div>
    </div>
  </div>

<?php
include "include/admin_footer.php";
?>