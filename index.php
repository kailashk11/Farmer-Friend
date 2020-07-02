<?php


?>
<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.3.5, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="assets/images/logo2.png" type="image/x-icon">
  <meta name="description" content="Latest Bootstrap HTML Homepage Template - Free Download">
  <link rel="icon" href="farming.png" type="image/png" sizes="16x16">

  <title>FARMER'S FRIEND</title>
  <link rel="stylesheet" href="one.css">
  <link rel="stylesheet" href="two.css">
  <link rel="stylesheet" href="three.css">
  <link rel="stylesheet" href="four.css">
  <link rel="stylesheet" href="five.css">
  <link rel="stylesheet" href="six.css">
  <link rel="stylesheet" href="seven.css">
  <link rel="stylesheet" href="eight.css" type="text/css">
    <link href="bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="bootstrap.min.js"></script>
    <script src="jquery-1.11.1.min.js"></script>
    <link rel="stylesheet" type="text/css" href="style1.css">
</head>
<style>

  body
{
  font-family: Arial, Helvetica, sans-serif;
  font-size: 20px;
}

#myBtn {
  display: none;
  position: fixed;
  bottom: 20px;
  right: 30px;
  z-index: 99;
  font-size: 18px;
  border: none;
  outline: none;
  background-color: #428bca;
  color: black;
  cursor: pointer;
  padding: 10px;
  border-radius: 100px;
}

#myBtn:hover {
  background-color: #555;
}

.navbar {
  overflow: hidden;
  align-items: right;
  width: 11.2%;
  height: 100px;
  padding-top: 50px;
  padding-right: 10px;
}

.navbar1 {
  overflow: hidden;
  background-color: #333;
  position: fixed;
  height: 50px;
  top: 0;
  width: 100%;
}


</style>
<body>
  <div class="navbar" style="float: right;">
  
    <div id="google_translate_element"></div>

<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
}

</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    </div>


<button onclick="topFunction()" id="myBtn" title="Go to top">Back to Top</button>



<!-- Google Analytics -->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-PFK425"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-PFK425');


var mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
</script>
<!-- /Google Analytics -->



<section class="cid-qyvHxX98kc mbr-parallax-background" id="header2-5" data-rv-view="1346">
    <div class="mbr-overlay" style="opacity: 0.85; background-color: rgb(79, 73, 67);"><img src="back.jpg" style="width:100%" style="height:100%" ></img></div>
    <div class="container align-center" >
        <div class="row justify-content-md-center">
            <div class="mbr-white col-md-10">
                <h1 class="mbr-section-title mbr-bold pb-3 mbr-fonts-style display-7"><span style="font-weight: normal;"></span></h1>
                <h3 class="mbr-section-subtitle align-center mbr-light pb-3 mbr-fonts-style display-1"><strong>
                    Farmer Friend</strong></h3>
                <p class="mbr-text pb-3 mbr-fonts-style display-7">
                    We Care For EveryOne!</p
            </div>
        </div>
    </div>
    
</section>



<?php

      $conn = mysqli_connect("localhost","root","","crop");

  $query = "SELECT state,commodity,MAX(min_price),MIN(max_price) FROM datafile GROUP BY state,commodity ";
   if ($is_query_run = mysqli_query($conn,$query))
     {

      // echo "Query Executed";
      // loop will iterate until all data is fetched
      
  ?>


</div>


<div class="navbar1">
   <marquee direction="left" style="color:white; font-size:30px;" scrollamount="15"><?php
       while ($row = mysqli_fetch_array($is_query_run)) {

         echo ucwords($row['state'].":".$row['commodity']."(".$row['MAX(min_price)']."-".$row['MIN(max_price)'].")"."/KG"."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;");
      }?>
</marquee>
</div>
<?php
}
?>

<section class="features2 cid-qyvQ2gAtvk" id="features2-7" data-rv-view="1349">   
    <div class="container">
        <div class="media-container-row">
            <div class="card p-3 col-12 col-md-6 col-lg-4">
                <div class="card-wrapper">
                    <div class="card-img">
                        <img src="img4.jpg" alt="Farmer" title="" media-simple="true">
                    </div>
                    <div class="card-box">
                        <a href="farmer_log.php"><b><u>FARMER</u></b></a>
                    </div>
                </div>
            </div>

            <div class="card p-3 col-12 col-md-6 col-lg-4">
                <div class="card-wrapper">
                    <div class="card-img">
                        <img src="img5.jpg" alt="Customer" title="" media-simple="true">
                    </div>
                    <div class="card-box ">
                        <a href="customer_log.php"><b><u>CUSTOMER</u></b></a>
                    </div>
                </div>
            </div>

            <div class="card p-3 col-12 col-md-6 col-lg-4">
                <div class="card-wrapper">
                    <div class="card-img">
                        <img src="img8.jpg" alt="Shopkeeper" title="" media-simple="true">
                    </div>
                    <div class="card-box">
                        <a href="shop_log.php"><b><u>RETAILER</u></b></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> 


