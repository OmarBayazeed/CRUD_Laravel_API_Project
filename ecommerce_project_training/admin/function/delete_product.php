<?php  

$id = $_GET['id'];


include 'connect.php';



$del = "DELETE FROM product WHERE id = $id" ;


$querydel = $conn -> query($del);



if ($querydel) {
	header("location: ../product.php?action=productlist");
}else{
	echo	$conn -> error;
}






?>