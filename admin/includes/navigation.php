
<?php 
  if(!isset($_SESSION['admin_name'])) {
    header("Location: login.php");
  }
?>

  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="index.php">Admin</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="index.php">
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text">Dashboard</span>
          </a>
        </li>
        
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Charts">
          <a class="nav-link" href="category.php">
            <i class="fa fa-list"></i>
            <span class="nav-link-text">Category</span>
          </a>
        </li>

        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
          <a class="nav-link" href="orders.php">
            <i class="fa fa-shopping-cart"></i>
            <span class="nav-link-text">Orders</span>
          </a>
        </li>

        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
          <a class="nav-link" href="customers.php">
            <i class="fa fa-users"></i>
            <span class="nav-link-text">Customers</span>
          </a>
        </li>

        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents" data-parent="#exampleAccordion">
            <i class="fa fa-user"></i>
            <span class="nav-link-text">Admin</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseComponents">
            <li>
              <a href="admins.php">All Admins</a>
            </li>
            <?php 

              if(isset($_SESSION['admin_role'])) {
                if($_SESSION['admin_role'] !== 'Co_Admin'){
                  echo "<li><a href='admins.php?source=add_admin'>Add Admin</a></li>";
                } else {
                  echo "<li><a href='admins.php?source=add_admin' style='display:none'>Add Admin</a></li>";
                }
              }
            ?>

          </ul>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents1" data-parent="#exampleAccordion">
            <i class="fa fa-reorder"></i>
            <span class="nav-link-text">Items</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseComponents1">
            <li>
              <a href="items.php">All Items</a>
            </li>
            <li>
              <a href="items.php?source=add_item">Add Item</a>
            </li>
          </ul>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
          <a class="nav-link" href="review.php">
            <i class="fa fa-envelope"></i>
            <span class="nav-link-text">Review</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Link">
          <a class="nav-link" href="contact.php">
            <i class="fa fa-address-book"></i>
            <span class="nav-link-text">Contact</span>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="../index.php"> Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link"><i class="fa fa-user"></i> 

            <?php 

              if(isset($_SESSION['admin_name'])) {
                echo $_SESSION['admin_name'];
              }
             ?>

          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="logout.php"><i class="fa fa-fw fa-sign-out"></i> Logout</a>
        </li>
      </ul>

    </div>
  </nav>