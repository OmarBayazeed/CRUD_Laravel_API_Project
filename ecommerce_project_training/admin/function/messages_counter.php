<?php  



if (isset($_POST['data'])) {


	include "connect.php";

	$select_messages = "SELECT * FROM messages WHERE statue = 'unseen'";

	$query = $conn -> query($select_messages);

	



	if ($query -> num_rows > 0) {

		echo $query -> num_rows;

	}else{

		echo "0";

	}



}


if (isset($_POST['update'])) {

	include "connect.php";

	$id = $_POST['id'];

	$messages_update = "UPDATE messages set statue = 'seen' WHERE id = '$id' ";

	$query = $conn -> query($messages_update); 

}

























?>