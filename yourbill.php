<?php 
	include('includes/header.php');
 ?>

	<?php 

		$billid = $_GET['billid'];

		$o_query = "SELECT * FROM orders WHERE order_id = ".$billid;
		$ret_o_query = mysqli_query($con, $o_query);
		while($row = mysqli_fetch_array($ret_o_query)){
			$order_id = $row['order_id'];
			$item_id = $row['item_id'];
			$cid = $row['cid'];
			$order_qty = $row['order_qty'];
			$order_price = $row['order_price'];
			$order_date = $row['order_date'];
			$order_time = $row['order_time'];

			$i_query = "SELECT * FROM items WHERE item_id = $item_id";
			$ret_i_query = mysqli_query($con, $i_query);
			while ($row = mysqli_fetch_array($ret_i_query)) {
				$item_name = $row['item_name'];
				$item_price = $row['item_price'];
			}

			$c_query = "SELECT * FROM customer WHERE cid = $cid";
            $ret_c_query = mysqli_query($con, $c_query);
            while ($rows = mysqli_fetch_array($ret_c_query)) {
              $cname = $rows['cname'];
              $cmob = $rows['cmob'];
            }


		}


	 ?>


 <page size="A4">
 	
 	<div class="text-center">
 		<b><h3>Indian Foody Center</h3></b>
 	</div>
 	<hr>

 	<div>
 		<div style="display: inline-block; width: 30%; margin-left: 25px;">
 			<h4>Name: </h4>
 		</div>
 		<div style="display: inline-block;">
 			<h4><b><?php echo $cname; ?></b></h4>
 		</div>
 	</div>
 	<hr>
 	<div>
 		<div style="display: inline-block; width: 30%; margin-left: 25px;">
 			<h4>Mobile No: </h4>
 		</div>
 		<div style="display: inline-block;">
 			<h4><b><?php echo $cmob; ?></b></h4>
 		</div>
 	</div>
 	<hr>

 	<div>
 		<div style="display: inline-block; width: 30%; margin-left: 25px;">
 			<h4>Order ID: </h4>
 		</div>
 		<div style="display: inline-block;">
 			<h4><b><?php echo $order_id; ?></b></h4>
 		</div>
 	</div>

 	<div>
 		<div style="display: inline-block; width: 30%; margin-left: 25px;">
 			<h4>Order Quantity: </h4>
 		</div>
 		<div style="display: inline-block;">
 			<h4><b><?php echo $order_qty; ?></b></h4>
 		</div>
 	</div>

 	<div>
 		<div style="display: inline-block; width: 30%; margin-left: 25px;">
 			<h4><b><?php echo $item_name; ?></b> </h4>
 		</div>
 		<div style="display: inline-block;">
 			<h4><b><?php echo $order_price; ?></b></h4>
 		</div>
 	</div>
 	<hr>

 	<div>
 		<div style="display: inline-block; width: 45%; margin-left: 25px;">
 			<h4>Date: <b><?php echo $order_date; ?></b></h4>
 		</div>
 		<div style="display: inline-block;">
 			<h4>Time: <b><?php echo $order_time; ?></b></h4>
 		</div>
 	</div>
 	<hr>

 	<div class="text-center">
 		<h2 style="color: green;">Thank You</h2>
 	</div>

 </page>

 <script type="text/javascript">
 	window.print();
 </script>