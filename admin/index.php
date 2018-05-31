

<?php include('includes/admin_header.php'); ?>
<?php include('includes/navigation.php'); ?>


<?php 

  if(!isset($_SESSION['admin_name'])) {
    header("Location: login.php");
  }

 ?>

 <?php 

  $c_query = "SELECT * FROM customer";
  $ret_cus = mysqli_query($con, $c_query);
  $count_cus = mysqli_num_rows($ret_cus);

  $o_query = "SELECT * FROM orders";
  $ret_or = mysqli_query($con, $o_query);
  $count_or = mysqli_num_rows($ret_or);

  $i_query = "SELECT * FROM items";
  $ret_it = mysqli_query($con, $i_query);
  $count_it = mysqli_num_rows($ret_it);

  $a_query = "SELECT * FROM admins";
  $ret_ad = mysqli_query($con, $a_query);
  $count_ad = mysqli_num_rows($ret_ad);

  ?>

  <div class="content-wrapper">
    <div class="container-fluid">
        <div class="col-12">
          <h1>Dashboard</h1>
          <hr>

        </div>
      <div class="row">
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-primary o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-reorder"></i>
              </div>
              <div class="mr-5"><?php echo $count_it; ?> Total Items</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="items.php">
              <span class="float-left">View Details</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-warning o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-shopping-cart"></i>
              </div>
              <div class="mr-5"><?php echo $count_or; ?> Total Orders</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="orders.php">
              <span class="float-left">View Details</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-success o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-users"></i>
              </div>
              <div class="mr-5"><?php echo $count_cus; ?> Total Customers</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="customers.php">
              <span class="float-top">View Details</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-danger o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-user"></i>
              </div>
              <div class="mr-5"><?php echo $count_ad; ?> Total Admins</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="admins.php">
              <span class="float-left">View Details</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
      </div>
      
      <div class="row">
        <div class="col-lg-8">
          
        </div>
    </div>
<?php include('includes/admin_footer.php'); ?>