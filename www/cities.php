<!DOCTYPE html>
<html lang="en">
	<head>
		<?php include_once('UX.head.php'); ?>
		<title>BoatDay App</title>
	</head>
	<body class="cities">
		<?php include_once('UX.section.header.php'); ?>

		<div id="carousel" class="carousel slide" data-ride="carousel">
			<div class="carousel-inner" role="listbox">
				<div class="item active">
					<div class="img img-7">
						<h1 class="hidden-xs">
							<br/>
							Coming soon to<br />
							a city near you!<br />
						</h1>
						<h1 class="visible-xs three-lines">
							Coming soon <br/>
							to a city<br />
							near you!<br />
						</h1>
						<?php include_once('UX.section.sms-form.php'); ?>
					</div>
				</div>
			</div>
		</div>

		<div class="container-fluid wrapper">
			<p class="intro2">Starting in the Sunshine State... coming soon to a city near you!</p>
			<!-- <p class="sub-intro">BoatDay is now available in these Florida locations:</p> -->
			<p class="sub-intro">We are now registering Hosts and launching BoatDays in these Florida locations.</p>

			<div class="container block-space">
				<div class="row cities-list">
					<div class="col-sm-10 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-4">
						<h2>FLORIDA</h2>
						<h4>Florida Keys</h4>
						<h4>South Florida (including)</h4>
						<p>Miami</p>
						<p>Ft. Lauderdale</p>
						<p>Boca Raton</p>
						<p>West Palm Beach</p>

						<h4>Southwest Florida (including)</h4>
						<p>Naples</p>
						<p>Sarasota</p>
						<p>Ft. Meyers</p>

						<h4>Tampa Bay Area</h4>
					</div>
					<div class="hidden-xs col-sm-14 col-md-12 col-lg-10 right">
						<img src="images/cities.jpg" />
					</div>
				</div>
				<div class="row block-space">
					<h3 class="text-center block-space-top">Check back for updates to our newest locations.</h3>
				</div>
				<div class="row twitter  your-town">
					<div class="col-sm-20 col-md-16 col-md-offset-2 col-lg-12 col-lg-offset-4">
						<h2>WANT BOATDAY IN YOUR CITY?</h2>
						<p>Tweet us and tell us why your city should be our next stop!</p>
					</div>
					<div class="col-sm-4 right">
						<a href="https://twitter.com/boatdayapp"><img src="images/social-tw.png" /></a>
					</div>
				</div>
			</div>
		</div>

		<?php include_once('UX.section.footer.php'); ?>
		<?php include_once('UX.scripts.php'); ?>
	</body>
</html>