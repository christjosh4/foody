
<?php include('includes/admin_header.php'); ?>
<?php include('includes/navigation.php'); ?>

  <div class="content-wrapper">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <h1>Admin</h1>
          <hr>
          	<?php 
              if(isset($_GET['source'])) {
                $source = $_GET['source'];
              } else {
                $source = "";
              }

              switch ($source) {
                case 'add_admin':
                  include('includes/add_admin.php');
                  break;
                case 'edit_admin':
                  include('includes/edit_admin.php');
                  break;
                default:
                  include('includes/all_admins.php');
                  break;
              }
             ?>
        </div>
      </div>
    </div>
<?php include('includes/admin_footer.php'); ?>
