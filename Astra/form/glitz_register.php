<?php
include("../../Admin/connection/config.php");
error_reporting(0);
session_start();

if (isset($_POST['submit'])) {
    // Retrieve text input values
    $name = isset($_POST['name']) ? $_POST['name'] : '';
    $participants = isset($_POST['participants']) ? $_POST['participants'] : '';
    $email_id = isset($_POST['email_id']) ? $_POST['email_id'] : '';
    $phone = isset($_POST['phone']) ? $_POST['phone'] : '';
    $alternative = isset($_POST['alternative']) ? $_POST['alternative'] : '';
    $state = isset($_POST['state']) ? $_POST['state'] : '';
    $district = isset($_POST['district']) ? $_POST['district'] : '';
    $college = isset($_POST['college']) ? $_POST['college'] : '';
     $code = isset($_POST['code']) ? $_POST['code'] : '';

    // Retrieve file input values (payment screenshot and QR code)
    $image = isset($_FILES['image']['name']) ? $_FILES['image']['name'] : '';
     $qrcodeimage = isset($_POST['qrcode']) ? $_POST['qrcode'] : '';

    // Move the uploaded files to specific directories
    $targetDir = "glitz/";
    $targetFile = $targetDir . basename($_FILES["image"]["name"]);
    move_uploaded_file($_FILES["image"]["tmp_name"], $targetFile);

    // $targetDir1 = "QR/";
    // $targetFile1 = $targetDir1 . basename($_FILES["qrcode"]["name"]);
    // move_uploaded_file($_FILES["qrcode"]["tmp_name"], $targetFile1);

    // SQL INSERT statement
    $sql = "INSERT INTO glitz (name, participant, email_id, phone_number, alternative, state, district, college_name, image, code, qrcode) 
            VALUES ('$name', '$participants', '$email_id', '$phone', '$alternative', '$state', '$district', '$college', '$image','$code','$qrcodeimage')";

    // Execute the SQL query
    if (mysqli_query($con, $sql)) {
        // echo "Data inserted successfully!";
        header("Location: glitzregister.php");
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($con);
    }
}
?>
