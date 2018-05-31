
<?php include('includes/admin_header.php'); ?>
<?php include('includes/navigation.php'); ?>

  <div class="content-wrapper">
    <div class="container-fluid">

     
      
        <div class="col-12">

          <h1>Category</h1>
          <hr>    
          <div class="row">  
            <?php 

               if(isset($_POST['submit'])) {
                  $cat_title = $_POST['cat_title'];
                  if($cat_title == "" || empty($cat_title)) {
                    echo "<h4 class='bg-danger'>This field should not be empty</h4>";
                  } else {
                    $query = "INSERT INTO categories(cat_title) ";
                    $query .= "VALUES('{$cat_title}')";

                    $create_category_query = mysqli_query($con, $query);
                    if (!$create_category_query) {
                      die("Query Failed: ".mysqli_error($con));
                    }
                  }
                }

             ?>
             <div class="col-md-6">
              <form action="" method="POST">
                <div class="form-group">
                  <label for="cat_title">Add Category</label>
                  <input type="text" name="cat_title" class="form-control">
                </div>
                <div class="form-group">
                  <input type="submit" name="submit" class="btn btn-primary" value="Add Category">
                </div>
              </form>
            <?php if(isset($_GET['edit'])) {
              $cat_id = $_GET['edit'];
                include('includes/edit_category.php'); 
              }
            ?> 
            </div>

            <div class="col-md-6">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>Id</th>
                    <th>Category Title</th>
                    <th>Edit</th>
                    <th>Delete</th>
                  </tr>
                </thead>
                <tbody>
                <?php // find all categories
                  $query="SELECT * FROM category";
                  $select_categories=mysqli_query($con,$query);
                  while ($row=mysqli_fetch_assoc($select_categories)) {
                    $cat_id=$row['cat_id'];
                    $cat_title=$row['cat_name'];
                    echo "<tr>";  
                    echo "<td>{$cat_id}</td>";
                    echo "<td>{$cat_title}</td>";
                    echo "<td><a href='category.php?edit={$cat_id}'>Edit</a></td>";
                    echo "<td><a href='category.php?delete={$cat_id}'>Delete</a></td>";
                    echo "</tr>";
                  }
                ?>  

                <?php 
                  if(isset($_GET['delete'])) {
                    $the_cat_id = $_GET['delete'];
                    $query = "DELETE FROM category WHERE cat_id = {$the_cat_id}";
                    $delete_query = mysqli_query($con, $query);
                    header("Location: category.php");
                  }
                 ?>

                </tbody>
              </table>
            </div>
            
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

 <?php include('includes/admin_footer.php'); ?>