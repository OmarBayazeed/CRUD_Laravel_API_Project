





<div class="container">
	<div class="jumbotron">
		<form action="functions/add_movie.php" method="post" enctype="multipart/form-data">
		  <div class="form-group">
		    <input type="text" name="mvname" class="form-control" aria-describedby="emailHelp" placeholder="Enter Movie Name">
		  </div>
		  <div class="form-group">
		    <textarea type="text" name="mvdesc" class="form-control" placeholder="Movie Description" rows="4"></textarea>
		  </div>
		  <div class="form-group">
		    <input type="text" name="mvtag" class="form-control" placeholder="Movie Tag">
		  </div>
		  <div class="form-group">
		    <input type="text" name="mvlink1" class="form-control" placeholder="Movie Link1">
		  </div>
		  <div class="form-group">
		    <input type="text" name="mvlink2" class="form-control" placeholder="Movie Link2">
		  </div>
		  <div class="form-group">
		    <input type="text" name="mvlang" class="form-control" placeholder="Movie Language">
		  </div>
		  <div class="form-group">
		    <input type="text" name="mvdirector" class="form-control" placeholder="Movie Director">
		  </div>
		  <div class="form-group">
		    <input type="text" name="metadesc" class="form-control" placeholder="Meta Description">
		  </div>
		  <div class="form-group">
		    <input type="date" name="date" class="form-control" >
		  </div>
		  <div class="custom-file">
		    <input type="file" name="img" class="custom-file-input" id="customFile">
		    <label class="custom-file-label" for="customFile">Choose file</label>
		  </div>
		  <br><br>
		  <div class="form-group">
		    <input type="text" name="catid" class="form-control" placeholder="Category ID">
		  </div>
		  <div class="form-group">
		    <input type="text" name="genreid" class="form-control" placeholder="Genre ID">
		  </div>
		  
		  <button type="submit" class="btn btn-info">Submit</button>
		</form>
	</div>
</div>