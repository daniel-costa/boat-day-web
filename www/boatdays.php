<?php 
	require 'lib.functions.php';
	require 'vendor/autoload.php';

	use Parse\ParseClient;
	use Parse\ParseQuery;

	//Development version
	ParseClient::initialize('LCn0EYL8lHOZOtAksGSdXMiHI08jHqgNOC5J0tmU', 'b7qmevgk3fqgAydZYttahfXeY3yvJtiJG1oY98LD', 'aA7tEGR51o5yxPdTfA8RKo5IbaN9eLPba4a0bIIy');

	//Production version
	//ParseClient::initialize('8YpQsh2LwXpCgkmTIIncFSFALHmeaotGVDTBqyUv', 'M4t1qE8ZLZ009lVRqX4QFCTQbUqcdNwblB5DfKV4', 'G32GlUu97evll0wt27WwmqaFuGsTbdwCmebvIGZx');
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<?php include_once('UX.head.php'); ?>
		<title>BoatDay App - Upcoming BoatDays</title>
	</head>
	<body class="boatdays">
		<?php include_once('UX.section.header.php'); ?>

		<main>

			<section class="placeholder">
			</section>

			<?php
				$query = new ParseQuery("BoatDay");
				$query->includeKey('captain');
				$query->includeKey('host');
				$query->limit(20);
				$query->equalTo("featured", -1);
				//$query->greaterThan('date', new DateTime());
				$boatdays = $query->find();

				if( count($boatdays) > 0 ) {
			?>
				<section class="upcoming-boatdays">
					<div class="container">
						<div class="row text-center">
							<h2>Upcoming BoatDays</h2>
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



			<?php include_once('UX.section.modals.php'); ?>			
		</main>

		<?php include_once('UX.section.footer.php'); ?>
		<?php include_once('UX.scripts.php'); ?>
	</body>
</html>