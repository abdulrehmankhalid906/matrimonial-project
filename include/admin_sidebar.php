<?php
if(!isset($_SESSION['name'])){
  header('location:login.php');
}
?>

<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index.php" class="brand-link">
      <img src="img/logo.png" class="brand-image img-circle elevation-3">
      <span class="brand-text font-weight-light">Captain Rishta</span>
    </a>

    <!--Sidebar-->
    <div class="sidebar">
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="info">
          <a class="d-block">
            <?php
              if(isset($_SESSION['name'])){
              ?>
              Welcome ! <?php echo $_SESSION['name'];?>
              <?php
            }
            ?>
            </a>
        </div>
      </div>

      <!--Search Bar-->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!--Left (Main) Sidebar All Menus-->
      <!--Left (Main) Sidebar All Menus-->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="index.php" class="nav-link">
              <p>Admin Dashboard</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="admin_register.php" class="nav-link">
              <p>Add New User</p>
            </a>
          </li>
          
          <li class="nav-item">
            <a href="admin_edit.php" class="nav-link">
              <p>Edit Users Data</p>
            </a>
          </li>

          <li class="nav-item">
		        <a href="logout.php" class="nav-link">Logout</a>
          </li>
        </ul>
      </nav>
    </div>
  </aside>