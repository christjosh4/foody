
<?php include('includes/admin_header.php'); ?>
<?php include('includes/navigation.php'); ?>

  <div class="content-wrapper">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <h1>Contact</h1>
          <hr>

            <table class="table table-bordered table-hover">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Name</th>
                  <th>Mobile No</th>
                  <th>Email</th>
                  <th>Query</th>
                </tr>
              </thead>
              <tbody>
            <?php 
                $query = "SELECT * FROM contact";
                $ret_con = mysqli_query($con, $query);
                while ($row = mysqli_fetch_array($ret_con)) {
                  $cid = $row['con_id'];
                  $cname = $row['con_name'];
                  $cmob = $row['con_phone'];
                  $cemail = $row['con_email'];
                  $cquery = $row['con_query'];

                  echo "<tr>";
                    echo "<td>".$cid."</td>";
                    echo "<td>".$cname."</td>";
                    echo "<td>".$cmob."</td>";
                    echo "<td>".$cemail."</td>";
                    echo "<td>".$cquery."</td>";
                  echo "</tr>";


                }

             ?>
             </tbody>
            </table>
        </div>
      </div>
    </div>
  <?php include('includes/admin_footer.php'); ?>