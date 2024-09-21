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
            <!--form-content-->
<form id="form-id" method="POST">
  <!--Progressbar-->
  <ul class='progress'>
    <li class="active">Account Setup</li>
    <li>Social Profiles</li>
    <li>Personal Details</li>
  </ul>
    <!--Account Setup-->
    <fieldset>
    <h2 class='title'>Update your Vital  </h2>
    <input type="hidden" name="id" value="<?php echo " $A_ID" ?>">
    <input type='text' name='nm' placeholder='Name' value="<?php echo " $Name" ?>">
    <input type='text' name='em' placeholder='Email' value="<?php echo " $Email" ?>">
    <input type='button' name='next' class='next-button custom-button' value="Next">
  </fieldset>
  <!--Social Profiles-->
  <fieldset>
    <h2 class='title'>Update your Vital</h2>
    <input type='date' name='dt' placeholder='Date' value="<?php echo " $Date" ?>">
    <input type='time' name='tm' placeholder='Time' value="<?php echo " $Time" ?>">
    <input type='button' name='previous' class='prev-button custom-button' value="Back">

    <input type='button' name='next' class='next-button custom-button' value="Next">
</fieldset>
<!--Personal Details-->
<fieldset>
    <h2 class='title'>Update your Vital</h2>
    
    <input type='text' name='ph' placeholder='Phone' value="<?php echo " $Phone" ?>">
    <input type='text' name='loc' placeholder='Location' value="<?php echo " $Location" ?>">
    <input type='text' name='des' placeholder='Description' value="<?php echo " $Description" ?>">
    <input type='button' name='previous' class='prev-button custom-button' value="Back">
    <button name="appp" class='custom-button' >Finish</button>
  </fieldset>
  
  
  <button name="delete" class=' dle' >Delete Profile</button>
</form>
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
if(isset($_POST["delete"]))
{
    

    
    // $fn = $_POST["fn"];
    // $ln = $_POST["ln"];
    // $em = $_POST["em"];
    // $pass = $_POST["pass"];
    // $con = $_POST["con"];
                $id = $_POST['id'];
    
    // // echo "<script> alert('".$Email."')</script>"



   
  $conn = mysqli_connect("localhost","root","","mankind") or die ("DataBase Error");



    $sql = "DELETE FROM `users` WHERE `UserID` = '$id'";

    if(mysqli_query($conn,$sql))
    {
        echo '  <script>
        alert("DELETE SUCCESSFULLY "); 
        window.location.replace("../logout.php");

                </script>   ';
    }


    
}

?>
</html>


<style>
    @import url('https://fonts.googleapis.com/css?family=Montserrat');



    .dle{
        width:120px;
        background: red;
        font-weight: bold;
        color:#fff;
        border:0;
        padding:10px;
        margin:10px; 
        margin-left: 70%;
        cursor: pointer;
        margin-top: 70px;
    }

#form-id{
  width:400px;
  margin:50px auto;
  text-align:center;
  position: relative;
}
#form-id fieldset{
  background:#fff;
  border:0 none;
  border-radius:3px;
  box-shadow:0 0 10px 1px rgba(0,0,0,0.4);
  box-sizing:border-box;
  padding:20px 30px;
  width:80%;
  margin:0 10%;
  position: relative;  
}
#form-id fieldset:not(:first-of-type){
  display:none;
}

#form-id input{
  border:1px solid #ccc;
  border-radius:3px;
  padding:15px;
  color:#2C3E50;
  font-family: 'Montserrat', sans-serif;
  margin-bottom:10px;
  font-size:13px;
  box-sizing:border-box; 
  width:100%;
}
#form-id .custom-button{
  width:100px;
  background: #27AE60;
  font-weight: bold;
  color:#fff;
  border:0;
  padding:10px;
  margin:10px;  
}

#form-id .custom-button:hover{
  box-shadow:0 0 0 2px #fff, 0 0 0 4px #27AE60;
}
.title{
  font-size:15px;
  margin-bottom:10px;
  color:#2C3E50;
  text-transform:uppercase;
}
.sub-title{
  font-size:13px;
  margin-bottom:20px;
  font-weight:normal;
  color:#666;
}
/*Progressbar*/
.progress {
	margin-bottom: 30px;
	overflow: hidden;
	/*CSS counters to number the steps*/
	counter-reset: step;
}
.progress li {
	list-style-type: none;
	color: white;
	text-transform: uppercase;
	font-size: 9px;
	width: 33.33%;
	float: left;
	position: relative;
}
.progress li:before {
	content: counter(step);
	counter-increment: step;
	width: 20px;
	line-height: 20px;
	display: block;
	font-size: 10px;
	color: #333;
	background: white;
	border-radius: 3px;
	margin: 0 auto 5px auto;
}
/*progressbar connectors*/
.progress li:after {
	content: '';
	width: 100%;
	height: 2px;
	background: #fff;
	position: absolute;
	left: -50%;
	top: 9px;
  z-index:-1; /*put it behind the numbers*/
}
.progress li:first-child:after {
		/*connector not needed before the first step*/
  content: none; 
}
/*marking active/completed steps green*/
/*The number of the step and the connector before it = green*/
.progress li.active:before,  .progress li.active:after{
	background: #27AE60;
	color: white;
}
</style>


<script>
    $(document).ready(function(){
  $('.next-button').click(function(){
        var current = $(this).parent();
        var next = $(this).parent().next();
        $(".progress li").eq($("fieldset").index(next)).addClass("active");
        current.hide();
        next.show();
  })
  
  $('.prev-button').click(function(){
        var current = $(this).parent();
        var prev = $(this).parent().prev()
        $(".progress li").eq($("fieldset").index(current)).removeClass("active");
        current.hide();
        prev.show();
  })
})
</script>


<?php


$conn = mysqli_connect("localhost", "root", "", "mankind") or die("DataBase Error");

$sql = "SELECT * FROM `vitals` WHERE `userrid`='". $_SESSION['UserID']."'";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    while ($rowss = mysqli_fetch_assoc($result)) {
        $v_id = $rowss['v_id'];
        $usserid = $rowss['userrid'];
        $wieght = $rowss['wieght'];
        $gluecose = $rowss['gluecose'];
        $bp = $rowss['bp'];
        $height = $rowss['height'];
        $pules = $rowss['pules'];
        $temp = $rowss['temp'];
        $age = $rowss['age'];
        $daibetes = $rowss['daibetes'];
      
    }
}



?>