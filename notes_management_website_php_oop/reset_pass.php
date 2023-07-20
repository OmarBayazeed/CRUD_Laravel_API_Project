<?php 


require_once 'assets/php/auth.php';

$user = new Auth();

$msg = '';

if (isset($_GET['email']) && isset($_GET['token'])) {
	$email = $user->test_input($_GET['email']);
	$token = $user->test_input($_GET['token']);

	$auth_user = $user->reset_password($email, $token);

	if ($auth_user != null) {
		if (isset($_POST['submit'])) {
			$new_pass = $_POST['pass'];
			$cnew_pass = $_POST['cpass'];

			$h_new_pass = password_hash($new_pass,PASSWORD_DEFAULT);

			if ($new_pass == $cnew_pass) {
				$user->update_password($h_new_pass,$email);
				$msg = "Password Changed Successfully<br><a href='index.php'>Login Here</a>";

			}
			else{
				$msg = "Password didn't match";
			}
		}
	}
	else{
		header("location:index.php");
		exit();
	}
}
else{
		header("location:index.php");
		exit();
	}



 ?>




<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Reset password</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>


	<div class="container">
		<div class="row justify-content-center wrapper" >
			<div class="col-lg-10 my-auto">
				<div class="card-group myshadow">
					<div class="card justify-content-center p-4 rounded-left mycolor">
						<h1 class="text-center font-weight-bold text-white ">Reset Your Password Here</h1>
					</div>
					<div class="card rounded-right p-4" style="flex-grow: 1.4;">
						<h1 class="text-center text-primary font-weight-bold">Enter New Password</h1>
						<hr class="my-3">
						<form action="#" method="post" class="px-3">
							<div class="text-center lead mb-2 text-danger"><?= $msg; ?></div>
							<div class="input-group input-group-lg form-group">
								<div class="input-group-prepend">
									<span class="input-group-text rounded-0">
										<i class="fas fa-key fa-lg"></i>
									</span>
								</div>
								<input type="password" name="pass" class="form-control rounded-0" placeholder="New Password" required minlength="5">
							</div>
							<div class="input-group input-group-lg form-group">
								<div class="input-group-prepend">
									<span class="input-group-text rounded-0">
										<i class="fas fa-key fa-lg"></i>
									</span>
								</div>
								<input type="password" name="cpass" class="form-control rounded-0" placeholder="Confirm New Password" required minlength="5">
							</div>
							<div class="form-group">
								<input type="submit" value="Reset Password" name="submit" class="btn btn-primary btn-block btn-lg mybtn">
							</div>
						</form>
					</div>
					
				</div>
			</div>
		</div>
	</div>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.1/js/bootstrap.bundle.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/js/all.min.js"></script>
</body>
</html>	