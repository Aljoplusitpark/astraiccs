<!doctype html>
<?php
    include("../Admin/connection/config.php");
    error_reporting(0);
    session_start();
?>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />
    <!--end font awesome  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="partner.css">
    <link rel="stylesheet" href="./assets/css/navbar.css">
    <!-- <link href='https://fonts.googleapis.com/css?family=Syne' rel='stylesheet'> -->
    <link href='https://fonts.googleapis.com/css?family=Kanit' rel='stylesheet'>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

    <title>ASTRA'23</title>
  </head>
  <body>


    

   
<div class="hero ">

<!-- navbar -->
<div class="nav-bar-container">
  <i class="fa fa-bars" aria-hidden="true"></i>
  <div class="navbar-social-links">
    <div class="nav-item">
      <ul>

        <li><a href="./comingsoon.html">EVENTS</a></li>
        <li><a href="./workshop/gamemaster.html">GAMEMASTER</a></li>
        <li><a href="./proshow.html">PROSHOW</a></li>
        <li><a href="./workshop/Competitions.html">COMPETITIONS</a></li>
        <li><a href="./workshop/chakravyuh.html">CHAKRAVYUH</a></li>
        <li><a href="./workshop/glitz.html">GLITZ</a></li>
        <li><a href="./workshop/innovision.html">INNOVISIOIN</a></li>
        <li><a href="./workshop/expo.html">EXPO</a></li>
        <li><a href="./workshop/dance.html">SALTATIO</a></li>
        <li><a href="./workshop/team.html">TEAM</a></li>
      </ul>
    </div>
    <div class="nav-social-icons">
    <ul>
      <li>
        <a href=""><i class="fab fa-facebook-f fa-2x" ></i></a>
      </li>
      <li>
        <a href=""><i class="fab fa-twitter fa-2x"></i></a>
      </li>
      <li>
        <a href=""><i class="fab fa-instagram fa-2x"></i></a>
      </li>
      <li>
        <a href=""><i class="fab fa-youtube fa-2x"></i></a>
      </li>
      <li>
        <a href=""><i class="fab fa-whatsapp fa-2x"></i></a>
    </ul>
  </div>
  </div>


  <div class="navbar-astra-logo">
    <h1>ASTRA'23</h1>
    <img src="./media/logo_astra.png" width="50px" height="auto"  alt="">
  </div>
</div>
<!-- ends navbar -->



    <div class="home-container">
      <div class="home-logo">
        <img src="media/iccs_logo.png" alt="logo" class="headimg">
      </div>
      <div class="logo-content">
        <img src="media/logo_astra.png" alt="logo"  >
        <h1 class="astra" >ASTRA '23</h1>
      </div>
      <div class="home-content-text">
        <?php
            $result = mysqli_query($con, "SELECT * FROM banner ORDER BY id DESC LIMIT 3");
            while ($user_data = mysqli_fetch_array($result)) {
                $eventDate = strtotime($user_data['event_date']);
                $formattedDate = date('d', $eventDate);
                $formattedMonth = date('M', $eventDate);
                $formattedYear = date('Y', $eventDate);
        ?>
                <p style="width: 600px;">
                    <?php echo $user_data['content'] ?><br><br>
                    <?php echo $formattedDate . ' ' . $formattedMonth . ' ' . $formattedYear; ?>
                </p>
        <?php
            }
        ?>
        <button type="button" class="btn" onclick="document.location='comingsoon.html'">
            <i class="fa fa-arrow-right" aria-hidden="true"></i>
        </button>
    </div>

    </div>
    

  </div>
    
</div>
    
</div>


<!-- Hero ends-->

<!-- hero mobile view -->

