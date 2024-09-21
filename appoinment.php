


<!-- MAKE AN APPOINTMENT -->
<section id="appointment" data-stellar-background-ratio="3">
    <form action="" method="post">
          <div class="container">
               <div class="row">

                    <div class="col-md-6 col-sm-6">
                         <img src="images/12.jpg" class="img-responsive" alt="">
                    </div>

                    <div class="col-md-6 col-sm-6">
                         <!-- CONTACT FORM HERE -->
                         
                         <!-- SECTION TITLE -->
                         <form id="appointment-form"  method="POST">
                              <div class="section-title wow fadeInUp" data-wow-delay="0.4s">
                                   <h2>Make an appointment</h2>
                              </div>

                              <div class="wow fadeInUp" data-wow-delay="0.8s">
                                   <div class="col-md-6 col-sm-6">
                                        <label for="name">Name</label>
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Full Name" required>
                                   </div>

                                   <div class="col-md-6 col-sm-6">
                                        <label for="email">Email</label>
                                        <input type="email" class="form-control" id="email" name="Eml" placeholder="Your Email" required>
                                   </div>

                                   <div class="col-md-6 col-sm-6">
                                        <label for="date">Select Date</label>
                                        <input type="date" name="date" value="" class="form-control" required>
                                   </div>

                                   <div class="col-md-6 col-sm-6">
                                        <label for="date">Select Time</label>
                                        <input type="time" name="time" value="" class="form-control" required>
                                   </div>
                                   <div class="col-md-6 col-sm-6">
                                        <label for="date">Phone</label>
                                        <input type="text" name="phone" value="" placeholder="Phone" class="form-control" required>
                                   </div>

                                   <div class="col-md-6 col-sm-6">
                                        <label for="date">Location</label>
                                        <input type="text" name="location" value="" placeholder="Enter Your Location Address" class="form-control" required>
                                   </div>

                                   <div class="col-md-12 col-sm-12">
                                       
                                        <label for="Message">Description</label>
                                        <textarea class="form-control" rows="5" id="message" name="message" placeholder="Description"></textarea>
                                        <button class="btn btn-info" id="open-modal" name="submit">Request</button>
                                   </div>
                              </div>
                        </form>
                    </div>

               </div>
          </div>
          </form>
     </section>
 
    
  
   
<?php



if(isset($_POST["submit"]))
{



    $name = $_POST["name"];
    $Eml = $_POST["Eml"];
    $date = $_POST["date"];
    $time = $_POST["time"];
    $phone = $_POST["phone"];
    $location = $_POST["location"];
    $message = $_POST["message"];

    
    $conn = mysqli_connect("localhost","root","","mankind") or die ("DataBase Error");
   
//     mysqli_query($con,"INSERT INTO adm_entry (
   
          
$query = "INSERT INTO `appoinment`(`Name`, `Email`, `Date`, `Time`, `Phone`, `Location`, `Description`) VALUES ('$name','$Eml','$date','$time','$phone','$location','$message')";
$res = mysqli_query($conn,$query);
    

//     $sql = "INSERT INTO `appoinment` (`	Name`, `Email `, `Date`, `Time`, `Phone`, `Location`,`Description`) VALUES ('".$Name."','".$Email."','".$Date."','".$Time."','".$Phone."','".$Loc."','".$Message."')";
if($res > 0)
{
      echo "   <script>
      
      alert('hello $name! You have an appointment schedule for $date at $time with Dr. Ayesha ');</script>";
}else
{
    echo '';
}

		

 
}



?>