<?php 

echo "<pre>";

session_start();

 
if (isset($_SESSION['login_succesful2']) or isset($_SESSION['registered_user'])) {
    if (isset($_SESSION['login_succesful2'])) {

    $user_id = $_SESSION['login_succesful2'];

}else{

    $user_id = $_SESSION['registered_user'];
}




include "../admin/function/connect.php";


if (isset($_POST['pid'])) {
    $pid = $_POST['pid'];
    $pname = $_POST['pname'];
    $pprice = $_POST['pprice'];
    $pimg = $_POST['pimg'];
    $pqty = 1;

    $select_from_cart = "SELECT * FROM cart WHERE pro_code = $pid";
    $query = $conn -> query($select_from_cart);

    
    


    if ($query->num_rows > 0) {
        
        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
              <strong>item already added to your cart</strong>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>';

    }
    else{

        $insertcart = "INSERT INTO cart 
                           (pro_code, user_id,pro_name,pro_price,pro_img,qty)
                           VALUES 
                           ('$pid', '$user_id', '$pname', '$pprice', '$pimg', '$pqty' )";

        $query = $conn -> query($insertcart);

        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
              <strong>item added to your cart</strong>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>';
        

    }
}


}

else{
    echo "you should login first";
}







 ?>


 