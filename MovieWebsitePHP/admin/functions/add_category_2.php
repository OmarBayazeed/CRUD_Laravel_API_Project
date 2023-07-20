
<?php 

echo "<pre>";



$catname = $_POST['catname'];

$catid = $_POST['catid'];

include 'connect.php';

$insertcategory = "INSERT INTO category 
                           (category_name, category_id)
                           VALUES 
                           ('$catname', '$catid')";

$query = $conn -> query($insertcategory);


header('location: ../index.php?action=category')



 ?>