<!DOCTYPE html>
<html>
<head>
<title>REGISTER HERE </title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

 <!-- Font Awesome -->
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />
 <!--end font awesome  -->


<link rel="stylesheet" href="form.css">
</head>
<body>

<!-- navbar -->

<div class="nav">
    <nav class="navbar navbar-light bg-transparent">
        <div class="logo">
            
                <img src="logo_astra.png" width="100px" height="100px"  alt="">
            
        </div>
        <div class="brand">
            <h1>ASTRA ‘23<br> REGISTRATION
              </h1>
        </div>
      </nav>  
    </div>

<!-- navbar ends -->
<div class="head container">
<h1 >Name of the workshop the user had chosen</h1>
</div>
<div class="wrapper" >
   
    
<div class="inner">
    
    
<div class="image-holder">
    <h4>More  information about the workshop</h4>
<!-- <img src="logo_astra.png" alt="image" width="150px" height="auto" class="logo"> -->
</div>
    <form action="form_action.php" method="POST" enctype="multipart/form-data">
        <h3>ENTER YOUR DETAILS</h3>
        <div class="form-group">
            <input type="text" placeholder="Your Name" name="name" required class="form-control">
            <input type="text" placeholder="State" name="state" required class="form-control">
        </div>
        <div class="form-group">
            <input type="text" placeholder="Phone Number" name="phone_number" required class="form-control">
            <input type="text" placeholder="District" name="district" required class="form-control">
        </div>
        <div class="form-group">
            <input type="text" placeholder="E-Mail" name="email_id" required class="form-control">
            <input type="text" placeholder="Course" name="course" required class="form-control">
        </div>
        <div class="form-group">
            <input type="text" placeholder="College Name" name="college_name" required class="form-control">
            <input type="text" placeholder="Branch" name="branch" required class="form-control">
        </div>
        <div class="form-group">
            <input type="text" placeholder="Year" name="year" required class="form-control">
            <input type="text" placeholder="Semester" name="semester" required class="form-control">
        </div>
        <div class="form-wrapper">
            <!-- <input type="text" placeholder="What makes you want to participate in this event? (optional) " class="form-control">  -->
            <select class="form-control" name="event_name">
                 <?php 
                    include("../../Admin/connection/config.php");
                    error_reporting(0);
                    session_start();
                    $ssql ="select * from event";
                    $res=mysqli_query($con, $ssql); 
                    while($row=mysqli_fetch_array($res))  
                    {
                      echo' <option value="'.$row['event_name'].'">'.$row['event_name'].'</option>';;
                    }                           
                  ?> 
                
            </select>
        </div>
        <div class="pay">
            <h5 class="payh5">Do the payment to : xxxxxxxx@xxx UPI ID 
                and Upload the screenshot Below</h5>
            <h1>₹399</h1>    
            <input type="file" name="image" id="upload" hidden/>
            <label for="upload">Upload Screenshot </label>
            <button name="submit">Register</button>
            <p>  After registering, you will be getting the ticket confirmation  email within 5-6 hours.<br>
                For Support contact us at ticketing@astraiccs.tech</p>
        </div>
    </form>
</div>
</div>

<!-- backtotop -->

<a href="javascript:" id="return-to-top"><i class="fas fa-arrow-up"></i></a>
  
<!-- end backtotop -->  

<!-- footer -->
<footer class="bg-dark text-center text-white">
    <!-- Grid container -->
    <div class="container p-4 pb-0">
      <!-- Section: Social media -->
      <section class="mb-4">
        <!-- Facebook -->
        <a class="footerbtn btn-outline-light btn-floating m-1" href="#!" role="button"
          ><i class="fab fa-facebook-f"></i
        ></a>
  
        <!-- Twitter -->
        <a class="footerbtn btn-outline-light btn-floating m-1" href="#!" role="button"
          ><i class="fab fa-whatsapp"></i
        ></a>
  
        <!-- Instagram -->
        <a class="footerbtn btn-outline-light btn-floating m-1" href="#!" role="button"
          ><i class="fab fa-instagram"></i
        ></a>
  
        <!-- Youtube -->
        <a class="footerbtn btn-outline-light btn-floating m-1" href="#!" role="button"
          ><i class="fab fa-youtube"></i
        ></a>
  
        <!-- Linkedin -->
        <a class="footerbtn btn-outline-light btn-floating m-1" href="#!" role="button"
          ><i class="fab fa-linkedin-in"></i
        ></a>
  
        <!-- Github -->
        <a class="footerbtn btn-outline-light btn-floating m-1" href="#!" role="button"
          ><i class="fab fa-github"></i
        ></a>
      </section>
      <!-- Section: Social media -->
    </div>
    <!-- Grid container -->
  
    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);" id="footer">
      2023 © All Rights Reserved | Designed and Developed by
    <a href="https://plusitpark.com/" class="nav-link" style="color: yellow;">Plus IT Business Park</a> 
    </div>
    <!-- Copyright -->
  </footer>
  <!-- footer ends  -->



<script src="astra.js"></script>

<!-- bactotop script -->
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script>
// ===== Scroll to Top ==== 
$(window).scroll(function() {
if ($(this).scrollTop() >= 50) {        // If page is scrolled more than 50px
    $('#return-to-top').fadeIn(200);    // Fade in the arrow
} else {
    $('#return-to-top').fadeOut(200);   // Else fade out the arrow
}
});
$('#return-to-top').click(function() {      // When arrow is clicked
$('body,html').animate({
    scrollTop : 0                       // Scroll to top of body
}, 500);
});
</script>   

<!-- end bactotop script -->

</body>
</html>