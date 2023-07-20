<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <link rel="stylesheet" href="layout/style.css">

	<title>admin</title>
	
</head>
<body>

  <?php session_start(); ?>	

	<!-- ------- <nav> -------- -->

	<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="index.php">hello, <?php echo $_SESSION['username'] ?></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="?action=registeradmin">Register Admin</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="?action=adminlist">Admin List</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="?action=movielist">Movie List</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="?action=category">Category List</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="?action=genre">genre list</a>
      </li>
      <li class="nav-item">
        <a class="btn btn-outline-danger" href="functions/logout.php">Logout</a>
      </li>
    </ul>
  </div>
</nav>

	<!-- ------- </nav> -------- -->
	