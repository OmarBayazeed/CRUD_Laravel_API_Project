<?php 

session_start();
unset($_SESSION['login_succesful']);



header("location: ../login.php");


 ?>