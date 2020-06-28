<?php
error_reporting(E_ERROR | E_WARNING | E_PARSE);
session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="keywords" content="">
    <title> FARMER'S FRIEND </title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Style CSS -->
    <link href="css/style.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i" rel="stylesheet">
    <!-- FontAwesome CSS -->
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/jquery.desoslide.css" />
    <link rel="stylesheet" type="text/css" href="css/animate.min.css">
    <link href="css/scrolling-nav.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/jquery.rateyo.min.css">
    <link href="bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="bootstrap.min.js"></script>
<script src="jquery-1.11.1.min.js"></script>
<link rel="stylesheet" type="text/css" href="style1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<style>
   .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }

    .row.content {height: 450px;

    }

    .sidenav {
      padding-top: 20px;

      height: 100%;
    }
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }

   /
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;}
    }

     .but{
          background-color: orange;
           display: inline-block;
          font-size: 20px;
           box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);

    }
    .button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 4px 15px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  margin: 4px 2px;
  cursor: pointer;
}
    .button1 {font-size: 12px;}

    </style>
<body >
    <nav class="navbar navbar-inverse">
     <div class="container-fluid">

       <div class="collapse navbar-collapse" id="myNavbar">
         <ul class="nav navbar-nav">

           <li ><a href="../session1.php">Home</a></li>
           <li><a href="../e2.php">Equipments</a></li>
            
           <li ><a href="../c2.php">Crops</a></li>
             


         </ul>
         <ul class="nav navbar-nav navbar-right">
        <li class="active"><a href="../cus_prof.php"><?php 
          
 
      $conn5=mysqli_connect("localhost","root","","crop");
$s2=$_SESSION['temp'];


  $query2 = "SELECT NAME FROM customer_log where EMAIL = '$s2'";
  $is_query_run = mysqli_query($conn5,$query2);
  $row2 = mysqli_fetch_array($is_query_run);

    echo "welcome, ".$row2['NAME']; ?></a></li>

           <li><a href="../s2.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
         </ul>
       </div>
     </div>

</nav>
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                    <div class="box"><?php

   $x=$_GET['id'];
   $query5 = "SELECT * FROM rent where id = '$x'";
  $is_query_run = mysqli_query($conn5,$query5);
  $row2 = mysqli_fetch_array($is_query_run);



      ?>
                        <!-- product-description -->
                        <div class="box-body">
                            <div class="row">
                               
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                    <img src="<?php echo '../'.'img2/'.$row2['img']; ?>">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="product-single">
                                        <h2 style="font-size:300%;"><?php echo $row2['ename']; ?></h2>
                                        
                                        
                                        <p class="product-price" style="font-size: 38px;"><?php echo $row2['price']."/-"; ?></p>
                                        <p></p>
                                        <div class="product-quantity">
                                            <h5>Duration</h5>
                                            <div class="quantity mb20"><form action="" method="post">
                                            <input type="number" name="one">
                                            <button name="cal" value="get price" class="button button1">TOTAL <i class="fa fa-rupee" style="font-size:15px"></i></button>
                                            <input type="hidden" name="two" value="<?php echo $row2['price']; ?>">
                                                </form>
                                            </div>
                                        
                                        <h5 style="font-size:150%;"><?php
                                         if($_POST['cal'] == 'get price'){
                                          $to=$_POST['one'] * $_POST['two'];
                                           echo "Total: ".$to ;
                                           $_SESSION['amount']=$to;
                                         }

                                        ?></h5>
                                        <button type="submit" class="btn btn-default" onclick="window.location.href='../payment/pay.php';">BUY NOW</button>
                                        
                                   
                                </div>
                            </div>
                            
                   </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="box-head scroll-nav">
                        <div class="head-title"> <a class="page-scroll active" href="#product">Product Details</a>
                            </div>
                    </div>
                </div>
            </div>
            <!-- highlights -->
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="box" id="product">
                        <div class="box-body">
                            
                            <div class="highlights">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                       
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 mb30">
                                        <ul>
                                            <li>SOLD BY</li>
                                            <li>CONTACT</li>
                                            <li>ADDRESS</li>
                                            <li>DISTRICT</li>
                                            
                                        </ul>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 mb30">
                                    <?php
                                    $t=$row2['AADHAR'];
    $query6 = "SELECT * FROM shop_log where AADHAR = '$t'";
  $is_query_run = mysqli_query($conn5,$query6);
  $row3 = mysqli_fetch_array($is_query_run);
     


                                    ?>
                                        <ul>
                                            <li style="color: #1c1e1e;"><?php echo $row3['NAME']; ?></li>
                                            <li style="color: #1c1e1e;"><?php echo $row3['CONTACT']; ?></li>
                                            <li style="color: #1c1e1e;"><?php echo $row3['ADDRESS']; ?></li>
                                            <li style="color: #1c1e1e;"><?php echo $row3['District']; ?></li>
                                            
                                        </ul>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <h4>YOUR</h4>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                        <ul>
                                            <li>CONTACT</li>
                                            <li>ADDRESS</li>
                                           
                                            <li>DISTRICT</li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                    <?php
                                    $t1=$_SESSION['temp'];
    $query6 = "SELECT * FROM customer_log where EMAIL = '$t1'";
  $is_query_run = mysqli_query($conn5,$query6);
  $row3 = mysqli_fetch_array($is_query_run);
     
     ?>
                                        <ul>
                                            
                                            <li style="color: #1c1e1e;"><?php echo $row3['CONTACT']; ?></li>
                                            <li style="color: #1c1e1e;"><?php echo $row3['ADDRESS']; ?></li>
                                            <li style="color: #1c1e1e;"><?php echo $row3['District']; ?></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- rating reviews  -->
            




















        </div>
        <!-- /.product-description -->
    
    <!-- /.product-single -->
    </div>
    <!-- footer -->
    
