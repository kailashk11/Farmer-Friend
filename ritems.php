<link rel="icon" href="farming.png" type="image/png" sizes="16x16"><?php
error_reporting(E_ERROR | E_WARNING | E_PARSE);
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
.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 8px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  margin: 4px 2px;
  cursor: pointer;
}
.button1 {font-size: 12px;}
</style>
<body>


   
 
<div class="topnav" id="myTopnav">
     <a href="session1.php"><i class="fa fa-fw fa-home"></i>Home</a>
  <a href="equip.php"><i class="fa fa-gears"></i> Equipments</a>
<a href="crops.php" ><i class="fas fa-seedling"></i> Crops</a>

  <a href="ritems.php" class="active"><i class="fas fa-upload"></i> Rent</a>
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
<form class="form-inline"  >
  <label for="text">CITY:</label>
  <input style="width:39%;" type="text"  name="ct">
  <label for="text">EQUIPMENT</label>
  <input style="width:39%;" type="text"  name="eqp">
  
  <button type="submit">Submit</button>
</form>
   <div class="content">
           <div class="container">
               <div class="row">

                   <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">

                       <div class="row">
  <?php
  $var=10;
  $var1=20;
  $var=$_GET['ct'];
  $var1=$_GET['eqp'];

      $conn = mysqli_connect("localhost","root","","crop");


      if($var){
        if($var1){
          $query = "SELECT * FROM rent,shop_log where rent.AADHAR=shop_log.AADHAR AND farmer_log.District='$var' AND rent.ename='$var1'";
        }else{
          $query = "SELECT * FROM rent,shop_log where rent.AADHAR=shop_log.AADHAR AND farmer_log.District='$var'";
        }
      }else{
        if($var1){
          $query = "SELECT * FROM rent,shop_log where rent.AADHAR=shop_log.AADHAR AND rent.ename='$var1'";
        }
        $query = "SELECT * FROM rent,shop_log where rent.AADHAR=shop_log.AADHAR";
      }


  
   if ($is_query_run = mysqli_query($conn,$query))
     {

      // echo "Query Executed";
      // loop will iterate until all data is fetched
      while ($row = mysqli_fetch_array($is_query_run)) {

  ?>

                          <!-- product -->
                          <div class="col-lg-3.5 col-md-4 col-sm-6 col-xs-12 mb30">
                              <div class="product-block">
                                  <div class="product-img"><img src="<?php echo 'img2/'.$row['img']; ?>" alt="" style="height:200px"></div>
                                  <div class="product-content">
                                      <h5><a href="cart/cart.php" class="product-title"><b><?php echo $row['ename']; ?></b></a></h5>
                   <h5><b><?php echo "Shopkeeper name : ".$row['NAME']; ?></b></a></h5>
                    
                    <h5><b><?php echo "Price : ".$row['price']; ?></b></a></h5>
             <form action="cart/cart2.php" method="get">
                  <input type="hidden" name="id" value=<?php $id=$row['id'];  echo $id;?>>
                  <button type="submit" value="BUY" name="add" class="button button1" ><i class="fa fa-shopping-cart"></i> BUY</button>
                    </form>



                                  </div>
                              </div>
                          </div>
                          <!-- /.product -->

                          <!-- /.product -->


  <?php
  }
}?>
                       </div>
                   </div>
               </div>
           </div>
       </div>
       <!-- /.product-list -->

<?php

$_SESSION['cid']=$_GET['id'];

?>
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