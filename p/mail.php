<link rel="icon" type="image/png" href="../image/logo.png" />

<?php
$to      = 'amir.benmallem@gmail.com';
$subject = $_POST['objet'];
$message = $_POST['message'];
$email = $_POST['email'];
$from = $_POST['email'];
     $headers = "from : ". '$from' . "\r\n" .
     'Reply-To: webmaster@example.com' . "\r\n" .
     'X-Mailer: PHP/' . phpversion();

	 if(mail($to, $subject, $message, $headers)){ 
	 echo "Votre question  envoyer ";}
 ?>