<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <?php require_once('master/title.php');?>
    
<link rel="icon" href="./../icon/logo.png">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <!--[if lt IE 9]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
	<![endif]-->
</head>



<body>
    <?php // include './../nav.php';?>
    <?php include 'master/navbar.php';?>
    <div class="main-wrapper">

        <!-- navbar -->
        

        <!-- sidebar -->
<?php include 'master/sidebar.php'; ?>

        <div class="page-wrapper">
            <div class="content">
            <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">

<center> 
<?php


$conn = mysqli_connect("localhost", "root", "", "mankind") or die("DataBase Error");

$sql = "SELECT * FROM `appoinment` WHERE `Name`='". $_SESSION['ufn']."'";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    while ($rowss = mysqli_fetch_assoc($result)) {
        $A_ID = $rowss['A_ID'];
        $Name = $rowss['Name'];
        $Email = $rowss['Email'];
        $Date = $rowss['Date'];
        $Time = $rowss['Time'];
        $Phone = $rowss['Phone'];
        $Location = $rowss['Location'];
        $Description = $rowss['Description'];
      
    }
}



?>

<h1>Appointmnet Info</h1>
<div class="container"> 
  
  <div class="row">

    <table class="table">
      <thead>
        <tr>
          <th scope="col">Appointment ID</th>
          <th scope="col"><?php echo " $A_ID" ?></th>
        </tr>
      </thead>
      <tbody>
        
          <td>Name</td>
          <td><?php echo " $Name" ?></td>
        </tr>
        <tr>
          <td>Email</td>
          <td><?php echo " $Email" ?></td>
        </tr>
       
        <tr>
          <td>Date</td>
          <td><?php echo " $Date" ?></td>
        </tr>
        <tr>
          <td>Time</td>
          <td><?php echo " $Time" ?></td>
        </tr>
        <tr>
          <td>Phone</td>
          <td><?php echo " $Phone" ?></td>
        </tr>
        <tr>
          <td>Location</td>
          <td><?php echo " $Location" ?></td>
        </tr>
        <tr>
          <td>Description</td>
          <td><?php echo " $Description" ?></td>
        </tr>
      </tbody>
    </table>
    
<a class="alal btn btn-info" href="updatevital.php">Update</a>
  </div>
    

</div>
<style>
  .alal{
    color: #fff;
    
  }
</style>
</body>
</html>


        </div>
    </div>
    <div class="sidebar-overlay" data-reff=""></div>
    <script src="assets/js/jquery-3.2.1.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.slimscroll.js"></script>
    <script src="assets/js/Chart.bundle.js"></script>
    <script src="assets/js/chart.js"></script>
    <script src="assets/js/app.js"></script>

</body>

<?php


?>

</html>