<div class="heromob ">
  <div class="row herorow">
    <img src="media/iccs_logo.png" alt="logo" class="heroimg">
  </div> 
  <div class="herorow1">
    <div class="m1">
      <img src="media/logo_astra.png" alt="" class="m1img">
    </div>

    <div class="m2">
      <h1>ASTRA'23</h1>
    </div>

  </div>
  <div class="con">
  <h1>CONNECTING STARS OF TECHNOLOGY<br><br>
    
  </h1>
  <h2>Dec 7,8</h2>
</div>
</div>

<!-- end hero mobile view -->

<!-- marquee -->



<div class="marquee">
  <marquee behavior="scroll" direction="left"onmouseover="this.stop();"
  onmouseout="this.start();">
     <p>
      <a href="comingsoon.html">EVENTS</a>&ensp;&ensp;&ensp;
      <a href="workshop/workshop.html">WORKSHOPS</a>&ensp;&ensp;&ensp;
      <a href="comingsoon.html">GAMES</a>&ensp;&ensp;&ensp;
      <a href="comingsoon.html">COMPETITONS</a>&ensp;&ensp;&ensp;
      <a href="comingsoon.html">TECHSHOWS </a>&ensp;&ensp;&ensp;
      <a href="comingsoon.html">PROSHOWS</a>&ensp;&ensp;&ensp;
     </p>
    
  </marquee>
</div>

<!-- marquee ends -->
<!-- blurbg -->
<!-- <div class=" bg-image " style="background-image: url('bg1.jpg'); height: 700px;"> -->
<div class="content">
  <div class="c1">
    <img src="media/logo_astra.png" alt="logo"  class="astralogo1">
    
  </div>
  <div class="c2">
    <p>ASTRA'23</p>
  </div>
  
</div>
</div>
</div>
<!-- blurbg ends -->
<div class="service">
<h1><a href="comingsoon.html">EVENTS</a></h1>
<h1><a href="workshop/gamemaster.html">GAMEMASTER</a></h1>
<h1><a href="workshop/workshop.html">WORKSHOPS</a></h1>
<h1><a href="proshow.html">PROSHOW</a></h1>
<h1><a href="workshop/Competitions.html">COMPETITIONS</a></h1>
<h1><a href="workshop/chakravyuh.html">CHAKRAVYUH 2.0</a></h1>
<h1><a href="workshop/glitz.html">GLITZ</a></h1>
<h1><a href="workshop/innovision.html">INNOVISION</a></h1>
<h1><a href="workshop/expo.html">EXPO</a></h1>
<h1><a href="workshop/dance.html">SALTATIO</a></h1>
</div>

