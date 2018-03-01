<?php

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['comment'];
$to = "sahesseling@dmacc.edu";

mail ($to, $subject, $message, "From: " . $name . $email);
echo "A technician will respond to your request as soon as possible."
	
?>