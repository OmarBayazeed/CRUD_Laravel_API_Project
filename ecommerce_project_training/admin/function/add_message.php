<?php 

echo "<pre>";


$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$content = $_POST['content'];
$statue = "unseen";

include "connect.php";

$insert_messages = "INSERT INTO messages 
                           (name, email, phone, content, statue)
                           VALUES 
                           ('$name', '$email', '$phone', '$content', '$statue')";

$query = $conn -> query($insert_messages);

echo "<script>alert('thank you for your message');window.location.href='../../contact.php'</script>";

 ?>