
<?php include('includes/admin_header.php'); ?>
<?php include('includes/navigation.php'); ?>

  <div class="content-wrapper">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <h1>Orders</h1>
          <hr>

          <div class="col-md-6 offset-md-8">
            <form method="POST" action="">
              <div class="row">
                <div class="form-group">
                  <input type="date" name="search_date" class="form-control">
                </div>
                <div class="form-group" style="margin-left: 25px;">
                  <input type="submit" name="submit" value="Search Order" class="btn btn-info">
                </div>
              </div>
            </form>
          </div>
          <hr>

          <table class="table table-bordered">
            <thead>
              <tr>
                <th>Order ID</th>
                <th>Item ID</th>
                <th>Item Name</th>
                <th>Order QTY</th>
                <th>Order Price</th>
                <th>Customer ID</th>
                <th>Customer Name</th>
                <th>Customer Mobile</th>
                <th>Customer Address</th>
                <th>Order Date</th>
                <th>Order Time</th>
                <th>Order Status</th>
              </tr>
            </thead>
            <tbody>
              
            <?php 

              if(isset($_POST['submit'])) {
                $date = $_POST['search_date'];
                $query = "SELECT * FROM orders WHERE order_date = '$date'";
              }else {
                $query = "SELECT * FROM orders ORDER BY order_id DESC";
              }
              $ret_order = mysqli_query($con, $query);
              while ($row = mysqli_fetch_array($ret_order)) {
                $order_id = $row['order_id'];
                $item_id = $row['item_id'];
                $cid = $row['cid'];
                $order_date = $row['order_date'];
                $order_time = $row['order_time'];
                $order_status = $row['order_status'];
                $order_price = $row['order_price'];
                $order_qty = $row['order_qty'];

                $i_query = "SELECT * FROM items WHERE item_id = ".$item_id;
                //echo $i_query;
                $ret_i_query = mysqli_query($con, $i_query);
                while ($row = mysqli_fetch_array($ret_i_query)) {
                  $item_name = $row['item_name'];
                  //$item_price = $row['item_price'];
                  echo "<tr>";

                  echo "<td>".$order_id."</td>";
                  echo "<td>".$item_id."</td>";
                  echo "<td>".$item_name."</td>";
                  echo "<td>".$order_qty."</td>";
                  echo "<td>".$order_price."</td>";


                }

                $c_query = "SELECT * FROM customer WHERE cid = $cid";
                $ret_c_query = mysqli_query($con, $c_query);
                while ($rows = mysqli_fetch_array($ret_c_query)) {
                  $cid = $rows['cid'];
                  $cname = $rows['cname'];
                  $cmob = $rows['cmob'];
                  $caddr = $rows['address'];

                  echo "<td>".$cid."</td>";
                  echo "<td>".$cname."</td>";
                  echo "<td>".$cmob."</td>";
                  echo "<td>".$caddr."</td>";
                  echo "<td>".$order_date."</td>";
                  echo "<td>".$order_time."</td>";
                  echo "<td><a href='orders.php?oid={$order_id}&status={$order_status}' class='btn btn-success'>".$order_status."</a></td>";

                  echo "</tr>";
                }

              }

             ?>


             <?php 

                if(isset($_GET['status'])) {
                  $the_order_id = $_GET['oid'];

                  $order_status = $_GET['status'];

                  if($order_status == 'Placed') {
                    $query = "UPDATE orders SET order_status = 'Confirmed' WHERE order_id = $the_order_id";
                  } else if($order_status == 'Confirmed') {
                    $query = "UPDATE orders SET order_status = 'Out For Delivery' WHERE order_id = $the_order_id";
                  }else if($order_status == 'Out For Delivery') {
                    $query = "UPDATE orders SET order_status = 'Delivered' WHERE order_id = $the_order_id";
                  }

                  $con_query = mysqli_query($con, $query);
                  header("Location: orders.php");
                }

              ?>


             </tbody>
          </table>

        </div>
      </div>
    </div>
  <?php include('includes/admin_footer.php'); ?>