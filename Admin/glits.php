<!DOCTYPE html>
<html lang="en">
<?php
    include("connection/config.php");
    error_reporting(0);
    session_start();
      if($_SESSION['username'] != 'admin'){
            header("location:login.php");
            die();
         }
?>
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>ASTRA'23 ADMIN</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="assets/vendors/jvectormap/jquery-jvectormap.css">
    <link rel="stylesheet" href="assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/vendors/owl-carousel-2/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/vendors/owl-carousel-2/owl.theme.default.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="assets/images/logo_astra.png" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
  </head>
  <body >
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
          <a class="sidebar-brand brand-logo" href="index.php"><img src="assets/images/logo_astra.png" alt="logo" 
            style="width: 30px; height: 30px; color: white;"/>
            &ensp;ASTRA'23
          </a>
          <a class="sidebar-brand brand-logo-mini" href="index.php"><img src="assets/images/logo-mini.svg" alt="logo" /></a>
        </div>
        <ul class="nav">
          <li class="nav-item profile">
            <div class="profile-desc">
              <div class="profile-pic">
                <div class="count-indicator">
                  <img class="img-xs rounded-circle " src="assets/images/fav1.png" style="width: 70px; height:auto;" alt="">
                  <span class="count bg-success"></span>
                </div>
                <div class="profile-name">
                  <h5 class="mb-0 font-weight-normal">Admin</h5>
                  <!-- <span>Gold Member</span> -->
                </div>
              </div>
             
          </li>
          <li class="nav-item nav-category">
            <span class="nav-link">Navigation</span>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="index.php">
              <span class="menu-icon">
                <i class="mdi mdi-speedometer"></i>
              </span>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <!-- <li class="nav-item menu-items">
            <a class="nav-link" href="category.php">
              <span class="menu-icon">
                <i class="mdi mdi-file-document-box"></i>
              </span>
              <span class="menu-title">Category</span>
            </a>
          </li> -->
          <li class="nav-item menu-items">
            <a class="nav-link" href="banner.php">
              <span class="menu-icon">
                <i class="mdi mdi-file-document-box"></i>
              </span>
              <span class="menu-title">Banner</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="sponser.php">
              <span class="menu-icon">
                <i class="mdi mdi-file-document-box"></i>
              </span>
              <span class="menu-title">Sponsers</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
              <span class="menu-icon">
                <i class="mdi mdi-security"></i>
              </span>
              <span class="menu-title">Programs</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="#"> Events </a></li>
                <li class="nav-item"> <a class="nav-link" href="#"> Games </a></li>
                <li class="nav-item"> <a class="nav-link" href="workshop.php"> Workshops </a></li>
                <li class="nav-item"> <a class="nav-link" href=""> Proshows </a></li>
                <li class="nav-item"> <a class="nav-link" href="#"> Competitions </a></li>
                <li class="nav-item"> <a class="nav-link" href="#"> Chakravyuh 2.0 </a></li>
                <li class="nav-item"> <a class="nav-link" href="#"> Glamup </a></li>
                <li class="nav-item"> <a class="nav-link" href="glits.php"> Glitz </a></li>
                <li class="nav-item"> <a class="nav-link" href="innovision.php"> Innovision </a></li>
              </ul>
            </div>
          </li>
          

          

          
          <!-- <li class="nav-item menu-items">
            <a class="nav-link" href="http://www.bootstrapdash.com/demo/corona-free/jquery/documentation/documentation.php">
              <span class="menu-icon">
                <i class="mdi mdi-file-document-box"></i>
              </span>
              <span class="menu-title">Documentation</span>
            </a>
          </li> -->
        </ul>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
        <nav class="navbar p-0 fixed-top d-flex flex-row">
          <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
            <a class="navbar-brand brand-logo-mini" href="index.html"><img src="assets/images/logo-mini.svg" alt="logo" /></a>
          </div>
          <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
            <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
              <span class="mdi mdi-menu"></span>
            </button>
            <ul class="navbar-nav w-100">
              <li class="nav-item w-100">
                <form class="nav-link mt-2 mt-md-0 d-none d-lg-flex search">
                  <input type="text" class="form-control" placeholder="Search products">
                </form>
              </li>
            </ul>
            <ul class="navbar-nav navbar-nav-right">
              
              
              <li class="nav-item dropdown border-left">
                <a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                  <i class="mdi mdi-email"></i>
                  <span class="count bg-success"></span>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="messageDropdown">
                  <h6 class="p-3 mb-0">Messages</h6>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <img src="assets/images/faces/face4.jpg" alt="image" class="rounded-circle profile-pic">
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject ellipsis mb-1">Mark send you a message</p>
                      <p class="text-muted mb-0"> 1 Minutes ago </p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <img src="assets/images/faces/face2.jpg" alt="image" class="rounded-circle profile-pic">
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject ellipsis mb-1">Cregh send you a message</p>
                      <p class="text-muted mb-0"> 15 Minutes ago </p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <img src="assets/images/faces/face3.jpg" alt="image" class="rounded-circle profile-pic">
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject ellipsis mb-1">Profile picture updated</p>
                      <p class="text-muted mb-0"> 18 Minutes ago </p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <p class="p-3 mb-0 text-center">4 new messages</p>
                </div>
              </li>
              <li class="nav-item dropdown border-left">
                <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
                  <i class="mdi mdi-bell"></i>
                  <span class="count bg-danger"></span>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
                  <h6 class="p-3 mb-0">Notifications</h6>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-calendar text-success"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject mb-1">Event today</p>
                      <p class="text-muted ellipsis mb-0"> Just a reminder that you have an event today </p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-settings text-danger"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject mb-1">Settings</p>
                      <p class="text-muted ellipsis mb-0"> Update dashboard </p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-link-variant text-warning"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject mb-1">Launch Admin</p>
                      <p class="text-muted ellipsis mb-0"> New admin wow! </p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <p class="p-3 mb-0 text-center">See all notifications</p>
                </div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link" id="profileDropdown" href="#" data-toggle="dropdown">
                  <div class="navbar-profile">
                    <img class="img-xs rounded-circle" src="assets/images/fav1.png" style="width:70px; height:auto;" alt="">
                    <p class="mb-0 d-none d-sm-block navbar-profile-name">Admin</p>
                    <i class="mdi mdi-menu-down d-none d-sm-block"></i>
                  </div>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="profileDropdown">
                  <h6 class="p-3 mb-0">Profile</h6>
                  
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item" href="logout.php">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-logout text-danger"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject mb-1">Log out</p>
                    </div>
                  </a>
                  
                </div>
              </li>
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
              <span class="mdi mdi-format-line-spacing"></span>
            </button>
          </div>
        </nav>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            
            <div class="row">

             

              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Event</h4>
                    <!-- <p class="card-description"> Add class <code>.table-striped</code> -->
                    </p>
                    <div class="table-responsive">
                      <?php 
                        // include ("connection/config.php");
                        $limit = 10;  
                        if (isset($_GET["page"]) && !empty($_GET['page'])) {
                          $currentpage  = $_GET["page"]; 
                          } 
                          else{ 
                          $currentpage = 1;
                          };  
                          //$name=$_SESSION['Emp_Name'];
                        $start_from = ($currentpage * $limit) - $limit;  
                        $result = mysqli_query($con,"SELECT * FROM glitz ORDER BY id desc LIMIT $start_from, $limit");
                        ?>
                      <table class="table table-striped">
                        <thead>
                          <tr>
                            <th> ID </th>
                            <th> Name </th>
                            <th> Participants </th>
                            <th> Email Id </th>
                            <th> Phone Number </th>
                            <th> Alternative Number</th>
                            <th> State </th>
                            <th> District </th>
                            <th> College Name  </th>
                            <th> Payment Details</th>
                            <th> Action </th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php
                                 // $sql="SELECT * FROM sub_category order by sub_cat_id desc";
                                 // $query=mysqli_query($con,$sql);
                                 $i=1; 
                                if(!mysqli_num_rows($result) > 0 )
                                  {
                                    echo '<td colspan="7"><center>No Category-Data!</center></td>';
                                  }
                                else
                                  {  
                                        
                                    while($rows=mysqli_fetch_array($result))
                                    {
                                        
                                        
                                         
                                           
                                          

                                      echo ' <tr>
                                            <td>'.$i.'</td>
                                            <td>'.$rows['name'].'</td>
                                            <td>'.$rows['participant'].'</td>
                                            <td>'.$rows['email_id'].'</td>
                                            <td>'.$rows['phone_number'].'</td>
                                            <td>'.$rows['alternative'].'</td>
                                            <td>'.$rows['state'].'</td>
                                            <td>'.$rows['district'].'</td>
                                            <td>'.$rows['college_name'].'</td>
                                            <td><img src="../Astra/form/glitz/'.$rows['image'].'" style="width :50px; height:50px;"></td>
                                            '

                                            ;
                                    echo   "<td style='display:flex; flex-wrap:nowrap;'><a  onClick=\"javascript:return confirm('Do you wants to delete this?');\" href='delete_glitz.php?cat_del=".$rows['id']."' class='btn btn-danger btn-flat btn-addon btn-xs m-b-10'  style='font-size:15px; padding:5px;'><i class='fa fa-trash'></i></a><br>";


                                     echo   '
                                     
                                        <a href="aprove.php?upd='.$rows['id'].'" class="btn btn-info btn-flat btn-addon btn-sm m-b-10 m-l-5" style="font-size:15px; margin-left:5px; padding:5px;" >Aproved</a>
                                     
                                            </td></tr>';
                                            $i++;
                                      } 
                                      
                                  }
                                ?>
                        </tbody>
                      </table>
                      <?php  

                      $result_db = mysqli_query($con,"SELECT COUNT(ID) FROM glitz"); 
                      $row_db = mysqli_fetch_row($result_db);  
                      $total_records = $row_db[0];  
                      $total_pages = ceil($total_records / $limit);
                      $firstpage = 1;
                      $nextPage = $currentpage + 1;
                      $previousPage = $currentpage - 1; 
                      /* echo  $total_pages; */
                      // $pagLink = "<ul class='pagination'>";  
                      // for ($i=1; $i<=$total_pages; $i++) {
                      //               $pagLink .= "<li class='page-item'><a class='page-link' href='top_link_view.php?page=".$i."'>".$i."</a></li>"; 
                      // }
                      // echo $pagLink . "</ul>";  
                      ?>
                      <nav aria-label="Page navigation">
                        <ul class="pagination">
                        <?php if($currentpage != $firstpage) { ?>
                          <li class="page-item">
                          <a class="page-link" href="?page=<?php echo $firstpage ?>" tabindex="-1" aria-label="Previous">
                            <span aria-hidden="true">First</span>     
                          </a>
                          </li>
                          <?php } ?>
                          <?php if($currentpage >= 2) { ?>
                            <li class="page-item"><a class="page-link" href="?page=<?php echo $previousPage ?>"><?php echo $previousPage ?></a></li>
                          <?php } ?>
                          <li class="page-item active"><a class="page-link" href="?page=<?php echo $currentpage ?>"><?php echo $currentpage ?></a></li>
                          <?php if($currentpage != $total_pages) { ?>
                            <li class="page-item"><a class="page-link" href="?page=<?php echo $nextPage ?>"><?php echo $nextPage ?></a></li>
                            <li class="page-item">
                            <a class="page-link" href="?page=<?php echo $total_pages ?>" aria-label="Next">
                              <span aria-hidden="true">Last</span>
                            </a>
                            </li>
                          <?php } ?>
                          
                        </ul>
                        
                      </nav>
                    </div>
                  </div>
                </div>
              </div>

            </div>
          
          
   
      
           
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © Plus IT Business Park 2023</span>
            </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="assets/vendors/chart.js/Chart.min.js"></script>
    <script src="assets/vendors/progressbar.js/progressbar.min.js"></script>
    <script src="assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
    <script src="assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="assets/vendors/owl-carousel-2/owl.carousel.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="assets/js/off-canvas.js"></script>
    <script src="assets/js/hoverable-collapse.js"></script>
    <script src="assets/js/misc.js"></script>
    <script src="assets/js/settings.js"></script>
    <script src="assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="assets/js/dashboard.js"></script>
    <!-- End custom js for this page -->
  </body>
</html>