<?php
          include("connection/config.php");
            error_reporting(0);
            session_start();
            
  if(isset($_POST['submit']))          
      { 
         


         
         $EventName=$_POST['event_name'];
         $OrganizationDetails=$_POST['organization_details'];
         $EventDetails=$_POST['event_details'];
         $TimeLocation=$_POST['time_location'];
         $EventCost=$_POST['event_cost'];
         $OrganizationUpi=$_POST['organization_upi'];
         $EventStatus=$_POST['event_status'];
         // $EventDiv=$_POST['event_div'];
          $sql = "INSERT INTO event VALUE('','$EventName','$OrganizationDetails','$EventDetails','$TimeLocation','$EventCost','$OrganizationUpi','$EventStatus')";
           
          mysqli_query($con, $sql); 

              $success =  '<div class="alert alert-success alert-dismissible fade show">
                              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                 Added Successfully.
                              </div>';
                               header("Location: category.html");
                             
                    }
                    
                    
        ?>