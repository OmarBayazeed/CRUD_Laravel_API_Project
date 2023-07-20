<?php 


$email = $_POST['email'];
$password = md5($_POST['password']);


include '../admin/function/connect.php';


$userselect = "SELECT * FROM user WHERE email = '$email' AND password = '$password' ";

$query_login = $conn -> query($userselect);

$user = $query_login -> fetch_assoc();

$id = $user['id'];

$username = $user['name'];

if ($query_login -> num_rows > 0) {
	



	session_start();

	unset($_SESSION['registered_user']);

	$_SESSION['login_succesful2'] = $id;

	$_SESSION['email'] = $email;

	$_SESSION['username2'] = $username;


	echo "<script>alert('logged in successfuly');window.location.href='../index.php'</script>";

}else{



	echo "<script>alert('login failed');window.location.href='../login.php'</script>";
	
}











