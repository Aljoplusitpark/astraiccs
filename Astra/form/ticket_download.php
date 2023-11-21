<!DOCTYPE html>
<?php
    include("./connection/config.php");
    error_reporting(0);

    // Make sure to sanitize user input to prevent SQL injection
    $codeone = mysqli_real_escape_string($con, $_GET['code']);
if($_GET['itemType']=="workshop"){
  $sql = "SELECT * FROM workshop WHERE code='$codeone'";
}else if($_GET['itemType']=="glitz"){
     $sql = "SELECT * FROM glitz WHERE code='$codeone'";
    $query = mysqli_query($con, $sql);
  }else if($_GET['itemType']=="innovation"){
     $sql = "SELECT * FROM innovation WHERE code='$codeone'";
    $query = mysqli_query($con, $sql);
}
 
?>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <!-- Include html2canvas script -->
    <script src="https://html2canvas.hertzen.com/dist/html2canvas.min.js"></script>
</head>
<body style="width: 100vw; height: 20vh;">
    <?php 
    while ($rows = mysqli_fetch_array($query)) {
        $codeone = $rows['qrcode'];
    ?>
        <div id="captureDiv" class="image-container" style="position: relative; width: 1240px; height: 400px; background-image: url(https://astraiccs.tech/form/ticket.png); background-size: cover;">
           <img src="https://astraiccs.tech/form/<?php echo $codeone; ?>" alt="" style="position: absolute; top: 85px; right: 60px; width: 13%;" />

        </div>
        <button onclick="downloadImage()" style='margin-top:100px;background-color: #4CAF50;
                    border: none;
                    color: white;
                    padding: 10px 32px;
                    text-align: center;
                    text-decoration: none;
                    display: inline-block;
                    font-size: 16px;
                    margin: 4px 2px;
                    cursor: pointer;
                    border-radius: 8px;'>Download Your Ticket</button>
    <?php
    }
    ?>
    <script>
    document.addEventListener('DOMContentLoaded', function() {
            // Code to be executed after the DOM is fully loaded
            downloadImage();
        });

        function downloadImage() {
            // Get the div element
            const captureDiv = document.getElementById('captureDiv');

            // Use html2canvas to capture the content of the div as an image
            html2canvas(captureDiv).then(function (canvas) {
                // Create a link element
                const downloadLink = document.createElement('a');

                // Set the href attribute with the data URL of the canvas image
                downloadLink.href = canvas.toDataURL('image/png');

                // Set the download attribute with the desired file name
                downloadLink.download = 'captured_image.png';

                // Append the link to the document body
                document.body.appendChild(downloadLink);

                // Trigger a click event on the link to start the download
                downloadLink.click();

                // Remove the link from the document
                document.body.removeChild(downloadLink);
            });
        }
    </script>
</body>
</html>
