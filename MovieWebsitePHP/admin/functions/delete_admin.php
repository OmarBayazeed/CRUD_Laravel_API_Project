<?php  

$id = $_GET['id'];


include 'connect.php';



$del = "DELETE FROM admin WHERE id = $id" ;


$querydel = $conn -> query($del);



if ($querydel) {
	header("location: ../index.php?action=adminlist");
}else{
	echo	$conn -> error;
}






?>