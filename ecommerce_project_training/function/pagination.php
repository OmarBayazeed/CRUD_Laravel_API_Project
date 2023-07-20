<?php 

// database connection 

include "../admin/function/connect.php";



// fetch limit data code


$limit = 3;

$page = 0;

$output = '';

if (isset($_POST['page'])) {
	$page = $_POST['page'];
}else{
	$page = 1;
}




$start_from = ($page - 1) * $limit;


if (isset($_POST['cat_id'])) {

  $cat_id = $_POST['cat_id'];
  $select_product = "SELECT * FROM product WHERE cat_id = $cat_id";
  echo "string2";
}

if (isset($_POST['page'])) {

  $select_product = "SELECT * FROM product LIMIT $limit OFFSET $start_from" ;
  echo "string";
}


if (isset($_POST['page']) && isset($_POST['cat_id'])) {

  $select_product = "SELECT * FROM product WHERE cat_id = $cat_id LIMIT $limit OFFSET $start_from";

}




//           from out
// if (!isset($_POST['cat_id'])) {

//       if (isset($_POST['sort'])) {
//         if ($_POST['sort'] == "low-high") {
//           $sort_option = "ASC";
//         }elseif ($_POST['sort'] == "high-low") {
//           $sort_option = "DESC";
//         }
      
//         $select_product = "SELECT * FROM product ORDER BY price $sort_option LIMIT $limit OFFSET $start_from" ;
//       }else{

//         $select_product = "SELECT * FROM product LIMIT $limit OFFSET $start_from" ;
//       }
      
//     }else{
//       $cat_id = $_POST['cat_id'];
//       if (isset($_POST['sort'])) {
//         if ($_POST['sort'] == "low-high") {
//           $sort_option = "ASC";
//         }elseif ($_POST['sort'] == "high-low") {
//           $sort_option = "DESC";
//         }
      
//       $select_product = "SELECT * FROM product WHERE cat_id = $cat_id ORDER BY price $sort_option LIMIT $limit OFFSET $start_from" ;
//       }else{
//         $select_product = "SELECT * FROM product WHERE cat_id = $cat_id LIMIT $limit OFFSET $start_from";
//       }

//     }
//           //from out


                                
$query = $conn -> query($select_product);



if ($query -> num_rows > 0) {
	while ($product = $query -> fetch_assoc()) {

		$output .= '<div class="col-lg-4 col-sm-6">
                    <div class="product text-center">
                      <div class="mb-3 position-relative">
                        <div class="badge text-white badge-"></div>
                        <a class="d-block" href="detail.php?id='.  $product['id'] .' ?>"><img class="img-fluid w-100" src="admin/images/'.  $product["img"] .'" alt="..."></a>
                        <div class="product-overlay">
                          <ul class="mb-0 list-inline">
                            <li class="list-inline-item m-0 p-0"><a class="btn btn-sm btn-outline-dark" href="#"><i class="far fa-heart"></i></a></li>

                            <form action="" class="form-submit">

                            <input type="hidden" class="pid" value="'.  $product['id'] .'">

                            <input type="hidden" class="pname" value="'.  $product['name'] .'">

                            <input type="hidden" class="pprice" value="'.  $product['price'] .'">

                            <input type="hidden" class="pimg" value="'.  $product['img'] .'">


                            <li class="list-inline-item m-0 p-0"><button type="button" class="btn btn-sm btn-dark additembtn">Add to cart</button></li>
                          
                          </form>

                            <li class="list-inline-item mr-0"><a class="btn btn-sm btn-outline-dark" href="#s'.  $product['id'] .' " data-toggle="modal"><i class="fas fa-expand"></i></a></li>
                          </ul>
                        </div>
                      </div>
                      <h6> <a class="reset-anchor" href="detail.php?id='.  $product['id'] .'">'.  $product['name'] .'</a></h6>
                      <p class="small text-muted">$'.number_format($product['price']) .'</p>
                    </div>
                  </div>';
	}
}else{

	$output .= "there is no products";

}

// pagination code


$select_product = "SELECT * FROM product";

$query = $conn -> query($select_product);

$total_records = $query -> num_rows;

$total_pages = ceil($total_records/$limit);

$output .= '<ul class="pagination">';

if ($page > 1) {
  $previous = $page - 1;
  $output .= '<li class="page-item" id = "1"><span class="page-link">First page</span></li>';
  $output .= '<li class="page-item" id = "'.$previous.'"><span class="page-link"><i class="fa fa-arrow-left"></i></span></li>';
}

for ($i=1; $i <= $total_pages ; $i++) { 
  $active_class = "";
  if ($i == $page) {
    $active_class = "active";
  }
  $output .= '<li class="page-item" id = "'.$i.'" '.$active_class.' ><span class="page-link">'.$i.'</span></li>';
}

if ($page < $total_pages) {
  $page++;
  $output .= '<li class="page-item" id = "'.$page.'"><span class="page-link"><i class="fa fa-arrow-right"></i></span></li>';
  $output .= '<li class="page-item" id = "'.$total_pages.'"><span class="page-link">Last page</span></li>';
}

$output .= '</ul>';



echo $output;

?>


