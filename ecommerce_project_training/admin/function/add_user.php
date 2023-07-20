<?php 

echo "<pre>";


$name = $_POST['name'];
$email = $_POST['email'];
$password = md5($_POST['password']);
$address = $_POST['address'];
$phone = $_POST['phone'];
$gender = $_POST['gender'];


include "connect.php";

$insertuser = "INSERT INTO user 
                           (name, email, password, address, phone, gender)
                           VALUES 
                           ('$name', '$email', '$password', '$address', '$phone', '$gender')";

$query = $conn -> query($insertuser);

$user = $query -> fetch_assoc();




if (isset($_GET['action']) && $_GET['action'] == 'website') {
    echo "<script>alert('regester successfuly');window.location.href='../../index.php'</script>"; 
 }else{
    header("location: ../user.php?action=userlist"); 
 }



 ?>