<form action="" method="POST">
  <div class="form-group">
    <label for="up">Edit Category</label> 

    <?php 
      if(isset($_GET['edit'])) {
        $cat_id = $_GET['edit'];
        $query="SELECT * FROM category WHERE cat_id = $cat_id";
        $select_categories_id=mysqli_query($con,$query);

        while ($row=mysqli_fetch_assoc($select_categories_id)) {
          $cat_id=$row['cat_id'];
          $cat_title=$row['cat_name'];
          ?>

      <input type="text" value="<?php if(isset($cat_title)) {echo $cat_title;} ?>" name="cat_title" class="form-control">

      <?php }} ?>

      <?php 

        if(isset($_POST['update_category'])) {
          $the_cat_title = $_POST['cat_title'];
          $query = "UPDATE category SET cat_name = '{$the_cat_title}' WHERE cat_id = {$cat_id}";
          $update_query = mysqli_query($con, $query);
          if(!$update_query) {
            die("Query Failed: ".mysqli_error($con));
          } else {
            header("Location: category.php");
          }
        }
       ?>

    
  </div>
  <div class="form-group">
    <input type="submit" name="update_category" class="btn btn-primary" value="Update Category">
  </div>
</form>