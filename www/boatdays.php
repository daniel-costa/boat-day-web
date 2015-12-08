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
				<?php include_once('searchOptions.php') ?>
			</section>

	
			<section class="upcoming-boatdays">
				<div class="container">
					<div class="row text-center">
						


					</div>
				</div>
			</section>
			


			<?php include_once('UX.section.modals.php'); ?>			
		</main>

		<?php include_once('UX.section.footer.php'); ?>
		<?php include_once('UX.scripts.php'); ?>
	</body>
</html>