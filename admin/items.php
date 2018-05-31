
<?php include('includes/admin_header.php'); ?>
<?php include('includes/navigation.php'); ?>
<!--
  <div class="content-wrapper">
    <div class="container-fluid">

     
      <div class="row">
        <div class="col-12">
          <h1>Items</h1>
          <hr>
-->
            <?php 

              if(isset($_GET['source'])) {

                $source = $_GET['source'];

              } else {
                $source = "";
              }

             ?>

             <?php 

                switch($source) {
                  case 'add_item':
                    include('includes/add_item.php');
                    break;
                  case 'edit_item':
                    include('includes/edit_item.php');
                    break;
                  default:
                    include('includes/all_items.php');
                }



              ?>
<!--
        </div>
      </div>
    </div>-->
   <?php include('includes/admin_footer.php'); ?>