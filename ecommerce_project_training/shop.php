<?php 

include "includes/header.php";

 ?>



      
      <div class="container">
        <!-- HERO SECTION-->
        <section class="py-5 bg-light">
          <div class="container">
            <div class="row px-4 px-lg-5 py-lg-4 align-items-center">
              <div class="col-lg-6">
                <h1 class="h2 text-uppercase mb-0">Shop</h1>
              </div>
              <div class="col-lg-6 text-lg-right">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb justify-content-lg-end mb-0 px-0">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Shop</li>
                  </ol>
                </nav>
              </div>
            </div>
          </div>
        </section>

<!-------- serach bar -------->
        
<br>
<br>
<i class='fa fa-search text-black' data-toggle="modal" data-target="#exampleModal" style="font-size: 30px; cursor: pointer;"></i>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <input type="search" class="form-control w-50 the-search-bar" placeholder="search for any product">

      </div>
      <div class="modal-body search-result">

        
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
        
        
<!-------- //serach bar -------->
        <section class="py-5">
          <div class="container p-0">
            <div class="row">
              <!-- SHOP SIDEBAR-->
              <div class="col-lg-3 order-2 order-lg-1 " >
                <h5 class="text-uppercase mb-4">Categories</h5>

                <ul class="list-unstyled small text-muted pl-lg-4 font-weight-normal">
                  <li class="mb-2"><a class="reset-anchor" href="shop.php">all</a></li>
                </ul>
                    <?php  


                    include 'admin/function/connect.php';
                    $select_category = "SELECT * FROM category";
                    $query = $conn -> query($select_category);
                    foreach ($query as $category) {
                      
                    $id = $category['id']

                    ?>
                  
                    <ul class="list-unstyled small text-muted pl-lg-4 font-weight-normal">
                      <li class="mb-2 " ><a class="reset-anchor cat_id" style="cursor: pointer;" cat_id = <?php echo $id ?> ><?php echo $category['name'] ?></a></li>
                    </ul>

                    <?php } ?>

                
                <h6 class="text-uppercase mb-4">Price range</h6>
                <div class="price-range pt-4 mb-5">
                  <div id="range"></div>
                  <div class="row pt-2">
                    <div class="col-6"><strong class="small font-weight-bold text-uppercase">From</strong></div>
                    <div class="col-6 text-right"><strong class="small font-weight-bold text-uppercase">To</strong></div>
                  </div>
                </div>
                <h6 class="text-uppercase mb-3">Show only</h6>
                <div class="custom-control custom-checkbox mb-1">
                  <input class="custom-control-input" id="customCheck1" type="checkbox">
                  <label class="custom-control-label text-small" for="customCheck1">Returns Accepted</label>
                </div>
                <div class="custom-control custom-checkbox mb-1">
                  <input class="custom-control-input" id="customCheck2" type="checkbox">
                  <label class="custom-control-label text-small" for="customCheck2">Returns Accepted</label>
                </div>
                <div class="custom-control custom-checkbox mb-1">
                  <input class="custom-control-input" id="customCheck3" type="checkbox">
                  <label class="custom-control-label text-small" for="customCheck3">Completed Items</label>
                </div>
                <div class="custom-control custom-checkbox mb-1">
                  <input class="custom-control-input" id="customCheck4" type="checkbox">
                  <label class="custom-control-label text-small" for="customCheck4">Sold Items</label>
                </div>
                <div class="custom-control custom-checkbox mb-1">
                  <input class="custom-control-input" id="customCheck5" type="checkbox">
                  <label class="custom-control-label text-small" for="customCheck5">Deals &amp; Savings</label>
                </div>
                <div class="custom-control custom-checkbox mb-4">
                  <input class="custom-control-input" id="customCheck6" type="checkbox">
                  <label class="custom-control-label text-small" for="customCheck6">Authorized Seller</label>
                </div>
                <h6 class="text-uppercase mb-3">Buying format</h6>
                <div class="custom-control custom-radio">
                  <input class="custom-control-input" id="customRadio1" type="radio" name="customRadio">
                  <label class="custom-control-label text-small" for="customRadio1">All Listings</label>
                </div>
                <div class="custom-control custom-radio">
                  <input class="custom-control-input" id="customRadio2" type="radio" name="customRadio">
                  <label class="custom-control-label text-small" for="customRadio2">Best Offer</label>
                </div>
                <div class="custom-control custom-radio">
                  <input class="custom-control-input" id="customRadio3" type="radio" name="customRadio">
                  <label class="custom-control-label text-small" for="customRadio3">Auction</label>
                </div>
                <div class="custom-control custom-radio">
                  <input class="custom-control-input" id="customRadio4" type="radio" name="customRadio">
                  <label class="custom-control-label text-small" for="customRadio4">Buy It Now</label>
                </div>
              </div>
              <!-- SHOP LISTING-->

              <div class="col-lg-9 order-1 order-lg-2 mb-5 mb-lg-0">
                <div class="row mb-3 align-items-center">
                  <div class="col-lg-6 mb-2 mb-lg-0">
                    <p class="text-small text-muted mb-0">Showing 1–12 of 53 results</p>
                  </div>
                  <div class="col-lg-6">
                    <ul class="list-inline d-flex align-items-center justify-content-lg-end mb-0">
                      <li class="list-inline-item text-muted mr-3"><a class="reset-anchor p-0" href="#"><i class="fas fa-th-large"></i></a></li>
                      <li class="list-inline-item text-muted mr-3"><a class="reset-anchor p-0" href="#"><i class="fas fa-th"></i></a></li>
                      <li class="list-inline-item">

                        <select class="selectpicker ml-auto" name="sort" data-width="200" data-style="bs-select-form-control" data-title="Default sorting" onchange="this.parentElement.parentElement.submit()">
                          <option value="default">Default sorting</option>
                          <option value="low-high" <?php if (isset($_POST['sort']) && $_POST['sort'] == "low-high") {echo "selected";} ?>>Price: Low to High</option>
                          <option value="high-low" <?php if (isset($_POST['sort']) && $_POST['sort'] == "high-low") {echo "selected";} ?>>Price: High to Low</option>
                        </select>

                      </li>
                    </ul>
                  </div>
                </div>
                <div id="message"></div>
                <div class="row" id="get-data">
                  <?php
                  $limit = 3;
                  $page = 1;
                  $start_from = ($page - 1) * $limit;
                  include 'admin/function/connect.php';
                  $select_product = "SELECT * FROM product LIMIT $limit OFFSET $start_from" ;
                  $query = $conn -> query($select_product);
                  foreach ($query as $product) {
                    
                  

                  ?>
            <div class="col-xl-3 col-lg-4 col-sm-6">
              <div class="product text-center">
                <div class="position-relative mb-3">
                  <div class="badge text-white badge-"></div><a class="d-block" href="detail.html"><img class="img-fluid w-100" src="admin/images/<?php echo $product['img'] ?>" alt="..."></a>
                  <div class="product-overlay">
                    <ul class="mb-0 list-inline">
                      <li class="list-inline-item m-0 p-0"><a class="btn btn-sm btn-outline-dark" href="#"><i class="far fa-heart"></i></a></li>
                      <li class="list-inline-item m-0 p-0"><a class="btn btn-sm btn-dark" href="cart.html">Add to cart</a></li>
                      <li class="list-inline-item mr-0"><a class="btn btn-sm btn-outline-dark" href="#productView" data-toggle="modal"><i class="fas fa-expand"></i></a></li>
                    </ul>
                  </div>
                </div>
                <h6> <a class="reset-anchor" href="detail.html"><?php echo $product['name'] ?></a></h6>
                <p class="small text-muted">$<?php echo $product['price'] ?></p>
              </div>
            </div>
          <?php } ?> 


                  <?php  
