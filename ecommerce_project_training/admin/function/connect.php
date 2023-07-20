<?php  


$conn = new mysqli('localhost', 'root', '', 'print_training');


$conn -> set_charset('utf8');


if (!$conn) {
	echo $conn -> connect_error;
}









?>