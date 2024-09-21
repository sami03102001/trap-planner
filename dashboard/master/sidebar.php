<div class="sidebar" id="sidebar" style="margin-top: 80px;">
            <div class="sidebar-inner slimscroll">
                <div id="sidebar-menu" class="sidebar-menu">
                    <p style="text-align: center; font-size: larger; "><span>Hello<?php echo "  ".$_SESSION['ufn'];?></span></p>
                    <ul>
                       
                    
                        <li class="submenu active">
                            <a href="index.php"><i class="fa fa-user"></i> <span class="activea">Profile</span>
                            <span class="menu-arrow"></span></a>
                            <ul style="display: none;">
                                <li><a style="color: #4ac522;" href="index.php">View Profile</a></li>
                                <li><a style="color: #4ac522;"  href="update.php">Modify/Delete Profile</a></li>
                            </ul>   
                        </li>
                        <li class="submenu active">
                            <a href="index.php"><i class="fa fa-clock-o"></i> <span class="activea">Appointment</span>
                            <span class="menu-arrow"></span></a>
                            <ul style="display: none;">
                                <li><a style="color: #4ac522;" href="viewappoin.php">View Appointment</a></li>
                                <li><a style="color: #4ac522;"  href="updateappoin.php">Modify/Delete Appointment</a></li>
                            </ul>
                        </li>
                        <li class="submenu active">
                            <a href="index.php"><i class="fa fa-heartbeat"></i> <span class="activea">Health Vitals</span>
                            <span class="menu-arrow"></span></a>
                            <ul style="display: none;">
                                <li><a style="color: #4ac522;" href="viewvital.php">View Vitals</a></li>
                                <li><a style="color: #4ac522;"  href="updatevital.php">Modify/Delete Vitals</a></li>
                            </ul>
                        </li>
                        
                    </ul>
                </div>
            </div>
        </div>
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
        

        <style>
         
           
           ul:hover,li:hover,a:hover,.sidebar:hover, i:HOVER,span:hover{
                color: #4ac522;
            }
            .menu-arrow,.fa-user{
                color: #4ac522;
            }
            .activea{
                color: gray;
            }
        </style>
    