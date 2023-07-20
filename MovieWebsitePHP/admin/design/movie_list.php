<!-- movie table -->

<div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="index.php">Movies on Mycima</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto">
            <form class="form-inline" action="/action_page.php">
              <input class="form-control mr-sm-2" type="text" placeholder="Search">
              <button class="btn btn-success" type="submit">Search</button>
            </form>
          </ul>
      </div>
    </nav>
</div>

<div class="container">
  <br>
  <a href="?action=addmovie" class="btn btn-warning">New movie</a>
  <br>
  
  <div class="row">
    <?php 


          $select_movie = "SELECT * FROM movie";
          $query = $conn -> query($select_movie);
          $id = 0;
          foreach ($query as $movie) {
            
          

     ?> 
    <div class="col-lg-3 col-md-6 col-sm-12">
      <br><br>

      <div class="card" style="width: 200px;text-align: center; height: 500px;">
        <p><?php echo ++$id ?></p>
        <?php echo "<img class='card-img-top' src='images/".$movie['image']."' alt='Card image cap' height='180px' width='auto' >"; ?>
        <div class="card-body">
          <h5 class="card-title"><?php echo $movie['name']; ?></h5>
          <p class="card-text"><?php echo $movie['tag']; ?></p>
          <a href="?id=<?php echo $movie['id'] ?>&action=viewmoviedetails" class="btn btn-secondary">View Details</a>
          <br><br>
          <a href="functions/delete_movie.php?id=<?php echo $movie['id'] ?>" class="btn btn-danger">Delete</a>
          <a href="?id=<?php echo $movie['id'] ?>&action=editmovie" class="btn btn-primary">Edit</a>
        </div>
      </div>

      <br><br>
    </div>
    <?php } ?>
  </div>
</div>











  <!-- movie table end -->