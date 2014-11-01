<?php

if(isset($_POST["name"])) {
	$name = $_POST["name"];
	$email = $_POST["email"];
	$message = $_POST["message"];

	$to = "braindoconsulting@gmail.com";
	$subject = "brain.do Form: $name";
	$msg = "$message";    
	$headers = "From: <$email>";

	mail($to,$subject,$msg,$headers);
	
} else {
  
}

?>
