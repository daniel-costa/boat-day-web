<?php
	
	$not_require_auth = true;
	include_once('../backend/core.config.php');
	
	// define('_MSG',  "Download the free BoatDay App - http://applestore.com/the.app");
	define('_MSG',  "Welcome to BoatDay. We’ll text you a download link when the app is available for download. #BetterBoating is just days away!");
	// define('_MSG',  "Better Boating, with Friends! Download BoatDay Today: https://itunes.apple.com/us/app/boatday/id953574487?ls=1&mt=8");
	define('_FROM', "+17865745669");

	require "vendors/php/Twilio.php";

	$debug = false;

	if(!isset($_POST['to'])) {
		die("0:Phone number not defined.");
	}

	$to = trim($_POST['to']);
	
	if(strlen($to) == 0) {
		die("1:Phone number can't be empty.");
	}

	preg_match('/^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/', $to, $m, PREG_OFFSET_CAPTURE);
	
	if(count($m) == 0) {
		die("2:Bad format! Format must be 000 000 0000");	
	} else {
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
			
		die("3:Text sent to $to2");	
	}
?>