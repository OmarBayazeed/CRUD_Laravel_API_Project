<?php 

session_start();
unset($_SESSION['login_succesful2']);

unset($_SESSION['registered_user']);



header("location: ../index.php");


 ?>