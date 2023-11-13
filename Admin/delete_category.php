<?php
include "connection/config.php";
error_reporting(0);
session_start();   


$sql = "DELETE FROM event WHERE id='".$_GET['cat_del']."'";
mysqli_query($con, $sql);
header("location:category.php"); 

?>