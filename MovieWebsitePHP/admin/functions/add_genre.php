<?php 

echo "<pre>";



$genrename = $_POST['genrename'];

$genreid = $_POST['genreid'];

$catid = $_POST['catid'];

include 'connect.php';

$insertgenre = "INSERT INTO genre 
                           (genre_name, genre_id, category_id)
                           VALUES 
                           ('$genrename', '$genreid', '$catid')";

$query = $conn -> query($insertgenre);


header('location: ../index.php?action=genre')



 ?>