<!-- tabs -->


  <section class="tabevent">
      <div class="rt-container">
            <div class="col-md-8">
                <div class="Scriptcontent">
  
                 
  
  <input name="tab" id="tab1" type="radio" checked />
    <section class="tab-content">
      <a href="comingsoon.html" class="linkdec">
        <h2> EVENTS </h2>
        <div class="imagecon">
          <img src="media/events.jpg" alt="" style="border-radius: 20px;" class="tabimg" /><br>
          <button class="btnn">View</button>
        </div>
      </a>   
    </section>
  
  <input name="tab" id="tab2" type="radio" />
    <section class="tab-content">
      <a href="workshop/games.html" class="linkdec">
        <h2> GAMEMASTER</h2>
        <div class="imagecon">
          <img src="media/games.jpg" alt="" style="border-radius: 20px;"/>
          <button class="btnn">View</button>
        </div>
      </a>
   </section>
  
  <input name="tab" id="tab3" type="radio" style="border-radius: 20px;"/>
    <section class="tab-content">
      <a href="workshop/workshop.html" class="linkdec">
       <h2> WORKSHOPS</h2>
       <div class="imagecon">
       <img src="media/workshop1.jpg" alt="" style="border-radius: 20px;"/>
       <button class="btnn">View</button>
      </div>
      </a>
    </section>
  
  <input name="tab" id="tab4" type="radio" />
    <section class="tab-content">
      <a href="proshow.html" class="linkdec">
        <h2> PROSHOW</h2>
        <div class="imagecon">
        <img src="media/pro.jpg" alt="" style="border-radius: 20px;"/>
        <button class="btnn">View</button>
        </div>
      </a>
     </section>
  
  <input name="tab" id="tab5" type="radio" />
    <section class="tab-content">
      <a href="workshop/Competitions.html" class="linkdec">
        <h2> COMPETITIONS </h2>
        <div class="imagecon">
          <img src="media/competiton.jpg" alt="" style="border-radius: 20px;"/>
          <button class="btnn">View</button>
        </div>
      </a>  
    </section>

    <input name="tab" id="tab6" type="radio" />
    <section class="tab-content">
      <a href="workshop/chakravyuh.html" class="linkdec">
        <h2> CHAKRAVYUH2.0 </h2>
        <div class="imagecon">
          <img src="media/competiton.jpg" alt="" style="border-radius: 20px;"/>
          <button class="btnn">View</button>
        </div>
      </a>  
    </section>
    
    <input name="tab" id="tab7" type="radio" />
    <section class="tab-content">
      <a href="workshop/glitz.html" class="linkdec">
        <h2> GLITZ </h2>
        <div class="imagecon">
          <img src="media/competiton.jpg" alt="" style="border-radius: 20px;"/>
          <button class="btnn">View</button>
        </div>
      </a>  
    </section>

    <input name="tab" id="tab8" type="radio" />
    <section class="tab-content">
      <a href="workshop/innovision.html" class="linkdec">
        <h2> INNOVISION </h2>
        <div class="imagecon">
          <img src="media/competiton.jpg" alt="" style="border-radius: 20px;"/>
          <button class="btnn">View</button>
        </div>
      </a>  
    </section>

    <section class="tabs-container">
      <label for="tab1"> EVENTS</label>
      <label for="tab2"> GAMEMASTER</label>
      <label for="tab3"> WORKSHOPS </label>
      <label for="tab4"> PROSHOW </label>
      <label for="tab5"> COMPETITIONS</label>
      <label for="tab6"> CHAKRAVYUH2.0</label>
      <label for="tab7"> GLITZ</label>
      <label for="tab8"> INNOVISION</label>
    </section>
   
</div>

      </div>
      </div>
      
  </section> 
       

<!-- tab ends -->

<div class="vtab container">

  <h1 class="vh1">
    <a href="comingsoon.html" id="a_vtab" class="underline">EVENTS</a>
  </h1>
  <h1 class="vh1">
    <a href="workshop/games.html" id="a_vtab" class="underline">GAMES</a>
  </h1>
  <h1 class="vh1">
    <a href="workshop/workshop.html" id="a_vtab" class="underline">WORKSHOPS</a>
  </h1>
  <h1 class="vh1">
    <a href="proshow.html" id="a_vtab" class="underline">PROSHOW</a>
  </h1>
  <h1 class="vh1">
    <a href="workshop/Competitions.html" id="a_vtab" class="underline">COMPETITIONS</a>
  </h1>
  <h1 class="vh1">
    <a href="workshop/chakravyuh.html" id="a_vtab" class="underline">CHAKRAVYUH 2.0
    </a>
  </h1>
  <h1 class="vh1">
    <a href="workshop/glitz.html" id="a_vtab" class="underline">GLITZ</a>
  </h1>
  <h1 class="vh1">
    <a href="workshop/innovision.html" id="a_vtab" class="underline">INNOVISION</a>
  </h1>
  <h1 class="vh1">
    <a href="workshop/expo.html" id="a_vtab" class="underline">EXPO</a>
  </h1>

</div> 


<div class="mb">
  <!-- HTML !-->

</div>

