<?php 
	require 'lib.functions.php';
	require 'vendor/autoload.php';

	use Parse\ParseClient;
	use Parse\ParseQuery;

	//Development version
	ParseClient::initialize('LCn0EYL8lHOZOtAksGSdXMiHI08jHqgNOC5J0tmU', 'b7qmevgk3fqgAydZYttahfXeY3yvJtiJG1oY98LD', 'aA7tEGR51o5yxPdTfA8RKo5IbaN9eLPba4a0bIIy');

	//Production version
	//ParseClient::initialize('8YpQsh2LwXpCgkmTIIncFSFALHmeaotGVDTBqyUv', 'M4t1qE8ZLZ009lVRqX4QFCTQbUqcdNwblB5DfKV4', 'G32GlUu97evll0wt27WwmqaFuGsTbdwCmebvIGZx');

	//default value settings for options
	$startPrice = "10";
	$endPrice = "200";
	$minPrice = "10";
	$maxPrice = "500";
	$startDepartureTime = "6";
	$endDepartureTime = "21.5";
	$departureMinTime = "0";
	$departureMaxTime = "23.5";
	$dateFrom = "";
	$dateTo = "";
	$category = "leisure";

	$query = new ParseQuery("BoatDay");
	$query->includeKey('captain');
	$query->includeKey('host');
	$query->limit(20);
	$query->equalTo('status', 'complete');
	

	if(isset($_POST['option-submit'])){
		$category = mysql_real_escape_string($_POST['category']);
		$dateFrom = mysql_real_escape_string($_POST['date-from']);
		$dateTo = mysql_real_escape_string($_POST['date-to']);
		$startPrice = mysql_real_escape_string($_POST['start-price-hidden']);
		$endPrice = mysql_real_escape_string($_POST['end-price-hidden']);
		$startDepartureTime = mysql_real_escape_string($_POST['start-departure-hidden']);
		$endDepartureTime = mysql_real_escape_string($_POST['end-departure-hidden']);

		$dateFrom_ = DateTime::createFromFormat('m/d/Y', $dateFrom);
		$query->greaterThanOrEqualTo('date', $dateFrom_);
		$dateTo_ = DateTime::createFromFormat('m/d/Y', $dateTo);
		$query->lessThanOrEqualTo('date', $dateTo_);	
	}

	else{
		//$query->equalTo("featured", -1);
		$query->greaterThan('date', new DateTime());
	}

	$query->equalTo('category', $category);
	$query->greaterThanOrEqualTo('price', floatval($startPrice));
	$query->lessThanOrEqualTo('price', floatval($endPrice));
	$query->greaterThanOrEqualTo('departureTime', floatval($startDepartureTime));
	$query->lessThanOrEqualTo('departureTime', floatval($endDepartureTime));


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


			<section class="options">
				<div class="container">
					<form method="post" action="" class="form-inline" role="form">
						<div class="row">
							<div class="col-sm-6">
								<div class="form-group">
									<label class="control-label text-left" for="date-from">From:</label>
									<input type="text" required placeholder="mm/dd/yyyy" class="form-control" id="date-from" name="date-from" value="<?php  echo $dateFrom;  ?>">
								</div>
								<div class="form-group">
									<label class="control-label" for="date-to">To:</label>
									<input type="text" required placeholder="mm/dd/yyyy" class="form-control" id="date-to" name="date-to" value="<?php  echo $dateTo;  ?>">
								</div>
							</div>
							<div class="col-sm-6">
								<div class="form-group">
									<label class="control-label pull-left">Price</label>
									<label class="preview-price control-label pull-right"><?php echo "$".$startPrice ." - $".$endPrice ?></label>
									<div>
										<input type="text" class="form-control" id="slider-price" name="slider-price"  data-slider-min="<?php echo $minPrice; ?>" data-slider-max="<?php echo $maxPrice; ?>" data-slider-step="5" data-slider-value="<?php echo "[".$startPrice.", ".$endPrice."]"; ?>">
										<input type="hidden" name="start-price-hidden" id="start-price-hidden" value="<?php echo $startPrice; ?>"/>
										<input type="hidden" name="end-price-hidden" id="end-price-hidden" value="<?php echo $endPrice; ?>"/>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-6">
								<div class="form-group">
									<label class="control-label">Activity:</label>
									<select name="category" required class="form-control">
										<option value="leisure" <?php if($category == "leisure") { echo "selected"; } ?>>Leisure</option>
										<option value="fishing" <?php if($category == "fishing") { echo "selected"; } ?>>Fishing</option>
										<option value="sailing" <?php if($category == "sailing") { echo "selected"; } ?>>Sailing</option>
										<option value="sports"  <?php if($category == "sports") { echo "selected"; } ?>>Water Sports</option>
									</select>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="form-group">
									<label class="control-label">Departure:</label>
									<label class="preview-departure control-label pull-right"><?php echo departureTimeToDisplayTime($startDepartureTime)." - ".departureTimeToDisplayTime($endDepartureTime); ?></label>
									<div>
										<input type="text" class="form-control" id="slider-departure" name="slider-departure"  data-slider-min="<?php echo $departureMinTime; ?>" data-slider-max="<?php echo $departureMaxTime; ?>" data-slider-step="0.5" data-slider-value="<?php echo "[".$startDepartureTime.", ".$endDepartureTime."]"; ?>">
										<input type="hidden" name="start-departure-hidden" id="start-departure-hidden" value="<?php echo $startDepartureTime; ?>"/>
										<input type="hidden" name="end-departure-hidden" id="end-departure-hidden" value="<?php echo $endDepartureTime; ?>"/>
									</div>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="form-group">
								<button name="option-submit" type="submit" class="btn">Submit</button>
							</div>
						</div>
						
					</form>
				</div>
			</section>

			<?php



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