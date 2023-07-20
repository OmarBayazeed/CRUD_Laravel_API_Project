<?php 

session_start();

// setup php mailer

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

$mail = new PHPMailer(true);

// end setup php mailer

require_once 'auth.php';

// handel register

$user = new Auth();

if (isset($_POST['action']) && $_POST['action'] == "register") {
	$name = $user->test_input($_POST['name']);
	$email = $user->test_input($_POST['email']);
	$pass = $user->test_input($_POST['password']);

	$hpass = password_hash($pass, PASSWORD_DEFAULT);

	if ($user->user_exist($email)) {
		echo $user->showMessage('warning','This Email is Already Registered');
	}
	else{
		if ($user->register($name,$email,$hpass)) {
			echo "register";
			$_SESSION['user'] = $email;
		}
		else{
			echo $user->showMessage('danger','something went wrong! try again later');
		}
	}
}


// end handel register






// handel login

if (isset($_POST['action']) && $_POST['action'] == "login") {
	$email = $user->test_input($_POST['email']);
	$pass = $user->test_input($_POST['password']);

	$loggedInUser = $user->login($email);

	if ($loggedInUser != null) {
	 	if (password_verify($pass, $loggedInUser['password'])) {
	 		if (!empty($_POST['rem'])) {
	 			setcookie("email" , $email, time()+(30*24*60*60), '/');
	 			setcookie("password" , $pass, time()+(30*24*60*60), '/');
	 		}
	 		else{
	 			setcookie("email","",1,"/");
	 			setcookie("password","",1,"/");
	 		}

	 		echo "login";

	 		$_SESSION['user'] = $email;
	 	}
	 	else{
	 		echo $user->showMessage('danger' , 'Password is Incorrect!');
	 	}
	 }
	 else{
	 	echo $user->showMessage('danger' , "User not found!");
	 } 
}


// end handel login



// handel forgot password

if (isset($_POST['action']) && $_POST['action'] == "forgot") {
	$email = $user->test_input($_POST['email']);

	$user_found = $user->current_user($email);

	if ($user_found != null) {
		$token = uniqid();
		$token = str_shuffle($token);

		$user->forgot_password($token,$email);

		try{
			$mail->isSMTP();
			$mail->Host = 'smtp.gmail.com'; //smtp.gmail.com , localhost
			$mail->SMTPAuth = true;
			$mail->Username   = Database::USERNAME ;
    		$mail->Password   = Database::PASSWORD ;
    		$mail->SMTPSecure = "ssl";  //ssl , tls
    		$mail->Port = 587; //465 , 587

    		$mail->setFrom(Database::USERNAME,'NOTES_MANAGEMENT website');
    		$mail->addAddress($email);

    		$mail->isHTML(true);
    		$mail->Subject = 'Reset Password';
    		$mail->Body = '<h3>click the below link to reset your password<br><a href="http://localhost/notes_management_website/reset_pass.php?email='.$email.'&token='.$token.'">http://localhost/notes_management_website/reset_pass.php?email='.$email.'&token='.$token.'</a><br>Regards<br>Omar Bayazeed</h3>';
    		
    		$mail->send();

    		echo $user->showMessage('success','we have sent you the reset link in your email,please check your email!');
		}
		catch(Exception $e){
			echo $e->errorMessage();
			echo $user->showMessage('danger','something went wrong please try later'); 
		}

	}
	else{
		echo $user->showMessage('info','this email is not registered!');
	}
}



// end handel forgot password








 ?>