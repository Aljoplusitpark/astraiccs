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
    
  }else if($_GET['itemType']=="innovation"){
     $sql = "SELECT * FROM innovation WHERE code='$codeone'";
    
}
    $sql = "SELECT * FROM glitz WHERE code='$codeone'";
    $query = mysqli_query($con, $sql);
?>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <!-- Include html2canvas script -->
 
</head>
<body style="width: 100vw; height: 20vh;">
    <?php 
    while ($rows = mysqli_fetch_array($query)) {
        $name = $rows['name'];
        $verified = $rows['verified'];

        // Corrected the if statement
        if ($verified == 0) {
            echo '<p>Invalid Code</p>';
        } else {
            echo '<p>Verified</p>';
        }
    }
    ?>
</body>
</html>
