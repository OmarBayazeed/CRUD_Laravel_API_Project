<?php

$id = $_POST['primaryid'];
$catname = $_POST['catname'];
$catid = $_POST['catid'];




include 'connect.php';






$category_update = "UPDATE category set category_name = '$catname',category_id = '$catid' WHERE id = '$id' ";


$query = $conn -> query($category_update); 


if ($query) {
	header("location: ../index.php?action=category");
}else
{
	echo "<script>alert('something went wrong');window.location.href='../index.php?action=category'</script>";
}



?>