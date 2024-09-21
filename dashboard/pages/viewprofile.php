<link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">

<center> 
<h1>Profile Info</h1>
<div class="container"> 
  
  <div class="row">

    <table class="table">
      <thead>
        <tr>
          <th scope="col">UserId</th>
          <th scope="col"><?php echo $_SESSION['UserID']?></th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>First Name</td>
          <td><?php echo $_SESSION['ufn']?></td>
        </tr>
        <tr>
          <td>Last Name</td>
          <td><?php echo $_SESSION['uln']?></td>
        </tr>
        <tr>
          <td>Email</td>
          <td><?php echo $_SESSION['uem']?></td>
        </tr>
       
        <tr>
          <td>Password</td>
          <td><?php echo $_SESSION['upass']?></td>
        </tr>
        <tr>
          <td>Contact</td>
          <td><?php echo $_SESSION['ucon']?></td>
        </tr>
        <tr>
          <td>Gender</td>
          <td><?php echo $_SESSION['ugen']?></td>
        </tr>
        <tr>
          <td>Age</td>
          <td><?php echo $_SESSION['uage']?></td>
        </tr>
      </tbody>
    </table>
    
<a class="alal btn btn-info" href="update.php">Update</a>
  </div>
    

</div>
<style>
  .alal{
    color: #fff;
    
  }
</style>
</body>
</html>

