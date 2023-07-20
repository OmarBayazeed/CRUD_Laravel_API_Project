<?php 

echo "<pre>";


$name = $_POST['cat_name'];



include "connect.php";

$insertcat = "INSERT INTO category 
                           (name)
                           VALUES 
                           ('$name')";

$query = $conn -> query($insertcat);

header("location: ../product.php?action=productlist"); 

 ?>