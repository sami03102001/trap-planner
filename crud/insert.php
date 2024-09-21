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
	 
		
		if(isset($_POST['insert-btn'])){
		 
		  $name = $_POST['std_name'];
		  $f_name = $_POST['fat_name'];   
		  $phone = $_POST['phone'];
		  $address = $_POST['address'];
		   

		  
		  
		  mysqli_query($con,"INSERT INTO adm_entry (s_name, f_name, phone, address) VALUES ('".$name."', '".$f_name."', '".$phone."', '".$address."') ") or die("error 24".mysqli_error($con));
		  
		echo "<script>alert('Your Record Inserted !');</script>";
		
		echo '<script>window.location="index.php"</script>';
		 
		}  // insert end
	 
	 
?>
<body>


    
    <form action="insert.php" method="POST" autocomplete="off">
       <table align="center">
             <tr>
                 <td>
                     <b>Student Name :</b> 
                 </td>
                 <td>
                 <input class="form-control" type="text" placeholder="insret your name !" name="std_name" required>
                 </td>
             </tr>
             <br>
             <tr>
                 <td>
                     <b>Father Name :</b> 
                 </td>
                 <td>
                 <input class="form-control" type="text" placeholder="insret your father name !" name="fat_name" required>
                 </td>
             </tr>
             
             
             <tr>
                 <td>
                     <b>Phone :</b> 
                 </td>
                 <td>
                 <input class="form-control" type="text" placeholder="insret your phone !" name="phone" required>
                 </td>
             </tr>
             
             
             <tr>
                 <td>
                     <b>Address :</b> 
                 </td>
                 <td>
                <textarea type="text" class="form-control" name="address" rows=3></textarea>
                 </td>
             </tr>
             
       </table>
       <br>
       <br>
       <center>
             <input type="submit" name="insert-btn" value="INSERT" class="btn btn-info">
              <a href="index.php" style="width:85px;" class="btn btn-danger">EXIT</a>  
       </center>
       
    </form>

</body>
</html>