<div class="mobmarquee">
<div class="marquee">
  <!-- <div class="mb">
  <button class="button-2" role="button" onclick="document.location='form/form.html'">Register Now!</button>
  </div> -->
  <!-- <div class="ms"> -->
  <marquee behavior="scroll" direction="left">
     <p> Get Your Tickets NOW!!&ensp;&ensp;&ensp;Get Your Tickets Now!! &ensp;&ensp;&ensp;Get Your Tickets Now!! &ensp;&ensp;&ensp;
      Get Your Tickets Now!! &ensp;&ensp;&ensp;Get Your Tickets Now!! &ensp;&ensp;&ensp;Get Your Tickets NOW!! &ensp;&ensp;&ensp;
      Get Your Tickets Now!! &ensp;&ensp;&ensp;Get Your Tickets Now!! &ensp;&ensp;&ensp;
     </p>
    
  </marquee>
<!-- </div> -->
</div>
</div>



<div class="pcontainer h-100">
  <div class="row align-items-center h-100">
    <div class="container rounded">
      <!-- <h1 class="text-center">Our Sponsors</h1> -->
      <div class="slider">
        <div class="logos">
         
          <img src="media/sunburn1.png" alt="" class="eimg" >
          <img src="media/motor1.png" alt="" class="eimg">
          <img src="media/glam.png" alt="" class="eimg">
          <img src="media/inovision.jpg" alt="" class="eimg">
          <img src="media/sunburn1.png" alt="" class="eimg" >
          <img src="media/motor1.png" alt="" class="eimg">
          <img src="media/glam.png" alt=""class="eimg">
          <img src="media/inovision.jpg" alt="" class="eimg">
          
        </div>

      </div>
    </div>
  </div>

</div>

<!-- mission vission -->
<hr>
<div class="about">
  <div class="vision">
    <h1>Our Vision</h1>
    <p>“Unlocking Tomorrow's Innovation Today”</p>
  </div>

  <div class="mission">
    <h1>Our Mission</h1>
    <p>Empowering Minds, Igniting Innovation</p>
  </div>
</div>

<!-- mission vission ends -->

<!-- newsletter -->

<!-- <section class="home-newsletter">
  <div class="container1">
  <div class="row1">
  <div class="col-sm-12">
    <div class="single">
      <h2>Subscribe to our Newsletter</h2>
    <div class="input-group">
           <input type="email" class="form-control" placeholder="Enter your email">
           <span class="input-group-btn">
           <button class="btn btn-theme" type="submit">Subscribe</button>
           </span>
            </div>
    </div>
  </div>
  </div>
  </div>
  </section> -->

  <div class="subscribe">

    <div class="sub_head">
      <h2>Subscribe so that you<br> don’t miss out on our events</h2>
    </div>
    
    <div class="subform">
      <div class="input-group">
        <input type="email" class="form-control" placeholder="Enter your email">
        <span class="input-group-btn">
          <button class="btn btn-theme" type="submit">Subscribe</button>
        </span>
      </div>
    </div>

  </div>

<!-- newsletter ends -->

<hr>
<?php
    $result = mysqli_query($con, "SELECT * FROM sponser ORDER BY id DESC");
    while ($user_data = mysqli_fetch_array($result)) {?>
      <?php 
        $youtubelink=$user_data['image'];
        if ($youtubelink != null ) { 
           
          ?>
<div class="sponser">





<div class="pcontainer h-100">
  <div class="row align-items-center h-100">
    <div class="container rounded">
      

      <h1 class="text-center">Our Sponsors</h1>
      <div class="slider">
        <div class="logos">
         
          <img src="../Admin/sponser/<?php echo $user_data['image']; ?>" alt="" class="clientimg">
         <?php } ?>
          <!-- <img src="media/iccslogo.png" alt="" class="clientimg">
          <img src="media/iccslogo.png" alt=""class="clientimg">
          <img src="media/iccslogo.png" alt="" class="clientimg">
          <img src="media/iccslogo.png" alt="" class="clientimg">
          <img src="media/iccslogo.png" alt="" class="clientimg">
          <img src="media/iccslogo.png" alt="" class="clientimg">
          <img src="media/iccslogo.png" alt="" class="clientimg">
          <img src="media/iccslogo.png" alt=""class="clientimg">
          <img src="media/iccslogo.png" alt="" class="clientimg"> -->
          
          
        </div>

      </div>
    </div>
  </div>

</div>

  

</div>
<?php } ?>
<!-- aboutus -->

