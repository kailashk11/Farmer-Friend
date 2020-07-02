<?php

session_start();


$cname = $_SESSION['temp'];
$contact = $_POST['cropn'];
$mail = $_POST['quantity'];
$caddress = $_POST['price'];
$image = $_FILES['image']['name'];
$target = "img/".basename($image);

$conn=mysqli_connect("localhost","root","","crop");
$sql="INSERT INTO cropup(Aadhar,crop_name,crop_img,quantity,price) VALUES ('$cname','$contact','$image','$mail','$caddress')";
$show=mysqli_query($conn,$sql);
if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
  		echo "Image uploaded successfully";
  		header("location:crops.php");
  	}else{
  		echo "Failed to upload image";
  	}
?>