<?php

$name = htmlspecialchars($_POST["name"]);
$last_name = htmlspecialchars($_POST["last_name"]);  
$email = htmlspecialchars($_POST["email"]); 
$message = htmlspecialchars($_POST["message"]);


if ( isset( $_POST['sendMail'] ) ) {
 $name  = substr( $_POST['name'], 0, 64 );
  $tel = substr( $_POST['last_name'], 0, 64 );
  $email   = substr( $_POST['email'], 0, 64 );
  $message = substr( $_POST['message'], 0, 250 );
 

  if ( !empty( $_FILES['file']['tmp_name'] ) and $_FILES['file']['error'] == 0 ) {
   $filepath = $_FILES['file']['tmp_name'];
   $filename = $_FILES['file']['name'];
  } else {
     $filepath = '';
     $filename = '';
 }
 
  $body = "Имя:\r\n".$name."\r\n\r\n";
 $body .= "Фамилия:\r\n".$last_name."\r\n\r\n";
 $body .= "E-mail:\r\n".$email."\r\n\r\n";
 $body .= "Сообщение:\r\n".$message;
 
 mail($to, $body, $email, $filepath, $filename);
}


 $subject = 'С прикреплением файла ';
  $boundary = "--".md5(uniqid(time())); // генерируем разделитель
  $headers = "From: ".$email."\r\n";   
 $headers .= "MIME-Version: 1.0\r\n";
 $headers .="Content-Type: multipart/mixed; boundary=\"".$boundary."\"\r\n";
 $multipart = "--".$boundary."\r\n";
  $multipart .= "Content-type: text/plain; charset=\"utf-8\"\r\n";
  $multipart .= "Content-Transfer-Encoding: quoted-printable\r\n\r\n";

  $body = $body."\r\n\r\n";
  $multipart .= $body;


print("Thank you!");