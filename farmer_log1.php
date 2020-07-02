<?php

$fname = $_GET['fname'];
$contact = $_GET['fcontact'];

$faddress = $_GET['faddress'];
$aadhar = $_GET['faadhar'];
$dist = $_GET['fdist'];
$state = $_GET['fstate'];

$pin = $_GET['fpin'];



$conn = mysqli_connect("localhost","root","","crop");


$sql = "INSERT INTO `farmer_log`(`NAME`, `MOBILE`, `ADDRESS`, `DISTRICT`, `STATE`, `PINCODE`, `AADHAR`) VALUES ('$fname', '$contact', '$faddress', '$dist', '$state','$pin', '$aadhar')";

$view = mysqli_query($conn, $sql);

if($view){

	header("location:farmer_log.php");

}

?>