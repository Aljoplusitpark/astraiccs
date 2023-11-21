<!DOCTYPE html>
<html>
<head>
<title>INNOVISION REGISTER </title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

 <!-- Font Awesome -->
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />
 <!--end font awesome  -->

<script src="https://cdn.rawgit.com/davidshimjs/qrcodejs/gh-pages/qrcode.min.js"></script>
<link rel="stylesheet" href="form.css">
</head>
<body>

<!-- navbar -->

<div class="nav">
  <nav class="navbar navbar-light bg-transparent">
    <div class="logo">
      <button class="homebtn" onclick="history.back()"><i class="fa fa-chevron-left" aria-hidden="true"></i></button>
    </div>
    <div class="brand">
      <h1>
        ASTRA '23<br />
        INNOVISION
      </h1>
      <img src="logo_astra.png" width="60px" height="auto" alt="" />
    </div>
  </nav>
</div>
<!-- navbar ends -->
<div class="head container">
<h1 >INNOVISION</h1><br>
<h4>IDEA PITCHING COMETITION <br>8th December, '23, 11:30AM <br>Diploma Block, ICCSCEM</h4>
</div>
<div class="wrapper" >
   
    
<div class="inner">
    
    
<div class="image-holder">
    
    <h4>Innovision - Things to know</h4><br><br>
    <ul>
        <li>Innovision is an inter school and college project competition open up for Tenth, Plus Two, Diploma , 
            B.Tech and Undergraduate students conducting by the ASTRA'23 Tech fest of ICCS CEM, Mupliyam, 
            Thrissur and is the perfect platform to showcase your ideas. Show up your scientific and technical 
            skills and grab exciting prizes worth INR 80,0000/- and many more. Why wait? Register now......</li>
        General Guidelines
        <li>The interested students have to form a group of maximum 4 members. </li>
        <li>Each group has to register on the official website, after the registration the confirmation 
            ticket and a google form will be provided to the registered student.</li>
        <li>The Project report should include the project title, introduction, application, area of topic,
            methodology and scope of the project. </li>
        <li>All the group member names and contact details (Email Id, mobile numbers) have to be provided in the
            google forms .</li> <br>

        <p style="font-size: 16px; font-weight: 900;"> The project model should be working/non working, prototyped or 
            implementation on various relevant fields including;</p> <br>
        <li>Agro Machinery</li>
        <li>Robotics/ 3D Printing</li>
        <li>Bio Energy</li>
        <li>Energy and Management</li>
        <li>Homeland Security </li>
        <li>Rural development technology </li>
        <li>Agro and Food Processing</li>
        <li>Information technology</li>
        <li>Other relevant topics</li>
        <li>The report softcopy has to be uploaded in the google form provided to the registered 
            student. and the last date to upload the report is 30 November, 2023.</li>
        <li>The shortlisted projects will be informed via email on 3 December, 2023.</li>
        <li>There are no registration fees for the Tenth and Plus two level students.</li>
        <li> The registration fees for Diploma, Btech and Undergraduate students are INR 1000/- 
            per team.</li>
        <li>The selected group has to be present on 7th December on ICCS CEM College Campus with their project
            model.</li>
        <li>There are attractive prizes for the project competition.</li>
        <li>Tenth Level Prize Pool INR 8500/-</li>
        <li>Plus two Level Prize Pool INR 11,500/-</li>
        <li>Diploma Level Prize Pool INR 30,000/-</li>
        <li>B.Tech and Undergraduate Level Prize Pool INR 30,000/-</li>
        <li>Each participating student will get the certificate for participating in the project 
            competition.</li>
    </ul>
<!-- <img src="logo_astra.png" alt="image" width="150px" height="auto" class="logo"> -->
</div>
<form enctype="multipart/form-data" method="POST" action="innovision_register.php" id="registrationForm" >
<h3>ENTER YOUR DETAILS</h3>
<div class="form-group">
  <input type="text" placeholder="Team Name / Individual Name" name="name"  class="form-control">

  <input type="text" placeholder="No of Participants" id="teamId" onchange="checkTeamId()" name="participants"  class="form-control">

</div>

<div class="form-group">
 
  <input type="text" placeholder="Phone No." name="phone"  class="form-control">
  <input type="text" placeholder="Alternate Phone No." name="alternative"  class="form-control">
