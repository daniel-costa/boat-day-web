<?php 
	require 'lib.functions.php';
	require 'vendor/autoload.php';

	use Parse\ParseClient;
	use Parse\ParseQuery;

	//Development version
	//ParseClient::initialize('LCn0EYL8lHOZOtAksGSdXMiHI08jHqgNOC5J0tmU', 'b7qmevgk3fqgAydZYttahfXeY3yvJtiJG1oY98LD', 'aA7tEGR51o5yxPdTfA8RKo5IbaN9eLPba4a0bIIy');

	//Production version
	ParseClient::initialize('8YpQsh2LwXpCgkmTIIncFSFALHmeaotGVDTBqyUv', 'M4t1qE8ZLZ009lVRqX4QFCTQbUqcdNwblB5DfKV4', 'G32GlUu97evll0wt27WwmqaFuGsTbdwCmebvIGZx');
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<?php include_once('UX.head.php'); ?>
		<title>BoatDay - Our mission</title>
	</head>
	<body class="home">
		<?php include_once('UX.section.header.php'); ?>

		<main>
			<section class="main-swiper">
				<div class="swiper-container">
					<div class="swiper-wrapper">
						<div class="swiper-slide slide-1">
							<div class="container text-center">
								<img src="resources/logo-white.png" /><br/><br/>
								<p>Better Boating With Friends</p>
							</div>
						</div>
						<div class="swiper-slide slide-5">
							<div class="container text-left">
								<span>Instant<br/>Getaways</span>
								<p class="text-left">Great boat outings at your fingertips</p>
							</div>
						</div>
						<div class="swiper-slide slide-3">
							<div class="container text-left">
								<span>Amazing<br/>Experiences</span>
								<p class="text-left">Cruising, fishing, sailing and more</p>
							</div>		
						</div>
						<div class="swiper-slide slide-2">
							<div class="container text-left">
								<span>Meaningful<br/>Connections</span>
								<p class="text-left">Unforgettable memories in the sun</p>
							</div>	
						</div>
						<div class="swiper-slide slide-4">
							<div class="container text-left">
								<span>Unprecedented<br/>Value</span>
								<p class="text-left">Affordable adventures departing daily</p>
							</div>
						</div>
					</div>
				</div>
				<div class="swiper-pagination"></div>
			</section>

			<section>
				<div class="container">
					<h1>Welcome to BoatDay</h1>
					<p>
						Instant access to fun and affordable boating with friends<br/>
						Download BoatDay. Join a Captained boat outing. Meet at the marina. Share the costs.
					</p>
					<a href="#" data-toggle="modal" data-target="#modal-youtube-video" target="_blank" class="btn btn-large">Watch our video</a>
				</div>
			</section>

			<section class="blured blured-01">
				<div class="container">
					<div class="row text-center">
						<h2>How does it work?</h2>
						<div class="col-sm-3">
							<h3>1. Browse</h3>
							<p class="text-small">Cruising, fishing, watersports and more, the app shows you available trips in your area.</p>
						</div>
						<div class="col-sm-3">
							<h3>2. Book</h3>
							<p class="text-small">Reserve a spot onboard for yourself, for a group, or book the entire boat. The choice is yours.</p>
						</div>
						<div class="col-sm-3">	
							<h3>3. Enjoy</h3>
							<p class="text-small">Head to the marina, meet your Captain and other guests, and enjoy a great day on the water.</p>
						</div>
						<div class="col-sm-3">	
							<h3>4. Repeat</h3>
							<p class="text-small">Per-person pricing means frequent, friendly and affordable boating. Book your next BoatDay!</p>
						</div>
					</div>
				</div>
			</section>


			<?php

				$queryBoatApproved = new ParseQuery('Boat');
				$queryBoatApproved->equalTo('status', 'approved');

				$queryHostApproved = new ParseQuery('Host');
				$queryHostApproved->equalTo('status', 'approved');

				$startDate = new DateTime();

				$query = new ParseQuery('BoatDay');
				$query->matchesQuery("boat", $queryBoatApproved);
				$query->matchesQuery("host", $queryHostApproved);
				$query->includeKey('captain');
				$query->includeKey('host');
				$query->limit(3);
				// $query->equalTo('displayInWebsite', true);
				$query->greaterThan('date', $startDate);
				$query->equalTo('status', 'complete');
				$query->ascending('featured,date');
				
				$boatdays = $query->find();

				if( count($boatdays) > 0 ) {
			?>
				<section class="upcoming-boatdays">
					<div class="container">
						<div class="row text-center">
							<h2>Enjoy a great day out</h2>
							<?php
								foreach( $boatdays as $boatday ) {
									$seats = $boatday->get('availableSeats') - $boatday->get('bookedSeats');
									$_q = $boatday->getRelation('boatdayPictures')->getQuery();
									$_q->ascending('createdAt');
									$fh = $_q->first();
									$boatdayPicture = gettype($fh) == 'object' ? $fh->get('file')->getUrl() : 'https://www.boatdayapp.com/deep-linking/resources/placeholder-boatday.png';
							?>
								<div class="col-sm-4">
									<div class="boatday-card" data-id="<?php echo $boatday->getObjectId(); ?>">
										<div class="image" style="background-image:url(<?php echo $boatdayPicture; ?>)">

											<div class="seats-remaining">
												<label>only<br><?php echo $seats ?> seats left</label>
											</div>

											<div class="share-boatday">
												<span class="icon bd-share"></span>
											</div>

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
													<div class="icon bd-pin"></div>
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
							<?php  } ?>

						</div>

						<a class="btn" href="boatdays">View more BoatDays</a>
					</div>
				</section>
			<?php  } ?>

			<?php
				$query = new ParseQuery("SeatRequest");
				$query->equalTo('status', 'approved');
				$query->equalTo('ratingGuest', 5);
				$query->notContainedIn('reviewGuest', array("", null));
				$query->includeKey('profile');
				$query->includeKey('boatday');
				$query->limit(6);
				$query->descending('createdAt');
				$reviews = $query->find();

				if( count($reviews) > 0 ) {
			?>
				<section class="blured blured-02 reviews">
					<div class="container">
						<div class="row">
							<div class="col-sm-8 col-sm-offset-2">
								<h3>What Guests are Saying . . .</h3>
								<div class="swiper-container">
									
									<div class="swiper-wrapper">
										<?php foreach( $reviews as $review ) { ?>
											<div class="swiper-slide">
												<div class="review-block">
													
													<div class="review">
														<div class="heading">
															<div class="guest-picture" style="background-image:url(<?php echo $review->get('profile')->get('profilePicture')->getUrl(); ?>)"></div>
															<h4><?php echo $review->get('profile')->get('displayName'); ?></h4>
															<div class="rating rating-<?php echo $review->get('ratingGuest'); ?> bd-icons">
																<div class="with-empty bd-icons"></div>
															</div>
															<p class="date"><?php echo dateToEnBoatDayCard($review->get('boatday')->get('date')); ?></p>
														</div>
														<p class="review"><?php echo str_replace("\n", '<br/>', $review->get('reviewGuest')); ?></p> 
														<p class="boatday">Went to "<?php echo $review->get('boatday')->get('name'); ?>"</p> 
													</div> 
												</div>
											</div>
										<?php  } ?>
									</div>

								<div class="swiper-pagination"></div>
								</div>
							</div>
						</div>
					</div>
				</section>
			<?php  } ?>

			<section class="join-boatday">
				<div class="container">
					<h4 class="title">Ready to go Boating?</h4>
					<div class="row">
						<div class="col-sm-6">
							<img class="heading-for-box" src="resources/guestcard.jpg" />
							<div class="box">
								<h4>Download the app and join a great day on the water</h4>
								<a class="btn" data-toggle="modal" data-target="#modal-download">Get the app</a>
							</div>
						</div>
						<div class="col-sm-6">
							<img class="heading-for-box" src="resources/hostcard.jpg" />
							<div class="box">
								<h4>Host fun boat outings with paying Guests</h4>
								<a class="btn" href="https://www.boatdayhosts.com" target="_blank">Sign-up as a Host</a>
								<a class="learn-more" href="hosts">Learn more</a>
							</div>
						</div>
					</div>
				</div>
			</section>

			<?php include_once('UX.section.modals.php'); ?>			
		</main>

		<?php include_once('UX.section.footer.php'); ?>
		<?php include_once('UX.scripts.php'); ?>
	</body>
</html>