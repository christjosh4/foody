<?php 

	include('includes/header.php');
  include('includes/navigation.php');
 ?>


<?php 


	if(isset($_POST['submit'])) {
		$c_name = $_POST['cname'];
		$mob_no = $_POST['mob_no'];
		$email = $_POST['email'];
		$pass = $_POST['pass'];
		$address = $_POST['address'];

		$query = "INSERT INTO customer(cname,cmob,cemail,cpass,address) VALUES('$c_name','$mob_no','$email','$pass','$address')";
		$reg_cus = mysqli_query($con, $query);
    header("Location: login.php");

	}

 ?>
 	
 	<div class="well">
 		<h1 class="text-center">Customer Registration</h1>
 	</div>

 		<div class="col-md-6 offset-md-3">
 			<form action="" method="POST">
 				
 				<div class="form-group">
                	<label for="cname"><b>Name:</b></label>
                	<input type="text" name="cname" placeholder="Enter Name" class="form-control">
              	</div>
              	<div class="form-group">
                	<label for="mob_no"><b>Mobile:</b></label>
                	<input type="text" name="mob_no" placeholder="Enter Mobile No" class="form-control">
              	</div>
              	<div class="form-group">
                	<label for="email"><b>Email:</b></label>
                	<input type="email" name="email" placeholder="Enter Email" class="form-control">
              	</div>
              	<div class="form-group">
                	<label for="password"><b>Password:</b></label>
                	<input type="password" name="pass" placeholder="Enter Password" class="form-control">
              	</div>
              	<div class="form-group">
              		<label for="password"><b>Address:</b></label>
              		<textarea name="address" rows="5" cols="30" placeholder="Enter Address" class="form-control"></textarea>
              	</div>
              	<div class="form-group">
                	<input type="submit" name="submit" value="Sign Up" class="btn btn-primary btn-block">
              	</div>

 			</form>
 			
 		</div>


 <?php include('includes/footer.php'); ?>