

<?php 

	if(isset($_POST['submit'])) {

		$item_name = $_POST['item_name'];
		
    $item_image = $_FILES['item_image']['name'];
    $item_tmp_image = $_FILES['item_image']['tmp_name'];
    move_uploaded_file($item_tmp_image, "images/$item_image");
		$item_cat = $_POST['item_cat'];
		$item_price = $_POST['item_price'];

		$query = "INSERT INTO items(item_name, item_img, item_category, item_price) VALUES('$item_name','$item_image','$item_cat','$item_price')";
		$ins_item = mysqli_query($con, $query);
		if(!$ins_item) {
			die("Query Failed: ".mysqli_error($con));
		}

	}


 ?>


  <div class="content-wrapper">
    <div class="container-fluid">
      
      <div class="row">
        <div class="col-12">
          <h1>Add Item</h1>
          <hr>


          	<div class="col-md-6 col-md-offset-3">
            <form method="POST" action="" enctype="multipart/form-data">


              <div class="form-group">
                <label for="item_name">Item Name:</label>
                <input type="text" name="item_name" placeholder="Enter Title" class="form-control">
              </div>
              <div class="form-group">
                <label for="item_image">Item Image:</label>
                <input type="file" name="item_image" class="form-control">
              </div>

              <div class="form-group">
                <label for="item_cat">Item Category:</label>
			    <select name="item_cat" id="" class="form-control">

                	<?php 

                		$query = "SELECT cat_name FROM category";
                		$ret_cat = mysqli_query($con, $query);
                		while ($row = mysqli_fetch_assoc($ret_cat)) {
                			$cat_title = $row['cat_name'];
                			echo "<option value='{$cat_title}'>{$cat_title}</option>";
                		}

                	 ?>

                </select>
              </div>

              <div class="form-group">
                <label for="item_price">Item Price:</label>
                <input type="text" name="item_price" placeholder="Enter Price" class="form-control">
              </div>

              <div class="form-group">
                <input type="submit" name="submit" value="Add Item" class="btn btn-primary">
              </div>
            </form>
            </div>

        </div>
      </div>
    </div>
