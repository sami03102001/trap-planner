<!DOCTYPE html>
<html lang="en">


<!-- patients23:17-->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
    <?php require_once('master/title.php');?>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/select2.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap-datetimepicker.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <!--[if lt IE 9]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
	<![endif]-->
</head>



<body>
    <div class="main-wrapper">

 
        <!-- navbar -->
<?php include 'master/navbar.php';?>

        <!-- sidebar -->
<?php include 'master/sidebar.php'; ?>       
        <div class="page-wrapper">

<?php if(isset($_GET['update'])){ //Update ?>

<div>
            <br><br><br>
            <div>
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <h4 class="page-title">Add Patient</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <form method="POST" action="patients.php">
                            <?php 
                               $sel = mysqli_query($con, "select * from patient where id = '".$_GET['id']."' ");
                                $up = mysqli_fetch_array($sel);
                            ?>
                            <input type="hidden" name="id" value="<?php echo $up['id'];?>">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Patient Name <span class="text-danger">*</span></label>
                                        <input value="<?php echo $up['p_name'];?>" name="p_name" class="form-control" type="text">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Father Name</label>
                                        <input value="<?php echo $up['f_name'];?>" name="f_name" class="form-control" type="text">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Contact <span class="text-danger">*</span></label>
                                        <input value="<?php echo $up['phone'];?>" name="phone" class="form-control" type="text">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Email <span class="text-danger">*</span></label>
                                        <input value="<?php echo $up['email'];?>" name="email" class="form-control" type="email">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Date of Birth</label>
                                        <div class="cal-icon">
                                            <input name="date_of_birth" type="text" value="<?php echo $up['date_of_birth'];?>" class="form-control datetimepicker">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group gender-select">
                                        <label class="gen-label">Gender:</label>
                                        <?php 
                                         $ck_female = ""; $ck_male = "";
                                        if($up['gender'] == 'Male'){
                                             $ck_male = "checked";
                                        }else{
                                             $ck_female = "checked";
                                        } ?>
                                        <div class="form-check-inline">
                                            <label class="form-check-label">
                                                <input <?php echo $ck_male;?> value="Male" type="radio" name="gender" class="form-check-input">Male
                                            </label>
                                        </div>
                                        <div class="form-check-inline">
                                            <label class="form-check-label">
                                                <input <?php echo $ck_female;?> value="Female" type="radio" name="gender" class="form-check-input">Female
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label>Address</label>
                                                <input name="address" type="text" value="<?php echo $up['address'];?>" class="form-control ">
                                            </div>
                                        </div>
                                       
                               
                            </div>
                            <div class="m-t-20 text-center">
                                <button name="update" class="btn btn-primary submit-btn">EDIT</button>
                                <a href="patients.php" class="btn btn-primary submit-btn">LIST</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            
        </div>

 <?php }else if(isset($_GET['insert'])){ //ADD ?> 


       
        
        <div>
            <br><br><br>
            <div>
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <h4 class="page-title">Add Patient</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <form method="POST" action="patients.php">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Patient Name <span class="text-danger">*</span></label>
                                        <input name="p_name" class="form-control" type="text">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Father Name</label>
                                        <input name="f_name" class="form-control" type="text">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Contact <span class="text-danger">*</span></label>
                                        <input name="phone" class="form-control" type="text">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Email <span class="text-danger">*</span></label>
                                        <input name="email" class="form-control" type="email">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Date of Birth</label>
                                        <div class="cal-icon">
                                            <input name="date_of_birth" type="text" class="form-control datetimepicker">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group gender-select">
                                        <label class="gen-label">Gender:</label>
                                        <div class="form-check-inline">
                                            <label class="form-check-label">
                                                <input value="Male" type="radio" name="gender" class="form-check-input">Male
                                            </label>
                                        </div>
                                        <div class="form-check-inline">
                                            <label class="form-check-label">
                                                <input value="Female" type="radio" name="gender" class="form-check-input">Female
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label>Address</label>
                                                <input name="address" type="text" class="form-control ">
                                            </div>
                                        </div>
                                       
                               
                            </div>
                            <div class="m-t-20 text-center">
                                <button name="insert" class="btn btn-primary submit-btn">ADD</button>
                                <a href="patients.php" class="btn btn-primary submit-btn">LIST</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            
        </div>
    

 <?php }else{ //list ?>
 
            <div class="content">               
                <div class="row">
                    <div class="col-sm-4 col-3">
                        <h4 class="page-title">Patients</h4>
                    </div>
                    <div class="col-sm-8 col-9 text-right m-b-20">
                        <a href="patients.php?insert" class="btn btn btn-primary btn-rounded float-right"><i class="fa fa-plus"></i> Add Patient</a>
                    </div>
                </div>
				<div class="row">
					<div class="col-md-12">
						<div class="table-responsive">
							<table class="table table-border table-striped custom-table datatable mb-0">
								<thead>
									<tr>
                                        <th>Sno#</th>
										<th>Patient Name</th>
                                        <th>Father Name</th>
										
										<th>Address</th>
										<th>Phone</th>
										<th>Email</th>
										<th class="text-right">Action</th>
									</tr>
								</thead>
								<tbody>
                                    <?php
                                    $sno = 0; 
                               $sel = mysqli_query($con, "select * from patient order by id DESC ");
                                while($row = mysqli_fetch_array($sel)){$sno++;
                            ?>
            <tr>
                                        <td><?php echo $sno;?></td>
                                        <td><?php echo $row['p_name'];?></td>
                                        <td><?php echo $row['f_name'];?></td>
                                        <td><?php echo $row['address'];?></td>
                                        <td><?php echo $row['phone'];?></td>
                                        <td><?php echo $row['email'];?></td>
                                        <td class="text-right">
                                            <div class="dropdown dropdown-action">
                                                <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="patients.php?update&id=<?php echo $row['id'];?>"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                                    <a onclick="return confirm('Are you sure want to delete this Patient?');" class="dropdown-item" href="patients.php?delete&id=<?php echo $row['id'];?>"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr> 
                                    <?php } ?>                       
                                </tbody>
							</table>
						</div>
					</div>
                </div>
            </div>
           
        </div>

<?php } //list ?>



    </div>
    <div class="sidebar-overlay" data-reff=""></div>
    <script src="assets/js/jquery-3.2.1.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.slimscroll.js"></script>
    <script src="assets/js/select2.min.js"></script>
    <script src="assets/js/jquery.dataTables.min.js"></script>
    <script src="assets/js/dataTables.bootstrap4.min.js"></script>
    <script src="assets/js/moment.min.js"></script>
    <script src="assets/js/bootstrap-datetimepicker.min.js"></script>
    <script src="assets/js/app.js"></script>
</body>






<


<!-- patients23:19-->
</html>