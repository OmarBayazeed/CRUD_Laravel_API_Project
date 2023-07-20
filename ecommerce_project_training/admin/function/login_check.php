<?php 


$username = $_POST['username'];
$password = md5($_POST['password']);


include 'connect.php';


$adminselect = "SELECT * FROM admin WHERE name = '$username' AND password = '$password' ";

$query_login = $conn -> query($adminselect);

$admin = $query_login -> fetch_assoc();

$id = $admin['id'];

$priv = $admin['priv_id'];

$privselect = "SELECT * FROM privliges WHERE id = '$priv'";

$query_priv = $conn -> query($privselect);

$privliges = $query_priv -> fetch_assoc();

$number_of_priv = $privliges['priv'];

if ($query_login -> num_rows > 0) {
	



	session_start();

	$_SESSION['login_succesful'] = $id;

	$_SESSION['username'] = $username;

	$_SESSION['priv_id'] = $priv;

	$_SESSION['priv'] = $number_of_priv;

	echo "<script>alert('logged in successfuly');window.location.href='../index.php'</script>";

}else{



	echo "<script>alert('login failed');window.location.href='../login.php'</script>";
	
}