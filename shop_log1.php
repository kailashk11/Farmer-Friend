<?php
$sname = $_GET['sname'];
$contact = $_GET['scontact'];
$saddress = $_GET['saddress'];
$dist = $_GET['sdis'];
$state = $_GET['sst'];
$pin = $_GET['spin'];
$aadhar = $_GET['saadhar'];
$shname = $_GET['shname'];



$conn=mysqli_connect("localhost","root","","crop");


$sql1 = "INSERT INTO shop_log( NAME, CONTACT, ADDRESS, District, State, Picode, AADHAR, SHOP_NAME) VALUES ('$sname','$contact','$saddress','$dist',
'$state','$pin','$aadhar','$shname')";



$show = mysqli_query($conn, $sql1);

if($show){
	header("location:shop_log.php");
}
else{
	echo "no";
}
?>