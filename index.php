<?php
session_start();
include('connection.php');
if(!isset($_SESSION['name'])){
  header('location:login.php');
}

include('include/admin_header.php');
include('include/admin_topbar.php');
include('include/admin_sidebar.php');
?>

  <div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
            <h1 class="m-0">Dashboard</h1>
          </div>
        </div>
      </div>
    </div>

    <!--Display Database Users Data-->
    <!--Display Database Users Data-->
    <!--Display Database Users Data-->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-secondary">
              <div class="inner">
                <h3>
                <?php
                $query="select * from registerinfo";
                $query = mysqli_query($con,$query);
                $num = mysqli_num_rows($query);
                if(mysqli_num_rows($query)>=$num){
                  echo $num;
                }
                ?>
                </h3>
                <p>Total Proposals</p>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
              <h3>
                <?php
                $query="select * from registerinfo WHERE status='1'";
                $query = mysqli_query($con,$query);
                $one = mysqli_num_rows($query);
                if(mysqli_num_rows($query)>=$one){
                  echo $one;
                }
                ?>
                </h3>
                <p>Verified Proposals</p>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>
                <?php
                $query="select * from registerinfo WHERE status='0'";
                $query = mysqli_query($con,$query);
                $zero = mysqli_num_rows($query);
                if(mysqli_num_rows($query)>=$zero){
                  echo $zero;
                }
                ?>
                </h3>
                <p>Not Verified Proposals</p>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>
                <?php
                $query="select * from registerinfo WHERE status='2'";
                $query = mysqli_query($con,$query);
                $two = mysqli_num_rows($query);
                if(mysqli_num_rows($query)>=$two){
                  echo $two;
                }
                ?>
                </h3>
                <p>Blocked Proposals</p>
              </div>
            </div>
          </div>
        </div>

        <hr>
        <div class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-12">
                <h1 class="m-0">Filter Search</h1>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>
                <?php
                $query="select * from registerinfo WHERE city='Rawalpindi'";
                $query = mysqli_query($con,$query);
                $rwp = mysqli_num_rows($query);
                if(mysqli_num_rows($query)>=$rwp){
                  echo $rwp;
                }
                ?>
                </h3>
                <p>Rawalpindi Proposals</p>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
              <h3>
                <?php
                $query="select * from registerinfo WHERE city='Islamabad'";
                $query = mysqli_query($con,$query);
                $isb = mysqli_num_rows($query);
                if(mysqli_num_rows($query)>=$isb){
                  echo $isb;
                }
                ?>
                </h3>
                <p>Islamabad Proposals</p>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-6">
            <div class="small-box bg-dark">
              <div class="inner">
              <h3>
                <?php
                $query="select * from registerinfo WHERE gender='male'";
                $query = mysqli_query($con,$query);
                $mal = mysqli_num_rows($query);
                if(mysqli_num_rows($query)>=$mal){
                  echo $mal;
                }
                ?>
              </h3>
                <p>Male Users</p>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-6">
            <div class="small-box bg-light">
              <div class="inner">
                <h3>
                  <?php
                  $query="select * from registerinfo WHERE gender='female'";
                  $query = mysqli_query($con,$query);
                  $fem = mysqli_num_rows($query);
                  if(mysqli_num_rows($query)>=$fem){
                    echo $fem;
                  }
                  ?>
                </h3>
                <p>Female Users</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
<?php
include('include/admin_footer.php');
?>