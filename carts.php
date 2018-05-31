
<?php include('includes/header.php'); ?>
<?php include('includes/navigation.php'); ?>

<?php 
    if(!isset($_SESSION['cid'])) {
      header("Location: login.php");
    }
 ?>

 <?php 
  date_default_timezone_set("Asia/kolkata");
 ?>

<?php 

if(isset($_POST['submit'])) {

  if($_POST['qty'] == '') {
    $order_qty = "1";
  } else {
    $order_qty = $_POST['qty'];
  }

    if(!$_SESSION['cname']) {
      header("Location: login.php");
    } else {
      $cid = $_SESSION['cid'];

      $qq = "SELECT item_id FROM carts WHERE cid = $cid AND cart_status = 'A'";
      $qq_query = mysqli_query($con, $qq);

      $order_date = date('y-m-d');
      $order_time = date('H:i:s');
      $order_status = "Placed";

      foreach ($qq_query as $all_id) {
        $item_id = $all_id['item_id'];

        $query_c = "SELECT item_price FROM items WHERE item_id = $item_id";
        $query_c_ret = mysqli_query($con, $query_c);
        foreach ($query_c_ret as $item_price) {
          $item_price = $item_price['item_price'] * $order_qty;
        

        $query = "INSERT INTO orders(item_id,cid,order_qty,order_price,order_date,order_time,order_status) VALUES($item_id,$cid,$order_qty,$item_price,'$order_date','$order_time','$order_status')";
        //echo $query;
        $cr_order = mysqli_query($con, $query);
         $qqq = "UPDATE carts SET cart_status = 'NA' WHERE cid = '$cid'";
        $qq_query = mysqli_query($con, $qqq);
        //header("Location: all_orders.php");
        //echo $qqq;
       
        }
      }
     // header("Location: index.php");
    }
  }

 ?>


<div class="container-fluid">
      <div class="row">

        <div class="col-md-3">
          <h2>Categories</h2>
          <div class="list-group">

            <?php 
              $c_query = "SELECT * FROM category";
              $ret_cat = mysqli_query($con, $c_query);
              while($row = mysqli_fetch_array($ret_cat)) {
                $cat_title = $row['cat_name'];
                echo "<a style='background-color: #DCDCDC;color:#800000;' href='bycategory.php?source={$cat_title}' class='list-group-item'>{$cat_title}</a>";
              }

             ?>
          </div>

        </div>

        <div class="col-md-9">
        	<h2>Cart</h2>
        	<table class="table table-bordered">
        		<thead>
        			<tr>
        				<th>Item</th>
        				<th>Name</th>
                <th>Quantity</th>
        				<th>Price</th>
                <th>Delete</th>
        			</tr>
        		</thead>
        		<tbody>
        		
        	<?php 
        		
            if(isset($_SESSION['cid'])) {
              $cid = $_SESSION['cid'];
            }

            $o_query = "SELECT * FROM carts WHERE cid = $cid AND cart_status = 'A'";
            $ret_o_query = mysqli_query($con, $o_query);
            while($row = mysqli_fetch_array($ret_o_query)){
              $cart_id = $row['cart_id'];
              $item_id = $row['item_id'];
              $cid = $row['cid'];

              $i_query = "SELECT * FROM items WHERE item_id = $item_id";
              $ret_i_query = mysqli_query($con, $i_query);
              while ($row = mysqli_fetch_array($ret_i_query)) {
                $item_image = $row['item_img'];
                $item_name = $row['item_name'];
                $item_price = $row['item_price'];

                echo "<tr>";
                  echo "<td><img class='img img-responsive img-thumbnail' width='100px' height='75px' src='admin/images/$item_image' alt='$item_name'></td>";
                  //echo "<td>".$item_image."</td>";
                  echo "<td>".$item_name."</td>";
                  echo "<td><div style='width:75px;'><form method='POST' action=''><input type='text' name='qty' class='form-control'></div></td>";
                  echo "<td>".$item_price."</td>";
                  //echo "<td>".$order_time."</td>";
                  echo "<td><a href='carts.php?cartid={$cart_id}' class='btn btn-danger'>Delete</a></td>";
                echo "</tr>";
              }
            }

 
            if(isset($_GET['cartid'])) {

              $the_cart_id = $_GET['cartid'];
              $query = "DELETE FROM carts WHERE cart_id = $the_cart_id";
              $q = mysqli_query($con, $query);
              header("Location: carts.php");

            }


        	 ?>

	 			  </tbody>
        </table>
        <hr>

          <?php 
/*
            $pp = "SELECT item_id FROM carts WHERE cid = $cid AND cart_status = 'A'";
            $pp_query = mysqli_query($con, $pp);
            foreach ($pp_query as $price) {
              $
            }*/

           ?>


<!--
          <div class="col-md-6 offset-md-9">
            <b>Total Price: </b> <b><i class="text-danger"><?php echo "100" ?></i></b>
          </div>
        <hr>-->

        
            <div class="row">
              <div class="col-md-3 offset-md-6">
                <a href="index.php" class="btn btn-dark btn-block">Continue Ordering</a>
              </div>
              <div class="col-md-3">
                
                  <input type="submit" name="submit" value="Order Now" class="btn btn-dark btn-block">
                </form>
                <!--<a href="create_order.php?" class="btn btn-dark btn-block">Order Now</a>-->
              </div>
            </div>
          
        
        
	 		</div>

		 </div>
      <!-- /.row -->

    </div>