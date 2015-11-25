<!DOCTYPE html>
<html lang="en">
	<head>
		<?php include_once('UX.head.php'); ?>
		<title>BoatDay App - Be a Host</title>
	</head>
	<body class="hosts">
		<?php include_once('UX.section.header.php'); ?>

		<main>
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
							<p class="text-small">Let the  host know what you thought of his/her trip. This rating will be displayed in order for users peace of mind and in benefit of the hosts.</p>
						</div>
					</div>
				</div>
			</section>
			
			<section class="join-boatday">
				<div class="container">
					<h4>Join BoatDay</h5>
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