
<?php include('includes/admin_header.php'); ?>
<?php include('includes/navigation.php'); ?>

  <div class="content-wrapper">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <h1>Reviews</h1>
          <hr>

            <table class="table table-bordered table-hover">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Title</th>
                  <th>Reviews</th>
                </tr>
              </thead>
              <tbody>
            <?php 
                $query = "SELECT * FROM review";
                $ret_rev = mysqli_query($con, $query);
                while ($row = mysqli_fetch_array($ret_rev)) {
                  $rid = $row['rev_id'];
                  $rtitle = $row['rev_title'];
                  $rmess = $row['rev_mess'];

                  echo "<tr>";
                    echo "<td>".$rid."</td>";
                    echo "<td>".$rtitle."</td>";
                    echo "<td>".$rmess."</td>";
                  echo "</tr>";
                }

             ?>
             </tbody>
            </table>
        </div>
      </div>
    </div>
  <?php include('includes/admin_footer.php'); ?>