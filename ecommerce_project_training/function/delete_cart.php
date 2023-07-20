<?php  

$id = $_GET['id'];


include '../admin/function/connect.php';



$del = "DELETE FROM cart WHERE pro_id = $id" ;


$querydel = $conn -> query($del);



if ($querydel) {
	header("location: ../cart.php");
}else{
	echo	$conn -> error;
}






?>