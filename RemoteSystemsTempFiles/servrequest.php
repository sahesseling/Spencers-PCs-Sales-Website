<?php

$name = $_POST['name'];
$email = $_POST['email'];;
$message = $_POST['msg'];
$to = "sahesseling@dmacc.edu";

mail ($to, $message, "From: " . $name . $email);
echo "A technician will respond to your request as soon as possible."
	
?>