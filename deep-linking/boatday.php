<?php

	date_default_timezone_set('America/New_York'); 

	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);

	require 'vendor/autoload.php';
	
	function dateToEnBoatDayCard($date) {
		// $date->setTimezone(new DateTimeZone('Europe/Helsinki'));
		return $date->format("D, n/j");
	}

	
	function departureTimeToDisplayTime($time) {

		$h = $time * 1;
		$mm = ( $time - $h ) * 60;
		$dd = 'am';

		if( $h >= 12 ) {
			$dd = 'pm';
			$h -= 12;
		}

		return ($h==0?12:$h) . ':' . ($mm==0?'00':($mm<10?'0'.$mm:$mm)) . ' ' . $dd;
	}

	function getCityFromLocation($location) {

		$l = explode(',', $location);

		if( count($l) == 0 ) {
			return '';
		}

		if( count($l) == 1 ) {
			return $l[0].trim();
		}

		if( count($l) > 1 ) {
			return trim($l[count($l) - 2]);
		}

	}

	function getGuestRate($type) {
		return $type == 'business' ? 0.05 : 0.1;
	}

	function getGuestPrice($price, $guestPart) {
		return ceil($price / (1 - $guestPart));
	}

	use Parse\ParseClient;
	use Parse\ParseQuery;
 
	ParseClient::initialize('8YpQsh2LwXpCgkmTIIncFSFALHmeaotGVDTBqyUv', 'M4t1qE8ZLZ009lVRqX4QFCTQbUqcdNwblB5DfKV4', 'G32GlUu97evll0wt27WwmqaFuGsTbdwCmebvIGZx');

	$boatdayid = $_GET['id'];

	$canDisplay = false;
	$attempts = 0;
	$isAnother = false;

	// Fetch the one asked
	$query = new ParseQuery("BoatDay");
	$query->includeKey('captain');
	$query->includeKey('host');
	$baseBoatday = $query->get($boatdayid);

	do {

		switch($attempts) {
			case 0 : 
				$isAnother = false;
				$boatdays = array($baseBoatday);
				break;
			case 1 :
				$isAnother = true;
				// Fetch from same Captain
				$query = new ParseQuery("BoatDay");
				$query->includeKey('captain');
				$query->includeKey('host');
				$query->greaterThan('date', new DateTime());
				$query->equalTo('captain', $baseBoatday->get('captain'));
				$query->ascending('date');
				$boatdays = $query->find();
				break;
			case 2 :
				$isAnother = true;
				// Feth from same category & price between 50+-
				$query = new ParseQuery("BoatDay");
				$query->includeKey('captain');
				$query->includeKey('host');
				$query->greaterThan('date', new DateTime());
				$query->equalTo('category', $baseBoatday->get('category'));
				$query->greaterThan('price', $baseBoatday->get('price') - 25);
				$query->lessThan('price', $baseBoatday->get('price') + 25);
				$query->ascending('date');
				$boatdays = $query->find();
				break;
			case 3 :
				$isAnother = true;
				// Same category
				$query = new ParseQuery("BoatDay");
				$query->includeKey('captain');
				$query->includeKey('host');
				$query->greaterThan('date', new DateTime());
				$query->equalTo('category', $baseBoatday->get('category'));
				$query->ascending('date');
				$boatdays = $query->find();
				break;
			case 4 :
				$isAnother = true;
				// Anything
				$query = new ParseQuery("BoatDay");
				$query->includeKey('captain');
				$query->includeKey('host');
				$query->greaterThan('date', new DateTime());
				$query->ascending('date');
				$boatdays = $query->find();
				break;
			default :
				// oops nothing to display
				die('No BoatDays available currently.');
				break;
		}

		$attempts++;

		if( $boatdays !== null && count($boatdays) > 0 ) {
			
			$boatday = $boatdays[0];

			$seats = $boatday->get('availableSeats') - $boatday->get('bookedSeats');
			$now = new DateTime();
			$time = new DateTime($boatday->get('date')->format('Y-m-d'));
			$tsBoatDay = $time->getTimestamp() + ($boatday->get('departureTime') * 3600) ;
			
			if( $seats > 0 && $now->getTimestamp() < $tsBoatDay ) {
				$canDisplay = true;
			} 
		}
	} while( !$canDisplay);


	$_q = $boatday->getRelation('boatdayPictures')->getQuery();
	$_q->ascending('createdAt');
	$fh = $_q->first();

	$boatdayPicture = gettype($fh) == 'object' ? $fh->get('file')->getUrl() : 'https://www.boatdayapp.com/deep-linking/resources/placeholder-boatday.png';
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width" />
		<title><?php echo $boatday->get('name') . ', only ' . $seats . ' seat' . ( $seats == 1 ? '' : 's' ) . ' available.'; ?></title>
		<link rel="stylesheet" type="text/css" href="../../deep-linking/scripts/vendor/bootstrap/dist/css/bootstrap.min.css" />
		<link rel="stylesheet" type="text/css" href="../../deep-linking/styles/boatday-icons.css" />
		<link rel="stylesheet" type="text/css" href="../../deep-linking/styles/main.css" />

		<meta property="og:locale"       content="en_US" />
		<meta property="og:type"         content="website" />
		<meta property="fb:app_id"       content="1442439216059238" />

		<meta property="og:title"        content="<?php echo $boatday->get('name') . ', only ' . $seats . ' seat' . ( $seats == 1 ? '' : 's' ) . ' available.'; ?>" />
		<meta property="og:description"  content="<?php echo $boatday->get('description') ?>" />
		<meta property="og:url"          content="https://www.boatdayapp.com/dl/boatday/<?php echo $boatdayid; ?>" />
		<meta property="og:image"        content="<?php echo $boatdayPicture; ?>" />

		<meta name="twitter:card"        content="summary_large_image" />
		<meta name="twitter:site"        content="@BoatDayApp" />
		<meta name="twitter:creator"     content="@BoatDayApp" />
		<meta name="twitter:title"       content="BoatDay App, better boating, with Friends!" />
		<meta name="twitter:description" content="Download the BoatDay app to access instant and affordable boating near you. Fishing, sailing, parties and more, plan a boat outing with just a few clicks." />
		<meta name="twitter:url"         content="https://www.boatdayapp.com/index" />
		<meta name="twitter:image:src"   content="https://www.boatdayapp.com/resources/media/image-1.jpg" />

		<link rel="shortcut icon" href="../../deep-linking/resources/favicon-16.ico" type="image/x-icon" />
		<link rel="icon" href="../../deep-linking/resources/favicon-16.ico" type="image/x-icon" />
	</head>
	<body>
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3 col-lg-6 col-lg-offset-3">
					<p>
						<?php if( $isAnother ) { ?>
							Oops, the BoatDay you're looking for already set sail! Here's another great option nearby.
						<?php } else { ?>
							You're a click away from this great day of boating!
						<?php } ?>
					</p>
					<div class="wrapper">
						<div class="boatday-card">
							<div class="image" style="background-image:url(<?php echo $boatdayPicture; ?>)">
								<div class="banner left">
									<div class="host-picture" style="background-image:url(<?php echo $boatday->get('captain')->get('profilePicture')->getUrl(); ?>)"></div>
									<?php if( $boatday->get('captain')->get('rating') ) { ?>
										<div class="rating rating-<?php echo ceil($boatday->get('captain')->get('rating')) ?> bd-icons">
											<div class="with-empty bd-icons"></div>
										</div>
									<?php } else { ?>
										<label class="no-rating"><?php echo $boatday->get('captain')->get('displayName') ?></label>
									<?php } ?>
								</div>

								<div class="banner right">
									<label class="price">$<?php echo getGuestPrice($boatday->get('price'), getGuestRate($boatday->get('host')->get('type'))); ?></label>
								</div>
							</div>
							<div class="details">
								<h1 class="title"><?php echo $boatday->get('name'); ?></h1>
								<div class="items">
									<div class="item location">
										<div class="icon bd-pin icon"></div>
										<div class="label"><?php echo getCityFromLocation($boatday->get('locationText')) ?></div>
									</div>
									<div class="item date">
										<div class="icon bd-calendar"></div>
										<div class="label"><?php echo dateToEnBoatDayCard($boatday->get('date')); ?></div>
									</div>
									<div class="item time">
										<div class="icon bd-clock"></div>
										<div class="label"><?php echo departureTimeToDisplayTime($boatday->get('departureTime')); ?></div>
									</div>
									<div class="item seats">
										<div class="bd-person icon"></div>
										<div class="label"><?php echo $seats; ?></div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="buttons">
						<a href="https://itunes.apple.com/us/app/boatday/id953574487?ls=1&amp;mt=8"><img class="dl-button" src="../../deep-linking/resources/dl-apple.png" /></a>
						<a href="https://play.google.com/store/apps/details?id=com.boat.day"><img class="dl-button" src="../../deep-linking/resources/dl-google.png" /></a>
						<a id="dl" style="display:none" href="javascript:dl('<?php echo $boatdayid ?>')" class="deep-link">View in the app</a>
						<script type="text/javascript">
							function dl(id) { window.location = /Android/i.test(navigator.userAgent) ? 'android-app://com.boat.day/boatday/boatday?id='+id : 'boatday://boatday?id='+id; }
							if(/Android|iPhone|iPad|iPod/i.test(navigator.userAgent)) document.getElementById('dl').style.display = 'inline-block';
						</script>
						<?php if( $isAnother ) { ?>
							<br/><br/>
							<a href="https://www.boatdayapp.com/boatdays">See more BoatDays</a>
						<?php } ?>
					</div>

					<div class="share">
						<!-- <a href="">Let other friends <br/>know about this</a> -->
					</div>
				</div>
			</div>
		</div>
	</body>
</html>