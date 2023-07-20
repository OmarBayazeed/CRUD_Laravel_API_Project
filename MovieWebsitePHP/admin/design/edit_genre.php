<?php 


include 'functions/connect.php';

$id = $_GET['id'];

$select_genre_edit = "SELECT * FROM genre WHERE id = '$id' ";

$query = $conn -> query($select_genre_edit);

$genre = $query -> fetch_assoc();

?>



<div class="container">
  <div class="head">
    <h1 style="text-align: center;">Edit genre</h1>
    <hr>
    <form action="functions/edit_genre.php" method="post">
      <div class="form-row">
        <div class="col-6">
          <small>genre name:</small>
          <input type="text" name="genrename" value="<?= $genre['genre_name'] ?>" class="form-control" placeholder="genre Name">
        </div>
        <div class="col">
          <small>genre id:</small>
          <input type="text" name="genreid" value="<?= $genre['genre_id'] ?>" class="form-control" placeholder="genre ID">
        </div>
        <div class="col">
          <small>category id:</small>
          <input type="text" name="catid" value="<?= $genre['category_id'] ?>" class="form-control" placeholder="genre ID">
        </div>
        <div class="col">
          <small>primary id: (don't change)</small>
          <input type="text" name="primaryid" value="<?= $genre['id'] ?>" class="form-control" placeholder="primary id">
        </div>
      </div>
      <br><br>
      <button type="submit" class="btn btn-primary">Edit</button>
    </form>
  </div>
</div>



