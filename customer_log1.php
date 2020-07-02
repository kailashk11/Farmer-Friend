<?php
$cname = $_GET['cname'];
$contact = $_GET['contact'];
$mail = $_GET['cmail'];
$address = $_GET['caddress'];
$dis = $_GET['cdis'];
$state = $_GET['cstate'];
$pin = $_GET['cpin'];
$pass = $_GET['pass'];

$conn=mysqli_connect("localhost","root","","crop");

$sql = "INSERT INTO `customer_log`(`NAME`, `CONTACT`, `EMAIL`, `ADDRESS`, `District`, `State`, `Pincode`, `PASSWORD`) VALUES ('$cname','$contact', '$mail', 
		'$address', '$dis', '$state', '$pin', '$pass')";
$show=mysqli_query($conn,$sql);

  header("location:customer_log.php");

?>