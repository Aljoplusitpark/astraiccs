<?php
          include("../../Admin/connection/config.php");
            error_reporting(0);
            session_start();
            
  if(isset($_POST['submit']))          
      { 
        
        $fname = $_FILES['image']['name'];
                  $temp = $_FILES['image']['tmp_name'];
                  $fsize = $_FILES['image']['size'];
                  $extension = explode('.',$fname);
                  $extension = strtolower(end($extension));  
                  $fnew = uniqid().'.'.$extension;
                  $store = "UPI_Images/".basename($fnew);                    
                if($extension == 'jpg'||$extension == 'png'||$extension == 'gif'||$extension == 'jpeg'||$extension == 'webp')
                  {        
                    if($fsize>=100000000)
                        {
                          $error =  '<div class="alert alert-danger alert-dismissible fade show">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <strong>Max Image Size is 1024kb!</strong> Try different Image.
                                  </div>';
                    }
                    else
                    { 
                   $sql = "INSERT INTO event_registration (name,state,mobile_number,district,email_id,course,college_name,branch,year,semester,event_category,image) VALUE('".$_POST['name']."','".$_POST['state']."','".$_POST['phone_number']."','".$_POST['district']."','".$_POST['email_id']."','".$_POST['course']."','".$_POST['college_name']."','".$_POST['branch']."','".$_POST['year']."','".$_POST['semester']."','".$_POST['event_name']."','".$fnew."')";
                    
                  mysqli_query($con, $sql); 
                  move_uploaded_file($temp, $store);

              $success =  '<div class="alert alert-success alert-dismissible fade show">
                              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                 Added Successfully.
                              </div>';
                              header("Location: form.php");
                             
                    }
                  }
                  elseif($extension == '')
                    {
                      $error =  '<div class="alert alert-danger alert-dismissible fade show">
                                          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                          <strong>select image</strong>
                                        </div>';
                }
                else
                    {
                      $error =  '<div class="alert alert-danger alert-dismissible fade show">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <strong>invalid extension!</strong>png, jpg, Gif are accepted.
                              </div>';
                }
             
          }
                    
                    
        ?>