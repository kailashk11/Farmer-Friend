<?php
session_start();
$fname = $_SESSION['temp'];

$id=$_SESSION['id'];
$price = $_SESSION['amount'];
$conn = mysqli_connect("localhost","root","","crop");
 $query2 = "SELECT * FROM equipup  WHERE id='$id'";
        $is_query_run1 = mysqli_query($conn,$query2);
        $row2 = mysqli_fetch_array($is_query_run1);
$k=$row2['ename'];





$sql = "INSERT INTO `ordere`(`id`, `email`, `oname`, `price`) VALUES ('$id', '$fname', '$k', '$price')";

$view = mysqli_query($conn, $sql);

if($view){
    
	header("location:cus_prof.php");

}

?>