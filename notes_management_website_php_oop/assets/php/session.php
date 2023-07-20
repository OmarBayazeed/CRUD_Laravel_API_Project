<?php 



session_start();


require_once 'auth.php';


$current_user = new Auth();


if (!isset($_SESSION['user'])) {
	header('location: index.php');
	die();
}

$current_email = $_SESSION['user'];


$data = $current_user->current_user($current_email);


$cid = $data['id'];
$cname = $data['name'];
$cpass = $data['password'];
$cphone = $data['phone'];
$cgender = $data['gender'];
$cdob = $data['dob'];
$cphoto = $data['photo'];                   
$created = $data['created_at'];
$verified = $data['verified'];

$first_name = strtok($cname, " ");


if ($verified == 0) {
	$verified = 'Not Verified!';
}
else{
	$verified = ' Verified!';
}





















 ?>