</div>
<div class="form-group">
   <input type="text" placeholder="E-Mail" name="email_id"  class="form-control">
  <input type="text" placeholder="State" name="state"  class="form-control">
</div>

<div class="form-group">
  <input type="text" placeholder="District" name="district"  class="form-control">
  <input type="text" placeholder="College / Company name"  name="college" class="form-control">
</div>
<div class="form-group">
  <input type="text" placeholder="Project" name="projects"  class="form-control">
  <!-- <input type="text" placeholder="College / Company name"  name="college" class="form-control"> -->
</div>

<div class="form-group" style="display:none;">
  <input type="text" placeholder="Code"  name="code" id="code" class="form-control">
  <input type="text" name="qrcode" id="qr-code" class="form-control">
</div>


<!-- <div class="form-wrapper">
<input type="text" placeholder="Team Members name including participants, designers and makeup  artists (for providing certificates) " class="form-control">
 
</div> -->

<div class="pay">
    <h5 class="payh5">Do the payment to : xxxxxxxx@xxx UPI ID 
        and Upload the screenshot Below</h5>

    <h1 id="result"></h1>    
    <input type="file" id="upload" name="image" hidden/>
    <label for="upload">Payment Screenshot </label>

    <button type="submit" name="submit">Register</button>
    <p>  After registering, you will be getting the ticket confirmation  email within 5-6 hours.<br>
        For Support contact us at ticketing@astraiccs.tech</p>
        
</div>
  <div id="qrcode" style="display:none;"></div>
</form>
<script>
 
  function generateRandomCode() {
  const characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
  let code = '';

  for (let i = 0; i < 12; i++) {
    const randomIndex = Math.floor(Math.random() * characters.length);
    code += characters.charAt(randomIndex);
  }

  return code;
}


document.addEventListener("DOMContentLoaded", async function () {
  const randomCode = generateRandomCode();
  document.getElementById("code").value = randomCode;

  async function generateQRCode(data) {
    // Create a new instance of QRCode
    var qrcode = new QRCode(document.getElementById("qrcode"), {
      text: data,
      width: 128,
      height: 128,
    });

    // Return the canvas element
    return document.getElementById("qrcode").querySelector("canvas");
  }

  // Example usage
  var dataToEncode = randomCode; // Replace with your data
  var qrcodeCanvas = await generateQRCode(dataToEncode);

  // Convert the canvas to an image
  var qrcodeImage = new Image();
  qrcodeImage.src = qrcodeCanvas.toDataURL("image/png");

  // Now, you can use the 'qrcodeImage.src' variable as needed
  console.log(qrcodeImage.src);
  document.getElementById("qr-code").value = extractBase64FromDataUrl(qrcodeImage.src);
});

function extractBase64FromDataUrl(dataUrl) {
    // Use a regular expression to match the base64 part
    const matches = dataUrl.match(/^data:([A-Za-z-+\/]+);base64,(.+)$/);

    // Check if the data URL is valid
    if (!matches || matches.length !== 3) {
        console.error('Invalid data URL');
        return null;
    }

    // Extract and return the base64 part
    return matches[2];
}

    function checkTeamId() {
      // Get the value of the team ID input
      var teamIdInput = document.getElementById("teamId");
      var teamIdValue = parseInt(teamIdInput.value);

      // Get the element where you want to display the result
      var resultElement = document.getElementById("result");

      // Check the conditions and set the amount accordingly
      if (teamIdValue >= 0 && teamIdValue <= 1) {
        resultElement.textContent = "Rs:- 249";
      } else if (teamIdValue >= 1 && teamIdValue <= 7) {
        resultElement.textContent = "Team Available in 8 Members";
      }  else if (teamIdValue > 7 && teamIdValue <= 13) {
        resultElement.textContent = "RS:- 2499";
      } else {
        resultElement.textContent = "Invalid Number";
      }
    }
  </script>
</div>
</div>

<!-- backtotop -->

<a href="javascript:" id="return-to-top"><i class="fas fa-arrow-up"></i></a>
  
<!-- end backtotop -->  

<!-- footer -->
<div class="footer">
<footer class=" text-center text-white">
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
</div>
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