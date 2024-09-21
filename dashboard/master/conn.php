
<!-- data Base Connection Starts Here -->
<?php
    session_start();

    $host = "localhost";
    $user = "root";
    $pass = "";
    $database = "hospital_database";
    $con = mysqli_connect($host,$user,$pass,$database) or die('There Is an Database Error :');
      
?>
<!-- data Base Connection Ends Here -->
