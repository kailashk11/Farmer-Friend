<?php

session_start();


$cname = $_SESSION['temp'];
$contact = $_POST['ename'];
$mail = $_POST['rent'];

$image = $_FILES['image']['name'];
$target = "img2/".basename($image);

$conn=mysqli_connect("localhost","root","","crop");
$sql="INSERT INTO rent(AADHAR,ename,price,img) VALUES ('$cname','$contact','$mail','$image')";
$show=mysqli_query($conn,$sql);
if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
  		echo "Image uploaded successfully";
  		header("location:e1.php");
  	}else{
  		echo "Failed to upload image";
  	}
?>