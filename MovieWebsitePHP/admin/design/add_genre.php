

<!-- --------genre------- -->


<div class="container">
  <div class="head">
      <div class="jumbotron">
        <h1 class="display-4">Add a genre</h1>
        <p class="lead">Add a genre and mention thier id</p>
        <hr class="my-4">
        <form action="functions/add_genre.php" method="post">
          <div class="form-row">
            <div class="col-7">
              <small>genre name:</small>
              <input type="text" name="genrename" class="form-control" placeholder="genre Name">
            </div>
            <div class="col">
              <small>genre id:</small>
              <input type="text" name="genreid" class="form-control" placeholder="genre ID">
            </div>
            <div class="col">
              <small>category id:</small>
              <input type="text" name="catid" class="form-control" placeholder="Category ID">
            </div>
          </div>
          <br><br>
          <button class="btn btn-primary btn-lg" name="submit"  role="button">Add genre</button> 
        </form>
      </div>
  </div>
</div>


<!-- --------/genre------- -->

