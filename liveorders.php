<?php
  session_start();

 if(!isset($_SESSION['u_name'])){
 header("location: mlogin.php"); 
}
 
 include_once "inc/dbh.inc.php";
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width initial-scale=1">
  <title>FOOD COURT</title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/main.css">
  <script src="https://kit.fontawesome.com/041a644664.js" crossorigin="anonymous"></script>
</head>
<body>
    <!--navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="index.php">Food court</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="index.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="aboutus.php">About Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="#contact">Contact Us</a>
      </li>
       
    </ul>

    <ul class="navbar-nav ml-auto">
      <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <span class="mr-2 d-none d-lg-inline text-gray-600 small">
            <?php echo $_SESSION['u_name']; ?>
          </span>
          <img class="img-profile rounded-circle" src="https://source.unsplash.com/QAB-WJcbgJk/60x60" style="height: 2rem; width: 2rem;">
        </a>
         <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
      </li>
    </ul>
  </div>
</nav>
    <!--end navigation-->
 <!--logout model-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below to end your current session</div>

        <form method="POST" action="inc/logout.inc.php">
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <button class="btn btn-danger" name="submit">Logout</button>
        </div>
      </form>

      </div>
    </div>
  </div>
 <!--logout model-->
 
<div class="jumbotron">
  <?php
   $restaurent = $_SESSION['u_name'];
    $check = "select rname from restaurents where runame='$restaurent';";
     $result = mysqli_query($con, $check);
      $resultcheck = mysqli_num_rows($result);
     if ($resultcheck > 0) {
      while ( $row = mysqli_fetch_assoc($result)) {
      $_SESSION['rname'] = $row['rname'];
    }
   }
 ?>
	<h1 style="font-size: 63px;">Hello <?php echo $_SESSION['rname']; ?>!</h1>
	<p class="pt-3" style="font-size: 23px;">Manage Your Control Panel From Here</p>
</div>
   

  <div class="container-fluid">
   	<div class="row">
   	  <div class="col-md-3 pb-5">
            <div class="mylist list-group">
              <a href="liveorders.php" class="list-group-item active">New Orders</a>
              <a href="mviewfood.php" class="list-group-item">View Food Items</a>
              <a href="maddfood.php" class="list-group-item ">Add Food Items</a>
              <a href="meditfood.php" class="list-group-item ">Edit Food Items</a>
              <a href="mdeletefood.php" class="list-group-item ">Delete Food Items</a>
              <a href="deliveryboy.php" class="list-group-item ">Delivery Boys</a>
            </div>    
      </div>

       <div class="col-md-8 pt-1 pb-3">
           <legend class="text-center" style="border:1px solid black; width: 100%; margin: 0 auto;">New Order Details
           
            <table class="table table-responsive-md mytbl text-center">
                <thead>
                 <tr>
                  <th>Order ID</th>
                  <th>ID</th>
                  <th>Name</th>
                  <th>User</th>
                  <th>Date</th>
                  <th>Price</th>
                  <th>Quantity</th>
                  <th>Payment</th>
                  <th>Total Price</th>
                  <th>Action</th>
                  <th>Live Status</th>
                 </tr>
                </thead>

                 <?php
                 $manager = $_SESSION['rname'];
                 //print_r($_SESSION);
                 $sql = "select * from foodorders where frestaurent = '$manager' ORDER BY orderid DESC LIMIT 10;";

                 $result = mysqli_query($con, $sql);
                 $resultcheck = mysqli_num_rows($result);
                //if rows are avai1lable
                 if ($resultcheck > 0) {
                 while ($row = mysqli_fetch_assoc($result)) {
                 ?>

                <tbody>
                <tr>
                  <!-- adding rows !-->
                <td><?php echo $row['orderid'] ?></td>  
                <td><?php echo $row['fid'] ?></td>
                <td><?php echo $row['fname'] ?></td>
                <td><?php echo $row['ordereduser'] ?></td>
                <td><?php echo $row['ordered_date'] ?></td>
                <td>&#8377;<?php echo $row['fprice'] ?></td>
                <td><?php echo $row['qty'] ?></td>
                <td><?php echo $row['payment_type'] ?></td>
                <td>&#8377;<?php echo $row['totalprice'] ?></td>

                <td><a href="inc/rstatus.inc.php?id=<?php echo $row['orderid']; ?>&current=<?php echo $row['res_status']; ?>" class="btn btn-success btn-sm">Accept</a> 

                  <a href="inc/rstatus.inc.php?type=decline&id=<?php echo $row['orderid']; ?>&current=<?php echo $row['res_status']; ?>" class="btn btn-danger btn-sm">Decline</a></td>

                <td><?php echo $row['res_status']; ?></td>
                <?php 
                  }
                 }
                ?>
                </tr>
                </tbody>
               </table> 
             </legend>
       </div>
    </div>
  </div>
<?php
 include 'footer.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Food Court Order Details</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Link to Bootstrap CSS for styling -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    
    <!-- Link to Font Awesome CSS for icons -->
    <link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">
</head>
<body>
    <!-- Body content goes here -->
</body>
</html>

