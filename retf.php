  <?php
session_start();
  
    $conn = mysqli_connect("localhost","root","","crop");

    $un = $_GET['contact'];
    $pw = $_GET['aadhar'];
    
   $_SESSION['contact']=$un;
   $_SESSION['aadhar']=$pw;
    
    $q1 = "SELECT MOBILE,AADHAR FROM farmer_log WHERE MOBILE='$un' AND AADHAR='$pw'";
    if(!isset($_COOKIE["member_login1"])){
    	$q1 .="AND AADHAR= '" . $pw . "'";
    }
    $result=mysqli_query($conn,$q1);

    $user=mysqli_fetch_array($result);
	   if ($user) {
	   $_SESSION["MOBILE"] = $user["MOBILE"];

	   			if(!empty($_GET['remember'])) {
	   				setcookie ("member_login1",$_GET["contact"],time()+ (10 * 365 * 24 * 60 * 60));
	   			} else {
	   				if(isset($_COOKIE["member_login1"])) {
	   					setcookie ("member_login1","");
	   				}
			}
	       echo "<script type='text/javascript'>alert('Login Successfully');</script>";
        $_SESSION['temp']=$pw;
        header("location:equip.php");
      
	   }
	   else {
	       echo "<script type='text/javascript'>alert('Invalid Credentials'); window.location.href='farmer_log.php';</script>";
}
  
    ?>