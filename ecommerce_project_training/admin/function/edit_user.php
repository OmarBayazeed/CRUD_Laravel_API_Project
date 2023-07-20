<?php 

$id = $_POST['id'];
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$address = $_POST['address'];
$phone = $_POST['phone'];
$priv = $_POST['priv'];
$gender = $_POST['gender'];



include 'connect.php';

if (!empty($password)) {
    $pass = md5($password);
    $pass_update = "UPDATE user set password = '$pass' WHERE id = '$id' ";
    $conn -> query($pass_update);
}




$user_update = "UPDATE user set name = '$name',email = '$email', address = '$address',phone = '$phone', gender = '$gender' WHERE id = '$id' ";


$query = $conn -> query($user_update); 


if ($query) {
    header("location: ../user.php?action=userlist");
}else
{
    echo conn -> error ;
}



?>