<section class="features11 cid-qyw25LhjY4" id="features11-d" data-rv-view="1352">   

    <div class="container">   
        <div class="col-md-12">
            <div class="media-container-row">
                <div class="mbr-figure" style="width: 50%;">
                    <img src="img9.jpg"  alt="TeamFlash" title="" media-simple="true">
                </div>
                <div class=" align-left">
                    <h2 class="mbr-title pt-2 mbr-fonts-style display-2">More info</h2>
                    <div class="mbr-section-text">
                        <p class="mbr-text mb-5 pt-3 mbr-light mbr-fonts-style display-5" >Contact us for enquiry or help.</p>
                    </div>

                    <div class="block-content">
                        <div class="card p-3 pr-3">
                            <div class="media">
                                     
                                <div class="media-body">
                                    <h4 class="card-title mbr-fonts-style display-5" style="font-size: 15px>Our Approach</h4>
                                </div>
                            </div>                

                            <div class="card-box">
                                <p class="block-text mbr-fonts-style display-7"><span style="font-size: 15.2px;">The risks farmers face have been increasing for years. Both production and price risks are creating ongoing agrarian distress.  But even during normal years, farm harvest prices have fallen steeply, badly affecting farmer incomes.Kisaan Mitra is an platform for Farmers,customers and retailers to buys and sell their goods at Better Rates.<br>
                                </span><br></p>
                            </div>
                        </div>

                        <div class="card p-3 pr-3">
                            <div class="media">
                                     
                                <div class="media-body">
                                    <h4 class="card-title mbr-fonts-style display-5" style="font-size: 15px"><b>Help</b></h4>
                                </div>
                            </div>                

                            <div class="card-box">
                                <p class="block-text mbr-fonts-style display-7" style="font-size: 15px"><b>SUPPORT HELPLINE:</b><br>
                                	Phone support hours<br>

    10AM to 10PM - All 7 days<br></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
    </div>          
</section>


<footer id="footer-Section">
  <div class="footer-top-layout">
    <div class="container">
      <div class="row">
        <div class="OurBlog">
          <h4>FARMER'S FRIEND</h4>
          <img src="farming.png" height="175" width="175">
        </div>
        <div class=" col-lg-8 col-lg-offset-2">
          <div class="col-sm-4">
            <div class="footer-col-item">
              <h4>Quick Links</h4>
                <a href="temp/aboutus.html">About Us</a><br>
                <a href="contact-us.html">Contact Us</a>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="footer-col-item">
              <h4>Reach Us</h4>
              <div class="item-contact"> <a href="tel:630-885-9200"><span class="link-id">Phone:</span>:<span>9834514547</span></a> <a href="tel:630-839.2006"><span class="link-id">Fax:</span>:<span>630-839.2020</span></a> <a href="mailto:info@farmerfriend.com"><span class="link-id">Email:</span>:<span>admin@kisaanmitra.rf.gd</span></a> </div>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="footer-col-item">
              <h4>Sign up for Newsletter</h4>
              <form class="signUpNewsletter" action="" method="get">
                <input name="" class="gt-email form-control" placeholder="You@youremail.com" type="text">
                <input name="" class="btn-go" value="Go" type="button">
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>


<section class="mbr-section content4 cid-qxWA1sL9mH" id="content4-oq" data-rv-view="9508">
    <div class="container">
        <div class="media-container-row">
            
        </div>
    </div>
</section>

  <script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/popper/popper.min.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/smooth-scroll/smooth-scroll.js"></script>
  <script src="assets/dropdown/js/script.min.js"></script>
  <script src="assets/touch-swipe/jquery.touch-swipe.min.js"></script>
  <script src="assets/jarallax/jarallax.min.js"></script>
  <script src="assets/theme/js/script.js"></script>

  
</body>
</html>