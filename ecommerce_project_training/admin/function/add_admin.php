<?php 

echo "<pre>";


$name = $_POST['name'];
$email = $_POST['email'];
$password = md5($_POST['password']);
$address = $_POST['address'];
$phone = $_POST['phone'];
$gender = $_POST['gender'];
$priv = $_POST['priv_id'];


include "connect.php";

$insertadmin = "INSERT INTO admin 
                           (name, email, password, address, phone, gender, priv_id)
                           VALUES 
                           ('$name', '$email', '$password', '$address', '$phone', '$gender', '$priv')";

$query = $conn -> query($insertadmin);

header("location: ../admin.php?action=adminlist"); 

 ?>