<?php include('includes/header.php'); ?>
<?php include('includes/navigation.php'); ?>
    <!-- Page Content -->
    <div class="container-fluid">
      <div class="row">


 <style type="text/css">
      .card {
        background-color: #DCDCDC;
      }
      .card {
        color: #800000;
      }

      .card a{
        color: #800000;
      }
    </style>
        <div class="col-md-2">
        	<h2>Categories</h2>
          <div class="list-group">

          	<?php 
          		$query = "SELECT * FROM category";
              $ret_cat = mysqli_query($con, $query);
              while($row = mysqli_fetch_array($ret_cat)) {
                $cat_title = $row['cat_name'];
                echo "<a style='background-color: #DCDCDC;color:#800000;' href='bycategory.php?source={$cat_title}' class='list-group-item'>{$cat_title}</a>";
              }

          	 ?>
          </div>

        </div>
        <!-- /.col-lg-3 -->

        <div class="col-lg-10">

          <div class="row">
            <?php 

              if(isset($_GET['source'])) {
                $source = $_GET['source'];
              } else {
                $source = "";
              }

              switch($source) {
                case 'bhelpuri':
                  include('by_category/bhelpuri.php');
                  break;
                case 'samosa':
                  include('by_category/samosa.php');
                  break;
                case 'sandwich':
                  include('by_category/sandwich.php');
                  break;
                case 'pizza':
                  include('by_category/pizza.php');
                  break;
                case 'dosa':
                  include('by_category/dosa.php');
                  break;
                case 'uttappa':
                  include('by_category/uttappa.php');
                  break;
                case 'pavbhaji':
                  include('by_category/pavbhaji.php');
                  break;
                default:
                  //header("Location: index.php");
                  break;
            }
            ?>
          <!-- /.row -->

        </div>
        <!-- /.col-lg-9 -->

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

    <!-- Footer -->
    
    <?php include('includes/footer.php'); ?>