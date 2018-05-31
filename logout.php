
<?php include('includes/header.php'); ?>
<?php include('includes/navigation.php'); ?>

<?php 

	$_SESSION['cid'] = null;
  	$_SESSION['cname'] = null;
  	$_SESSION['cmob'] = null;
  	$_SESSION['cemail'] = null;
  	$_SESSION['address'] = null;
  	header("Location: index.php");

 ?>

 <?php include('includes/footer.php'); ?>