<?php  
	
	


    include 'includes/header.php';


	if (isset($_SESSION['login_succesful'])) {}

		else{
			echo "<script>alert('you should login first');window.location.href='login.php'</script";
		}

		
	include 'functions/connect.php';

	if (isset($_GET['action']) && $_GET['action'] == 'adminlist') {
		include 'design/admin_list.php';
	}elseif (isset($_GET['action']) && $_GET['action'] == 'registeradmin') {
		include 'design/register_admin.php';
	}elseif (isset($_GET['action']) && $_GET['action'] == 'category') {
		include 'design/category.php';
	}elseif (isset($_GET['action']) && $_GET['action'] == 'addcategory') {
		include 'design/add_category.php';
	}elseif (isset($_GET['action']) && $_GET['action'] == 'editcategory') {
		include 'design/edit_category.php';
	}elseif (isset($_GET['action']) && $_GET['action'] == 'genre') {
		include 'design/genre_list.php';
	}elseif (isset($_GET['action']) && $_GET['action'] == 'addgenre') {
		include 'design/add_genre.php';
	}elseif (isset($_GET['action']) && $_GET['action'] == 'editgenre') {
		include 'design/edit_genre.php';
	}elseif (isset($_GET['action']) && $_GET['action'] == 'movielist') {
		include 'design/movie_list.php';
	}elseif (isset($_GET['action']) && $_GET['action'] == 'addmovie') {
		include 'design/add_movie.php';
	}elseif (isset($_GET['action']) && $_GET['action'] == 'editmovie') {
		include 'design/edit_movie.php';
	}elseif (isset($_GET['action']) && $_GET['action'] == 'viewmoviedetails') {
		include 'design/movie_details.php';
	}elseif (isset($_GET['action']) && $_GET['action'] == 'viewmovie') {
		include 'design/view_movie.php';
	}
	

?>

















<?php 

	include 'includes/footer.php';


 ?>