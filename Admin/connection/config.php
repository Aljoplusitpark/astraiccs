<?php

$sname = "localhost";
$uname = "root";
$password = "";
$db_name = "astra";

$con = mysqli_connect($sname, $uname, $password, $db_name);
// Check connection
if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}