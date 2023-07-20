<?php 



if (isset($_GET['cartitme']) && isset($_GET['cartitem']) == 'cart_item' ) {
    
    echo "string";

    $select_from_cart = "SELECT * FROM cart";

    $query = $conn -> query($select_from_cart);

    $rows = $query->num_rows;

    echo $rows;
}








 ?>