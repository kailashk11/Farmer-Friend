<?php

session_start();

$cname = $_SESSION['temp'];
$contact = $_POST['cropn'];
$mail = $_POST['quantity'];
$caddress = $_POST['price'];
$image = $_FILES['image']['name'];
$target = "img1/".basename($image);

$conn=mysqli_connect("localhost","root","","crop");
$sql="INSERT INTO equipup(Aadhar,ename,eimg,quantity,price) VALUES ('$cname','$contact','$image','$mail','$caddress')";
$show=mysqli_query($conn,$sql);
if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
  		echo "Image uploaded successfully";
  		header("location:e1.php");
  	}else{
  		echo "Failed to upload image";
  	}