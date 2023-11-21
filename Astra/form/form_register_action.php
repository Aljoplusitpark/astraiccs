<?php
include("../../Admin/connection/config.php");
error_reporting(0);
session_start();

if (isset($_POST['submit'])) {
    // Retrieve text input values
    $name = isset($_POST['name']) ? $_POST['name'] : '';
    $state = isset($_POST['state']) ? $_POST['state'] : '';
    $phone = isset($_POST['phone_number']) ? $_POST['phone_number'] : '';
    $district = isset($_POST['district']) ? $_POST['district'] : '';
    $email_id = isset($_POST['email_id']) ? $_POST['email_id'] : '';
    $course = isset($_POST['course']) ? $_POST['course'] : '';
    $college_name = isset($_POST['college_name']) ? $_POST['college_name'] : '';
    $branch = isset($_POST['branch']) ? $_POST['branch'] : '';
    $years = isset($_POST['years']) ? $_POST['years'] : '';
    $semester = isset($_POST['semester']) ? $_POST['semester'] : '';
    $workshop = isset($_POST['workshop_name']) ? $_POST['workshop_name'] : '';
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
    $targetDir = "workshop/";
    $targetFile = $targetDir . basename($_FILES["image"]["name"]);
    move_uploaded_file($_FILES["image"]["tmp_name"], $targetFile);

    // SQL INSERT statement
    $sql = "INSERT INTO workshop (name, state, phone, district, email_id, course, college_name, branch, years, semester, images, code, qrcode, workshop, verified) VALUES ('$name', '$state', '$phone', '$district', '$email_id', '$course', '$college_name', '$branch', '$years', '$semester', '$image', '$code', '$qrcodeFileName', '$workshop', '$verify')";
    echo $sql;

    // Execute the SQL query
    if (mysqli_query($con, $sql)) {
         echo "Data inserted successfully!";
        header("Location: form.php");
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($con);
    }
}
?>
