<link rel="icon" href="farming.png" type="image/png" sizes="16x16"><?php
session_start();
?><!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name='viewport' content='width=device-width, initial-scale=1'>

    <title> FARMER'S FRIEND </title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Style CSS -->
    <link href="css/style1.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i" rel="stylesheet">
    <!-- FontAwesome CSS -->
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head><style>

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: white;
  color: black;
}

.topnav a.active {
  background-color: black;
  color: white;
}

.topnav .icon {
  display: none;
}

@media screen and (max-width: 600px) {
  .topnav a:not(:first-child) {display: none;}
  .topnav a.icon {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
  .topnav-right{
    float:right;
  }
}
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }

  

   .but{
        background-color: orange;
         display: inline-block;
        font-size: 20px;
         box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);

  }

.form-inline { 
padding:10px 10px; 
  display: flex;
  flex-flow: row wrap;
  align-items: center;
}

.form-inline label {
  padding-left:10px;
  margin: 5px 10px 5px 0;
}

.form-inline input {
  vertical-align: middle;
  width:150px;
  margin: 5px 10px 5px 0;
  padding: 10px;
  background-color: #fff;
  border: 1px solid #ddd;
}

.form-inline button {
  padding: 10px 40px;
  background-color: dodgerblue;
  border: 1px solid #ddd;
  color: white;
  cursor: pointer;
}

.form-inline button:hover {
  background-color: royalblue;
}

table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}


body{
  background-image:url("1.png") ;
}


img {
  display: block;
  margin-left: auto;
  margin-right: auto;
}
.card {
  
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.4);
  max-width: 500px;
  max-height: 1000px;
  margin: auto;
  text-align: center;
  font-family: arial;
  background-color: white;
}
body {
  background-image: url('b2.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: cover;
}

</style>
<body>


   
 
<div class="topnav" id="myTopnav">
   <a href="session1.php"><i class="fa fa-fw fa-home"></i>Home</a>
  <a href="equip.php" ><i class="fa fa-gears"></i> Equipments</a>
<a href="crops.php" ><i class="fas fa-seedling"></i> Crops</a>

  <a href="ritems.php" ><i class="fas fa-upload"></i> Rent</a>
  <a href="upf.php" ><i class="fas fa-upload"></i> Upload</a>

  
 <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
  
  
 
    <a style="float:right" href="session.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a>
     <a style="float:right" href="profile.php"><?php 
          

      $conn = mysqli_connect("localhost","root","","crop");
$s2=$_SESSION['temp'];

  $query2 = "SELECT NAME FROM farmer_log where AADHAR = '$s2'";
  $is_query_run = mysqli_query($conn,$query2);
  $row2 = mysqli_fetch_array($is_query_run);

    echo "welcome, ".$row2['NAME']; ?></a>
</div>

<br><br>
   <?php

      $conn = mysqli_connect("localhost","root","","crop");
$s=$_SESSION['temp'];

  $query = "SELECT * FROM farmer_log where AADHAR = '$s'";
   if ($is_query_run = mysqli_query($conn,$query))
     {

      // echo "Query Executed";
      // loop will iterate until all data is fetched
      while ($row = mysqli_fetch_array($is_query_run)) {

  ?>
  <div class="card">
<h1 style="text-align:center">Farmer Profile Card</h1>
<img src="logo.png" alt="Trulli" style="height:200px">

  <h2><b><?php echo "Name : ".$row['NAME']; ?></b></h2>
  <h2><b><?php echo "Contact : ".$row['MOBILE']; ?></b></h2>
  <h2><b><?php echo "Address : ".$row['ADDRESS']; ?></b></h2>
  <h2><b><?php echo "Aadhar No. : ".$row['AADHAR']; ?></b></h2>


 <?php
  }
}?>

    </div>   
<h2>PREVIOUS UPLOADS</h2>


<?php

      $conn = mysqli_connect("localhost","root","","crop");
$s1=$_SESSION['temp'];
?>
 
<table> <tr>
    <th>CROP NAME</th>
    <th>PRICE</th>
    <th>QUANTITY</th>
    <th>ACTION</th>
  </tr>
  <tr><?php
  $query1 = "SELECT * FROM cropup where Aadhar = '$s1'";
   if ($is_query_run1 = mysqli_query($conn,$query1))
     {

      // echo "Query Executed";
      // loop will iterate until all data is fetched
      while ($row1 = mysqli_fetch_array($is_query_run1)) {


  ?>
  
 
  
    <td><?php echo $row1['crop_name']; ?>
    </td>
   <td><?php echo $row1['price']; ?></td>
    <td><?php echo $row1['quantity']; ?></td>
    <td><form action="" method="get">
<input type="hidden" name="id" value=<?php $id=$row1['id'];  echo $id;?>>
    <button type="submit" value="DELETE" name="go" class="btn btn-danger btn-sm" style="font-size:10px">DELETE</button></form></td>
  </tr>
  
   <?php
  }
}?>  
  </table>  
 <?php
if(isset($_GET['go'])) {
  $s1=$_GET['id'];
  $query = "DELETE FROM cropup where id = '$s1'";
$is_query_run11 = mysqli_query($conn,$query);
  




}




 ?>   
 

    <script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>


</body>
</html>
