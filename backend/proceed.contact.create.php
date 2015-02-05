<?php
	
	include_once('core.config.php');

	if(empty($__firstname)) {
		$proceedErrors[] = 'Firstname cannot be emtpy.';
	}
	
	if(empty($__phone)) {
		$proceedErrors[] = 'Phone cannot be emtpy.';
	}

	if(empty($__feedback)) {
		$proceedErrors[] = 'Feedback cannot be emtpy.';
	}

	if(empty($__email)) { 
		$proceedErrors[] = 'Email cannot be emtpy.';
	} elseif(!isEmailValid($__email)) {
		$proceedErrors[] = 'Email not valid.';
	}

	if(count($proceedErrors) > 0) {
		return ;
	}

	$stmt = $sql->prepare("INSERT INTO contact (firstname, lastname, phone, email, feedback) VALUES (?,?,?,?,?)");
	$stmt->bind_param("sssss", $__firstname, $__lastname, $__phone, $__email, $__feedback);
	$stmt->execute();
	$stmt->store_result();

	mail("Support@boatdayapp.com", "BoatDay App - Feedback", sprintf("First name: %s\nLast name: %s\nEmail: %s\nPhone number: %s\nFeedback: %s\n", $__firstname, $__lastname, $__phone, $__email, $__feedback))

	shutdown();
	
	$_SESSION['success'] = 'Thank you for your feedback.';

	back();
?>