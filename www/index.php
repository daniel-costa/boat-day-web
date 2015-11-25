<?php 
	require 'lib.functions.php';
	require 'vendor/autoload.php';

	use Parse\ParseClient;
	use Parse\ParseQuery;
	ParseClient::initialize('8YpQsh2LwXpCgkmTIIncFSFALHmeaotGVDTBqyUv', 'M4t1qE8ZLZ009lVRqX4QFCTQbUqcdNwblB5DfKV4', 'G32GlUu97evll0wt27WwmqaFuGsTbdwCmebvIGZx');
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<?php include_once('UX.head.php'); ?>
		<title>BoatDay App - Our mission</title>
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
								<p>Instant Getaways.</p>
							</div>
						</div>
						<div class="swiper-slide slide-2">
							<div class="container text-right">
								<span>Meanigfull<br/>Conections</span>
								<p class="text-right">Lasting friendships built on the water.</p>
							</div>	
						</div>
						<div class="swiper-slide slide-3">
							<div class="container text-left">
								<span>Amazing<br/>Experiences</span>
								<p class="text-left">Create unforgettable memories in the sun</p>
							</div>
						</div>
						<div class="swiper-slide slide-4">
							<div class="container text-right">
								<span>Unprecedented<br/>Value</span>
								<p class="text-right">Access and affordability:<br/>Boating when, where, and how you want it.</p>
							</div>
						</div>
						<div class="swiper-slide slide-5">
							<div class="container text-left">
								<span>Better<br/>Boating</span>
								<p class="text-left">Making boating easier than ever</p>
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
						Drop any kind of content into a fully flexible and responsive modal!<br/>
						Useful for One Page sites and notifications. Available in five sizes.
					</p>
					<a href="https://www.youtube.com/watch?v=LZW8YKzh-MY" target="_blank" class="btn btn-large">Check out our video</a>
				</div>
			</section>

			<section class="blured blured-01">
				<div class="container">
					<div class="row text-center">
						<h2>How does it work?</h2>
							
						<div class="col-sm-3">
							<h3>1. Browse</h3>
							<p class="text-small">Browse boats using your custom search filters. Fun, fishing, watersports and more, the app shows you BoatDays when and where you need one.</p>
						</div>
						<div class="col-sm-3">
							<h3>2. Invite</h3>
							<p class="text-small">Found your BoatDay? Request space for yourself, for a group, or reserve the entire boat. Once confirmed by the Host, use the private chat wall to coordinate with your host and other guests.</p>
						</div>
						<div class="col-sm-3">	
							<h3>3. Enjoy</h3>
							<p class="text-small">It's that simple! Meet your Host and other Guests at the departure point, then head out for more frequent, friendly, and affordable boating than ever before.</p>
						</div>
						<div class="col-sm-3">	
							<h3>4. Rate</h3>
							<p class="text-small">Let the host know what you thought of his/her trip. This rating will be displayed in order for users peace of mind and in benefit of the hosts.</p>
						</div>
					</div>
				</div>
			</section>


			<?php
				$query = new ParseQuery("BoatDay");
				$query->includeKey('captain');
				$query->includeKey('host');
				$query->limit(3);
				$query->equalTo("featured", -1);
				$query->greaterThan('date', new DateTime());
				$boatdays = $query->find();

				if( count($boatdays) > 0 ) {
			?>
				<section class="upcoming-boatdays">
					<div class="container">
						<div class="row text-center">
							<h2>Next BoatDays</h2>
							<?php
								foreach( $boatdays as $boatday ) {
									
									$seats = $boatday->get('availableSeats') - $boatday->get('bookedSeats');

									$_q = $boatday->getRelation('boatdayPictures')->getQuery();
									$_q->ascending('createdAt');
									$fh = $_q->first();

									$boatdayPicture = gettype($fh) == 'object' ? $fh->get('file')->getUrl() : 'https://www.boatdayapp.com/deep-linking/resources/placeholder-boatday.png';
							?>
								<div class="col-sm-4">
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
				$query->limit(120);
				$query->descending('createdAt');
				$reviews = $query->find();

				if( count($reviews) > 0 ) {
			?>
				<section class="blured blured-02 reviews">
					<div class="container">
						<div class="row">
							<div class="col-sm-8 col-sm-offset-2">
								<div class="swiper-container">
									<div class="swiper-wrapper">
										<?php foreach( $reviews as $review ) { ?>
											<div class="swiper-slide">
												<div class="review-block">
													<h3>GUEST REVIEW</h3>
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
					<h4>Join BoatDay Today</h4>
					<div class="row">
						<div class="col-sm-6">
							<img class="heading-for-box" src="resources/join-bd-guest.jpg" />
							<div class="box">
								<h4>Download the app and enjoy a great day on the water</h4>
								<a class="btn" data-toggle="modal" data-target="#modal-download">Get the app</a>
							</div>
						</div>
						<div class="col-sm-6">
							<img class="heading-for-box" src="resources/join-bd-host.jpg" />
							<div class="box">
								<h4>Host fun boat outings with paying Guests</h4>
								<a class="btn" href="https://www.boatdayhosts.com" target="_blank">Sign-up as a Host</a>
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