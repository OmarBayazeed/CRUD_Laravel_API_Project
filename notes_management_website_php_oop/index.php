<?php 

session_start();

if (isset($_SESSION['user'])) {
	header("location: home.php");

}

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Note Maneger</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel = "icon" href = "assets/icon/icon.png" type = "image/x-icon">
</head>
<body>


	<div class="container">
		<!------ login ------>
		<div class="row justify-content-center wrapper" id="login-box">
			<div class="col-lg-10 my-auto">
				<div class="card-group myshadow">
					<div class="card rounded-left p-4" style="flex-grow: 1.4;">
						<h1 class="text-center text-primary font-weight-bold">Sign In To Account</h1>
						<hr class="my-3">
						<form action="#" method="post" class="px-3" id="login-form">
							<div id="loginalert"></div>
							<div class="input-group input-group-lg form-group">
								<div class="input-group-prepend">
									<span class="input-group-text rounded-0">
										<i class="far fa-envelope fa-lg"></i>
									</span>
								</div>
								<input type="email" name="email" id="email" class="form-control rounded-0" placeholder="E-Mail" required value="<?php if(isset($_COOKIE['email'])){echo $_COOKIE['email'];} ?>">
							</div>
							<div class="input-group input-group-lg form-group">
								<div class="input-group-prepend">
									<span class="input-group-text rounded-0">
										<i class="fas fa-key fa-lg"></i>
									</span>
								</div>
								<input type="password" name="password" id="password" class="form-control rounded-0" placeholder="Password" required value="<?php if(isset($_COOKIE['password'])){echo $_COOKIE['password'];} ?>">
							</div>
							<div class="form-group">
								<div class="custom-control custom-checkbox float-left">
									<input type="checkbox" name="rem" class="custom-control-input" id="customcheck" <?php if(isset($_COOKIE['email'])){ ?> checked <?php }?>>
									<label for="customcheck" class="custom-control-label">Remember Me</label>
								</div>
								<div class="forgot float-right">
									<a href="#" id="forgot-link">Forgot Password?</a>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="form-group">
								<input type="submit" value="Sign In" id="login-btn" class="btn btn-primary btn-block btn-lg mybtn">
							</div>
						</form>
					</div>
					<div class="card justify-content-center p-4 rounded-right mycolor">
						<h1 class="text-center font-weight-bold text-white ">Hello Friends</h1>
						<hr class="my-3 bg-light myhr">
						<p class="text-center font-weight-bolder lead text-light">Enter Your Details And Start Your Journey With Us</p>
						<button class="btn btn-outline-light align align-self-center btn-lg font-weight-bolder mt-4 mylinkbtn" id="register-link">Sign Up</button>
					</div>
				</div>
			</div>
		</div>
		<!-- end login -->

		<!-- register -->

		<div class="row justify-content-center wrapper" id="register-box" style="display: none;">
			<div class="col-lg-10 my-auto">
				<div class="card-group myshadow">
					<div class="card justify-content-center p-4 rounded-left mycolor">
						<h1 class="text-center font-weight-bold text-white ">Wellcome Back!</h1>
						<hr class="my-3 bg-light myhr">
						<p class="text-center font-weight-bolder lead text-light">Do You Have An Account?</p>
						<button class="btn btn-outline-light align align-self-center btn-lg font-weight-bolder mt-4 mylinkbtn" id="login-link">Sign In</button>
					</div>
					<div class="card rounded-right p-4" style="flex-grow: 1.4;">
						<h1 class="text-center text-primary font-weight-bold">Create An Account</h1>
						<hr class="my-3">
						<form action="#" method="post" class="px-3" id="register-form">
							<div id="regalert"></div>
							<div class="input-group input-group-lg form-group">
								<div class="input-group-prepend">
									<span class="input-group-text rounded-0">
										<i class="far fa-user fa-lg"></i>
									</span>
								</div>
								<input type="text" name="name" id="name" class="form-control rounded-0" placeholder="Full Name" required>
							</div>
							<div class="input-group input-group-lg form-group">
								<div class="input-group-prepend">
									<span class="input-group-text rounded-0">
										<i class="far fa-envelope fa-lg"></i>
									</span>
								</div>
								<input type="email" name="email" id="remail" class="form-control rounded-0" placeholder="E-Mail" required>
							</div>
							<div class="input-group input-group-lg form-group">
								<div class="input-group-prepend">
									<span class="input-group-text rounded-0">
										<i class="fas fa-key fa-lg"></i>
									</span>
								</div>
								<input type="password" name="password" id="rpassword" class="form-control rounded-0" placeholder="Password" required minlength="5">
							</div>
							<div class="input-group input-group-lg form-group">
								<div class="input-group-prepend">
									<span class="input-group-text rounded-0">
										<i class="fas fa-key fa-lg"></i>
									</span>
								</div>
								<input type="password" name="cpassword" id="cpassword" class="form-control rounded-0" placeholder="Confirm Password" required minlength="5">
							</div>
							<div class="form-groub">
								<div id="pass-error" class="text-danger font-weight-bold"></div>
							</div>
							<br>
							<div class="form-group">
								<input type="submit" value="Sign Up" id="register-btn" class="btn btn-primary btn-block btn-lg mybtn">
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>

		<!-- end register -->

		<!-- Forgot Password -->

		<div class="row justify-content-center wrapper" id="forgot-box" style="display: none;">
			<div class="col-lg-10 my-auto">
				<div class="card-group myshadow">
					<div class="card justify-content-center p-4 rounded-left mycolor">
						<h1 class="text-center font-weight-bold text-white ">Reset Password</h1>
						<hr class="my-3 bg-light myhr">						
						<button class="btn btn-outline-light align align-self-center btn-lg font-weight-bolder mt-4 mylinkbtn" id="back-link">Back</button>
					</div>
					<div class="card rounded-right p-4" style="flex-grow: 1.4;">
						<h1 class="text-center text-primary font-weight-bold">Forgot Your Password</h1>
						<hr class="my-3">
						<p class="lead text-center text-secondary">To Reset Your Password Enter Your Email And We Will Send You The Reset Instructions on Your Email </p>
						<form action="#" method="post" class="px-3" id="forgot-form">
							<div id="forgotalert"></div>
							<div class="input-group input-group-lg form-group">
								<div class="input-group-prepend">
									<span class="input-group-text rounded-0">
										<i class="far fa-envelope fa-lg"></i>
									</span>
								</div>
								<input type="email" name="email" id="femail" class="form-control rounded-0" placeholder="E-Mail" required>
							</div>
							<div class="form-group">
								<input type="submit" value="Reset Password" id="forgot-btn" class="btn btn-primary btn-block btn-lg mybtn">
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- end Forgot Password -->

	</div>









	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.1/js/bootstrap.bundle.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/js/all.min.js"></script>
	<script>
		$(document).ready(function(){

// login hide and show

			$('#register-link').click(function(){
				$('#register-box').show();
				$('#login-box').hide();
			});
			$('#login-link').click(function(){
				$('#register-box').hide();
				$('#login-box').show();
			});
			$('#forgot-link').click(function(){
				$('#forgot-box').show();
				$('#login-box').hide();
			});
			$('#back-link').click(function(){
				$('#forgot-box').hide();
				$('#login-box').show();
			});


// end login hide and show

// register ajax request

$('#register-btn').click(function(e){
	if ($('#register-form')[0].checkValidity()) {
		e.preventDefault();
		$('#register-btn').val('Please Wait...');
		if ($('#rpassword').val() != $('#cpassword').val() ) {
			$('#pass-error').text('password did not match');
			$('#register-btn').val('Sign Up');
		}
		else {
			$('#pass-error').text('');
			$.ajax({
				url: 'assets/php/action.php',
				method: 'post',
				data: $('#register-form').serialize()+'&action=register',
				success:function(response){
					$('#register-btn').val('Sign Up');
					if (response === 'register') {
						window.location = 'home.php';
					}
					else{
						$("#regalert").html(response);
					}
				}
			});
		}
	}
});


// end register ajax request


// login ajax request

$('#login-btn').click(function(e){
	if ($('#login-form')[0].checkValidity()) {
		e.preventDefault();

		$('#login-btn').val('Please Wait...');
		$.ajax({
			url: 'assets/php/action.php',
			method: 'post',
			data: $("#login-form").serialize()+'&action=login',
			success:function(response){
				$('#login-btn').val('Sign In');
				if (response === 'login') {
						window.location = 'home.php';
				}
				else{
						$("#loginalert").html(response);
					}
			}
		});


	}
});

// end login ajax request

// forgot password ajax request

$('#forgot-btn').click(function(e){
	if ($('#forgot-form')[0].checkValidity()) {
		e.preventDefault();

		$('#forgot-btn').val('Please Wait...');

		$.ajax({
			url: 'assets/php/action.php',
			method: 'post',
			data: $("#forgot-form").serialize()+'&action=forgot',
			success:function(response){
				$('#forgot-btn').val('Reset Password');
				$('#forgot-form')[0].reset();
				$("#forgotalert").html(response);
			}
		});
	}
});



// end forgot password ajax request

});
	</script>
</body>
</html>