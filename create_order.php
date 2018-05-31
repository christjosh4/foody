
<?php include('includes/header.php'); ?>

<?php 
	date_default_timezone_set("Asia/kolkata");
 ?>

<?php 

	if(!$_SESSION['cname']) {
		header("Location: login.php");
	} else {
		$item_id = $_GET['item_id'];
		$cid = $_SESSION['cid'];
		$order_date = date('y-m-d');

		$order_time = date('H:i:s');
		$order_status = "Placed";

		$query = "INSERT INTO orders(item_id,cid,order_date,order_time,order_status) VALUES($item_id,$cid,'$order_date','$order_time','$order_status')";
		$cr_order = mysqli_query($con, $query);
		header("Location: index.php");
	}

 ?>