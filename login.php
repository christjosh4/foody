<?php 

	include('includes/header.php');
  include('includes/navigation.php');
 ?>

<?php 


	if(isset($_POST['submit'])) {
		$email = $_POST['email'];
		$pass = $_POST['pass'];

    $query = "SELECT * FROM customer WHERE cemail = '$email'";
    $ret_cust = mysqli_query($con, $query);
    while($row = mysqli_fetch_array($ret_cust)){
      $db_cid = $row['cid'];
      $db_cname = $row['cname'];
      $db_cmob = $row['cmob'];
      $db_cemail = $row['cemail'];
      $db_cpass = $row['cpass'];
      $db_caddress = $row['address'];
    }

    if($email == $db_cemail && $pass == $db_cpass) {
      $_SESSION['cid'] = $db_cid;
      $_SESSION['cname'] = $db_cname;
      $_SESSION['cmob'] = $db_cmob;
      $_SESSION['cemail'] = $db_cemail;
      $_SESSION['address'] = $db_caddress;
      header("Location: index.php");
    } else {
      header("Location: login.php");
    }

	}

 ?>
 	
 	<div class="well">
 		<h1 class="text-center">Login</h1>
 	</div>

 		<div class="col-md-4 offset-md-4">
 			<form action="" method="POST">
        	<div class="form-group">
          	<label for="email"><b>Email:</b></label>
          	<input type="email" name="email" placeholder="Enter Email" class="form-control">
        	</div>
        	<div class="form-group">
          	<label for="password"><b>Password:</b></label>
          	<input type="password" name="pass" placeholder="Enter Password" class="form-control">
        	</div>
        	<div class="form-group">
          	<input type="submit" name="submit" value="Login" class="btn btn-primary btn-block">
        	</div>
 			</form>
 		</div>