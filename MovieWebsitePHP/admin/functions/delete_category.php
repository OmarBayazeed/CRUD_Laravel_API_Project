<?php  

$id = $_GET['id'];


include 'connect.php';



$del = "DELETE FROM category WHERE id = $id" ;


$querydel = $conn -> query($del);



if ($querydel) {
	header("location: ../index.php?action=category");
}else{
	echo "<script>alert('something went wrong');window.location.href='../index.php?action=category'</script>";
}






?>