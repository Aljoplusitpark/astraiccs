<?php
include("./connection/config.php");
error_reporting(0);
session_start();
  if($_SESSION['username'] != 'admin'){
        header("location:login.php");
        die();
     }
// Make sure to sanitize user input to prevent SQL injection
$updId = mysqli_real_escape_string($con, $_GET['upd']);
$itemType = isset($_GET['itemType']) ? $_GET['itemType'] : '';

if ($itemType == "workshop") {
    $sql = "SELECT * FROM workshop WHERE id='$updId'";
    $updateQuery = "UPDATE workshop SET verified=1 WHERE id='$updId'";
} else if ($itemType == "glitz") {
    $sql = "SELECT * FROM glitz WHERE id='$updId'";
    $updateQuery = "UPDATE glitz SET verified=1 WHERE id='$updId'";
} else if ($itemType == "innovation") {
    $sql = "SELECT * FROM innovation WHERE id='$updId'";
    $updateQuery = "UPDATE innovation SET verified=1 WHERE id='$updId'";
}

$query = mysqli_query($con, $sql);
$approved = mysqli_query($con, $updateQuery);

while ($rows = mysqli_fetch_array($query)) {
    $to = $rows['email_id'];
    $subject = "Test Email";
    $qrcodeImagePath = $rows['qrcode'];
    $code = $rows['code'];
    $codeone = $rows['qrcode'];

    $message = "<html>
        <body style='width: 100vw; height: 20vh;'>
            <div id='captureDiv' class='image-container' style='position: relative; width: 340px; background-image: url(https://astraiccs.tech/form/ticket.png); height: 100px; background-size: cover;'>
                <img src='https://astraiccs.tech/form/$codeone' style='position: absolute; margin-top: 25px; margin-left:280px; width: 12%' />
            </div>
            <button style='margin-top:100px;background-color: #4CAF50;
                border: none;
                color: white;
                padding: 10px 32px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 16px;
                margin: 4px 2px;
                cursor: pointer;
                border-radius: 8px;'><a href='https://astraiccs.tech/ticket_download.php?code=$code&itemType=$itemType' style='color:white;font-weight:bold;'>Download Your Ticket</a></button>
        </body>
    </html>";

    // Set content-type header for sending HTML email
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

    // Additional headers
    $headers .= "From: info@astraiccs.tech" . "\r\n";

    // Send email
    $mailSent = mail($to, $subject, $message, $headers);

    if ($mailSent) {
        echo "Email sent successfully";
        
    } else {
        echo "Email sending failed.";
    }
}
?>
