<?php  

$id = $_GET['id'];


include 'connect.php';



$del = "DELETE FROM user WHERE id = $id" ;


$querydel = $conn -> query($del);



if ($querydel) {
	header("location: ../user.php?action=userlist");
}else{
	echo	$conn -> error;
}






?>