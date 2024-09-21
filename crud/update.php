<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<?php 
 
	 include('connection.php');
	 
	 
	 
	 //insert
	 
		
		if(isset($_POST['update-btn'])){
		 
		  $id = $_POST['id'];
		  $name = $_POST['std_name'];
		  $f_name = $_POST['fat_name'];   
		  $phone = $_POST['phone'];
		  $address = $_POST['address'];
		   
 
     mysqli_query($con," UPDATE adm_entry SET
	 s_name = '".$name."',
	 f_name = '".$f_name."',
	 phone = '".$phone."',
	 address = '".$address."'
	 WHERE id = '".$id."' ") or die("erro ".mysqli_error($con));
		  
		  
		  
		  
		echo "<script>alert('Your Record Updated !');</script>";
		
		 echo '<script>window.location="index.php"</script>';
		 
		}  // insert end
	 
	 
?>
<body>


    
    <form action="update.php" method="POST" autocomplete="off">
    
    
    <?php 
    
	  $up_qry = mysqli_query($con,"select * from adm_entry where id = '".$_GET['up_id']."' ") or die("error 47".mysqli_error($con));
	  $up_data = mysqli_fetch_array($up_qry);
	  
	?>
    
       <table align="center">
             <tr>
                 <td>
                     <b>Student Name :</b> 
                 </td>
                 <td>
                 <input type="hidden" name="id" value="<?php echo $up_data['id'];?>">
                 <input class="form-control" value="<?php echo $up_data['s_name'];?>" type="text" placeholder="insret your name !" name="std_name" required>
                 </td>
             </tr>
             <br>
             <tr>
                 <td>
                     <b>Father Name :</b> 
                 </td>
                 <td>
                 <input class="form-control" value="<?php echo $up_data['f_name'];?>" type="text" placeholder="insret your father name !" name="fat_name" required>
                 </td>
             </tr>
             
             
             <tr>
                 <td>
                     <b>Phone :</b> 
                 </td>
                 <td>
                 <input class="form-control" value="<?php echo $up_data['phone'];?>" type="text" placeholder="insret your phone !" name="phone" required>
                 </td>
             </tr>
             
             
             <tr>
                 <td>
                     <b>Address :</b> 
                 </td>
                 <td>
                <textarea type="text"  class="form-control" name="address" rows=3><?php echo $up_data['address'];?></textarea>
                 </td>
             </tr>
             
       </table>
       <br>
       <br>
       <center>
             <input type="submit" name="update-btn" value="UPDATE" class="btn btn-info">
              <a href="index.php" style="width:85px;" class="btn btn-danger">EXIT</a>  
       </center>
       
    </form>

</body>
</html>