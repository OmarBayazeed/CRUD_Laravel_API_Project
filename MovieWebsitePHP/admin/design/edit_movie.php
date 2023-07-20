<?php 


include 'functions/connect.php';

$id = $_GET['id'];

$select_movie_edit = "SELECT * FROM movie WHERE id = '$id' ";

$query = $conn -> query($select_movie_edit);

$movie = $query -> fetch_assoc();

?>


<div class="container">
	<div class="jumbotron">
		<form action="functions/edit_movie.php" method="post" enctype="multipart/form-data">
		  <div class="form-group">
		  	<input type="text" name="id" value="<?php echo $movie['id'] ?>" style="display: none;" >
		  	<label>name:</label>
		    <input type="text" name="mvname" value="<?php echo $movie['name'] ?>"  class="form-control" aria-describedby="emailHelp" placeholder="Enter Movie Name">
		  </div>
		  <div class="form-group">
		  	<label>description:</label>
		    <textarea type="text" name="mvdesc"  class="form-control" placeholder="Movie Description" rows="4"><?php echo $movie['description'] ?></textarea>
		  </div>
		  <div class="form-group">
		  	<label>tags:</label>
		    <input type="text" name="mvtag" value="<?php echo $movie['tag'] ?>" class="form-control" placeholder="Movie Tag">
		  </div>
		  <div class="form-group">
		  	<label>link1:</label>
		    <input type="text" name="mvlink1" value="<?php echo $movie['link1'] ?>" class="form-control" placeholder="Movie Link1">
		  </div>
		  <div class="form-group">
		  	<label>link2:</label>
		    <input type="text" name="mvlink2" value="<?php echo $movie['link2'] ?>" class="form-control" placeholder="Movie Link2">
		  </div>
		  <div class="form-group">
		  	<label>language:</label>
		    <input type="text" name="mvlang" value="<?php echo $movie['language'] ?>" class="form-control" placeholder="Movie Language">
		  </div>
		  <div class="form-group">
		  	<label>director:</label>
		    <input type="text" name="mvdirector" value="<?php echo $movie['director'] ?>" class="form-control" placeholder="Movie Director">
		  </div>
		  <div class="form-group">
		  	<label>meta description:</label>
		    <input type="text" name="metadesc" value="<?php echo $movie['meta_description'] ?>" class="form-control" placeholder="Meta Description">
		  </div>
		  <div class="form-group">
		  	<label>date:</label>
		    <input type="date" name="date" value="<?php echo $movie['the_date'] ?>" class="form-control" >
		  </div>
		  <div class="custom-file">
		  	<label>image:</label>
		    <input type="file" name="img" value="<?php echo $movie['image'] ?>" class="custom-file-input" id="customFile">
		    <label class="custom-file-label" for="customFile">Choose file</label>
		  </div>
		  <br><br>
		  <div class="form-group">
		  	<label>category id:</label>
		    <input type="text" name="catid" value="<?php echo $movie['category_id'] ?>" class="form-control" placeholder="Category ID">
		  </div>
		  <div class="form-group">
		  	<label>genre id:</label>
		    <input type="text" name="genreid" value="<?php echo $movie['genre_id'] ?>" class="form-control" placeholder="Genre ID">
		  </div>
		  
		  <button type="submit" class="btn btn-info">Submit</button>
		</form>
	</div>
</div>