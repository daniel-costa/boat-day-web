<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

	require 'vendor/autoload.php';

	function dayToEnDay($n) {
		switch($n) {
			case 0 : return 'Sun'; break;
			case 1 : return 'Mon'; break;
			case 2 : return 'Tue'; break;
			case 3 : return 'Wed'; break;
			case 4 : return 'Thur'; break;
			case 5 : return 'Fri'; break;
			case 6 : return 'Sat'; break;
		}
	}

	
	function dateToEnBoatDayCard($date) {
		/*
		var $date = new Date($date -> iso ? $date -> iso : $date);
		return dayToEnDay($date.getDay()) + ', ' + ($date.getMonth()+1) + '/' + $date.getDate();
		*/

		return $date;
	}

	
	function departureTimeToDisplayTime($time) {

		$h = $time * 1;
		$mm = ( $time - $h ) * 60;
		$dd = 'am';

		if( $h >= 12 ) {
			$dd = 'pm';
			$h -= 12;
		}

		return ( $h == 0 ? 12 : $h ) + ':' + ( $mm == 0 ? '00' : + ( $mm < 10 ? '0' + $mm : $mm ) ) + ' ' + $dd;	
	}

	function getCityFromLocation($location) {

		/*
		var l = location.split(',');

		if( l.length == 0 ) {
			return '';
		}

		if( l.length == 1 ) {
			return l[0].trim();
		}

		if( l.length > 1 ) {
			return l[l.length - 2].trim();
		}
		*/

	}

	use Parse\ParseClient;
 
	ParseClient::initialize('8YpQsh2LwXpCgkmTIIncFSFALHmeaotGVDTBqyUv', 'M4t1qE8ZLZ009lVRqX4QFCTQbUqcdNwblB5DfKV4', 'G32GlUu97evll0wt27WwmqaFuGsTbdwCmebvIGZx');

	$boatdayid = $_GET['id'];

	echo $boatdayid;

	$query = new ParseQuery("BoatDay");
	$query->include('captain');
	$boatday = $query->get($boatdayid);

	/*
	if( $boatday->get('captain')->get('rating') ) {
		$('.no-rating').hide();
		$('.rating').addClass('rating-' + Math.ceil(boatday.get('captain').get('rating')));
	} else {
		$('.no-rating').text(boatday.get('captain').get('displayName'));
		$('.rating').hide();
	}

		$('.host-picture').css({ 
			backgroundImage: 'url(' + boatday.get('captain').get('profilePicture').url() + ')'
		});

		var seats = boatday.get('availableSeats') - boatday.get('bookedSeats');

		document.title = boatday.get('name') + ', only ' + seats + ' seat'+(seats == 1 ? '' : 's') + ' available.';
		
		$('meta[property="og\\:title"]').attr("content", boatday.get('name'));
		$('meta[property="og\\:description"]').attr("content", boatday.get('description'));
		$('meta[property="og\\:url"]').attr("content", decodeURIComponent(window.location));

		$('.location .label').text(getCityFromLocation(boatday.get('locationText')));
		$('.date .label').text(dateToEnBoatDayCard(boatday.get('date')));
		$('.time .label').text(departureTimeToDisplayTime(boatday.get('departureTime')));
		$('.seats .label').text(boatday.get('availableSeats'));
		$('.price').text('$'+boatday.get('price'));

		$('.deep-link').attr('href', 'boatday://boatday?id=' + boatdayid);

		boatday.relation('boatdayPictures').query().first().then(function(fh) {

			$('.image').css({ 
				backgroundImage: typeof fh === typeof undefined ? 'url(resources/placeholder-boatday.png)' : 'url(' + fh.get('file').url() + ')'
			});

			$('meta[property="og\\:image"]').attr("content", typeof fh === typeof undefined ? 'https://www.boatdayapp.com/deep-linking/resources/placeholder-boatday.png' : fh.get('file').url());

			$('.container').fadeIn();
		});
	*/
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width" />
		<title>BoatDay</title>
		<link rel="stylesheet" type="text/css" href="../../deep-linking/scripts/vendor/animate.css/animate.min.css" />
		<link rel="stylesheet" type="text/css" href="../../deep-linking/scripts/vendor/bootstrap/dist/css/bootstrap.min.css" />
		<link rel="stylesheet" type="text/css" href="../../deep-linking/styles/boatday-icons.css" />
		<link rel="stylesheet" type="text/css" href="../../deep-linking/styles/main.css" />

		<meta property="og:locale"       content="en_US" />
		<meta property="og:type"         content="website" />
		<meta property="fb:app_id"       content="1442439216059238" />


		<meta property="og:title"        content="" />
		<meta property="og:description"  content="" />
		<meta property="og:url"          content="" />
		<meta property="og:image"        content="" />

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
					<p>You're a click away from this great day of boating!</p>
					<div class="wrapper">
						<div class="boatday-card">
							<div class="image">
								<div class="banner left">
									<div class="host-picture"></div>

									<div class="rating bd-icons">
										<div class="with-empty bd-icons"></div>
									</div>

									<label class="no-rating"></label>
								</div>

								<div class="banner right">
									<label class="price"></label>
								</div>
							</div>
							<div class="details">
								<h1 class="title"><?php echo $boatday->get('name'); ?></h1>
								<div class="items">
									<div class="item location">
										<div class="icon bd-pin icon"></div>
										<div class="label"></div>
									</div>
									<div class="item date">
										<div class="icon bd-calendar"></div>
										<div class="label"></div>
									</div>
									<div class="item time">
										<div class="icon bd-clock"></div>
										<div class="label"></div>
									</div>
									<div class="item seats">
										<div class="bd-person icon"></div>
										<div class="label"></div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="buttons">
						<a href="https://itunes.apple.com/us/app/boatday/id953574487?ls=1&amp;mt=8"><img src="../../deep-linking/resources/apple-store.png" /></a>
						<a href="" class="deep-link">View in the app</a>
					</div>

					<div class="share">
						<!-- <a href="">Let other friends <br/>know about this</a> -->
					</div>
				</div>
			</div>
		</div>
		<!--
			<script src="https://www.parsecdn.com/js/parse-1.6.7.min.js"></script>
			<script src="../../deep-linking/scripts/vendor/jquery/dist/jquery.min.js"></script>
			<script src="../../deep-linking/scripts/vendor/bootstrap/dist/js/bootstrap.min.js"></script>
			<script src="../../deep-linking/scripts/main.js"></script>
		-->
	</body>
</html>