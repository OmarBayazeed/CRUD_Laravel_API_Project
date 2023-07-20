<?php 

echo "<pre>";


$name = $_POST['name'];
$email = $_POST['email'];
$password = md5($_POST['password']);
$address = $_POST['address'];
$phone = $_POST['phone'];
$gender = $_POST['gender'];


include "../admin/function/connect.php";



$userselect = "SELECT * FROM user WHERE email = '$email'";

$query_login = $conn -> query($userselect);

$user = $query_login -> fetch_assoc();

session_start();



if($query_login -> num_rows == 0)
     {
        $insertuser = "INSERT INTO user 
                           (name, email, password, address, phone, gender)
                           VALUES 
                           ('$name', '$email', '$password', '$address', '$phone', '$gender')";


        $query = $conn -> query($insertuser);

        unset($_SESSION['login_succesful2']);

        $_SESSION['registered_user'] = mysqli_insert_id($conn);  
        
        $_SESSION['registered_user_name'] = $name ;

        echo "<script>alert('regester successfuly');window.location.href='../index.php'</script>"; 

        
     }else{

       
       echo "<script>alert('this email is taken');window.location.href='../index.php'</script>"; 

     }











// $first_name = $_POST['emp_first_name'];
// $resultset_1 = mysql_query("select * from employee where emp_first_name='".$first_name."' ") or die(mysql_error());
// $count = mysql_num_rows($resultset_1);
//    if($count == 0)
//     {
//        $ resultset_2 = mysql_query("INSERT INTO demo.employee VALUES ('".$first_name."')")  or
//        die(mysql_error());
//     }else{
//        echo The user is already present in the employee table ;
//     }
// }


 ?>