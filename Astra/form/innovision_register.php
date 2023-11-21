<?php
include("../../Admin/connection/config.php");
error_reporting(0);
session_start();

if (isset($_POST['submit'])) {
    // Retrieve text input values
    $name = isset($_POST['name']) ? $_POST['name'] : '';
    $participants = isset($_POST['participants']) ? $_POST['participants'] : '';
    
    $phone = isset($_POST['phone']) ? $_POST['phone'] : '';
    $alternative = isset($_POST['alternative']) ? $_POST['alternative'] : '';
    $email_id = isset($_POST['email_id']) ? $_POST['email_id'] : '';
    $state = isset($_POST['state']) ? $_POST['state'] : '';
    $district = isset($_POST['district']) ? $_POST['district'] : '';
    $college = isset($_POST['college']) ? $_POST['college'] : '';
    $projects = isset($_POST['projects']) ? $_POST['projects'] : '';
    $code = isset($_POST['code']) ? $_POST['code'] : '';
    $verify = 0;
    
    // Retrieve file input values (payment screenshot and QR code)
    $image = isset($_FILES['image']['name']) ? $_FILES['image']['name'] : '';
    $qrcodeBase64 = isset($_POST['qrcode']) ? $_POST['qrcode'] : '';

    // Decode base64 QR code image data
    $qrcodeData = base64_decode($qrcodeBase64);

    // Generate a unique filename for the QR code
    $qrcodeFileName = uniqid('qrcode_') . '.png';

    // Specify the target directory for QR codes
    $qrcodeDir = "QR/";

    // Save the decoded QR code image to a file
    $qrcodeFilePath = $qrcodeDir . $qrcodeFileName;
    file_put_contents($qrcodeFilePath, $qrcodeData);

    // Move the uploaded files to specific directories
    $targetDir = "innovision/";
    $targetFile = $targetDir . basename($_FILES["image"]["name"]);
    move_uploaded_file($_FILES["image"]["tmp_name"], $targetFile);

    // $targetDir1 = "QR/";
    // $targetFile1 = $targetDir1 . basename($_FILES["qrcode"]["name"]);
    // move_uploaded_file($_FILES["qrcode"]["tmp_name"], $targetFile1);

    // SQL INSERT statement
    $sql = "INSERT INTO innovision (name, participant, phone_number, alternative, email_id, state, district, college_name, project_name, code, qrcode, image, verified) VALUES ('$name', '$participants', '$phone', '$alternative', '$email_id', '$state', '$district', '$college', '$projects', '$code',' $qrcodeFileName','$image', '$verify')";

    // Execute the SQL query
    if (mysqli_query($con, $sql)) {
        // echo "Data inserted successfully!";
        header("Location: innovisionregister.php");
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($con);
    }
}
?>
