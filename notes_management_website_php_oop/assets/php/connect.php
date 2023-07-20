<?php 



class Database
{
     const USERNAME = 'omtb.1990.3@gmail.com';
     const PASSWORD = '';

     private $dsn = "mysql:host=localhost;dbname=notes_management";
     private $dbuser = "root";
     private $dbpass = "";

     public $conn;

     public function __construct()
     {
          try{
               $this->conn = new PDO($this->dsn,$this->dbuser,$this->dbpass);
          }
          catch(PDOException $e){
               echo $e->getMessage();
          }
          return $this -> conn;
     }
     // check input

     public function test_input($data){
          $data = trim($data);
          $data = stripslashes($data);
          $data = htmlspecialchars($data);

          return $data;
     }

     // error,success message alert

     public function showMessage($type,$message){
          return '<div class="alert alert-dismissible alert-'.$type.' ">
               <button class="close" type="button" data-dismiss="alert">&times;</button>
               <strong class="text-center">'.$message.'</strong>
               </div>';
     }

}





 ?>