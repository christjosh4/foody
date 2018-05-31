
<?php include('includes/header.php'); ?>
<?php include('includes/navigation.php'); ?>


<?php 

    if(!isset($_SESSION['cid'])) {
      header("Location: login.php");
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
        	<h2>Your Orders</h2>
        	<table class="table table-bordered">
        		<thead>
        			<tr>
        				<th>Item</th>
        				<th>Name</th>
                <th>Order QTY</th>
        				<th>Price</th>
        				<th>Time</th>
        				<th>Status</th>
                <th>Bill</th>
        			</tr>
        		</thead>
        		<tbody>
        			
        		
	<?php 
		$o_query = "SELECT * FROM orders WHERE cid = ".$_SESSION['cid']." ORDER BY order_id DESC" ;
		$ret_o_query = mysqli_query($con, $o_query);
		while($row = mysqli_fetch_array($ret_o_query)){
			$order_id = $row['order_id'];
			$item_id = $row['item_id'];
			$cid = $row['cid'];
			$order_date = $row['order_date'];
			$order_time = $row['order_time'];
			$order_status = $row['order_status'];
      $order_qty = $row['order_qty'];
      $order_price = $row['order_price'];


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
          echo "<td>".$order_qty."</td>";
					echo "<td>".$order_price."</td>";
					echo "<td>".$order_time."</td>";
					echo "<td class='text-dark'><b>".$order_status."</b></td>";
          echo "<td><a target='_blank' href='yourbill.php?billid={$order_id}' class='btn btn-dark'>Your Bill</a></td>";
				echo "</tr>";
			}
		}


	 ?>
	 			</tbody>
        	</table>
	 		</div>

		 </div>
      <!-- /.row -->

    </div>