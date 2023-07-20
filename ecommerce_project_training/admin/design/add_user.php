





<div class="container">
	<div class="jumbotron">
		<form action="function/add_user.php" method="post" enctype="multipart/form-data">
		  <div class="form-group">
		    <input type="text" name="name" class="form-control" aria-describedby="emailHelp" placeholder="Enter Name">
		  </div>
		  <div class="form-group">
		    <input type="text" name="email" class="form-control" aria-describedby="emailHelp" placeholder="Enter email">
		  </div>
		  <div class="form-group">
		    <input type="password" name="password" class="form-control" aria-describedby="emailHelp" placeholder="Enter password">
		  </div>
		  <div class="form-group">
		    <input type="text" name="address" class="form-control" aria-describedby="emailHelp" placeholder="Enter address">
		  </div>
		  <div class="form-group">
		    <input type="text" name="phone" class="form-control" aria-describedby="emailHelp" placeholder="Enter phone">
		  </div>
		  <div class="form-check form-check-inline">
    			<input class="form-check-input" type="radio"  name="gender" id="inlineRadio1" value="0" >
    			<label class="form-check-label" for="inlineRadio1">Male</label>
  			</div>
  			<div class="form-check form-check-inline">
    			<input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="1" >
    			<label class="form-check-label" for="inlineRadio2">Female</label>
  			</div>

		  <button type="submit" class="btn btn-info">Submit</button>
		</form>
	</div>
</div>