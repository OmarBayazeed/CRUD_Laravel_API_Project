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






<?php  

	include 'functions/connect.php';

?>


<div class="container">
  <form class="login" action="functions/login_check.php" method="post">
    <h4 class="text-center">Admin Login</h4>
    <input type="text" class="form-control input-lg" name="username" placeholder="Username" autocomplete="off">
    <input type="password" class="form-control input-lg" name="password" placeholder="Password" autocomplete="new-password">
    <input type="submit" name="submit" class="btn btn-primary btn-block" value="login">
  </form>
</div>








<!-- jQuery library -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>

<!-- Popper JS -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>




</body>
</html>
