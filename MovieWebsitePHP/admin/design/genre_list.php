<!-- genre table -->

<div class="container">
  <div class="head" style="text-align: center; ">
    <h1>genre of MyCima</h1>
    <hr>
  </div>
  <a href="?action=addgenre" class="btn btn-warning">new genre</a>
  <br>
  <br>
  <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">genre name</th>
      <th scope="col">genre id</th>
      <th scope="col">category id</th>
      <th scope="col">no. of movies</th>
      <th scope="col">curd</th>
    </tr>
  </thead>
  <tbody>
    <?php 

          $select_genre = "SELECT * FROM genre";
          $query = $conn -> query($select_genre);
          $id = 0;
          foreach ($query as $genre) {
            
          

           ?> 
    <tr>
      <th scope="row"><?= ++$id ?></th>
      <td><?= $genre['genre_name'] ?></td>
      <td><?= $genre['genre_id'] ?></td>
      <td><?= $genre['category_id'] ?></td>
      <?php

        $id1 = $genre['id']; 
        $query1 = "SELECT count(*) as total FROM genre,movie WHERE genre.genre_id = movie.genre_id and genre.id = $id1 ";
        $run1 = $conn -> query($query1);
        if ($run1) {
          while ($row1 = $run1 -> fetch_assoc()) {
            ?>
            <td><?= $row1['total'] ?></td>
            <?php
          }
        }
         
      ?>
      <td><a href="functions/delete_genre.php?id=<?php echo $genre['id'] ?>" class="btn btn-danger">Delete</a>
          <a href="?action=editgenre&id=<?php echo $genre['id'] ?>&genreid=<?php echo $genre['genre_id']; ?>&genrename=<?php echo $genre['genre_name']; ?>&catid=<?php echo $genre['category_id']; ?>" class="btn btn-outline-primary ">Edit</a>
      </td>
    </tr>

    <?php } ?>
  </tbody>
</table>
</div>



  <!-- genre table end -->