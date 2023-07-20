

<form method="post" action="function/add_product.php" enctype="multipart/form-data">
  <div class="form-group">
    <label for="exampleInputEmail1">name</label>
    <input type="text" name="productname" value="" class="form-control" id="exampleInputEmail1">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">price</label>
    <input type="text" name="price"  class="form-control" id="exampleInputEmail1" placeholder="Edit price">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">sale</label>
    <input type="text" name="sale" class="form-control" id="exampleInputEmail1" >
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">img</label>
    <input type="file" name="img[]" multiple class="form-control" id="exampleInputEmail1" >
  </div>

  
  <br>
  <div class="form-group">
    <label for="exampleFormControlSelect1">category</label>
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