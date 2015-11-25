<?php
	
	$not_require_auth = true;
	
	define('DB_HOST', 'boatdayapp.com');
	define('DB_USER', 'uboatday');
	define('DB_PASS', '7DW-ByC-GPy-ZRp');
	define('DB_NAME', 'boatday');
	define('DB_PORT', 3306);

	define('_MSG',  "Better Boating, with Friends! Download BoatDay Today: https://itunes.apple.com/us/app/boatday/id953574487?ls=1&mt=8");
	define('_FROM', "+17865745669");

	function db_connect() {
		
		$link = @new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME, DB_PORT);
		
		if ( $link->connect_errno ) {
			echo 'db_connect'. 'MySQL Connexion error : ('.$link->connect_errno.') '.$link->connect_error;
		} else {
			return $link;
		}
	}

	$sql = db_connect();

	require "vendor/Twilio.php";

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