<div class="aboutus container">
  <h1>About Us</h1>
  <!-- <h4  class="aboutpara">ICCS College of Engineering and Management (ICCSCEM) is established with an intent to provide a quality education that focuses on 
    the comprehensive development of students, with special emphasis on the industrial and corporate interface to reinforce employability 
    skills.</h4> -->

</div>

<div class="ab">

  <div class="abimg">
    <img src="media/college.jpg" alt=""  class="aboutimg">
  </div>

  <div class="abtxt">
     <h4  class="aboutpara">ICCS College of Engineering and Management (ICCSCEM) is established with an intent to provide a quality education that focuses on 
      the comprehensive development of students, with special emphasis on the industrial and corporate interface to reinforce employability 
      skills.</h4>
  
  </div>

 
</div>

<!-- address -->

<div class="address container">
  <h4 class="aboutpara">Address:<br><br>
    ICCS College of Engineering and Management, Injakundu P.O, Muppliyam Village, Trichur District – 680 312, Kerala.
    Contact us at: iccscem.ac.in
    </h4>
    <div class="iframe">
      <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15696.900013996039!2d76.3690349!3d10.4036961!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ba7ff2322afbcd3%3A0x6c4911bbb876474!2sICCS%20College%20of%20Engineering%20and%20Management!5e0!3m2!1sen!2sin!4v1698826864546!5m2!1sen!2sin" 
      width="1300" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
    </iframe>
    </div>
    
    <img src="media/iccslogo.png" alt="logo" class="iccslogo1" width="200px" height="100px">
</div> <br>

<!-- address ends -->

<!-- backtotop -->

  <a href="javascript:" id="return-to-top"><i class="fas fa-arrow-up"></i></a>
  
<!-- end backtotop -->  



<!-- footer -->
  <footer class="bg-black text-center text-white">
  <!-- Grid container -->
  <div class="container p-4 pb-0">
    <!-- Section: Social media -->
    <section class="mb-4">
      <!-- Facebook -->
      <a class="footerbtn btn-outline-light btn-floating m-1 " href="#!" role="button"
        ><i class="fab fa-facebook-f "></i
      ></a>

      <!-- Twitter -->
      <a class="footerbtn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-twitter"></i
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
        ><i class="fab fa-whatsapp"></i
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

<!-- End of .container -->

 <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script type='text/javascript' src=''></script>
    <script type='text/javascript' src='https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js'></script>
    <script type='text/javascript' src=''></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    
    <script type='text/javascript'>$('.carousel .carousel-item').each(function () {
      var minPerSlide = 4;
      var next = $(this).next();
      if (!next.length) {
      next = $(this).siblings(':first');
      }
      next.children(':first-child').clone().appendTo($(this));

      for (var i = 0; i < minPerSlide; i++) { next=next.next(); if (!next.length) { next=$(this).siblings(':first'); } next.children(':first-child').clone().appendTo($(this)); } });</script>

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


    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
    <script>

document.addEventListener("DOMContentLoaded", function () {
  const navButton = document.querySelector(".navbar-toggler");

  // Add event listener to the navButton
  navButton.addEventListener("click", () => {
    // Toggle the "show" class on the ".navbar-collapse" element
    document.getElementById("collapsibleNavbar").classList.re("show");
   
  });
});

const navHam = document.querySelector(".nav-bar-container .fa-bars");
navHam.addEventListener("click",()=>{
  document.querySelector(".navbar-social-links").classList.toggle("active");
})

    </script>
  </body>
</html>