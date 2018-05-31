


<?php 

	$query = "SELECT * FROM items";
	$ret_items = mysqli_query($con, $query); 

	if(!$ret_items) {

		die('Query Failed: '.mysqli_error($con));
	}


 ?>



  <div class="content-wrapper">
    <div class="container-fluid">
      
      <div class="row">
        <div class="col-12">
          <h1>All Items</h1>
          <hr>

          	 <div class="col-md-12 col-md-offset-1">
              <?php 
              echo "<table class='table table-bordered table-hover'><thead><tr><th>Item ID</th><th>Item Name</th><th>Item Image</th><th>Item Category</th><th>Item Price</th><th>Edit</th><th>Delete</th></tr></thead><tbody>";
              while($row = mysqli_fetch_array($ret_items)) {
                  $item_id = $row['item_id'];
                  $item_name = $row['item_name'];
                  $item_img = $row['item_img'];
                  $item_category = $row['item_category'];
                  $item_price = $row['item_price'];

              echo "<tr>";
                echo "<td>".$item_id."</td>";
                echo "<td>".$item_name."</td>";
                echo "<td><img class='img img-responsive' width='125px' src='images/$item_img' alt='$item_name'></td>";
                echo "<td>".$item_category."</td>";
                echo "<td>".$item_price."</td>";

                echo "<td><a href='items.php?source=edit_item&edit={$item_id}'>Edit</a></td>";
                echo "<td><a href='items.php?delete={$item_id}'>Delete</a></td>";
              echo "</tr>";
}

                     ?>
                  </tbody>
              </table>
            </div>
        </div>
      </div>
    </div>

<?php 

	if(isset($_GET['delete'])) {
		$the_item_id = $_GET['delete'];
		$query = "DELETE FROM items WHERE item_id = $the_item_id";
		$del_query = mysqli_query($con, $query);
		header("Location: items.php");

	}

 ?>