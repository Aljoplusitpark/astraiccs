<?php
session_start();
error_reporting(0);
include('connection/config.php');
if(isset($_POST['submit1']))
{
$custname=$_POST['custname'];
$email=$_POST['email'];	
$designation=$_POST['designation'];
$message=$_POST['message'];	
$status="0";	
$pimage=$_FILES["packageimage"]["name"];
move_uploaded_file($_FILES["packageimage"]["tmp_name"],"testi_upload/".$_FILES["packageimage"]["name"]);
$sql="INSERT INTO testimonial(custname,email,designation,message,status,photo) VALUES(:custname,:email,:designation,:message,:status,:pimage)";
$query = $dbh->prepare($sql);
$query->bindParam(':pimage',$pimage,PDO::PARAM_STR);
$query->bindParam(':custname',$custname,PDO::PARAM_STR);
$query->bindParam(':email',$email,PDO::PARAM_STR);
$query->bindParam(':designation',$designation,PDO::PARAM_STR);
$query->bindParam(':message',$message,PDO::PARAM_STR);
$query->bindParam(':status',$status,PDO::PARAM_STR);

$query->execute();
$lastInsertId = $dbh->lastInsertId();

$subject = 'Alphonsa Dental Clinic Testimonial';
require 'class.phpmailer.php';
$emailus="info@alphonsadental.com";
date_default_timezone_set('Asia/Kolkata');
$currentTime = date( 'd-m-Y h:i:s A', time () );

$mail = new PHPMailer;
$mail->IsSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'alphonsadental.com';  // Specify main and backup server
	$mail->Username = 'no-reply@alphonsadental.com';                          // SMTP username  Your email ids name as in Plesk Panel
	$mail->Password = '407n15&dgZzmk42^3Zzmk42^3';                           // SMTP password   Your email ids password as in Plesk Panel
	$mail->Port = 25;
	$mail->SMTPAuth = true;                               // Enable SMTP authentication
	$mail->From = 'no-reply@alphonsadental.com';
	$mail->FromName = 'Welookup India - Enquiry';                 // Name is optional  
	$mail->AddAddress($emailus);       // Any of your working email
	$mail->IsHTML(true);          // Set email format to HTML
	$mail->Subject = $subject;
	$mail->Body    = "Dear Team,<br><br>You have received a new testimonial, by <b>".$name."</b> @ ".$currentTime."<br><br>
	<b><u>Testimonial Details</u></b><br><strong>Name:</strong> ".$name."<br><strong>Designation.</strong>: ".$designation."<br><strong>Email: </strong>".$email."<br><strong>Message: </strong>".$message." <br><br>Thank you, <br> Team Welookup India";
                                // Set email format to HTML

if(!$mail->Send()) {
	$msg="Sorry, the message could not be sent.";
	echo $msg;
	exit();
}


if($lastInsertId)
{
$msg="Thank You ".$name.". Testimonial submitted Successfully.";
header("Location:testimonial.php?msg=$msg");}
else 
{
$error="Something went wrong. Please try again";
}
}
?>