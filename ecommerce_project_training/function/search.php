<?php 


include '../admin/function/connect.php';
$select_product = "SELECT * FROM product WHERE name LIKE '%".$_POST['proname']."%' ";
$query = $conn -> query($select_product);

if ($query -> num_rows > 0) {
	foreach ($query as $product) {
		

	echo "<a href='detail.php?id=".$product["id"]."'>" . $product['name'] . "</a><br>";


	}
}





















 ?>