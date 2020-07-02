<!DOCTYPE html>
<html>
<head>
<style>
	table, th, td {
	border: 2px solid black;
  }
.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}=
.button3 {border-radius: 8px;}
</style>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />

</head>
<body>
<h2>Farmer's Info</h2>

</body>
</html>







<?php
	$output = '';
   $conn = new mysqli("sql110.epizy.com","epiz_25071388","farmersFriend","epiz_25071388_crop");

   if(! $conn ) {
      die('Could not connect: ' . mysql_error());
   }

   $cname=$_GET['cname'];
   $sql = "SELECT Name FROM crop where crop_name=$cname";
   $retval1 = mysqli_query($conn,$sql);
   $row=mysql_fetch_row($retval1);
   $sql1= "SELECT NAME,ADDRESS,CONTACT FROM farmer_log where NAME=$row UNION SELECT price FROM crop where crop_name=$cname";
   $retval = mysqli_query($conn,$sql1);
if(mysqli_num_rows($retval) > 0)
{
	 $output .= '<div style="overflow-x:auto;">
	 				<div class="table">
					 <table class="table">
						<tr>
							<th> Name</th>
							<th>Address</th>
							<th>Contact</th>
                             <th>Price</th>
						</tr></div>';
	while($row = mysqli_fetch_array($retval))
	{
		$output .= '
			<tr>
				<td>'.$row["NAME"].'</td>
				<td>'.$row["ADDRESS"].'</td>
				<td>'.$row["CONTACT"].'</td>
				<td>'.$row["price"].'</td>

			</tr>
		';
	}
	echo $output;
}
else
{
	echo 'Data Not Found';
}
?>