// pagination code

$limit = 3;

$page = 0;

$output = '';

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
                  


                </div>

              </div>
            </div>
          </div>
        </section>
      </div>

      <?php  


                  include 'admin/function/connect.php';
                  if (!isset($_GET['cat_id'])) {
                    $select_product = "SELECT * FROM product";
                  }else{
                    $cat_id = $_GET['cat_id'];
                    $select_product = "SELECT * FROM product WHERE cat_id = $cat_id";
                  }
                  $query = $conn -> query($select_product);
                  foreach ($query as $product) {
                    
                  

                  ?>

      <!--  Modal -->
      <div class="modal fade" id="s<?php echo $product['id']  ?>" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-body p-0">
              <div class="row align-items-stretch">
                <div class="col-lg-6 p-lg-0"><a class="product-view d-block h-100 bg-cover bg-center" style="background: url(admin/images/<?php echo $product['img'] ?>)" href="admin/images/<?php echo $product['img'] ?>" data-lightbox="productview" title="Red digital smartwatch"></a><a class="d-none" href="admin/images/<?php echo $product['img'] ?>" title="Red digital smartwatch" data-lightbox="productview"></a><a class="d-none" href="admin/images/<?php echo $product['img'] ?>" title="Red digital smartwatch" data-lightbox="productview"></a></div>
                <div class="col-lg-6">
                  <button class="close p-4" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                  <div class="p-5 my-md-4">
                    <ul class="list-inline mb-2">
                      <li class="list-inline-item m-0"><i class="fas fa-star small text-warning"></i></li>
                      <li class="list-inline-item m-0"><i class="fas fa-star small text-warning"></i></li>
                      <li class="list-inline-item m-0"><i class="fas fa-star small text-warning"></i></li>
                      <li class="list-inline-item m-0"><i class="fas fa-star small text-warning"></i></li>
                      <li class="list-inline-item m-0"><i class="fas fa-star small text-warning"></i></li>
                    </ul>
                    <h2 class="h4"><?php echo $product['name'] ?></h2>
                    <p class="text-muted">$<?php echo $product['price'] ?></p>
                    <p class="text-small mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In ut ullamcorper leo, eget euismod orci. Cum sociis natoque penatibus et magnis dis parturient montes nascetur ridiculus mus. Vestibulum ultricies aliquam convallis.</p>
                    <div class="row align-items-stretch mb-4">
                      <div class="col-sm-7 pr-sm-0">
                        <div class="border d-flex align-items-center justify-content-between py-1 px-3"><span class="small text-uppercase text-gray mr-4 no-select">Quantity</span>
                          <div class="quantity">
                            <button class="dec-btn p-0"><i class="fas fa-caret-left"></i></button>
                            <input class="form-control border-0 shadow-0 p-0" type="text" value="1">
                            <button class="inc-btn p-0"><i class="fas fa-caret-right"></i></button>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-5 pl-sm-0"><a class="btn btn-dark btn-sm btn-block h-100 d-flex align-items-center justify-content-center px-0" href="cart.php">Add to cart</a></div>
                    </div><a class="btn btn-link text-dark p-0" href="#"><i class="far fa-heart mr-2"></i>Add to wish list</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      <?php  

    }

      include 'includes/footer.php';


      ?>
      <!-- JavaScript files-->
      
      <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
      <script src="vendor/lightbox2/js/lightbox.min.js"></script>
      <script src="vendor/nouislider/nouislider.min.js"></script>
      <script src="vendor/bootstrap-select/js/bootstrap-select.min.js"></script>
      <script src="vendor/owl.carousel2/owl.carousel.min.js"></script>
      <script src="vendor/owl.carousel2.thumbs/owl.carousel2.thumbs.min.js"></script>
      <script src="js/front.js"></script>

      <!-- Nouislider Config-->
      <script>
        var range = document.getElementById('range');
        noUiSlider.create(range, {
            range: {
                'min': 0,
                'max': 2000
            },
            step: 5,
            start: [100, 1000],
            margin: 300,
            connect: true,
            direction: 'ltr',
            orientation: 'horizontal',
            behaviour: 'tap-drag',
            tooltips: true,
            format: {
              to: function ( value ) {
                return '$' + value;
              },
              from: function ( value ) {
                return value.replace('', '');
              }
            }
        });
        
      </script>
      <script>
        // ------------------------------------------------------- //
        //   Inject SVG Sprite - 
        //   see more here 
        //   https://css-tricks.com/ajaxing-svg-sprite/
        // ------------------------------------------------------ //
        function injectSvgSprite(path) {
        
            var ajax = new XMLHttpRequest();
            ajax.open("GET", path, true);
            ajax.send();
            ajax.onload = function(e) {
            var div = document.createElement("div");
            div.className = 'd-none';
            div.innerHTML = ajax.responseText;
            document.body.insertBefore(div, document.body.childNodes[0]);
            }
        }
        // this is set to BootstrapTemple website as you cannot 
        // inject local SVG sprite (using only 'icons/orion-svg-sprite.svg' path)
        // while using file:// protocol
        // pls don't forget to change to your domain :)
        injectSvgSprite('https://bootstraptemple.com/files/icons/orion-svg-sprite.svg'); 
        
      </script>
      <script>
        $(document).ready(function(){

          //  --------live search--------- 

          $(".the-search-bar").keypress(function(){
            $.post("function/search.php" , {proname : $(".the-search-bar").val() } , function(data){

                $(".search-result").html(data);

            });
          });

          //  --------//live search--------- 

        

          
          //  --------pagination--------- 

          function fetch_data(page , cls){

            if (cls == "cat_id") {
              var data = {cat_id : page};
            }else if (cls == "page-item") {
              var data = {page : page};
            }
            
            $.ajax({
              url: "function/pagination.php",
              method: "POST",
              data: data,
              success: function(data){
                $("#get-data").html(data);
              }
            });
          }

          // fetch_data();

          $(document).on("click",".page-item",function(){
            var page = $(this).attr("id");
            fetch_data(page , 'page-item');
          });

          $(document).on("click",".cat_id",function(){
            var cat = $(this).attr("cat_id");
            fetch_data(cat, 'cat_id');
          });



          //  --------//pagination--------- 

          

        });
      </script>
      <!-- FontAwesome CSS - loading as last, so it doesn't block rendering-->
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    </div>
  </body>
</html>