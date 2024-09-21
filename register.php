<!DOCTYPE html>


<html lang="en">

<head>
    <title>SIGN UP</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Niconne&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200&family=Niconne&display=swap" rel="stylesheet">
    <!-- Latest compiled and minified CSS -->

<style>* {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}

body {
    top: 50%;
    left: 50%;
    position: absolute;
    transform: translate(-50%, -50%);
    background: url('icon/back.jpeg');
    background-repeat: no-repeat;
    background-size: cover;

   
  
    
}

.container {
    height: 600px;
    width: 650px;
    box-shadow: 0px 30px 40px black;
    display: flex;
    border-radius: 10px;
}

.image {
    flex: 50%;
  background: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url('https://ckgrourmid/pngtree-hospital-building-green-trees-cartoon-background-image_6003.jpg');
    background-size: cover;
    text-align: center;
    color: white;
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
}

.image h1 {
    margin-top: 50%;
    padding-left: 20px;
    padding-right: 20px;
    letter-spacing: 2px;
    margin-bottom: 10px;
}

span {
    color:#A5C422;
}

.content {
    flex: 50%;
    background-color: white;
    text-align: center;
    font-family: 'Montserrat', sans-serif;
}

.content h1 {
    padding: 40px;
    padding-top: 30px;
    font-family: 'Niconne', cursive;
    font-size: 40px;
    color:#000000;
}

#txt,select {
    margin: 10px;
    padding: 5px;
    border: none;
    background-color:#A5C422   ;
    border-radius: 10px;
    font-weight: bold;
    font-size: large;
    font-family: 'Montserrat', sans-serif;
    color: #ffffff;

}
label {
    font-weight: bold;
    font-size: small;
}

#txt:focus {
    outline: none;
}

.fp {
    text-decoration: none;
    font-weight: bold;
    font-size: small;
    transition: 0.3s;
}

.fp:hover {
    color: #c446c9;
}

button {
    padding: 10px 40px;
    margin-top: 20px;
    border: none;
    background: linear-gradient(to right, #4568DC, #B06AB3);
    border-radius: 20px;
    transition: 0.3s;
}

button:hover {
    transform: scale(1.2);
}

button a {
    text-decoration: none;
    color: #A5C422;
    
}
::placeholder{
    margin-right: 10px;
}
input,select{
    width: 250px;
    height: 40px;
}
form{
    margin-top: -30px;
}
</style>
    <title>Login Form</title>
</head>

<body>


    
    <div class="container">
        <div class="image">
            <h1 style="margin-top:65%;">Welcome To <span style="color: white;"><br>Mankind Medicare </span></h1>
            <img src="icon/logo.png" height="100px" width="100px"  alt="">
        </div>
        <div class="content">
            <h1 style="font-style: initial;">Sign Up</h1>
           
            <form action="" method="POST">
                    <div class="form-group">
               
                        <input type="text" class="form-control" name="fn" id="txt" aria-describedby="helpId" placeholder="First Name" style="text-align: center;" required>
        
                    </div>
                
                    <div class="form-group">
                   
                        <input type="text" class="form-control" name="ln" id="txt" placeholder="Last Name" style="text-align: center;" required>
                    </div>
              
           
            
            <div class="form-group">
              
            
                <input type="email" class="form-control" name="em" id="txt" placeholder="Email" style="text-align: center;" required>
            </div>
            <div class="form-group">
             
      
                <input type="password" class="form-control" name="pass" id="txt" placeholder="Password" style="text-align: center;" required>
            </div>
            <div class="form-group">
            
          
                <input type="text" class="form-control" name="con" id="txt" placeholder="Contact" style="text-align: center;" required>
            </div>
            <div class="form-group">
             
                <input type="text" class="form-control" name="age" id="txt" placeholder="Age" style="text-align: center;" required>
        
                 <select class="form-control" name="gender" id="" style="text-align: center;">
                    <option class="form-control" value="male">MALE</option>
                    <option value="female">FEMALE</option>
                    <option value="female">Other</option>
                </select>
         
            </div>
      <a  class="fp" href="login.php" style="color:#777;">Have Account??</a> <br>
            <a class="fp" href="index.php" style="color:#777;">Back Home ??</a>
   <br>        
            <button  style="background-color: #4568DC; padding: 8px 30px ; border-radius: 10px; border: 0px; color: #000000; cursor: pointer;" name="register" >Register</button>
        </div>
    </div>
</form>
</body>

</html>

<?php
if(isset($_POST["register"]))
{



    $First = $_POST["fn"];
    $Last = $_POST["ln"];
    $Email = $_POST["em"];
    $Contact = $_POST["con"];
    $Age = $_POST["age"];
    $Gender = $_POST["gender"];
    $Password = $_POST["pass"];



    $conn = mysqli_connect("localhost","root","","mankind") or die ("DataBase Error");

    $sql = "INSERT INTO `users` (`FirstName`, `LastName`, `Email`, `Pasword`, `Contact`, `Gender`,`Age`) VALUES ('".$First."','".$Last."','".$Email."','".$Password."','".$Contact."','".$Gender."','".$Age."')";

    if(mysqli_query($conn,$sql))
    {
        echo '  <script>
        alert("Account Created!!"); 
        window.location.replace("login.php"); 
                </script>   ';
    }


}
?>