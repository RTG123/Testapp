<?php
        require_once('../connect.php'); // CONNECTION 
        session_start();
        $requestnumber    =$_POST['requestnum'];
        $addedby          =$_SESSION['userid'];
        $requestor        =$_POST['requestor'];
        $deptsect         =$_POST['deptsect'];
        $natureofreq      =$_POST['natofreq'];
        $daterequested    =$_POST['daterequested'];
        $datereceived     =$_POST['datereceived'];
        $details          =$_POST['details'];

        $dateapproved     =$_POST['dateapproved'];
        $datedone         =$_POST['datedone'];
        $accomplishedby   =$_POST['accomplishedby'];
        $remarks          =$_POST['remarks'];
        $ifcanceldelay    =$_POST['ifcanceldelay'];
        if(empty($dateapproved)||empty($datedone)){
          $attachment       = $_FILES['attachment']['name'];
        if(empty($attachment)){
            $sql = "SELECT * FROM [requestmonitoring].[dbo].[qadlog] WHERE requestnumber = '$requestnumber' "; // sql for server
            $stmt = sqlsrv_query( $conn, $sql ); 
             if($row_count = sqlsrv_has_rows( $stmt )>0){
                     date_default_timezone_set('Singapore');
                         $userid = $_SESSION['userid'];
                         $username = $_SESSION['username']; 
                         $firstname = $_SESSION['firstname'];
                         $lastname = $_SESSION['lastname'];
                         $position = $_SESSION['position'];
                         $activitydate = date("m/d/Y");  
                         $activitytime = date("H:i:s");
                         $activitydetails = $_SESSION['firstname']." ".$_SESSION['lastname']." with user ID ".$_SESSION['userid']. " updated the request with request number $requestnumber. ";
                         $activitystatus = "success";
                         $sql="INSERT INTO requestmonitoring.dbo.activitylogs(userid, username, firstname, lastname, position, activitydate,activitytime,activitydetails,activitystatus)
                             VALUES ('$userid', '$username' , '$firstname','$lastname','$position','$activitydate','$activitytime','$activitydetails','$activitystatus');";
                         $stmt = sqlsrv_query( $conn, $sql);
             }
             $sql = "SELECT * FROM [requestmonitoring].[dbo].[lasyslog] WHERE requestnumber = '$requestnumber' "; // sql for server
            $stmt = sqlsrv_query( $conn, $sql ); 
             if($row_count = sqlsrv_has_rows( $stmt )>0){
                     date_default_timezone_set('Singapore');
                         $userid = $_SESSION['userid'];
                         $username = $_SESSION['username']; 
                         $firstname = $_SESSION['firstname'];
                         $lastname = $_SESSION['lastname'];
                         $position = $_SESSION['position'];
                         $activitydate = date("m/d/Y");  
                         $activitytime = date("H:i:s");
                         $activitydetails = $_SESSION['firstname']." ".$_SESSION['lastname']." with user ID ".$_SESSION['userid']. " updated the request with request number $requestnumber. ";
                         $activitystatus = "success";
                         $sql="INSERT INTO requestmonitoring.dbo.activitylogs(userid, username, firstname, lastname, position, activitydate,activitytime,activitydetails,activitystatus)
                             VALUES ('$userid', '$username' , '$firstname','$lastname','$position','$activitydate','$activitytime','$activitydetails','$activitystatus');";
                         $stmt = sqlsrv_query( $conn, $sql);
             }
             $sql = "SELECT * FROM [requestmonitoring].[dbo].[nonlasyslog] WHERE requestnumber = '$requestnumber' "; // sql for server
            $stmt = sqlsrv_query( $conn, $sql ); 
             if($row_count = sqlsrv_has_rows( $stmt )>0){
                     date_default_timezone_set('Singapore');
                         $userid = $_SESSION['userid'];
                         $username = $_SESSION['username']; 
                         $firstname = $_SESSION['firstname'];
                         $lastname = $_SESSION['lastname'];
                         $position = $_SESSION['position'];
                         $activitydate = date("m/d/Y");  
                         $activitytime = date("H:i:s");
                         $activitydetails = $_SESSION['firstname']." ".$_SESSION['lastname']." with user ID ".$_SESSION['userid']. " updated the request with request number $requestnumber. ";
                         $activitystatus = "success";
                         $sql="INSERT INTO requestmonitoring.dbo.activitylogs(userid, username, firstname, lastname, position, activitydate,activitytime,activitydetails,activitystatus)
                             VALUES ('$userid', '$username' , '$firstname','$lastname','$position','$activitydate','$activitytime','$activitydetails','$activitystatus');";
                         $stmt = sqlsrv_query( $conn, $sql);
             }
             $sql = "SELECT * FROM [requestmonitoring].[dbo].[padlog] WHERE requestnumber = '$requestnumber' "; // sql for server
            $stmt = sqlsrv_query( $conn, $sql ); 
             if($row_count = sqlsrv_has_rows( $stmt )>0){
                     date_default_timezone_set('Singapore');
                         $userid = $_SESSION['userid'];
                         $username = $_SESSION['username']; 
                         $firstname = $_SESSION['firstname'];
                         $lastname = $_SESSION['lastname'];
                         $position = $_SESSION['position'];
                         $activitydate = date("m/d/Y");  
                         $activitytime = date("H:i:s");
                         $activitydetails = $_SESSION['firstname']." ".$_SESSION['lastname']." with user ID ".$_SESSION['userid']. " updated the request with request number $requestnumber. ";
                         $activitystatus = "success";
                         $sql="INSERT INTO requestmonitoring.dbo.activitylogs(userid, username, firstname, lastname, position, activitydate,activitytime,activitydetails,activitystatus)
                             VALUES ('$userid', '$username' , '$firstname','$lastname','$position','$activitydate','$activitytime','$activitydetails','$activitystatus');";
                         $stmt = sqlsrv_query( $conn, $sql);
             }
             $sql = "UPDATE requestmonitoring.dbo.qadlog
                     SET userid = '$addedby' ,requestor='$requestor',[department-section]='$deptsect',
                     natureofrequest='$natureofreq', daterequested='$daterequested',datereceived='$datereceived',
                     details='$details',dateapproved='$dateapproved',datedone='$datedone',accomplishedby='$accomplishedby',
                     remarks='$remarks',ifcanceldelay='$ifcanceldelay'
                     WHERE requestnumber = '$requestnumber' ";
             $stmt = sqlsrv_query( $conn, $sql);
             $sql = "UPDATE requestmonitoring.dbo.lasyslog
                     SET userid = '$addedby' ,requestor='$requestor',[department-section]='$deptsect',
                     natureofrequest='$natureofreq', daterequested='$daterequested',datereceived='$datereceived',
                     details='$details',dateapproved='$dateapproved',datedone='$datedone',accomplishedby='$accomplishedby',
                     remarks='$remarks',ifcanceldelay='$ifcanceldelay'
                     WHERE requestnumber = '$requestnumber' ";
             $stmt = sqlsrv_query( $conn, $sql);
             $sql = "UPDATE requestmonitoring.dbo.nonlasyslog
                     SET userid = '$addedby' ,requestor='$requestor',[department-section]='$deptsect',
                     natureofrequest='$natureofreq', daterequested='$daterequested',datereceived='$datereceived',
                     details='$details',dateapproved='$dateapproved',datedone='$datedone',accomplishedby='$accomplishedby',
                     remarks='$remarks',ifcanceldelay='$ifcanceldelay'
                     WHERE requestnumber = '$requestnumber' ";
             $stmt = sqlsrv_query( $conn, $sql);
             $sql = "UPDATE requestmonitoring.dbo.padlog
                     SET userid = '$addedby' ,requestor='$requestor',[department-section]='$deptsect',
                     natureofrequest='$natureofreq', daterequested='$daterequested',datereceived='$datereceived',
                     details='$details',dateapproved='$dateapproved',datedone='$datedone',accomplishedby='$accomplishedby',
                     remarks='$remarks',ifcanceldelay='$ifcanceldelay'
                     WHERE requestnumber = '$requestnumber' ";
             $stmt = sqlsrv_query( $conn, $sql);
             if($_SESSION['usertype']=='admin'){
                 $_SESSION['confirmation'] = 'success()';
                 header("location:../searchandupdate/adminSRR_Requests.php");
               }else{
                 $_SESSION['confirmation'] = 'success()';
                 header("location:../searchandupdate/SRR_Requests.php");
               }
        }//empty attachment
        else{
            $attachment1      =$_FILES['attachment']['tmp_name'];
            $fileext          = $_FILES["attachment"]["type"];
            $filesize        = $_FILES["attachment"]["size"];
            $target = "../images/".basename($attachment);
                if($fileext=="image/png" || $fileext=="image/jpeg" || $fileext=="image/jpg" || 
                                $fileext=="application/pdf" and $filesize<4000000 ){
                            if (move_uploaded_file($attachment1 , $target)) {
                            //   $msg = "Image uploaded successfully";
                              $_SESSION['status'] = 'success()'; 
                            // header("Location: http://localhost/FORMS/addform.php");
                            }
                          }else{
                            $_SESSION['status'] = 'invalid()'; 
                            // header("Location: ../searchandupdate/SRR_Requests.php");
                          }
        $sql = "SELECT * FROM [requestmonitoring].[dbo].[qadlog] WHERE requestnumber = '$requestnumber' "; // sql for server
        $stmt = sqlsrv_query( $conn, $sql ); 
        if($row_count = sqlsrv_has_rows( $stmt )>0){
                date_default_timezone_set('Singapore');
                    $userid = $_SESSION['userid'];
                    $username = $_SESSION['username']; 
                    $firstname = $_SESSION['firstname'];
                    $lastname = $_SESSION['lastname'];
                    $position = $_SESSION['position'];
                    $activitydate = date("m/d/Y");  
                    $activitytime = date("H:i:s");
                    $activitydetails = $_SESSION['firstname']." ".$_SESSION['lastname']." with user ID ".$_SESSION['userid']. " updated the request with request number $requestnumber. ";
                    $activitystatus = "success";
                    $sql="INSERT INTO requestmonitoring.dbo.activitylogs(userid, username, firstname, lastname, position, activitydate,activitytime,activitydetails,activitystatus)
                        VALUES ('$userid', '$username' , '$firstname','$lastname','$position','$activitydate','$activitytime','$activitydetails','$activitystatus');";
                    $stmt = sqlsrv_query( $conn, $sql);
        }
        $sql = "SELECT * FROM [requestmonitoring].[dbo].[lasyslog] WHERE requestnumber = '$requestnumber' "; // sql for server
        $stmt = sqlsrv_query( $conn, $sql ); 
        if($row_count = sqlsrv_has_rows( $stmt )>0){
                date_default_timezone_set('Singapore');
                    $userid = $_SESSION['userid'];
                    $username = $_SESSION['username']; 
                    $firstname = $_SESSION['firstname'];
                    $lastname = $_SESSION['lastname'];
                    $position = $_SESSION['position'];
                    $activitydate = date("m/d/Y");  
                    $activitytime = date("H:i:s");
                    $activitydetails = $_SESSION['firstname']." ".$_SESSION['lastname']." with user ID ".$_SESSION['userid']. " updated the request with request number $requestnumber. ";
                    $activitystatus = "success";
                    $sql="INSERT INTO requestmonitoring.dbo.activitylogs(userid, username, firstname, lastname, position, activitydate,activitytime,activitydetails,activitystatus)
                        VALUES ('$userid', '$username' , '$firstname','$lastname','$position','$activitydate','$activitytime','$activitydetails','$activitystatus');";
                    $stmt = sqlsrv_query( $conn, $sql);
        }
        $sql = "SELECT * FROM [requestmonitoring].[dbo].[nonlasyslog] WHERE requestnumber = '$requestnumber' "; // sql for server
        $stmt = sqlsrv_query( $conn, $sql ); 
        if($row_count = sqlsrv_has_rows( $stmt )>0){
                date_default_timezone_set('Singapore');
                    $userid = $_SESSION['userid'];
                    $username = $_SESSION['username']; 
                    $firstname = $_SESSION['firstname'];
                    $lastname = $_SESSION['lastname'];
                    $position = $_SESSION['position'];
                    $activitydate = date("m/d/Y");  
                    $activitytime = date("H:i:s");
                    $activitydetails = $_SESSION['firstname']." ".$_SESSION['lastname']." with user ID ".$_SESSION['userid']. " updated the request with request number $requestnumber. ";
                    $activitystatus = "success";
                    $sql="INSERT INTO requestmonitoring.dbo.activitylogs(userid, username, firstname, lastname, position, activitydate,activitytime,activitydetails,activitystatus)
                        VALUES ('$userid', '$username' , '$firstname','$lastname','$position','$activitydate','$activitytime','$activitydetails','$activitystatus');";
                    $stmt = sqlsrv_query( $conn, $sql);
        }
        $sql = "SELECT * FROM [requestmonitoring].[dbo].[padlog] WHERE requestnumber = '$requestnumber' "; // sql for server
        $stmt = sqlsrv_query( $conn, $sql ); 
        if($row_count = sqlsrv_has_rows( $stmt )>0){
                date_default_timezone_set('Singapore');
                    $userid = $_SESSION['userid'];
                    $username = $_SESSION['username']; 
                    $firstname = $_SESSION['firstname'];
                    $lastname = $_SESSION['lastname'];
                    $position = $_SESSION['position'];
                    $activitydate = date("m/d/Y");  
                    $activitytime = date("H:i:s");
                    $activitydetails = $_SESSION['firstname']." ".$_SESSION['lastname']." with user ID ".$_SESSION['userid']. " updated the request with request number $requestnumber. ";
                    $activitystatus = "success";
                    $sql="INSERT INTO requestmonitoring.dbo.activitylogs(userid, username, firstname, lastname, position, activitydate,activitytime,activitydetails,activitystatus)
                        VALUES ('$userid', '$username' , '$firstname','$lastname','$position','$activitydate','$activitytime','$activitydetails','$activitystatus');";
                    $stmt = sqlsrv_query( $conn, $sql);
        }
        $sql = "UPDATE requestmonitoring.dbo.qadlog
                SET userid = '$addedby' ,requestor='$requestor',[department-section]='$deptsect',
                natureofrequest='$natureofreq', daterequested='$daterequested',datereceived='$datereceived',
                details='$details',dateapproved='$dateapproved',datedone='$datedone',accomplishedby='$accomplishedby',
                remarks='$remarks',ifcanceldelay='$ifcanceldelay',attachment='$attachment'
                WHERE requestnumber = '$requestnumber' ";
        $stmt = sqlsrv_query( $conn, $sql);
        $sql = "UPDATE requestmonitoring.dbo.lasyslog
                SET userid = '$addedby' ,requestor='$requestor',[department-section]='$deptsect',
                natureofrequest='$natureofreq', daterequested='$daterequested',datereceived='$datereceived',
                details='$details',dateapproved='$dateapproved',datedone='$datedone',accomplishedby='$accomplishedby',
                remarks='$remarks',ifcanceldelay='$ifcanceldelay',attachment='$attachment' 
                WHERE requestnumber = '$requestnumber' ";
        $stmt = sqlsrv_query( $conn, $sql);
        $sql = "UPDATE requestmonitoring.dbo.nonlasyslog
                SET userid = '$addedby' ,requestor='$requestor',[department-section]='$deptsect',
                natureofrequest='$natureofreq', daterequested='$daterequested',datereceived='$datereceived',
                details='$details',dateapproved='$dateapproved',datedone='$datedone',accomplishedby='$accomplishedby',
                remarks='$remarks',ifcanceldelay='$ifcanceldelay',attachment='$attachment'
                WHERE requestnumber = '$requestnumber' ";
        $stmt = sqlsrv_query( $conn, $sql);
        $sql = "UPDATE requestmonitoring.dbo.padlog
                SET userid = '$addedby' ,requestor='$requestor',[department-section]='$deptsect',
                natureofrequest='$natureofreq', daterequested='$daterequested',datereceived='$datereceived',
                details='$details',dateapproved='$dateapproved',datedone='$datedone',accomplishedby='$accomplishedby',
                remarks='$remarks',ifcanceldelay='$ifcanceldelay',attachment='$attachment' 
                WHERE requestnumber = '$requestnumber' ";
        $stmt = sqlsrv_query( $conn, $sql);
        if($_SESSION['usertype']=='admin'){
            $_SESSION['confirmation'] = 'success()';
            header("location:../searchandupdate/adminSRR_Requests.php");
          }else{
            $_SESSION['confirmation'] = 'success()';
            header("location:../searchandupdate/SRR_Requests.php");
          }
          }
        }else if($daterequested>$dateapproved){
            if($_SESSION['usertype']=='admin'){
                $_SESSION['confirmation'] = 'invalid()';
                header("location:../searchandupdate/adminSRR_Requests.php");
              }else{
                $_SESSION['confirmation'] = 'invalid()';
                header("location:../searchandupdate/SRR_Requests.php");
              }
        }else if($daterequested>$datereceived){
            if($_SESSION['usertype']=='admin'){
                $_SESSION['confirmation'] = 'invalid()';
                header("location:../searchandupdate/adminSRR_Requests.php");
              }else{
                $_SESSION['confirmation'] = 'invalid()';
                header("location:../searchandupdate/SRR_Requests.php");
              }
        }else if($datereceived>$dateapproved){
            if($_SESSION['usertype']=='admin'){
                $_SESSION['confirmation'] = 'invalid()';
                header("location:../searchandupdate/adminSRR_Requests.php");
              }else{
                $_SESSION['confirmation'] = 'invalid()';
                header("location:../searchandupdate/SRR_Requests.php");
              }
        }else if($datereceived>$datedone){
            if($_SESSION['usertype']=='admin'){
                $_SESSION['confirmation'] = 'invalid()';
                header("location:../searchandupdate/adminSRR_Requests.php");
              }else{
                $_SESSION['confirmation'] = 'invalid()';
                header("location:../searchandupdate/SRR_Requests.php");
              }
        }else if($dateapproved>$datedone){
            if($_SESSION['usertype']=='admin'){
                $_SESSION['confirmation'] = 'invalid()';
                header("location:../searchandupdate/adminSRR_Requests.php");
              }else{
                $_SESSION['confirmation'] = 'invalid()';
                header("location:../searchandupdate/SRR_Requests.php");
              }
        }
        else{
        $attachment       = $_FILES['attachment']['name'];
        if(empty($attachment)){
            $sql = "SELECT * FROM [requestmonitoring].[dbo].[qadlog] WHERE requestnumber = '$requestnumber' "; // sql for server
            $stmt = sqlsrv_query( $conn, $sql ); 
             if($row_count = sqlsrv_has_rows( $stmt )>0){
                     date_default_timezone_set('Singapore');
                         $userid = $_SESSION['userid'];
                         $username = $_SESSION['username']; 
                         $firstname = $_SESSION['firstname'];
                         $lastname = $_SESSION['lastname'];
                         $position = $_SESSION['position'];
                         $activitydate = date("m/d/Y");  
                         $activitytime = date("H:i:s");
                         $activitydetails = $_SESSION['firstname']." ".$_SESSION['lastname']." with user ID ".$_SESSION['userid']. " updated the request with request number $requestnumber. ";
                         $activitystatus = "success";
                         $sql="INSERT INTO requestmonitoring.dbo.activitylogs(userid, username, firstname, lastname, position, activitydate,activitytime,activitydetails,activitystatus)
                             VALUES ('$userid', '$username' , '$firstname','$lastname','$position','$activitydate','$activitytime','$activitydetails','$activitystatus');";
                         $stmt = sqlsrv_query( $conn, $sql);
             }
             $sql = "SELECT * FROM [requestmonitoring].[dbo].[lasyslog] WHERE requestnumber = '$requestnumber' "; // sql for server
            $stmt = sqlsrv_query( $conn, $sql ); 
             if($row_count = sqlsrv_has_rows( $stmt )>0){
                     date_default_timezone_set('Singapore');
                         $userid = $_SESSION['userid'];
                         $username = $_SESSION['username']; 
                         $firstname = $_SESSION['firstname'];
                         $lastname = $_SESSION['lastname'];
                         $position = $_SESSION['position'];
                         $activitydate = date("m/d/Y");  
                         $activitytime = date("H:i:s");
                         $activitydetails = $_SESSION['firstname']." ".$_SESSION['lastname']." with user ID ".$_SESSION['userid']. " updated the request with request number $requestnumber. ";
                         $activitystatus = "success";
                         $sql="INSERT INTO requestmonitoring.dbo.activitylogs(userid, username, firstname, lastname, position, activitydate,activitytime,activitydetails,activitystatus)
                             VALUES ('$userid', '$username' , '$firstname','$lastname','$position','$activitydate','$activitytime','$activitydetails','$activitystatus');";
                         $stmt = sqlsrv_query( $conn, $sql);
             }
             $sql = "SELECT * FROM [requestmonitoring].[dbo].[nonlasyslog] WHERE requestnumber = '$requestnumber' "; // sql for server
            $stmt = sqlsrv_query( $conn, $sql ); 
             if($row_count = sqlsrv_has_rows( $stmt )>0){
                     date_default_timezone_set('Singapore');
                         $userid = $_SESSION['userid'];
                         $username = $_SESSION['username']; 
                         $firstname = $_SESSION['firstname'];
                         $lastname = $_SESSION['lastname'];
                         $position = $_SESSION['position'];
                         $activitydate = date("m/d/Y");  
                         $activitytime = date("H:i:s");
                         $activitydetails = $_SESSION['firstname']." ".$_SESSION['lastname']." with user ID ".$_SESSION['userid']. " updated the request with request number $requestnumber. ";
                         $activitystatus = "success";
                         $sql="INSERT INTO requestmonitoring.dbo.activitylogs(userid, username, firstname, lastname, position, activitydate,activitytime,activitydetails,activitystatus)
                             VALUES ('$userid', '$username' , '$firstname','$lastname','$position','$activitydate','$activitytime','$activitydetails','$activitystatus');";
                         $stmt = sqlsrv_query( $conn, $sql);
             }
             $sql = "SELECT * FROM [requestmonitoring].[dbo].[padlog] WHERE requestnumber = '$requestnumber' "; // sql for server
            $stmt = sqlsrv_query( $conn, $sql ); 
             if($row_count = sqlsrv_has_rows( $stmt )>0){
                     date_default_timezone_set('Singapore');
                         $userid = $_SESSION['userid'];
                         $username = $_SESSION['username']; 
                         $firstname = $_SESSION['firstname'];
                         $lastname = $_SESSION['lastname'];
                         $position = $_SESSION['position'];
                         $activitydate = date("m/d/Y");  
                         $activitytime = date("H:i:s");
                         $activitydetails = $_SESSION['firstname']." ".$_SESSION['lastname']." with user ID ".$_SESSION['userid']. " updated the request with request number $requestnumber. ";
                         $activitystatus = "success";
                         $sql="INSERT INTO requestmonitoring.dbo.activitylogs(userid, username, firstname, lastname, position, activitydate,activitytime,activitydetails,activitystatus)
                             VALUES ('$userid', '$username' , '$firstname','$lastname','$position','$activitydate','$activitytime','$activitydetails','$activitystatus');";
                         $stmt = sqlsrv_query( $conn, $sql);
             }
             $sql = "UPDATE requestmonitoring.dbo.qadlog
                     SET userid = '$addedby' ,requestor='$requestor',[department-section]='$deptsect',
                     natureofrequest='$natureofreq', daterequested='$daterequested',datereceived='$datereceived',
                     details='$details',dateapproved='$dateapproved',datedone='$datedone',accomplishedby='$accomplishedby',
                     remarks='$remarks',ifcanceldelay='$ifcanceldelay'
                     WHERE requestnumber = '$requestnumber' ";
             $stmt = sqlsrv_query( $conn, $sql);
             $sql = "UPDATE requestmonitoring.dbo.lasyslog
                     SET userid = '$addedby' ,requestor='$requestor',[department-section]='$deptsect',
                     natureofrequest='$natureofreq', daterequested='$daterequested',datereceived='$datereceived',
                     details='$details',dateapproved='$dateapproved',datedone='$datedone',accomplishedby='$accomplishedby',
                     remarks='$remarks',ifcanceldelay='$ifcanceldelay'
                     WHERE requestnumber = '$requestnumber' ";
             $stmt = sqlsrv_query( $conn, $sql);
             $sql = "UPDATE requestmonitoring.dbo.nonlasyslog
                     SET userid = '$addedby' ,requestor='$requestor',[department-section]='$deptsect',
                     natureofrequest='$natureofreq', daterequested='$daterequested',datereceived='$datereceived',
                     details='$details',dateapproved='$dateapproved',datedone='$datedone',accomplishedby='$accomplishedby',
                     remarks='$remarks',ifcanceldelay='$ifcanceldelay'
                     WHERE requestnumber = '$requestnumber' ";
             $stmt = sqlsrv_query( $conn, $sql);
             $sql = "UPDATE requestmonitoring.dbo.padlog
                     SET userid = '$addedby' ,requestor='$requestor',[department-section]='$deptsect',
                     natureofrequest='$natureofreq', daterequested='$daterequested',datereceived='$datereceived',
                     details='$details',dateapproved='$dateapproved',datedone='$datedone',accomplishedby='$accomplishedby',
                     remarks='$remarks',ifcanceldelay='$ifcanceldelay'
                     WHERE requestnumber = '$requestnumber' ";
             $stmt = sqlsrv_query( $conn, $sql);
             if($_SESSION['usertype']=='admin'){
                 $_SESSION['confirmation'] = 'success()';
                 header("location:../searchandupdate/adminSRR_Requests.php");
               }else{
                 $_SESSION['confirmation'] = 'success()';
                 header("location:../searchandupdate/SRR_Requests.php");
               }
        }//empty attachment
        else{
            $attachment1      =$_FILES['attachment']['tmp_name'];
            $fileext          = $_FILES["attachment"]["type"];
            $filesize        = $_FILES["attachment"]["size"];
            $target = "../images/".basename($attachment);
                if($fileext=="image/png" || $fileext=="image/jpeg" || $fileext=="image/jpg" || 
                                $fileext=="application/pdf" and $filesize<4000000 ){
                            if (move_uploaded_file($attachment1 , $target)) {
                            //   $msg = "Image uploaded successfully";
                              $_SESSION['status'] = 'success()'; 
                            // header("Location: http://localhost/FORMS/addform.php");
                            }
                          }else{
                            $_SESSION['status'] = 'invalid()'; 
                            // header("Location: ../searchandupdate/SRR_Requests.php");
                          }
        $sql = "SELECT * FROM [requestmonitoring].[dbo].[qadlog] WHERE requestnumber = '$requestnumber' "; // sql for server
        $stmt = sqlsrv_query( $conn, $sql ); 
        if($row_count = sqlsrv_has_rows( $stmt )>0){
                date_default_timezone_set('Singapore');
                    $userid = $_SESSION['userid'];
                    $username = $_SESSION['username']; 
                    $firstname = $_SESSION['firstname'];
                    $lastname = $_SESSION['lastname'];
                    $position = $_SESSION['position'];
                    $activitydate = date("m/d/Y");  
                    $activitytime = date("H:i:s");
                    $activitydetails = $_SESSION['firstname']." ".$_SESSION['lastname']." with user ID ".$_SESSION['userid']. " updated the request with request number $requestnumber. ";
                    $activitystatus = "success";
                    $sql="INSERT INTO requestmonitoring.dbo.activitylogs(userid, username, firstname, lastname, position, activitydate,activitytime,activitydetails,activitystatus)
                        VALUES ('$userid', '$username' , '$firstname','$lastname','$position','$activitydate','$activitytime','$activitydetails','$activitystatus');";
                    $stmt = sqlsrv_query( $conn, $sql);
        }
        $sql = "SELECT * FROM [requestmonitoring].[dbo].[lasyslog] WHERE requestnumber = '$requestnumber' "; // sql for server
        $stmt = sqlsrv_query( $conn, $sql ); 
        if($row_count = sqlsrv_has_rows( $stmt )>0){
                date_default_timezone_set('Singapore');
                    $userid = $_SESSION['userid'];
                    $username = $_SESSION['username']; 
                    $firstname = $_SESSION['firstname'];
                    $lastname = $_SESSION['lastname'];
                    $position = $_SESSION['position'];
                    $activitydate = date("m/d/Y");  
                    $activitytime = date("H:i:s");
                    $activitydetails = $_SESSION['firstname']." ".$_SESSION['lastname']." with user ID ".$_SESSION['userid']. " updated the request with request number $requestnumber. ";
                    $activitystatus = "success";
                    $sql="INSERT INTO requestmonitoring.dbo.activitylogs(userid, username, firstname, lastname, position, activitydate,activitytime,activitydetails,activitystatus)
                        VALUES ('$userid', '$username' , '$firstname','$lastname','$position','$activitydate','$activitytime','$activitydetails','$activitystatus');";
                    $stmt = sqlsrv_query( $conn, $sql);
        }
        $sql = "SELECT * FROM [requestmonitoring].[dbo].[nonlasyslog] WHERE requestnumber = '$requestnumber' "; // sql for server
        $stmt = sqlsrv_query( $conn, $sql ); 
        if($row_count = sqlsrv_has_rows( $stmt )>0){
                date_default_timezone_set('Singapore');
                    $userid = $_SESSION['userid'];
                    $username = $_SESSION['username']; 
                    $firstname = $_SESSION['firstname'];
                    $lastname = $_SESSION['lastname'];
                    $position = $_SESSION['position'];
                    $activitydate = date("m/d/Y");  
                    $activitytime = date("H:i:s");
                    $activitydetails = $_SESSION['firstname']." ".$_SESSION['lastname']." with user ID ".$_SESSION['userid']. " updated the request with request number $requestnumber. ";
                    $activitystatus = "success";
                    $sql="INSERT INTO requestmonitoring.dbo.activitylogs(userid, username, firstname, lastname, position, activitydate,activitytime,activitydetails,activitystatus)
                        VALUES ('$userid', '$username' , '$firstname','$lastname','$position','$activitydate','$activitytime','$activitydetails','$activitystatus');";
                    $stmt = sqlsrv_query( $conn, $sql);
        }
        $sql = "SELECT * FROM [requestmonitoring].[dbo].[padlog] WHERE requestnumber = '$requestnumber' "; // sql for server
        $stmt = sqlsrv_query( $conn, $sql ); 
        if($row_count = sqlsrv_has_rows( $stmt )>0){
                date_default_timezone_set('Singapore');
                    $userid = $_SESSION['userid'];
                    $username = $_SESSION['username']; 
                    $firstname = $_SESSION['firstname'];
                    $lastname = $_SESSION['lastname'];
                    $position = $_SESSION['position'];
                    $activitydate = date("m/d/Y");  
                    $activitytime = date("H:i:s");
                    $activitydetails = $_SESSION['firstname']." ".$_SESSION['lastname']." with user ID ".$_SESSION['userid']. " updated the request with request number $requestnumber. ";
                    $activitystatus = "success";
                    $sql="INSERT INTO requestmonitoring.dbo.activitylogs(userid, username, firstname, lastname, position, activitydate,activitytime,activitydetails,activitystatus)
                        VALUES ('$userid', '$username' , '$firstname','$lastname','$position','$activitydate','$activitytime','$activitydetails','$activitystatus');";
                    $stmt = sqlsrv_query( $conn, $sql);
        }
        $sql = "UPDATE requestmonitoring.dbo.qadlog
                SET userid = '$addedby' ,requestor='$requestor',[department-section]='$deptsect',
                natureofrequest='$natureofreq', daterequested='$daterequested',datereceived='$datereceived',
                details='$details',dateapproved='$dateapproved',datedone='$datedone',accomplishedby='$accomplishedby',
                remarks='$remarks',ifcanceldelay='$ifcanceldelay',attachment='$attachment'
                WHERE requestnumber = '$requestnumber' ";
        $stmt = sqlsrv_query( $conn, $sql);
        $sql = "UPDATE requestmonitoring.dbo.lasyslog
                SET userid = '$addedby' ,requestor='$requestor',[department-section]='$deptsect',
                natureofrequest='$natureofreq', daterequested='$daterequested',datereceived='$datereceived',
                details='$details',dateapproved='$dateapproved',datedone='$datedone',accomplishedby='$accomplishedby',
                remarks='$remarks',ifcanceldelay='$ifcanceldelay',attachment='$attachment' 
                WHERE requestnumber = '$requestnumber' ";
        $stmt = sqlsrv_query( $conn, $sql);
        $sql = "UPDATE requestmonitoring.dbo.nonlasyslog
                SET userid = '$addedby' ,requestor='$requestor',[department-section]='$deptsect',
                natureofrequest='$natureofreq', daterequested='$daterequested',datereceived='$datereceived',
                details='$details',dateapproved='$dateapproved',datedone='$datedone',accomplishedby='$accomplishedby',
                remarks='$remarks',ifcanceldelay='$ifcanceldelay',attachment='$attachment'
                WHERE requestnumber = '$requestnumber' ";
        $stmt = sqlsrv_query( $conn, $sql);
        $sql = "UPDATE requestmonitoring.dbo.padlog
                SET userid = '$addedby' ,requestor='$requestor',[department-section]='$deptsect',
                natureofrequest='$natureofreq', daterequested='$daterequested',datereceived='$datereceived',
                details='$details',dateapproved='$dateapproved',datedone='$datedone',accomplishedby='$accomplishedby',
                remarks='$remarks',ifcanceldelay='$ifcanceldelay',attachment='$attachment' 
                WHERE requestnumber = '$requestnumber' ";
        $stmt = sqlsrv_query( $conn, $sql);
        if($_SESSION['usertype']=='admin'){
            $_SESSION['confirmation'] = 'success()';
            header("location:../searchandupdate/adminSRR_Requests.php");
          }else{
            $_SESSION['confirmation'] = 'success()';
            header("location:../searchandupdate/SRR_Requests.php");
          }
        }
      }
?>