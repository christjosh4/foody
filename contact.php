<?php 

	include('includes/header.php');
  include('includes/navigation.php');
 ?>


<?php 
	if(isset($_POST['contact'])) {
    $cname = $_POST['cname'];
    $cmob = $_POST['cmob'];
    $cemail = $_POST['cemail'];
    $cquery = $_POST['cquery'];

    $query = "INSERT INTO contact(con_name, con_phone, con_email, con_query) VALUES('$cname','$cmob','$cemail','$cquery')";
    //echo $query;
    $ins_contact = mysqli_query($con, $query);
    if($ins_contact) {
      echo "<script>alert('Query Submitted')</script>";
    }
	}
 ?>

 <?php 
  if(isset($_POST['review'])) {
    $rtitle = $_POST['rtitle'];
    $rmess = $_POST['rmess'];

    $query = "INSERT INTO review(rev_title, rev_mess) VALUES('$rtitle','$rmess')";
    $ins_review = mysqli_query($con, $query);

    if($ins_review) {
      echo "<script>alert('Review Submitted')</script>";
    }
  }
 ?>
 	
 	<div class="well">
 		<h1 class="text-center">Contact & Review</h1>
 	</div>
<hr>
  
  <div class="container-fluid">
    <div class="row">
   		<div class="col-md-4 offset-md-2">
   			<form action="" method="POST">
   				<div class="form-group">
            <label for="cname"><b>Name:</b></label>
            	<input type="text" name="cname" placeholder="Enter Name" class="form-control">
          	</div>
          	<div class="form-group">
            	<label for="cmob"><b>Mobile:</b></label>
            	<input type="text" name="cmob" placeholder="Enter Mobile No" class="form-control">
          	</div>
          	<div class="form-group">
            	<label for="cemail"><b>Email:</b></label>
            	<input type="email" name="cemail" placeholder="Enter Email" class="form-control">
          	</div>
          	<div class="form-group">
          		<label for="cquery"><b>Your Query:</b></label>
          		<textarea name="cquery" rows="5" cols="30" placeholder="Enter Your Query" class="form-control"></textarea>
          	</div>
          	<div class="form-group">
            	<input type="submit" name="contact" value="Send" class="btn btn-primary btn-block">
          	</div>
   			</form>
   		</div>

      <div class="col-md-4">
        <form action="" method="POST">
            <div class="form-group">
              <label for="rtitle"><b>Title:</b></label>
              <input type="text" name="rtitle" placeholder="Enter Title" class="form-control">
            </div>
            <div class="form-group">
              <label for="rmess"><b>Review:</b></label>
              <textarea name="rmess" rows="5" cols="30" placeholder="Enter Review" class="form-control"></textarea>
            </div>
            <div class="form-group">
              <input type="submit" name="review" value="Leave A Review" class="btn btn-primary btn-block">
            </div>
        </form>
      </div>
    </div>
  </div>


 <?php// include('includes/footer.php'); ?>