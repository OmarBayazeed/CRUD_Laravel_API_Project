<?php  

$id = $_GET['id'];


include 'connect.php';



$del = "DELETE FROM genre WHERE id = $id" ;


$querydel = $conn -> query($del);



if ($querydel) {
	header("location: ../index.php?action=genre");
}else{
	echo "<script>alert('something went wrong');window.location.href='../index.php?action=genre'</script>";
}






?>