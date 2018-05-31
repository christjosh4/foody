 <?php include('includes/header.php'); ?>
<?php include('includes/navigation.php'); ?>
    <!-- Page Content -->

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

    <?php include('create_carts.php'); ?>

    <div class="container-fluid">
      <div class="row">

        <div class="col-md-3">
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
 
        <div class="col-lg-9">

          <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
              <div class="carousel-item active">
                <img class="d-block img-fluid" src="caro_images/chef.png" alt="First slide">
              </div>
              <div class="carousel-item">
                <img class="d-block img-fluid" src="caro_images/fast.png" alt="Second slide">
              </div>
              <div class="carousel-item">
                <img class="d-block img-fluid" src="caro_images/burger.png" alt="Third slide">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>

          <h3>Bhelpuri</h3>
          <div class="row">
            <?php 
              $query = "SELECT * FROM items WHERE item_category = 'BHELPURI' LIMIT 3";
              $ret_item = mysqli_query($con, $query);
              while($row = mysqli_fetch_array($ret_item)) {
                $item_id = $row['item_id'];
                $item_name = $row['item_name'];
                $item_img = $row['item_img'];
                $item_price = $row['item_price'];
              ?>
                <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
              <?php
                echo "<a href='#''><img class='card-img-top' src='admin/images/$item_img' alt=''></a>";
              ?>
                <div class="card-body">
                  <h4 class="card-title">
            <?php
                    echo "<a href='#'>$item_name</a>";
              ?>
                  </h4>
            <?php
                  echo "<h5>Price: $item_price</h5>";
              ?>
                </div>
                <div class="card-footer">
                  <?php 
                    echo "<a href='index.php?item_id={$item_id}' class='btn btn-primary btn-block'>Add To Cart</a>";
                    $_SESSION['pages'] = 'index.php'; 
                   ?>
                </div>
              </div>
            </div>
             <?php   
              }
             ?>
            
          </div>
            <a class="btn btn-info" href="bycategory.php?source=bhelpuri">Show All Items</a>
            <hr>

            <h3>Samosa</h3>
            <div class="row">
            <?php 
              $query = "SELECT * FROM items WHERE item_category = 'SAMOSA' LIMIT 3";
              $ret_item = mysqli_query($con, $query);
              while($row = mysqli_fetch_array($ret_item)) {
                $item_id = $row['item_id'];
                $item_name = $row['item_name'];
                $item_img = $row['item_img'];
                $item_price = $row['item_price'];
              ?>
                <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
              <?php
                echo "<a href='#''><img class='card-img-top' src='admin/images/$item_img' alt=''></a>";
              ?>
                <div class="card-body">
                  <h4 class="card-title">
            <?php
                    echo "<a href='#'>$item_name</a>";
              ?>
                  </h4>
            <?php
                  echo "<h5>Price: $item_price</h5>";
              ?>
                </div>
                <div class="card-footer">
                  <?php 
                    echo "<a href='index.php?item_id={$item_id}' class='btn btn-primary btn-block'>Add To Cart</a>";
                   ?>
                </div>
              </div>
            </div>
             <?php   
              }
             ?>
            
          </div>
            <a class="btn btn-info" href="bycategory.php?source=samosa">Show All Items</a>
            <hr>

            <h3>Sandwich</h3>
            <div class="row">
            <?php 
              $query = "SELECT * FROM items WHERE item_category = 'SANDWICH' LIMIT 3";
              $ret_item = mysqli_query($con, $query);
              while($row = mysqli_fetch_array($ret_item)) {
                $item_id = $row['item_id'];
                $item_name = $row['item_name'];
                $item_img = $row['item_img'];
                $item_price = $row['item_price'];
              ?>
                <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
              <?php
                echo "<a href='#''><img class='card-img-top' src='admin/images/$item_img' alt=''></a>";
              ?>
                <div class="card-body">
                  <h4 class="card-title">
            <?php
                    echo "<a href='#'>$item_name</a>";
              ?>
                  </h4>
            <?php
                  echo "<h5>Price: $item_price</h5>";
              ?>
                </div>
                <div class="card-footer">
                  <?php 
                    echo "<a href='index.php?item_id={$item_id}' class='btn btn-primary btn-block'>Add To Cart</a>";
                   ?>
                </div>
              </div>
            </div>
             <?php   
              }
             ?>
            
          </div>
            <a class="btn btn-info" href="bycategory.php?source=sandwich">Show All Items</a>
            <hr>

            <h3>Pizza</h3>
            <div class="row">
            <?php 
              $query = "SELECT * FROM items WHERE item_category = 'PIZZA' LIMIT 3";
              $ret_item = mysqli_query($con, $query);
              while($row = mysqli_fetch_array($ret_item)) {
                $item_id = $row['item_id'];
                $item_name = $row['item_name'];
                $item_img = $row['item_img'];
                $item_price = $row['item_price'];
              ?>
                <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
              <?php
                echo "<a href='#''><img class='card-img-top' src='admin/images/$item_img' alt=''></a>";
              ?>
                <div class="card-body">
                  <h4 class="card-title">
            <?php
                    echo "<a href='#'>$item_name</a>";
              ?>
                  </h4>
            <?php
                  echo "<h5>Price: $item_price</h5>";
              ?>
                </div>
                <div class="card-footer">
                  <?php 
                    echo "<a href='index.php?item_id={$item_id}' class='btn btn-primary btn-block'>Add To Cart</a>";
                   ?>
                </div>
              </div>
            </div>
             <?php   
              }
             ?>
            
          </div>
            <a class="btn btn-info" href="bycategory.php?source=pizza">Show All Items</a>
            <hr>

            <h3>Dosa</h3>
            <div class="row">
            <?php 
              $query = "SELECT * FROM items WHERE item_category = 'DOSA' LIMIT 3";
              $ret_item = mysqli_query($con, $query);
              while($row = mysqli_fetch_array($ret_item)) {
                $item_id = $row['item_id'];
                $item_name = $row['item_name'];
                $item_img = $row['item_img'];
                $item_price = $row['item_price'];
              ?>
                <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
              <?php
                echo "<a href='#''><img class='card-img-top' src='admin/images/$item_img' alt=''></a>";
              ?>
                <div class="card-body">
                  <h4 class="card-title">
            <?php
                    echo "<a href='#'>$item_name</a>";
              ?>
                  </h4>
            <?php
                  echo "<h5>Price: $item_price</h5>";
              ?>
                </div>
                <div class="card-footer">
                  <?php 
                    echo "<a href='index.php?item_id={$item_id}' class='btn btn-primary btn-block'>Add To Cart</a>";
                   ?>
                </div>
              </div>
            </div>
             <?php   
              }
             ?>
            
          </div>
            <a class="btn btn-info" href="bycategory.php?source=dosa">Show All Items</a>
            <hr>

            <h3>Uttappa</h3>
            <div class="row">
            <?php 
              $query = "SELECT * FROM items WHERE item_category = 'UTTAPPA' LIMIT 3";
              $ret_item = mysqli_query($con, $query);
              while($row = mysqli_fetch_array($ret_item)) {
                $item_id = $row['item_id'];
                $item_name = $row['item_name'];
                $item_img = $row['item_img'];
                $item_price = $row['item_price'];
              ?>
                <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
              <?php
                echo "<a href='#''><img class='card-img-top' src='admin/images/$item_img' alt=''></a>";
              ?>
                <div class="card-body">
                  <h4 class="card-title">
            <?php
                    echo "<a href='#'>$item_name</a>";
              ?>
                  </h4>
            <?php
                  echo "<h5>Price: $item_price</h5>";
              ?>
                </div>
                <div class="card-footer">
                  <?php 
                    echo "<a href='index.php?item_id={$item_id}' class='btn btn-primary btn-block'>Add To Cart</a>";
                   ?>
                </div>
              </div>
            </div>
             <?php   
              }
             ?>
            
          </div>
            <a class="btn btn-info" href="bycategory.php?source=uttappa">Show All Items</a>
            <hr>

            <h3>Pavbhaji</h3>
            <div class="row">
            <?php 
              $query = "SELECT * FROM items WHERE item_category = 'PAVBHAJI' LIMIT 3";
              $ret_item = mysqli_query($con, $query);
              while($row = mysqli_fetch_array($ret_item)) {
                $item_id = $row['item_id'];
                $item_name = $row['item_name'];
                $item_img = $row['item_img'];
                $item_price = $row['item_price'];
              ?>
                <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
              <?php
                echo "<a href='#''><img class='card-img-top' src='admin/images/$item_img' alt=''></a>";
              ?>
                <div class="card-body">
                  <h4 class="card-title">
            <?php
                    echo "<a href='#'>$item_name</a>";
              ?>
                  </h4>
            <?php
                  echo "<h5>Price: $item_price</h5>";
              ?>
                </div>
                <div class="card-footer">
                  <?php 
                    echo "<a href='index.php?item_id={$item_id}' class='btn btn-primary btn-block'>Add To Cart</a>";
                   ?>
                </div>
              </div>
            </div>
             <?php   
              }
             ?>
            
          </div>
            <a class="btn btn-info" href="bycategory.php?source=pavbhaji">Show All Items</a>
            <hr>
          <!-- /.row -->

        </div>
        <!-- /.col-lg-9 -->

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

    <!-- Footer -->
    
    <?php include('includes/footer.php'); ?>