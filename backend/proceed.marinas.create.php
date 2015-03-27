<?php
	
	include_once('core.config.php');

	require "../www/vendors/php/Twilio.php";
	
	define('_MSG',  "Better Boating, with Friends! Download BoatDay Today: https://itunes.apple.com/us/app/boatday/id953574487?ls=1&mt=8");
	define('_FROM', "+17865745669");

	if(empty($__phone)) {
		$proceedErrors[] = 'Phone cannot be emtpy.';
	}

	$to = $__phone;

	preg_match('/^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/', $to, $m, PREG_OFFSET_CAPTURE);
	
	if(count($m) == 0) {
		$proceedErrors[] = 'Bad format! Format must be 000 000 0000';	
	}

	if(count($proceedErrors) > 0) {
		return ;
	}

	$stmt = $sql->prepare("INSERT INTO marinas (phone, marinas) VALUES (?,?,?,?,?)");
	$stmt->bind_param("sssss", $__phone, $__marinas);
	$stmt->execute();
	$stmt->store_result();

	$not_require_auth = true;
	include_once('../backend/core.config.php');
	
	// define('_MSG',  "Download the free BoatDay App - http://applestore.com/the.app");
	

	$to1 = sprintf("%s-%s-%s", $m[1][0], $m[2][0], $m[3][0]);
	$to2 = sprintf("(%s)-%s-%s", $m[1][0], $m[2][0], $m[3][0]);

	$sql->query("INSERT INTO sms (number) VALUES ('$to2')");

	if(!$debug) {
		$client = new Services_Twilio("ACc00e6d3c6380421f6a05634a11494195", "c820541dd98d43081cce417171f33cbc");
		$sms = $client->account->messages->create(array( 
			'To' => $to1,
			'From' => _FROM, 
			'Body' => _MSG
		));
	}

	back();
	
?>