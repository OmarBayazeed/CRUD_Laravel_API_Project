<?php 


$username = $_POST['username'];
$password = md5($_POST['password']);


include 'connect.php';


$userselect = "SELECT * FROM admin WHERE username = '$username' AND password = '$password' ";

$query_login = $conn -> query($userselect);

$user = $query_login -> fetch_assoc();

$id = $user['id'];


if ($query_login -> num_rows > 0) {
	



	session_start();

	$_SESSION['login_succesful'] = $id;

	$_SESSION['username'] = $username;

	echo "<script>alert('logged in successfuly');window.location.href='../index.php'</script>";

}else{



	echo "<script>alert('login failed');window.location.href='../login.php'</script>";
	
}