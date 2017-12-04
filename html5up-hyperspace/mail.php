<?php
$to      = 'contact@qixty.com';
$subject = 'New Request from Website';
$message = $_POST['mytextarea'];
$headers = 'From: webmaster@qixty.com' . "\r\n" .
'Reply-To: contact@qixty.com' . "\r\n" .
'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);
?>