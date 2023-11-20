<?php
    include ("./connection/config.php");
    $sql = "SELECT * FROM glitz WHERE id='{$_GET['upd']}'";
    $query = mysqli_query($con, $sql);

    while ($rows = mysqli_fetch_array($query)) {
        $to = $rows['email_id'];
        $subject = "Test Email";

        // Use the image URL from the database
        $imageURL = $rows['qrcode'];

        // HTML content with image
        $message = "<html>
                        <body>
                            <h1>This is a test HTML email sent from PHP.</h1>
                            <p>This is an image: <img src='$imageURL' alt='Image'></p>
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
            echo "Email sent successfully.";
        } else {
            echo "Email sending failed.";
        }
    }
?>
