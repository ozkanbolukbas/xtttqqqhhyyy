<?php

if(isset($_POST['email'])) {

	// EDIT THE 2 LINES BELOW AS REQUIRED
	$email_to = "you@yourdomain.com";
	$email_subject = "Your email subject line";

	function died($error) {
		// your error code can go here
		echo "We are very sorry, but there were error(s) found with the form you submitted. ";
		echo "These errors appear below.<br /><br />";
		echo $error."<br /><br />";
		echo "Please go back and fix these errors.<br /><br />";
		die();
	}
	// validation expected data exists
	if(!isset($_POST['name']) ||
	   !isset($_POST['surname']) ||
	   !isset($_POST['email']) ||
	   !isset($_POST['telefon']) ||
	   !isset($_POST['birth_place']) ||
	   !isset($_POST['birth_date']) ||
	   !isset($_POST['address']) ||
	   !isset($_POST['education_status']) ||
	   !isset($_POST['last_degree']) ||
	   !isset($_POST['school_name']) ||
	   !isset($_POST['school_degree']) ||
	   !isset($_POST['last_company']) ||
	   !isset($_POST['evyasam_position']) ||
	   !isset($_POST['message'])) {
		died('We are sorry, but there appears to be a problem with the form you submitted.');       
	}

	$name = $_POST['name']; 
	$surname = $_POST['surname'];
	$email_from = $_POST['email'];
	$phone_number = $_POST['telefon'];
	$birth_place = $_POST['birth_place'];
	$birth_date=	$_POST['birth_date'];
	$address = $_POST['address'];
	$education_status = $_POST['education_status'];
	$last_degree=	$_POST['last_degree'];
	$school_name = $_POST['school_name'];
	$school_degree = $_POST['school_degree'];
	$last_company=$_POST['last_company'];
	$position=$_POST['evyasam_position'];
	$comments = $_POST['message'];

	$error_message = "";
	$email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';

	if(!preg_match($email_exp,$email_from)) {
		$error_message .= 'The Email Address you entered does not appear to be valid.<br />';
	}

	$string_exp = "/^[A-Za-z .'-]+$/";

	if(!preg_match($string_exp,$name)) {
		$error_message .= 'The First Name you entered does not appear to be valid.<br />';
	}

	if(!preg_match($string_exp,$surname)) {
		$error_message .= 'The Last Name you entered does not appear to be valid.<br />';
	}

	$phone_pattern = '/^[0-9\-\(\)\/\+\s]*$/';
	if(!preg_match($phone_pattern, $phone_number))
	{
		$error_message .= 'The phone number you entered does not appear to be valid.<br />';
	}

	if(strlen($comments) < 2) {
		$error_message .= 'The Comments you entered do not appear to be valid.<br />';
	}

	if(strlen($error_message) > 0) {
		died($error_message);
	}

	$email_message = "Form details below.\n\n";

	function clean_string($string) {
		$bad = array("content-type","bcc:","to:","cc:","href");
		return str_replace($bad,"",$string);
	}

	$email_message .= "First Name: ".clean_string($name)."\n";
	$email_message .= "Last Name: ".clean_string($surname)."\n";
	$email_message .= "Email: ".clean_string($email_from)."\n";
	$email_message .= "Phone Number: ".clean_string($phone_number)."\n";
	$email_message .= "Birth Place: ".clean_string($birth_place)."\n";
	$email_message .= "Birth Date: ".clean_string($birth_date)."\n";
	$email_message .= "Address: ".clean_string($address)."\n";
	$email_message .= "Education Status: ".clean_string($education_status)."\n";
	$email_message .= "Last Degree: ".clean_string($last_degree)."\n";
	$email_message .= "School Name: ".clean_string($school_name)."\n";
	$email_message .= "School Degree: ".clean_string($school_degree)."\n";
	$email_message .= "Last Company: ".clean_string($last_company)."\n";
	$email_message .= "Ev Yaşam Position: ".clean_string($position)."\n";
	$email_message .= "Message: ".clean_string($comments)."\n";

	// create email headers
	$headers = 'From: '.$email_from."\r\n".
		'Reply-To: '.$email_from."\r\n" .
		'X-Mailer: PHP/' . phpversion();
	@mail($email_to, $email_subject, $email_message, $headers); 
}
?>