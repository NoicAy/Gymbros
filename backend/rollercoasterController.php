<?php

$action = $_POST['action'];

if($action == "contact")
{
	$fname = $_POST['fullname'];
	$email = $_POST['email'];
	$message = $_POST['message'];


	file_put_contents('form.txt', $fname . ", " . $email . "," . $message , FILE_APPEND);

	$msg = "Contact verzoek ingediend";
	header("location: ../index.php?msg=$msg");
}

?>