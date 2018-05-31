

<?php 


	if(isset($_GET['edit'])) {
		$the_edit_id = $_GET['edit'];
	}

	$query = "SELECT * FROM customer WHERE cid = $the_edit_id";
	$ret_query = mysqli_query($con, $query);

	while($row = mysqli_fetch_array($ret_query)) {
        $cus_name=$row['cname'];
        $cus_phone=$row['cmob'];
        $cus_email=$row['cemail'];
        $cus_pass=$row['cpass'];
        $cus_add=$row['address'];
	}

	if(isset($_POST['update'])) {
		$c_name = $_POST['cname'];
		$mob_no = $_POST['mob_no'];
		$email = $_POST['email'];
		$pass = $_POST['pass'];
		$address = $_POST['address'];

		$query = "UPDATE customer SET cname = '$c_name',cmob = '$mob_no',cemail = '$email',cpass = '$pass',address = '$address'WHERE cid = $the_edit_id";
		$edit_cust = mysqli_query($con, $query);
		header("Location: customers.php");
		if(!$edit_cust) {
			die(mysqli_error($con));
		}
	}

 ?>


 <div class="col-md-6 col-md-offset-3">
	<form action="" method="POST">
		
		<div class="form-group">
    	<label for="cname">Name:</label>
    	<input type="text" name="cname" placeholder="Enter Name" value="<?php echo $cus_name; ?>" class="form-control">
  	</div>
  	<div class="form-group">
    	<label for="mob_no">Mobile:</label>
    	<input type="text" name="mob_no" placeholder="Enter Mobile No" value="<?php echo $cus_phone; ?>" class="form-control">
  	</div>
  	<div class="form-group">
    	<label for="email">Email:</label>
    	<input type="email" name="email" placeholder="Enter Email" value="<?php echo $cus_email; ?>" class="form-control">
  	</div>
  	<div class="form-group">
    	<label for="password">Password:</label>
    	<input type="password" name="pass" placeholder="Enter Password" value="<?php echo $cus_pass; ?>" class="form-control">
  	</div>
  	<div class="form-group">
  		<label for="password">Address:</label>
  		<textarea name="address" rows="5" cols="30" placeholder="Enter Address" class="form-control"><?php echo $cus_add; ?></textarea>
  	</div>
  	<div class="form-group">
    	<input type="submit" name="update" class="btn btn-primary btn-block">
  	</div>

	</form>
	
</div>