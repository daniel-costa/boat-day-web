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
		<title>BoatDay App - Be a Host</title>
	</head>
	<body class="hosts">
		<?php include_once('UX.section.header.php'); ?>

		<main>
			<section class="placeholder">
			</section>

			<section>
				<div class="container">
					<h1>Welcome to BoatDay</h1>
					<p>
						Drop any kind of content into a fully flexible and responsive modal!<br/>
						Useful for One Page sites and notifications. Available in five sizes.
					</p>
					<a href="https://www.boatdayhosts.com" target="_blank" class="btn btn-large">Sign up as a Host</a>
				</div>
			</section>

			<section class="blured blured-01">
				<div class="container">
					<div class="row text-center">
						<h2>How does it work?</h2>
							
						<div class="col-sm-4">
							<img src="resources/ico-money.png" />
							<h3>Make Money</h3>
							<p class="text-small">Browse boats using your custom search filters. Fun, fishing, watersports and more, the app shows you BoatDays when and where you need one.</p>
						</div>
						<div class="col-sm-4">
							<img src="resources/ico-love.png" />
							<h3>Boat More Often</h3>
							<p class="text-small">Found your BoatDay? Request space for yourself, for a group, or reserve the entire boat. Once confirmed by the Host, use the private chat wall to coordinate with your host and other guests.</p>
						</div>
						<div class="col-sm-4">
							<img src="resources/ico-captain.png" />
							<h3>Become a Captain</h3>
							<p class="text-small">It's that simple! Meet your Host and other Guests at the departure point, then head out for more frequent, friendly, and affordable boating than ever before.</p>
						</div>
					</div>
				</div>
			</section>

			<?php
				$queryHost = new ParseQuery("Host");
				$queryHost->equalTo('status', 'approved');

				$query = new ParseQuery("Profile");
				$query->containedIn('rating', [5, 4]);
				$query->matchesQuery('host', $queryHost);
				$query->limit(9);
				$query->descending('ratingAmount');
				$hosts = $query->find();

				if( count($hosts) > 0 ) {
			?>
				<section class="hosts">
					<div class="container">
						<div class="row">
							<div class="col-sm-12">
								<h1>Meet some of our Hosts</h1>
								<div class="swiper-container">
									<div class="swiper-wrapper">
										<?php foreach( $hosts as $host ) { ?>
											<div class="swiper-slide">
												<div class="host-block">
													<div class="host-picture" style="background-image:url(<?php echo $host->get('profilePicture')->getUrl(); ?>)"></div>
													<h5><?php echo $host->get('displayName'); ?></h5>
													<div class="rating rating-<?php echo ceil($host->get('rating')) ?> bd-icons">
														<div class="with-empty bd-icons"></div>
													</div>
													<br/>
													<p class="ratingAmount"><?php echo $host->get('ratingAmount'); ?> rating<?php echo $host->get('ratingAmount') == 1 ? '' : 's'; ?></p>
													<p>"<?php echo $host->get('about'); ?>"</p>
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
					<h4>Join BoatDay</h4>
					<div class="row">
						<div class="col-sm-6">
							<div class="box">
								<h4>1. Register</h4>
								<p>Complete a one-time registration process which includes background information about you, your boat, and your boating experience.</p>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="box">
								<h4>2. Create a BoatDay</h4>
								<p>Create fun BoatDays, list them in the app, and wait for reservation requests to come in. Or be active and promote your BoatDays on social media. The choice is yours!</p>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-6">
							<div class="box">
								<h4>3. Meet your Guests</h4>
								<p>Chat, cordinate, and meet your Guests then head out for a fun and memorable day of boating.</p>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="box">
								<h4>4. Payment</h4>
								<p>Guest payments are automatically processed and deposited in your account, its cashless and hassle-free.</p>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12">
							<div class="box no-top-border">
								<h3>Take me to the sign up page for hosts</h3>
								<a href="https://www.boatdayhosts.com" target="_blank" class="btn">Sign up as a Host</a>
							</div>
						</div>
					</div>
				</div>
			</section>
			
			<?php include_once('UX.section.modals.php'); ?>			
		</main>

		<?php include_once('UX.section.footer.php'); ?>
		<?php include_once('UX.scripts.php'); ?>

		<script>
			(function() {
				var _fbq = window._fbq || (window._fbq = []);
				if (!_fbq.loaded) {
					var fbds = document.createElement('script');
					fbds.async = true;
					fbds.src = '//connect.facebook.net/en_US/fbds.js';
					var s = document.getElementsByTagName('script')[0];
					s.parentNode.insertBefore(fbds, s);
					_fbq.loaded = true;
				}
			})();
			window._fbq = window._fbq || [];
			window._fbq.push(['track', '6028939225360', {'value':'0.00','currency':'USD'}]);
		</script>
		<script src="//platform.twitter.com/oct.js" type="text/javascript"></script>
		<script type="text/javascript">twttr.conversion.trackPid('l6cox', { tw_sale_amount: 0, tw_order_quantity: 0 });</script>
		<noscript>
			<img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?ev=6028939225360&amp;cd[value]=0.00&amp;cd[currency]=USD&amp;noscript=1" />
			<img height="1" width="1" style="display:none;" src="https://analytics.twitter.com/i/adsct?txn_id=l6cox&amp;p_id=Twitter&amp;tw_sale_amount=0&amp;tw_order_quantity=0" />
			<img height="1" width="1" style="display:none;" src="//t.co/i/adsct?txn_id=l6cox&amp;p_id=Twitter&amp;tw_sale_amount=0&amp;tw_order_quantity=0" />
		</noscript>
	</body>
</html>