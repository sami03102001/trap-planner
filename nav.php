<?php


session_start();
    
if(isset($_SESSION['uem'] ) && $_SESSION['ufn'] != '' )
{

}
   


?>



<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<div id="navbar">
  <a href="index.php"><img src="icon/travel.png" alt="" height="100px" width="100px"></a>
  <a class="active" href="index.php" style="margin-top: 30px;">Home</a>
<?php

if((isset($_SESSION['uem']  )))
{
  ?>
    
  <a href="contact.php" style="margin-left:20px; margin-top: 30px;" class="medicine">Contact Us</a>
  <a href="about us/diesespage.html" style="margin-left:20px; margin-top: 30px;" class="medicine">Tours</a>
  <a href="gallary.php" style="margin-left:20px; margin-top: 30px;" class="medicine">Gallary</a>
  
  <a href=""  style="margin-top: 30px;"></a>
  <a href="#appointment"  style=" margin-right:10px; margin-top: 30px;">Appointment</a>
  <div class="dropdown " style="margin-left:450px; margin-top: 0px;">
    <a href="javascript:void(0)"  style= "margin-top: 30px; float: right; width: 40px;"> ⋮ </a>
 
    <div class="dropdown-content">
      <button class="logout" > <a href="dashboard/index.php" class="lolo">Setting</a></button><br> <br>
      <button class="logout" ><a class="lolo" href="logout.php">Logout</a></button>
    </div>
  </div>
  <a href="dashboard/index.php"  style= "margin-top: 30px; float: right; width: 130px;"> <span style="font-size: 15px;"><b><?php echo $_SESSION['ufn']." ".$_SESSION['uln'];?></b></span>  </a>
  <div class="dropdown " style="margin-left:450px; margin-top: 0px;">
    <a href="javascript:void(0)"  style= "margin-top: 30px; float: right; width: 40px;"><i class="fa fa-search"></i></a>


  <?php
}
else
{
  ?>
       <a href="about.php"  style="margin-top: 30px;">About</a>
  <a href="register.php" style="float: right; color: #ddd; background-color:black; text-shadow: 2px #747474; margin: 0px 5px; margin-top: 1px; margin-top: 30px; " class="btn-lg " ><i class="fa fa-sign-out" aria-hidden="true" > &nbsp;</i>REGISTER </a> &nbsp;

  <a href="login.php" style="float: right; color: #ddd; background-color: black;  text-shadow: 2px #747474; margin-top: 1px;  margin-top: 30px; " class="btn-lg "> <i class="fa fa-sign-in" aria-hidden="true"> &nbsp;</i>LOGIN</a>

  <?php
}




?>
  
  
</div>
<style>
#navbar {
  overflow: hidden;
  background-color: #FFF;
}

#navbar a {
  float: left;
  display: block;
  color: #747474;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

 .lolo {
  float: left;
  display: block;
  text-align: center;;
  text-decoration: none;
  font-size: 7px;
}

#navbar a:hover {
  background-color: #ddd;
  color: black;
}



.dropdown-content {
    display: none;
    background-color: #f9f9f9;
    
    
  }
  
  .dropdown:hover .dropdown-content {
    display: block;
    padding: 5px 5px;
    margin-top: 15px;
    float: right;
    border-radius: 20px;
    background-color: #fff;
    text-align: center;
  }

  .logout{
border: solid black 5px;
border-radius: 10px;
  background-color: #A5c422; /* Green */
  border:  black;
  color: white;
  padding: 3px 10px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  cursor: pointer;
  }
.logout:hover{  background-color: #747474;
}
.medicine:hover{
    background-color: #FFF;
}


</style>



</script>