<?php

$id = $_POST['primaryid'];
$genrename = $_POST['genrename'];
$genreid = $_POST['genreid'];
$catid = $_POST['catid'];



include 'connect.php';






$genre_update = "UPDATE genre set genre_name = '$genrename',genre_id = '$genreid',category_id = '$catid' WHERE id = '$id' ";


$query = $conn -> query($genre_update); 


if ($query) {
	header("location: ../index.php?action=genre");
}else
{
	echo "<script>alert('something went wrong');window.location.href='../index.php?action=genre'</script>";
}



?>