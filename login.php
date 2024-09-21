
<?php

session_start();
    
if(isset($_SESSION['uem']) && isset($_SESSION['ufn']))
{
     header('Location: index.php');
}



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Log in</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Niconne&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200&family=Niconne&display=swap" rel="stylesheet">
    <!-- Latest compiled and minified CSS -->
    <link rel="icon" href="icon/logo.png">

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
    padding-top: 120px;
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
#myInput {
    margin: 10px;
    padding: 5px;
    border: none;
    background-color:#A5C422   ;
    border-radius: 10px;
    font-weight: bold;
    font-size: small;
    font-family: 'Montserrat', sans-serif;
    color: #000000;
}
label {
    font-weight: bold;
    font-size: small;
}

#txt:focus {
    outline: none;
}

#myInput:focus {
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

.textt{
    width: 80%;
    margin-top: 50px;
    font-size: 20px;
}
</style>
    <title>Login Form</title>
</head>

<body>
    <div class="container">
        <div class="image">
            <h1 style="margin-top:35%;">Welcome To <span style="color: white;"><br>Mankind Medicare </span></h1>
            <img src="icon/logo.png" height="100px" width="100px"  alt="">
           <center> <p class="textt">You’re in the right place! Becoming eligible for Medicare can be daunting, but don’t worry, we’re here to help.</p>
           </center> </div>    <div class="content">
            <h1 style="font-style: initial;">Log In</h1>
           
            <form action="" method="POST">
                    <div class="form-group">
               
                        <input type="email" class="form-control" name="email" id="txt" aria-describedby="helpId" placeholder="Email" style="text-align: center;" required>
        
                    </div>
                
                    <div class="form-group">
                   
                        <input type="password" class="form-control" name="password" id="myInput" placeholder="Password" style="text-align: center;" required>
                       <br> <div class="chck" style="padding-left: 0px;"><input type="checkbox" onclick="myFunction()" style="width: 20px; margin-right: 190px; "><p style="margin-top: -35px;">SHOW PASSWORD</p></div>

                    </div>
              
           
            
           
      <a  class="fp" href="register.php" style="color:#777;">Dont Have an Account??</a> <br>
            <a class="fp" href="index.php" style="color:#777;">Back Home ??</a>
   <br>        
            <button  style="background-color: #4568DC; padding: 8px 30px ; border-radius: 10px; border: 0px; color: #000000; cursor: pointer;" name="login" >Log In</button>
        </div>
    </div>
</form>
</body>

</html>


<script>
    function myFunction() {
      var x = document.getElementById("myInput");
      if (x.type === "password") {
        x.type = "text";
      } else {
        x.type = "password";
      }
    }
    </script>


<?php
if(isset($_POST["login"]))
{

  $conn = mysqli_connect("localhost","root","","mankind") or die ("DataBase Error");

   $Email = $_POST["email"];
   $Pass = $_POST["password"];

   $sql = "SELECT `UserID`, `FirstName`, `LastName`, `Email`, `Pasword`, `Contact`, `Gender`, `Age` FROM `users` WHERE `Email` = '".$Email."' AND `Pasword` = '".$Pass."'";

   $result = mysqli_query($conn, $sql);

   if(mysqli_num_rows($result) > 0)
    {
        while ($rowss = mysqli_fetch_assoc($result))
        
        { 
            $UserID = $rowss['UserID'];
            $firstname = $rowss['FirstName'];
            $lastname = $rowss['LastName'];
            $email = $rowss['Email'];
            $password = $rowss['Pasword'];
            $contact = $rowss['Contact'];
            $gender = $rowss['Gender'];
            $age = $rowss['Age'];
        }

        $_SESSION["UserID"] = $UserID;
        $_SESSION["ufn"] = $firstname;
        $_SESSION["uln"] = $lastname;
        $_SESSION["uem"] = $email;
        $_SESSION["upass"] = $password;
        $_SESSION["ucon"] = $contact;
        $_SESSION["ugen"] = $gender;
        $_SESSION["uage"] = $age;

        
        echo '  <script>
        
        window.location.replace("index.php"); 
                </script>   ';
        

               
      
         
         
    }

}
?>

