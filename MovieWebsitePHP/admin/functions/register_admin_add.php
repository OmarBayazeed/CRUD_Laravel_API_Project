<?php 

echo "<pre>";


$username = $_POST['username'];

$password = md5($_POST['password']);



include "connect.php";

$insertadmin = "INSERT INTO admin 
                           (username, password)
                           VALUES 
                           ('$username', '$password')";

$query = $conn -> query($insertadmin);


header('location: ../index.php?action=adminlist');



 ?>