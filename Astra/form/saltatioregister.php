<!DOCTYPE html>
<html>
<head>
<title>SALTATIO REGISTER </title>
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
      <h1>ASTRA '23<br> DANCE </h1>
      <img src="logo_astra.png" width="60px" height="auto"  alt="">
    </div>
  </nav>
</div>

<!-- navbar ends -->
<div class="head container">
<h1 >SALTATIO</h1><br>
<h4>DANCE COMPETITION <br>7th Dec, Astra'23 MainStage 4PM</h4>
</div>
<div class="wrapper" >
   
    
<div class="inner">
    
    
<div class="image-holder">
    
    <h4>Rules to follow</h4><br><br>
    <ul>
        <li> Only College teams are allowed.
            Each group can have 5-15 members.</li>
        <li>College ID cards of each participants are compulsory.</li>
        <li>The duration of the performance should be between 4-12 minutes including stage setup.</li>
        <li>Registrations should be done on or before 01/12/23, Friday. </li>
        <li>Teams must report at least 60 minutes before the competition begins.</li> 
        <li>The sound track must be submitted in MP3 format in USB</li>
        <li>No vulgar obscene and explicit dresses, movements or songs will be entertained.</li>
        <li>Use of breakable items, fire, water, inflammable items or anything that may make the 
            dance floor untidy is strictly prohibited.</li>
        <li>Any participants/team involved in any kind of disciplinary/mischievous activities 
            will be disqualified.</li>
        <li>Decision of the judges will be final.</li>
        <li>Registration fee Per head 200/- less than 10 participants</li>
        <li>More than 10 participants - fixed amount: 2000</li>
        
    </ul>
<!-- <img src="logo_astra.png" alt="image" width="150px" height="auto" class="logo"> -->
</div>
<form enctype="multipart/form-data" method="POST" action="saltatio_register_action.php" id="registrationForm" >
<h3>ENTER YOUR DETAILS</h3>
<div class="form-group">
  <input type="text" placeholder="Team Name / Individual Name" name="name"  class="form-control">

  <input type="text" placeholder="No of Participants" id="teamId" onchange="checkTeamId()" name="participants"  class="form-control">

</div>
<div class="form-group">
  <input type="text" placeholder="Phone Number" name="phone"  class="form-control">
  <input type="text" placeholder="Alternative" name="alternative"  class="form-control">
</div>
<div class="form-group">
  <input type="text" placeholder="E-Mail" name="email_id"  class="form-control">
  <input type="text" placeholder="College Name" name="college"  class="form-control">
</div>
<div class="form-group">
  <input type="text" placeholder="District" name="district"  class="form-control">
  <input type="text" placeholder="Qualification" name="qualification"  class="form-control">
</div>

<div class="form-group">
  <input type="text" placeholder="Name Of Project" name="project"  class="form-control">
  
</div>
<div class="form-group" style="display:none;">
  <input type="text" placeholder="Code"  name="code" id="code" class="form-control">
  <input type="hidden" name="qrcode" id="qr-code" class="form-control">
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
</div>
</div>
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
  var qrcodeCanvas = await generateQRCode("https://astraiccs.tech/verify.php?code="+dataToEncode+"&itemType=glitz");

  // Convert the canvas to an image
  var qrcodeImage = new Image();
  qrcodeImage.src = qrcodeCanvas.toDataURL("image/png");

  // Now, you can use the 'qrcodeImage.src' variable as needed
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