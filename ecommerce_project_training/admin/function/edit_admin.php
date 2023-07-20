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
    $pass_update = "UPDATE admin set password = '$pass' WHERE id = '$id' ";
    $conn -> query($pass_update);
}




$admin_update = "UPDATE admin set name = '$name',email = '$email', address = '$address',phone = '$phone', gender = '$gender', priv_id = '$priv' WHERE id = '$id' ";


$query = $conn -> query($admin_update); 


if ($query) {
    header("location: ../admin.php?action=adminlist");
}else
{
    echo conn -> error ;
}



?>