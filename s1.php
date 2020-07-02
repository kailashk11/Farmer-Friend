<?php
session_start();
unset($_SESSION['temp']);
session_destroy();

  header("location:shop_log.php");


?>