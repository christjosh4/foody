
<?php// include('includes/header.php'); ?>
 
<?php 
	date_default_timezone_set("Asia/kolkata");
 ?>

<?php 
	
    /*
	if(!isset($_SESSION['cname'])) {
		header("Location: login.php");
	}
	*/

	/*if(!$_SESSION['cname']) {
		header("Location: login.php");
	} else {
	*/


		if(isset($_GET['item_id'])) {



			$item_id = $_GET['item_id'];
		//$item_id = $_GET[''];
		
		$cid = $_SESSION['cid'];
		

		$query = "INSERT INTO carts(item_id,cid,cart_status) VALUES($item_id,$cid,'A')";
		$cr_order = mysqli_query($con, $query);

		if($cr_order) {

			header("Location: ".$_SESSION['pages']);
		}
		}

		
	//}

 ?>