<footer id="footer-Section">
  <div class="footer-top-layout">
    <div class="container">
      <div class="row">
        <div class="OurBlog">
          <h4>Thank You..</h4>
          <p>Feel Free To Contact Us..</p>
        </div>
        <div class=" col-lg-8 col-lg-offset-2">
          <div class="col-sm-4">
            <div class="footer-col-item">
              <h4>Quick Links</h4>
                <a href="#">About Us</a><br>
                <a href="#">Contact Us</a>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="footer-col-item">
              <h4>Reach Us</h4>
              <div class="item-contact"> <a href="tel:630-885-9200"><span class="link-id">P</span>:<span>630-885-9200</span></a> <a href="tel:630-839.2006"><span class="link-id">F</span>:<span>630-839.2006</span></a> <a href="mailto:info@brandcatmedia.com"><span class="link-id">E</span>:<span>info@brandcatmedia.com</span></a> </div>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="footer-col-item">
              <h4>Sign up for Newsletter</h4>
              <form class="signUpNewsletter" action="" method="get">
                <input name="" class="gt-email form-control" placeholder="You@ymail.com" type="text">
                <input name="" class="btn-go" value="Go" type="button">
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>
    <!-- /.footer -->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js" type="text/javascript"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <script src="js/menumaker.js" type="text/javascript"></script>
    <script type="text/javascript" src="js/jquery.sticky.js"></script>
    <script type="text/javascript" src="js/sticky-header.js"></script>
    <script type="text/javascript" src="js/scrolling-nav.js"></script>
    <script type="text/javascript" src="js/jquery.easing.min.js"></script>
    <script type="text/javascript" src="js/jquery.rateyo.min.js"></script>
    <script src="js/jquery.desoslide.js "></script>
    <script type="text/javascript">
    $('#slideshow').desoSlide({
        thumbs: $('ul.slideshow_thumbs li > a'),
        effect: {
            provider: 'animate',
            name: 'fade'
        }

    });
    </script>

    <script type="text/javascript">
        $(function () {
 
  $("#rateYo").rateYo({
    rating: 3.6,
    starWidth: "16px"
  });
 
});
        


    </script>


</body>

</html>