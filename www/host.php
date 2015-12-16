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
					<h1>Become a BoatDay Host</h1>
					<p>
						Suffering from an empty or underused boat? Sign-up as a BoatDay Host <br/>  and enjoy more frequent, friendly and profitable use of your boat.
					</p>
					<a href="https://www.boatdayhosts.com" target="_blank" class="btn btn-large">Sign-up as a Host</a>
				</div>
			</section>

			<section class="blured blured-01">
				<div class="container">
					<div class="row text-center">
						<h2>WHY HOST BOATDAYS?</h2>
						<div class="col-sm-4">
							<img src="resources/ico-love.png" />
							<h3>Do what you love</h3>
							<p class="text-small">Whether boating is your business or your passion, fill your boat with BoatDay and enjoy more great days on the water.</p>
						</div>
						<div class="col-sm-4">
							<img src="resources/ico-captain.png" />
							<h3>Meet great people</h3>
							<p class="text-small">The BoatDay community is full of fun, friendly people - get to know them as you share great experiences.</p>
						</div>
						<div class="col-sm-4">
							<img src="resources/ico-money.png" />
							<h3>Make money</h3>
							<p class="text-small">Boost your buisiness or simply cover the costs of your regular weekend trips - BoatDay makes cents for boat owners.</p>
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
				<section class="hosts" >
					<div class="container">
						<div class="row" >
							<div class="col-sm-12">
								<h1>Meet some of our hosts</h1>
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
					<h4>HOW HOSTING WORKS</h4>
					<div class="row">
						<div class="col-sm-6">
							<div class="box">
								<h4 class="text-left">1. Register as a Host</h4>
								<p  class="text-left">Tell us about yourself, your boat, and your boating experience. Enter your info, and after a background screening and a quick Q&A with our team, you're all set!</p>
								<a class="learn-more text-center" href="faq-03">Learn more</a>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="box">
								<h4 class="text-left">2. Create BoatDays</h4>
								<p class="text-left">Create fun boat outings for us to list in the app. Want to fill up fast?  Use our social media tools to promote your BoatDays directly on Facebook and Twitter.</p>
								<a class="learn-more text-center" href="faq-02">Learn more</a>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-6">
							<div class="box">
								<h4 class="text-left">3. Set Sail</h4>
								<p class="text-left">It's the big day! Meet your Guests at the departure point and head out for a fun and memorable day on the water.</p>
								<a class="learn-more text-center" href="faq-01">Learn more</a>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="box">
								<h4 class="text-left">4. Recieve Payment</h4>
								<p class="text-left">Once the BoatDay is over, Guest payments are automatically processed through the app and deposited in your account. Its cashless and hassle-free.</p>
								<a class="learn-more text-center" href="faq-04">Learn more</a>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12">
							<div class="box no-top-border">
								<h3>Don't miss the boat, sign-up today!</h3>
								<a href="https://www.boatdayhosts.com" target="_blank" class="btn">Sign-up as a Host</a>
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