
<?php include('includes/admin_header.php'); ?>
<?php include('includes/navigation.php'); ?>

  <div class="content-wrapper">
    <div class="container-fluid">

     
      <div class="row">
        <div class="col-12">
          <h1>Customers</h1>
          <hr>    

            <?php 

              if(isset($_GET['source'])) {

                $source = $_GET['source'];

              } else {
                $source = "";
              }

             ?>

             <?php 

                if($source == 'edit_cust') {
                  include('includes/edit_cust.php');
                } else {

              ?>

              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Mobile</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Address</th>
                    <th>Edit</th>
                    <th>Delete</th>
                  </tr>
                </thead>
                <tbody>
                <?php // find all categories
                  $query="SELECT * FROM customer";
                  $select_custo=mysqli_query($con,$query);
                  while ($row=mysqli_fetch_assoc($select_custo)) {
                    $cus_id=$row['cid'];
                    $cus_name=$row['cname'];
                    $cus_phone=$row['cmob'];
                    $cus_email=$row['cemail'];
                    $cus_pass=$row['cpass'];
                    $cus_add=$row['address'];

                    echo "<tr>";  
                    echo "<td>{$cus_id}</td>";
                    echo "<td>{$cus_name}</td>";
                    echo "<td>{$cus_phone}</td>";
                    echo "<td>{$cus_email}</td>";
                    echo "<td>{$cus_pass}</td>";
                    echo "<td>{$cus_add}</td>";
                    echo "<td><a href='customers.php?source=edit_cust&edit={$cus_id}'>Edit</a></td>";
                    echo "<td><a href='customers.php?delete={$cus_id}'>Delete</a></td>";
                    echo "</tr>";
                  }
                ?>  

                <?php 
                  if(isset($_GET['delete'])) {
                    $the_cus_id = $_GET['delete'];
                    $query = "DELETE FROM customer WHERE cid = {$the_cus_id}";
                    $delete_query = mysqli_query($con, $query);
                    header("Location: customers.php");
                  }
                 ?>

                </tbody>
              </table>
              <?php } ?>
            </div>
          </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

 <?php include('includes/admin_footer.php'); ?>