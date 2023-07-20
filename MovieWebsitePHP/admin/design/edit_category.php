

<?php 


include 'functions/connect.php';

$id = $_GET['id'];

$select_category_edit = "SELECT * FROM category WHERE id = '$id' ";

$query = $conn -> query($select_category_edit);

$category = $query -> fetch_assoc();

?>



<div class="container">
  <div class="head">
    <h1 style="text-align: center;">Edit Category</h1>
    <hr>
    <form action="functions/edit_category.php" method="post">
      <div class="form-row">
        <div class="col-7">
          <small>category name:</small>
          <input type="text" name="catname" value="<?= $category['category_name'] ?>" class="form-control" placeholder="Category Name">
        </div>
        <div class="col">
          <small>category id:</small>
          <input type="text" name="catid" value="<?= $category['category_id'] ?>" class="form-control" placeholder="Category ID">
        </div>
        <div class="col">
          <small>primary id: (don't change)</small>
          <input type="text" name="primaryid" value="<?= $category['id'] ?>" class="form-control" placeholder="primary id">
        </div>
      </div>
      <br><br>
      <button type="submit" class="btn btn-primary">Edit</button>
    </form>
  </div>
</div>



















