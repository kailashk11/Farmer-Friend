<?php
session_start();
error_reporting(E_ALL & ~ E_NOTICE);
require ('textlocal.class.php');

class Controller
{
    function __construct() {
        $this->processMobileVerification();
    }
    function processMobileVerification()
    {
        switch ($_POST["action"]) {
            case "send_otp":
                
                $mobile_number = $_POST['mobile_number'];
                $_SESSION['temp']=$mobile_number;
                $apiKey = urlencode('O+pnOSnHTrc-4rotEILcib9pIAZY64a2NXz8r90S5A');
                $Textlocal = new Textlocal(false, false, $apiKey);
                
                $numbers = array(
                    $mobile_number
                );
                $sender = 'TXTLCL';
                $otp = rand(100000, 999999);
                $_SESSION['session_otp'] = $otp;
                $message = "Your One Time Password is for Farmer Friend is " . $otp;
                
                try{
                    $response = $Textlocal->sendSms($numbers, $message, $sender);
                    require_once ("verification-form.php");
                    exit();
                }catch(Exception $e){
                    die('Error: '.$e->getMessage());
                }
                break;
                
            case "verify_otp":
                $otp = $_POST['otp'];
                
                if ($otp == $_SESSION['session_otp']) {
                    unset($_SESSION['session_otp']);
                    echo json_encode(array("type"=>"success", "message"=>"Your mobile number is verified!"));
                    header("location: crops.php");
                } else {
                    echo json_encode(array("type"=>"error", "message"=>"Mobile number verification failed"));
                }
                break;
        }
    }
}
$controller = new Controller();
?>