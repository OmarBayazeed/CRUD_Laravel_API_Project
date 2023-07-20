<?php 

echo "<pre>";



$mvname = $_POST['mvname'];

$mvdesc = $_POST['mvdesc'];

$mvtag = $_POST['mvtag'];

$mvlink1 = $_POST['mvlink1'];

$mvlink2 = $_POST['mvlink2'];

$mvlang = $_POST['mvlang'];

$mvdirector = $_POST['mvdirector'];

$metadesc = $_POST['metadesc'];

$date = date('Y-m-d' , strtotime($_POST['date']));

$img = $_FILES['img']['name'];
$temp = $_FILES['img']['tmp_name'];

$genreid = $_POST['genreid'];

$catid = $_POST['catid'];



if ($_FILES['img']['error'] == 0) {
    
    $extensions = ['jpg','jpeg','png','gif'];

    $ext = pathinfo($img , PATHINFO_EXTENSION);

    if (in_array($ext, $extensions)) {

        if ($_FILES['img']['size'] <= 4000000) {
            
            $new_name = md5(uniqid()) . "." . $ext;

            move_uploaded_file($temp, "../images/" . $new_name);

        }else{
            echo "size is too big";
        }
        
    }else{
        echo "extensions doesn't allowed";
    }

}






include 'connect.php';

$insertmovie = "INSERT INTO movie 
                           (name, description, tag, link1, link2, language, director, meta_description, the_date, image, genre_id, category_id)
                           VALUES 
                           ('$mvname' ,'$mvdesc' ,'$mvtag' ,'$mvlink1' ,'$mvlink2' ,'$mvlang' ,'$mvdirector' ,'$metadesc' ,'$date' ,'$new_name' ,'$genreid' ,'$catid')";

$query = $conn -> query($insertmovie);


if ($query) {
    header('location: ../index.php?action=movielist') ;
}else{
    echo $conn -> error;
}



 ?>