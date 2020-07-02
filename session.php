<?php
session_start();
unset($_SESSION['temp']);
session_destroy();
header("location:farmer_log.php");


?>