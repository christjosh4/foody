 <style type="text/css">
   .bg-colors {
    background-color: #800000;
    color: #DC143C;
   }

   .bg-colors a {
    color: #DC143C;
   }

   a {
    color: #DC143C;
   }
 </style>


 <!-- Navigation -->
    <nav class="navbar navbar-expand-lg bg-colors fixed-top">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.php">Foody</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="nav navbar-nav ">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.php">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.php">Contact</a>
            </li>
          </ul>
          	<ul class="nav navbar-nav ml-auto">

              <li class="nav-item"><a class="nav-link">
                <?php 
                  if(isset($_SESSION['cname'])) {
                      echo "<b>".$_SESSION['cname']."</b>";
                  } 
                 ?>
              </a></li> 


		      <li class="nav-item"><a href="custo_registration.php" class="nav-link"> 

          <?php 
          if(isset($_SESSION['cname'])) {
              echo "<span style='display: none;'>Sign Up</span>";
          } else {
            echo "Sign Up";
          }
          ?>


        </a></li> 


		      <li class="nav-item"><a href="logout.php" class="nav-link">
          <?php 
          if(isset($_SESSION['cname'])) {
              echo "Logout";
          } else {
              echo "";
          }
          ?>
         </a></li>

         <li class="nav-item"><a href="login.php" class="nav-link">
          <?php 
          if(isset($_SESSION['cname'])) {
              echo "<span style='display: none;'>Login</span>";
          } else {
            echo "Login";
          }
          ?>
         </a></li>



         <li class="nav-item">
          <a href="carts.php" class="btn btn-default nav-link">
          <?php 
          if(isset($_SESSION['cname'])) {
             // echo "<span style='display: none;'>Login</span>";
            echo "Cart";
          } else {
            //echo "Your Orders";
          }
          ?>
          <?php 
          if(isset($_SESSION['cid'])) {
            $sess_cid = $_SESSION['cid'];
            $query = "SELECT * FROM carts WHERE cart_status = 'A' AND cid = ".$sess_cid;
            $ret_count_cart = mysqli_query($con, $query);
            $count_of_cart = mysqli_num_rows($ret_count_cart);
          }
           ?> 
            <?php 
            if(!isset($_SESSION['cname'])) {
              echo "<span style='display: none;' class='badge badge-light'>";
            } else {
              echo "<span class='badge badge-light'>";
        ?>
        <?php 
          echo $count_of_cart;
         ?>
        <?php
              echo "</span>";
            }

             ?>
          </span></a>
         </li>




         <li class="nav-item">
          <a href="all_orders.php" class="btn btn-default nav-link">
          <?php 
          if(!isset($_SESSION['cname'])) {
              echo "<span style='display: none;'>Login</span>";
          } else {
            echo "Your Orders";
          }
          ?>


          <?php 

          if(isset($_SESSION['cid'])) {
            $sess_cid = $_SESSION['cid'];
          

            $query = "SELECT * FROM orders WHERE cid = ".$sess_cid;
            $ret_count_order = mysqli_query($con, $query);
            $count_of_order = mysqli_num_rows($ret_count_order);

          }


           ?>

            
            <?php 

            if(!isset($_SESSION['cname'])) {
              echo "<span style='display: none;' class='badge badge-light'>";
            } else {
              echo "<span class='badge badge-light'>";

        ?>

        <?php 
          echo $count_of_order;
         ?>

        <?php
              echo "</span>";
            }

             ?>
          </span></a>
         </li>
		    </ul>
        </div>
      </div>
    </nav>