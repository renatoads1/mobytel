<?php
$name       = @trim(stripslashes($_POST['tcnome'])); 
$from       = @trim(stripslashes($_POST['tctel'])); 
$subject    = @trim(stripslashes($_POST['tcemail'])); 
$message    = @trim(stripslashes($_POST['tccelular'])); 
$to   		= 'flpmarcos10@gmail.com';//replace with your email

echo "passei por aqui";

$headers   = array();
$headers[] = "MIME-Version: 1.0";
$headers[] = "Content-type: text/plain; charset=iso-8859-1";
$headers[] = "From: {$name} <{$from}>";
$headers[] = "Reply-To: <{$from}>";
$headers[] = "Subject: {$subject}";
$headers[] = "X-Mailer: PHP/".phpversion();

mail($to, $subject, $message, $headers);

die;