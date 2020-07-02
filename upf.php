
<link rel="icon" href="farming.png" type="image/png" sizes="16x16">
<?php
session_start();
if(!isset($_SESSION['temp'])){
  header("location:farmer_log.php");
}

?>
<!DOCTYPE html>
<html lang="en">

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
body {
  background-image: url('b2.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: cover;
}
.new
{
  width:500px;
  height:600px; 
  padding-left:10px;
  padding-top: 40px;
  margin:0;
  background-color: white;
  box-shadow: 3px 3px #cccccc;
}


</style>
<body>


   
 
<div class="topnav" id="myTopnav">
 <a href="session1.php"><i class="fa fa-fw fa-home"></i>Home</a>
  <a href="equip.php"><i class="fa fa-gears"></i> Equipments</a>
<a href="crops.php" ><i class="fas fa-seedling"></i> Crops</a>

  <a href="ritems.php"><i class="fas fa-upload"></i> Rent</a>
  <a href="#" class="active"><i class="fas fa-upload"></i> Upload</a> 
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

<h2 style="text-align:center">Enter Details</h2>
<center>
<form style="float:center" action="cropi.php" enctype="multipart/form-data" method="post">

  CROP NAME:<br>
  <input type="text" name="cropn" >
  <br><br>
   QUANTITY:<br>
  <input type="number" name="quantity" >
  <br><br>
   PRICE:<br>
  <input type="number" name="price" >
  <br><br>
  IMAGE:<br><br>
  <input type="file" name="image" ><br>
  <input type="hidden" name="id" value="$id"><br>
  <button type="submit" class="btn btn-success " >save changes</button><br><br>



</form>


<script src="js1/jquery.min.js" type="text/javascript"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js1/bootstrap.min.js" type="text/javascript"></script>
    <script src="js1/menumaker.js" type="text/javascript"></script>
    <script type="text/javascript" src="js1/jquery.sticky.js"></script>
    <script type="text/javascript" src="js1/sticky-header.js"></script>
    <script type="text/javascript">
    (function($) {
        $(document).ready(function() {
            $('#cssmenu ul ul li:odd').addClass('odd');
            $('#cssmenu ul ul li:even').addClass('even');
            $('#cssmenu > ul > li > a').click(function() {
                $('#cssmenu li').removeClass('active');
                $(this).closest('li').addClass('active');
                var checkElement = $(this).next();
                if ((checkElement.is('ul')) && (checkElement.is(':visible'))) {
                    $(this).closest('li').removeClass('active');
                    checkElement.slideUp('normal');
                }
                if ((checkElement.is('ul')) && (!checkElement.is(':visible'))) {
                    $('#cssmenu ul ul:visible').slideUp('normal');
                    checkElement.slideDown('normal');
                }
                if ($(this).closest('li').find('ul').children().length == 0) {
                    return true;
                } else {
                    return false;
                }
            });
        });
    })(jQuery);



    </script>
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