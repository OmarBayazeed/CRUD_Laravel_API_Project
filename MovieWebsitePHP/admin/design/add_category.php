

<!-- ------add category----- -->


<div class="container">
  <div class="head">
      <div class="jumbotron">
        <h1 class="display-4">Add a Category</h1>
        <p class="lead">Add a Category and mention thier id</p>
        <hr class="my-4">
        <form action="functions/add_category_2.php" method="post">
          <div class="form-row">
            <div class="col-7">
              <small>category name:</small>
              <input type="text" name="catname" class="form-control" placeholder="Category Name">
            </div>
            <div class="col">
              <small>category id:</small>
              <input type="text" name="catid" class="form-control" placeholder="Category ID">
            </div>
          </div>
          <br><br>
          <button class="btn btn-primary btn-lg" name="submit"  role="button">Add Category</button> 
        </form>
      </div>
  </div>
</div>



<!-- ------/add category----- -->





