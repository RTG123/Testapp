<!DOCTYPE html>
<?php
require_once('../FOLDERS/SES/SESUSER.php'); // CONNECTION 
  require_once('../referencesession.php'); // ALL THE DATA
    if ($_SESSION['usertype']=='admin'){
     header("Location:admin.php");
   }else if(empty($_SESSION['usertype'])){
     header("Location:login.php");
   }

  ?>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Request Monitoring System</title>
        <link rel="icon" type="../image/png" href="../images/favicon.ico" />

        <link rel="stylesheet" type="text/css" href="../icons/themify-icons/themify-icons.css"><!-- Themify Icons CSS -->
        <link rel="stylesheet" type="text/css" href="../icons/font-awesome/css/font-awesome.min.css"><!-- Font-awesome Icons CSS -->
        
        <link href="../assets/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet"><!-- Bootstrap Core CSS -->
        <link href="../assets/sidebar-nav.min.css" rel="stylesheet"><!-- Menu CSS -->
        <link href="../assets/css/style.css" rel="stylesheet"><!-- Custom CSS -->
        <link href="../assets/css/tpc.css" id="theme" rel="stylesheet"><!-- color CSS -->
        <!-- ⭐⭐⭐ ADDITIONAL LINKS ⭐⭐⭐ -->
        <link href="../css/formstyle.css" rel="stylesheet">
        <link href="../plugins/bower_components/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
        <!-- <link href="https://cdn.datatables.net/buttons/1.2.2/css/buttons.dataTables.min.css" rel="stylesheet" type="text/css" /> -->

    </head>

    <body class="fix-header" style="font-family:Century Gothic"onload="<?php echo $_SESSION['status'];?>">
     <!-- ⭐⭐⭐ HEADER & SIDE BAR ⭐⭐⭐ -->
        <!-- Preloader -->
        <div class="preloader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
            </svg>
        </div>
        <!-- End Preloader -->
        <!-- Wrapper -->
        <div id="wrapper">
            <!-- Top Navigation -->
            <nav class="navbar navbar-default navbar-static-top m-b-0">
                <div class="navbar-header">
                    <!-- Logo -->
                    <div class="top-left-part">
                        <a class="logo" href="home.php">
                            <span class="hidden-xs">
                            <!--This is dark logo text--><img src="../images/tpc.png" alt="Terumo" class="dark-logo" style="width:90%" /><!--This is light logo text--><img src="../images/tpc.png" alt="Terumo" class="light-logo" style="width:90%" />
                            </span>
                        </a>
                    </div>
                    <!-- /Logo -->
                    <ul class="nav navbar-top-links navbar-left">
                        <li><a href="javascript:void(0)" class="open-close waves-effect waves-light"><i class="ti-menu"></i></a></li>
                    </ul>
                    <!-- Dropdown User -->
                    <ul class="nav navbar-top-links navbar-right pull-right">
                        <li class="dropdown">
                            <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#"> <img src="../images/user-default.png" alt="user-img" width="36" class="img-circle"><b class="hidden-xs"><?php echo $_SESSION['firstname']?></b><span class="caret"></span> </a>
                            <ul class="dropdown-menu dropdown-user animated flipInY">
                                <li>
                                    <div class="dw-user-box">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <div class="u-img"><img src="../images/user-default.png" alt="user" /></div>
                                            </div>
                                            <div class="col-sm-8">
                                                <div class="u-text">
                                                    <p style="font-size:14px"><?php echo $_SESSION['firstname']." ".$_SESSION['lastname'];?></p>
                                                    <p class="text-muted" style="text-transform: uppercase;"><small><?php echo $_SESSION['usertype']?></small></p>
                                                    <a href="#" class="btn btn-rounded btn-danger btn-xs">View Profile</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li role="separator" class="divider"></li>
                                <li><a href="myprofile.html"><i class="ti-user"></i>&emsp;My Profile</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="#"><i class="ti-settings"></i>&emsp;Account Setting</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="javascript:void(0)" class="waves-effect" data-toggle="modal" data-target="#logoutModal"><i class="mdi mdi-logout"></i>&emsp;Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                    <!-- Dropdown User -->
                </div>
            </nav>
            <!-- End Top Navigation -->
            <!-- Left Side Navigation -->
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav slimscrollsidebar">
                    <div class="sidebar-head">
                        <h3><span class="fa-fw open-close"><i class="ti-close ti-menu" style="color:#54667a"></i></span> <span class="hide-menu"><img src="../images/tpc.png" alt="Terumo" style="width:80%" /></span></h3> 
                    </div>
                    <div class="row"><br></div>
                    <div class="user-profile">
                        <div class="dropdown user-pro-body">
                            <div><a href="myprofile.php"><img src="../images/user-default.png" alt="user-img" class="img-circle"></a></div>
                            <h5 style="font-family:Century Gothic"><?php echo $_SESSION['firstname']." ".$_SESSION['lastname'];?><br><small style="text-transform: uppercase;" ><?php echo $_SESSION['usertype']?></small</h5>
                        </div>
                    </div>
                    <ul class="nav" id="side-menu">
                        <li><a href="../index.php" class="waves-effect active"><i class="mdi mdi-av-timer fa-fw"></i><span class="hide-menu">&emsp;Dashboard</span></a></li>
                        <li><a href="../index1.php" class="waves-effect"><i class="mdi mdi-clipboard-outline fa-fw"></i><span class="hide-menu">&emsp;Add Request</span></a></li>
                        <li><a href="javascript:void(0)" class="waves-effect"><i class="mdi mdi-folder-multiple-outline"></i><span class="hide-menu">&emsp;Search and Update<span class="fa arrow"></span></span></a>
                            <ul class="nav nav-second-level">
                                <li> <a href="fontawesome.html" class="waves-effect"><i class="fa-fw">F</i><span class="hide-menu">Font awesome</span></a> </li>
                                <li> <a href="themifyicon.html" class="waves-effect"><i class="fa-fw">T</i><span class="hide-menu">Themify Icons</span></a> </li>
                            </ul>
                        </li>
                        <li><a href="table.html" class="waves-effect"><i class="mdi mdi-table fa-fw"></i><span class="hide-menu">&emsp;Sample Table</span></a></li>
                        <li><a href="button.html" class="waves-effect"><i class="mdi mdi-album fa-fw"></i><span class="hide-menu">&emsp;Sample Button</span></a></li>
                        <li><a href="modal.html" class="waves-effect"><i class="mdi mdi-clipboard fa-fw"></i><span class="hide-menu">&emsp;Sample Modal</span></a></li>
                        <li><a href="notification.html" class="waves-effect"><i class="mdi mdi-bell fa-fw"></i><span class="hide-menu">&emsp;Sample Notification</span></a></li>
                        <li><a href="chart.html" class="waves-effect"><i class="mdi mdi-chart-pie fa-fw"></i><span class="hide-menu">&emsp;Sample Chart</span></a></li>
                        <li><a href="javascript:void(0)" class="waves-effect"><i class="mdi mdi-face fa-fw"></i><span class="hide-menu">&emsp;Icons<span class="fa arrow"></span></span></a>
                            <ul class="nav nav-second-level">
                                <li> <a href="fontawesome.html" class="waves-effect"><i class="fa-fw">F</i><span class="hide-menu">Font awesome</span></a> </li>
                                <li> <a href="themifyicon.html" class="waves-effect"><i class="fa-fw">T</i><span class="hide-menu">Themify Icons</span></a> </li>
                            </ul>
                        </li>
                        <li><a href="javascript:void(0)" class="waves-effect"><i class="mdi mdi-view-list fa-fw"></i><span class="hide-menu">&emsp;Multi Dropdown<span class="fa arrow"></span></span></a>
                            <ul class="nav nav-second-level">
                                <li> <a href="javascript:void(0)"><i class="mdi mdi-check fa-fw"></i><span class="hide-menu">&emsp;Second Level Item</span></a> </li>
                                <li> <a href="javascript:void(0)"><i class="mdi mdi-close fa-fw"></i><span class="hide-menu">&emsp;Second Level Item</span></a> </li>
                                <li> <a href="javascript:void(0)" class="waves-effect"><i class="mdi mdi-help fa-fw"></i><span class="hide-menu">&emsp;Third Level </span><span class="fa arrow"></span></a>
                                    <ul class="nav nav-third-level">
                                        <li> <a href="javascript:void(0)"><i class="mdi mdi-heart fa-fw"></i><span class="hide-menu">&emsp;Third Level Item</span></a> </li>
                                        <li> <a href="javascript:void(0)"><i class="mdi mdi-crown fa-fw"></i><span class="hide-menu">&emsp;Third Level Item</span></a> </li>
                                        <li> <a href="javascript:void(0)"><i class="mdi mdi-diamond fa-fw"></i><span class="hide-menu">&emsp;Third Level Item</span></a> </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li><a href="javascript:void(0)" class="waves-effect" data-toggle="modal" data-target="#logoutModal"><i class="mdi mdi-logout fa-fw"></i><span class="hide-menu">&emsp;Log out</span></a></li>
                    </ul>
                </div>
            </div>
                <!-- End Left Side Navigation -->
            <!-- ⭐⭐⭐ END HEADER & SIDE BAR ⭐⭐⭐ -->
            
            <!-- ⭐⭐⭐ Page Content ⭐⭐⭐ -->
            <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row bg-title">
                        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                            <h4 class="page-title">Dashboard</h4> </div>
                        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                            <ol class="breadcrumb">
                                <li><a href="home.php">Home</a></li>
                                <li class="active">Dashboard</li>
                            </ol>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            
                         <!--*********************************
                                 ⭐⭐⭐   Modals  ⭐⭐⭐
                            *********************************** -->
      <!-- View Report Modal -->
            <?php  
                $sql = "SELECT * FROM requestmonitoring.dbo.mcrequestrecord ";// sql for server
                        $stmt = sqlsrv_query( $conn, $sql ); 
                        while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ){
                    ?>

            <div class="modal fade"  id="viewreportModal<?php echo $row['requestnumber']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header" style="background-color:#008d61">
                            <div class="col-sm-11"><h4 class="modal-title" style="font-family:Century Gothic;font-weight:bold;background-color:#008d61">VIEW REPORT</h4></div>
                            <div class="col-sm-1">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        </div>
                        
                        <div class="modal-body">
                            <div class="row">
                                <form action="database/updatedata.php" method="POST" enctype="multipart/form-data" class="form-material form-horizontal">
                                <div class="form-group"style="padding: 10px 100px;">
                                                    <div class="col-md-12">
                                                        <input type="text" name="requestnum" class="form-control form-control-line" style="text-align:center;font-size:35px;padding-bottom: 30px;padding-top:30px;"value="<?php echo $row['requestnumber']?>" readonly> 
                                                    </div>
                                                    <h5 class="col-md-12" id="references"style="text-align:center">Reference Number </h5>
                                                    
                                                
                                                    </div>
                                        <div class="col-sm-6">
                                        <div class="form-group"style="padding: 0px 5px;" >
                                                    <label class="col-md-12"> Added by: </label>
                                                    <div class="col-md-12">
                                                        <input  id="addedby0"  type="text" name="addedby" class="form-control form-control-line" value="<?php echo $row['userid']?>" readonly> 
                                                    </div>
                                                    </div> <!-- form group -->
                                        
                                        <div class="form-group"style="padding: 0px 5px;">
                                                    <label class="col-md-12"> Department - Section: </label>
                                                    <div class="col-md-12">
                                                        <input type="text" name="deptsect"  class="form-control form-control-line" value="<?php echo $row['department-section']?>"readonly> 
                                                    </div>
                                                    </div> <!-- form group -->
                                            <!-- CALENDAR -->
                                        <div class="row margin" >
                                            <!-- date requested -->
                                        <div class="col-lg-6" id="date1">
                                            <label>Date Requested :</label>
                                            <div class="input-group">
                                                <!-- <div class="input-group-addon">
                                                <i class="fa fa-calendar"></i>
                                            </div> -->
                                                <div class="input-size">
                                                    <input style="padding-left:20px;" class="form-control" style="width:100%;" id="inputdate10"
                                                    name="daterequested" placeholder="MM/DD/YYYY" type="text"autocomplete="off"
                                                    value="<?php echo $row['daterequested']?>"readonly/>
                                                </div> 
                                            </div>  
                                        </div>

                                        <div class="col-lg-6" id="date2" >
                                            <label>Date Received : </label>
                                            <div class="input-group">
                                                <!-- <div class="input-group-addon">
                                                <i class="fa fa-calendar"></i>
                                            </div> -->
                                                <div class="input-size" >
                                                <input style="padding-left:20px;" class="form-control"  style="width:100%;" id="inputdate20"
                                                name="datereceived" placeholder="MM/DD/YYYY" type="text" autocomplete="off"
                                                value="<?php echo $row['datereceived']?>" readonly/>
                                                </div> 
                                            </div>
                                        </div>
                                        </div><!-- END CALENDAR -->
                                        
                                    </div><!-- First Column -->
                    <div class="col-sm-6">
                            <div class="form-group"style="padding: 0px 5px;">
                                                    <label class="col-md-12"> Information : </label>
                                                    <div class="col-md-12">
                                                    <input style="padding-left:20px;" class="form-control"  style="width:100%;" 
                                                name="information" type="text" autocomplete="off"
                                                value="<?php echo $row['information']?>" />
                                                    </div>
                                                    </div> <!-- form group -->
                        <div style="display:;" class="form-group"style="padding: 10px 5px;">
                                                    <label class="col-md-12"> Implementation Date : </label>
                                                    <div class="col-md-12">
                                                        <input type="text" name="impdate" class="form-control form-control-line" value="<?php echo $row['implementationdate']?>"readonly> 
                                                    </div>
                                                    </div> <!-- form group -->
                                        <div class="form-group"style="padding: 0px 10px;">
                                                    <label class="col-md-12">Remarks : </label>
                                                    <div class="col-md-12">
                                                        <input type="text" name="remarks"   class="form-control form-control-line" value="<?php echo $row['remarks']?>"readonly> 
                                                    </div>
                                                    </div>
                                    <div class="form-group"style="padding: 0px 10px;">
                                                    <label class="col-md-12">New Attachment : </label>
                                                    <div class="col-md-12">
                                                        <input type="text" name="attachment" class="form-control form-control-line" value="<?php echo $row['attachment']?>"readonly> 
                                                    </div>
                                                    </div>
                                                </div><!-- Second Column -->
                
                            
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>   
                            
                        </div>
                    </div>
                    </form> <!-- form end-->
                </div>
            </div>
            
            <?php } ?>
    <!-- View Report Modal end -->
     <!-- EDIT MODAL -->
            <?php  
                $sql = "SELECT * FROM requestmonitoring.dbo.mcrequestrecord ";// sql for server
                        $stmt = sqlsrv_query( $conn, $sql ); 
                        while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ){
                    ?>

            <div class="modal fade"  id="exampleModal<?php echo $row['requestnumber']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header" style="background-color:#008d61">
                            <div class="col-sm-11"><h4 class="modal-title" style="font-family:Century Gothic;font-weight:bold;background-color:#008d61">EDIT REPORT</h4></div>
                            <div class="col-sm-1">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        </div>
                        
                        <div class="modal-body">
                            <div class="row">
                                <form action="../database/updaterequestrecord.php" method="POST" enctype="multipart/form-data" class="form-material form-horizontal">
                                <div class="form-group"style="padding: 10px 100px;">
                                                    <div class="col-md-12">
                                                        <input type="text" name="requestnum" class="form-control form-control-line" style="text-align:center;font-size:35px;padding-bottom: 30px;padding-top:30px;"value="<?php echo $row['requestnumber']?>" readonly> 
                                                    </div>
                                                    <h5 class="col-md-12" id="references"style="text-align:center">Reference Number </h5>
                                                    
                                                
                                                    </div>
                                        <div class="col-sm-6">
                                        <div class="form-group"style="padding: 0px 5px;" >
                                                    <label class="col-md-12"> Added by: </label>
                                                    <div class="col-md-12">
                                                        <input  id="addedby0"  type="text" name="addedby" class="form-control form-control-line" value="<?php echo $row['userid']?>" readonly> 
                                                    </div>
                                                    </div> <!-- form group -->
                                        
                                        <div class="form-group"style="padding: 0px 5px;">
                                                    <label class="col-md-12"> Department - Section: </label>
                                                    <div class="col-md-12">
                                                        <input type="text" name="deptsect"  class="form-control form-control-line" value="<?php echo $row['department-section']?>"readonly> 
                                                    </div>
                                                    </div> <!-- form group -->
                                            <!-- CALENDAR -->
                                        <div class="row margin" >
                                            <!-- date requested -->
                                        <div class="col-lg-6" id="date1">
                                            <label>Date Requested :</label>
                                            <div class="input-group">
                                                <!-- <div class="input-group-addon">
                                                <i class="fa fa-calendar"></i>
                                            </div> -->
                                                <div class="input-size">
                                                    <input style="padding-left:20px;" class="form-control" style="width:100%;" id="inputdate10"
                                                    name="daterequested" placeholder="MM/DD/YYYY" type="text"autocomplete="off"
                                                    value="<?php echo $row['daterequested']?>"/>
                                                </div> 
                                            </div>  
                                        </div>

                                        <div class="col-lg-6" id="date2" >
                                            <label>Date Received : </label>
                                            <div class="input-group">
                                                <!-- <div class="input-group-addon">
                                                <i class="fa fa-calendar"></i>
                                            </div> -->
                                                <div class="input-size" >
                                                <input style="padding-left:20px;" class="form-control"  style="width:100%;" id="inputdate20"
                                                name="datereceived" placeholder="MM/DD/YYYY" type="text" autocomplete="off"
                                                value="<?php echo $row['datereceived']?>" />
                                                </div> 
                                            </div>
                                        </div>
                                        </div><!-- END CALENDAR -->
                                        
                                    </div><!-- First Column -->
                                    <div class="col-sm-6">
                            <div class="form-group"style="padding: 0px 5px;">
                                                    <label class="col-md-12"> Information : </label>
                                                    <div class="col-md-12">
                                                    <input style="padding-left:20px;" class="form-control"  style="width:100%;" 
                                                name="information" type="text" autocomplete="off"
                                                value="<?php echo $row['information']?>" />
                                                    </div>
                                                    </div> <!-- form group -->
                        <div style="display:;" class="form-group"style="padding: 10px 5px;">
                                                    <label class="col-md-12"> Implementation Date : </label>
                                                    <div class="col-md-12">
                                                        <input type="text" name="impdate" class="form-control form-control-line" value="<?php echo $row['implementationdate']?>"> 
                                                    </div>
                                                    </div> <!-- form group -->
                                        <div class="form-group"style="padding: 0px 10px;">
                                                    <label class="col-md-12">Remarks : </label>
                                                    <div class="col-md-12">
                                                        <input type="text" name="remarks"   class="form-control form-control-line" value="<?php echo $row['remarks']?>"> 
                                                    </div>
                                                    </div>
                                    <div class="form-group"style="padding: 0px 10px;">
                                                    <label class="col-md-12">New Attachment : </label>
                                                    <div class="col-md-12">
                                                        <input type="file" name="attachment" class="form-control form-control-line" value="<?php echo $row['attachment']?>"> 
                                                    </div>
                                                    </div>
                                                </div><!-- Second Column -->
                                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>   
                            <input type="submit" value="SUBMIT" style="background-color:#008d61; color:white;"  name="submit" 
                                class="fcbtn btn btn-outline btn-primary btn-1f">
                        </div>
                    </div>
                    </form> <!-- form end-->
                </div>
            </div>
            
            <?php } ?>
    <!-- MODAL -->
                                <!--⭐⭐⭐NEW DATA⭐⭐⭐-->
                                
    <!--*********************************
                 MAIN CONTENT
      *********************************** -->
    <section id="main-content" >
      <section class="wrapper">
         
             <!-- NOTIFICATION SUCCESS -->
        <div class="success show " id="stat" style="background-color: rgb(106,168,126);  "  >
            <span class="check"><i class="fa fa-check-circle"></i></span>
	            <span class="msg" > Success: Record added Successfully!</span>
              	<!-- <span id="xsign"class="cross"><i class="fa fa-times"></i></span> -->
                  </div> 
                  <!-- NOTIFICATION FAILED -->
        <div class="unsuccess show " id="stat" style="background-color: rgb(255,204,203);  "  >
            <span class="check"><i class="fa fa-times"></i></span>
	            <span class="msg" style="font-size:13px"> Failed: Record not added!</span>
              	<!-- <span id="xsign"class="cross"><i class="fa fa-times"></i></span> -->
                  </div> 

      <div class="row ">
         <div class="col-sm-12">
              <div style="background-color:white; padding:20px;">
              <h3 class="box-title m-b-0" style="padding-bottom:15px;">Master Control Request Record</h3>
 
                            <!--MYTABLE5-->
                      <div class="table-responsive" style="display:;"id="singletable">
                              <table id="myTable5" class="table table-striped" style="overflow: hidden !important; margin-right:500px !important;" >                                   
                                <thead>
                                        <tr>
                                        <th style="text-align:center;">ID</th>
                                            <th style="text-align:center;">Request Number</th>
                                            <th style="text-align:center;">Requestor</th>
                                            <th style="text-align:center;">Department - Section</th>
                                            <th style="text-align:center;">System Username</th>
                                            <th style="text-align:center; padding-right:30px; padding-left:30px; ">Actions</th> 
                                        </tr>
                                    </thead>
                                    <tbody style="text-align:center;">
                                    
                                        <?php  
                           
                                        
                                              $sql = "SELECT * FROM [requestmonitoring].[dbo].[mcrequestrecord] "; // sql for server
                                              $stmt = sqlsrv_query( $conn, $sql ); 
                                              while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ){?>
                                                    <tr>
                                                    <td style="text-align:center;"><?php echo $row['ID'];?></td>
                                                    <td><?php echo $row['requestnumber'];?></td>
                                                    <td><?php echo $row['department-section']; ?></td>
                                                    <td><?php echo $row['information']; ?></td>
                                                    <td><?php echo $row['implementationdate']; ?></td>
                                                    <td>
                                            <div class="row">
                                            <button type="button" class="btn btn-primary btn-xs dt-edit"style="background-color:#008D61;" >
                                             <a data-toggle="modal" data-target="#exampleModal<?php echo $row['requestnumber']?>" ><span class="glyphicon glyphicon-pencil " style="color:white"aria-hidden="true"></span></a>
                                            </button>
                                            <button data-toggle="modal" data-target="#viewreportModal<?php echo $row['requestnumber']?>" class="btn btn-primary btn-xs dt-edit"style="background-color:#008D61;" title="View Report" style="padding:0;margin:0"><span class="glyphicon glyphicon-info-sign " aria-hidden="true"></span></button>
 
                                      
                                            <button type="button" class="btn btn-danger btn-xs dt-delete" style="background-color:#008D61;" disabled  >
                                              <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                                            </button>
                                            </div>
                                          </td>
                                                    </tr>
                                                    <?php } ?>
                                  </tbody>  
                                        
                                </table>
                              </div>
                          <!--MYTABLE5-->
                            
                        
                          
                                           
                                                  
                            
                        </div>
                        <!-- whit -->
                    </div> 
              </div> <!-- div class="row"-->
   
 
      </section><!-- WRAPPER -->
    </section><!-- MAIN-CONTENT -->
        <!--*********************************
                 MAIN CONTENT END
      *********************************** -->
               
                            
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->
                <footer class="footer text-center" style="color:#008d61;">Copyright &copy; <?php echo date("Y"); ?> Request Monitoring System. All Rights Reserved</footer>
                <!-- <footer class="site-footer">
                    <div class="footer text-center">
                        <p>&copy; Copyrights <strong>TPC</strong>. All Rights Reserved</p>
                          <div class="credits">
                            Created with TPC by <a href="">ICT Application Management Team</a>
                            <a href="index.html#" class="go-top"><i class="fa fa-angle-up"></i></a>
                            </div>
                        </div>
                </footer> -->
            </div>
            <!-- End Page Content -->
        </div>
        <!-- End Wrapper -->

        <!-- Logout Modal -->
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-md" role="document">
                <div class="modal-content">
                    <div class="modal-header" style="background-color:#fdfdfd">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span class="mdi mdi-close"></span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row"><br></div>  
                        <div class="row">
                            <center><div class="col-sm-2"></div>
                            <div class="col-sm-8"><p style="font-size:14px">Do you really wish to leave and log out?<br>All the unsaved changes will be lost.</p></div>
                            <div class="col-sm-2"></div></center>
                        </div>
                        <div class="row"><br></div> 
                    </div>
                    <div class="modal-footer" style="background-color:#fdfdfd">
                        <form action="logout.php">
                            <button type="submit"  class="btn btn-success btn-outline">Yes, Log out</button>
                            <button type="button" class="btn btn-danger btn-outline" data-dismiss="modal">No, Cancel</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Logout Modal -->
        
        <script src="../assets/jquery.min.js"></script><!-- jQuery -->
        <script src="../assets/bootstrap/dist/js/bootstrap.min.js"></script><!-- Bootstrap Core JavaScript -->
        <script src="../assets/sidebar-nav.min.js"></script><!-- Menu Plugin JavaScript -->
        <script src="../assets/js/jquery.slimscroll.js"></script><!--slimscroll JavaScript -->
        <script src="../assets/js/custom.min.js"></script><!-- Custom Theme JavaScript -->

        <script type="text/javascript" src="../datepicker/datepicker.js"></script>
        <link rel="stylesheet" href="../datepicker/datepicker.css"/>
        <script type="text/javascript" src="../js/toastr.js"></script>
        <script type="text/javascript" src="../js/jquery_toast.js"></script>
        <script type="text/javascript" src="../js/toaster.js"></script>
        <link href="../lib/toast-master/css/jquery.toast.css" rel="stylesheet"><!-- Toast CSS -->

        <script src="../plugins/bower_components/datatables/jquery.dataTables.min.js"></script>
   <!-- start - This is for export functionality only -->
        <script src="https://cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
        <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
        <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>

    <script>
    $(document).ready(function() {
        $('#myTable').DataTable();
        $('#myTable2').DataTable();
        $('#myTable3').DataTable();
        $('#myTable4').DataTable();
        $('#myTable5').DataTable();
        $('#myTable6').DataTable();
        $('#myTable7').DataTable();
        $('#myTable8').DataTable();
        $(document).ready(function() {
            var table = $('#example').DataTable({
                "columnDefs": [{
                    "visible": false,
                    "targets": 2
                }],
                "order": [
                    [2, 'asc']
                ],
                "displayLength": 25,
                "drawCallback": function(settings) {
                    var api = this.api();
                    var rows = api.rows({
                        page: 'current'
                    }).nodes();
                    var last = null;
                    api.column(2, {
                        page: 'current'
                    }).data().each(function(group, i) {
                        if (last !== group) {
                            $(rows).eq(i).before('<tr class="group"><td colspan="5">' + group + '</td></tr>');
                            last = group;
                        }
                    });
                }
            });
            // Order by the grouping
            $('#example tbody').on('click', 'tr.group', function() {
                var currentOrder = table.order()[0];
                if (currentOrder[0] === 2 && currentOrder[1] === 'asc') {
                    table.order([2, 'desc']).draw();
                } else {
                    table.order([2, 'asc']).draw();
                }
            });
        });
    });
    $('#example23').DataTable({
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    });
    </script>

    </body>
</html>
