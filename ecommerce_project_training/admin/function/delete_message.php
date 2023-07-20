<?php  

$id = $_GET['id'];


include 'connect.php';



$del = "DELETE FROM messages WHERE id = $id" ;


$querydel = $conn -> query($del);



if ($querydel) {
	header("location: ../messages.php?action=messageslist");
}else{
	echo	$conn -> error;
}






?>