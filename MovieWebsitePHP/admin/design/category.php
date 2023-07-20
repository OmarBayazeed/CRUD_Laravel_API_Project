
  <!-- category table -->

<div class="container">
  <div class="head" style="text-align: center; ">
    <h1>categories of MyCima</h1>
    <hr>
  </div>
  <a href="?action=addcategory" class="btn btn-warning">new category</a>
  <br>
  <br>
  <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">category name</th>
      <th scope="col">category id</th>
      <th scope="col">no. of movies</th>
      <th scope="col">view movies</th>
      <th scope="col">curd</th>

    </tr>
  </thead>
  <tbody>
    <?php 

          $select_category = "SELECT * FROM category";
          $query = $conn -> query($select_category);
          $id = 0;
          foreach ($query as $category) {
            
          

           ?> 
    <tr>
      <th scope="row"><?= ++$id ?></th>
      <td><?= $category['category_name'] ?></td>
      <td><?= $category['category_id'] ?></td>
      <?php

        $id1 = $category['id']; 
        $query1 = "SELECT count(*) as total FROM movie,category WHERE category.category_id = movie.category_id and category.id = $id1 ";
        $run1 = $conn -> query($query1);
        if ($run1) {
          while ($row1 = $run1 -> fetch_assoc()) {
            ?>
            <td><?= $row1['total'] ?></td>
            <?php
          }
        }
        
        
      ?>
      

      <td><a href="?action=viewmovie&category_id=<?php echo $category['category_id'] ?>&category_name=<?php echo $category['category_name'] ?>" class="btn btn-outline-primary ">view movies</a></td>
      
      <td><a href="functions/delete_category.php?id=<?php echo $category['id'] ?>" class="btn btn-danger">Delete</a>
          <a href="?action=editcategory&id=<?php echo $category['id'] ?>&catid=<?php echo $category['category_id']; ?>&catname=<?php echo $category['category_name']; ?>" class="btn btn-outline-primary ">Edit</a>
      </td>
    </tr>

    <?php } ?>
  </tbody>
</table>
</div>



  <!-- category table end -->

