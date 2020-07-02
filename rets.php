  <?php
session_start();
    $conn = mysqli_connect("localhost","root","","crop");

    $un = $_GET['contact'];
    $pw = $_GET['aadhar'];
       
      $_SESSION['contact']=$un;
   $_SESSION['aadhar']=$pw;

      $s1="SELECT CONTACT,AADHAR FROM shop_log WHERE CONTACT='$un' AND AADHAR='$pw'";
      
    
    $query = mysqli_query($conn,$s1 );



  $user=mysqli_fetch_array($query);
  	   if ($user) {
  	   $_SESSION["CONTACT"] = $user["CONTACT"];

  	   			if(!empty($_GET['remember'])) {
  	   				setcookie ("login",$_GET["contact"],time()+ (10 * 365 * 24 * 60 * 60));
  	   			} else {
  	   				if(isset($_COOKIE["login"])) {
  	   					setcookie ("login","");
  	   				}
			}
      echo "<script type='text/javascript'>alert('Login Sucessfully'); </script>";
      header("location:c1.php");
      $_SESSION['temp']=$pw;

  } else {
      echo "<script type='text/javascript'>alert('Invalid Credentials'); window.location.href='shop_log.php';</script>";
}
    ?>