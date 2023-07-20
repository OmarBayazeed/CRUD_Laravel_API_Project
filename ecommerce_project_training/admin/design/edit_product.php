
<?php 


include 'function/connect.php';

$id = $_GET['id'];

$select_product_edit = "SELECT * FROM product WHERE id = '$id' ";

$query = $conn -> query($select_product_edit);

$product = $query -> fetch_assoc();

?>










<form method="post" action="function/edit_product.php" enctype="multipart/form-data">
  <div class="form-group">
    <input type="hidden" name="id" value="<?= $product['id']?>">
    <label for="exampleInputEmail1">name</label>
    <input type="text" name="name" value="<?= $product['name'] ?>" class="form-control" id="exampleInputEmail1">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">price</label>
    <input type="text" name="price" value="<?= $product['price'] ?>" class="form-control" id="exampleInputEmail1" >
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">sale</label>
    <input type="text" name="sale" value="<?= $product['sale'] ?>" class="form-control" id="exampleInputEmail1" >
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">img</label>
    <input type="file" name="img[]" multiple value="<?= $product['img'] ?>" class="form-control" id="exampleInputEmail1" >
  </div>
  <br>
  <div class="form-group">
    <label for="exampleFormControlSelect1">cat_id</label>
    <select name="cat_id" class="form-control" id="exampleFormControlSelect1">
      <?php  

      include "functions/connect.php";

      $select_category = "SELECT * FROM category";

      $query = $conn -> query($select_category);

      foreach ($query as $product) {


      ?>
      <option value="<?php echo $product['id']; ?>" ><?php echo $product['name']; ?></option>
    <?php } ?>
    </select>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>