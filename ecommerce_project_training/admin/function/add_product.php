<?php 

echo "<pre>";



$name = $_POST['productname'];
$price = $_POST['price'];
$sale = $_POST['sale'];
$cat_id = $_POST['cat_id'];


$imgArray = [];

for ($i=0; $i <3 ; $i++) 

{



$img = $_FILES['img']['name'][$i];
$temp = $_FILES['img']['tmp_name'][$i];




if ($_FILES['img']['error'][$i] == 0) {
    
    $extensions = ['jpg','jpeg','png','gif'];

    $ext = pathinfo($img , PATHINFO_EXTENSION);

    if (in_array($ext, $extensions)) {

        if ($_FILES['img']['size'][$i] <= 4000000) {
            
            $new_name = md5(uniqid()) . "." . $ext;

            array_push($imgArray,$new_name);

            move_uploaded_file($temp, "../images/" . $new_name);

        }else{
            echo "size is too big";
        }
        
    }else{
        echo "extensions doesn't allowed";
    }

}




}




$x = implode(',', $imgArray);



include "connect.php";

$insertproduct = "INSERT INTO product 
                           (name, price, sale, img, cat_id)
                           VALUES 
                           ('$name', '$price', '$sale', '$x', '$cat_id')";

$query = $conn -> query($insertproduct);


if ($query) {
    header("location: ../product.php?action=productlist"); 
}else{
    echo $conn -> error;
}



 ?>