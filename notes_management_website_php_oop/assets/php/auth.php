<?php 


require_once 'connect.php';



class Auth extends Database
{
	// register new user
	public function register($name,$email,$password){
		$sql = "INSERT INTO users (name , email , password) VALUES (:name,:email,:pass)";
		$stmt = $this->conn->prepare($sql);
		$stmt -> execute(['name'=>$name,'email'=>$email,'pass'=>$password]);
		return true;
	}

	//check if register user exist

	public function user_exist($email){
		$sql = "SELECT email FROM users WHERE email = :email";
		$stmt = $this->conn->prepare($sql);
		$stmt -> execute(['email'=>$email]);
		$result = $stmt->fetch(PDO::FETCH_ASSOC);
		return $result;
	}

	//login existing user

	public function login($email){
		$sql = "SELECT email,password FROM users WHERE email = :email AND deleted != 0";
		$stmt = $this->conn->prepare($sql);
		$stmt -> execute(['email'=>$email]);
		$row = $stmt->fetch(PDO::FETCH_ASSOC);
		return $row;
	}	

	
	// current user in session

	public function current_user($email){
		$sql = "SELECT * FROM users WHERE email = :email AND deleted != 0";
		$stmt = $this->conn->prepare($sql);
		$stmt -> execute(['email'=>$email]);
		$row = $stmt->fetch(PDO::FETCH_ASSOC);
		return $row;
	}	


	// forgot password

	public function forgot_password($token,$email){
		$sql = "UPDATE users SET token = :token , token_expire = DATE_ADD(NOW(),INTERVAL 10 MINUTE) WHERE email = :email";
		$stmt = $this->conn->prepare($sql);
		$stmt -> execute(['token'=>$token,'email'=>$email]);

		return true;
	}


	// reset user password 

	public function reset_password($email, $token){
		$sql = "SELECT id FROM users WHERE email = :email AND token = :token AND token != '' AND token_expire > NOW() AND deleted != 0";
		$stmt = $this->conn->prepare($sql);
		$stmt -> execute(['token'=>$token,'email'=>$email]);
		$row = $stmt->fetch(PDO::FETCH_ASSOC);
		return $row;

	}

	// update user new password

	public function update_password($pass,$email){
		$sql = "UPDATE users SET token = '' , password = :pass WHERE email = :email AND deleted != 0";
		$stmt = $this->conn->prepare($sql);
		$stmt -> execute(['pass'=>$pass,'email'=>$email]);

		return true;
	} 


	// insert new Note

	public function add_new_note($user_id,$title,$note){
		$sql = "INSERT INTO notes (user_id,title , note ) VALUES (:user_id,:title,:note)";
		$stmt = $this->conn->prepare($sql);
		$stmt -> execute(['title'=>$title,'note'=>$note,'user_id'=>$user_id]);
		return true;
	}


	// fetch all notes of an user

	public function get_notes($user_id){
		$sql = "SELECT * FROM notes WHERE user_id = :user_id";
		$stmt = $this->conn->prepare($sql);
		$stmt -> execute(['user_id'=>$user_id]);
		$row = $stmt->fetchAll(PDO::FETCH_ASSOC);
		return $row;

	}


	// edit Note 


	public function edit_note($id){
		$sql = "SELECT * FROM notes WHERE id = :id";
		$stmt = $this->conn->prepare($sql);
		$stmt -> execute(['id'=>$id]);
		$row = $stmt->fetchAll(PDO::FETCH_ASSOC);
		return $row;
	}


	//update user note

	public function update_note($id,$title,$note){
		$sql = "UPDATE notes SET  title = :title , note = :note, updated_at = NOW() WHERE id = :id ";
		$stmt = $this->conn->prepare($sql);
		$stmt -> execute(['title'=>$title,'note'=>$note,'id'=>$id]);

		return true;
	}


	//delete Note

	public function delete_note($id){
		$sql = "DELETE FROM notes WHERE id = :id";
		$stmt = $this->conn->prepare($sql);
		$stmt -> execute(['id'=>$id]);
		return true;
	}


	// update profile page

	public function update_profile($name,$gender,$dob,$phone,$photo,$id){

		$sql = "UPDATE users SET  name = :name , gender = :gender, dob = :dob, phone = :phone, photo = :photo  WHERE id = :id AND deleted != 0 ";
		$stmt = $this->conn->prepare($sql);
		$stmt -> execute(['name'=>$name,'gender'=>$gender,'dob'=>$dob,'phone'=>$phone,'photo'=>$photo,'id'=>$id]);

		return true;
	}






}

















 ?>