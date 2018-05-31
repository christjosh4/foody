 <?php include('create_carts.php'); ?> 

        <div class="col-lg-10">
          <h3>Samosa</h3>
          <div class="row">
            <?php 
              $query = "SELECT * FROM items WHERE item_category = 'SAMOSA'";
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
                    echo "<a href='bycategory.php?source=samosa&item_id={$item_id}' class='btn btn-primary btn-block'>Add To Cart</a>";
                    $_SESSION['pages'] = 'bycategory.php?source=samosa'; 
                   ?>
                </div>
              </div>
            </div>
             <?php   
              }
             ?>
            
          </div>
            <hr>

            
          <!-- /.row -->

        </div>
        <!-- /.col-lg-9 -->
