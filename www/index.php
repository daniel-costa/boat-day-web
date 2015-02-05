<!DOCTYPE html>
<html lang="en">
	<head>
		<?php include_once('UX.head.php'); ?>
		<title>BoatDay App</title>
	</head>
	<body class="home">
		<?php include_once('UX.section.header.php'); ?>

		<div id="carousel" class="carousel slide" data-ride="carousel">
			<!-- Indicators -->
			<ol class="carousel-indicators">
				<li data-target="#carousel" data-slide-to="0" class="active"></li>
				<li data-target="#carousel" data-slide-to="1"></li>
				<li data-target="#carousel" data-slide-to="2"></li>
				<li data-target="#carousel" data-slide-to="3"></li>
				<li data-target="#carousel" data-slide-to="4"></li>
			</ol>

			<!-- Wrapper for slides -->
			<div class="carousel-inner" role="listbox">
				<div class="item active"><div class="img img-1"></div></div>
				<div class="item"><div class="img img-2"></div></div>
				<div class="item"><div class="img img-3"></div></div>
				<div class="item"><div class="img img-4"></div></div>
				<div class="item"><div class="img img-5"></div></div>
			</div>
		</div>

		<div class="container-fluid wrapper">
			<p class="intro">Download the BoatDay mobile app to share fun and affordable boating with friends near you! </p>
			<?php include_once('UX.section.sms-form.php'); ?>
			<div class="block-space">
				<h1 class="text-center">- THE BOATDAY APP -</h1>
				<h4 class="text-center">how it works . . .</h4>
			</div>
			<div class="container boat-app">
				<div class="row">
					<div class="col-sm-7 col-lg-6 col-lg-offset-1">
						<h2 class="text-center">1. Browse</h2>
						<p class="text-center">Browse boats using your custom search filters.  Fun, fishing, watersports and more, the app shows you BoatDays when and where you need one.</p>
					</div>
					<div class="hidden-xs col-sm-1 separation-v"></div>
					<div class="col-sm-8 col-lg-8 mid">
						<h2 class="text-center">2. Invite</h2>
						<p class="text-center">
							Found your BoatDay? Request space for<br class="hidden-sm"/>
							yourself, for a group, or reserve the<br class="hidden-sm"/>
							entire boat. Once confirmed by the Host,<br class="hidden-sm"/>
							use the private chat wall to coordinate<br class="hidden-sm"/>
							with your Host and other Guests.
						</p>
					</div>
					<div class="hidden-xs col-sm-1 separation-v"></div>
					<div class="col-sm-7 col-lg-6">
						<h2 class="text-center">3. Enjoy</h2>
						<p class="text-center">It's that simple!  Meet your Host and other Guests at the departure point, then head out for more frequent, friendly, and affordable boating than ever before. </p>
					</div>
				</div>
			</div>

			<div class="container video block-space">
				<div class="row">
					<div class="col-xs-24 cell">
						<iframe src="//www.youtube.com/embed/TnI93oNnAEI?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
					</div>
				</div>
			</div>

			<h1 class="text-center">- BOATDAY USERS -</h1>
			<h4 class="text-center">whatever floats your boat . . .</h4>

			<div class="block-space">
				<div class="container boat-users">
					<div class="row">
						<div class="col-sm-12 col-md-12 col-lg-10 col-lg-offset-2">
							<img src="images/home-hosts.jpg" />
						</div>
						<div class="col-sm-12 col-lg-10">
							<h2 class="no-margins">HOSTS</h2>
							<h4>I own a boat</h4>
							<p>You own a boat, don't just let it sit there!</p>
							<p>Become a Host to access the BoatDay community, invite Guests on-board, and enjoy more frequent and affordable boat outings.</p>
							<p>Just looking to eliminate your high boat costs? Get paid to take out your boat.</p>
							<a href="hosts">TELL ME MORE &gt;</a>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12 col-lg-10 col-lg-offset-2">
							<img src="images/home-guests.jpg" />
						</div>
						<div class="col-sm-12 col-lg-10">
							<h2 class="no-margins">GUESTS</h2>
							<h4>I need a friend with a boat</h4>
							<p>Don't be left ashore!</p>
							<p>Download BoatDay to find boats in your area for a fraction of the cost of a rental or charter. Great for advanced planning or last minute whims - its boating when, where and how you want it.</p>
							<a href="guests">TELL ME MORE &gt;</a>
						</div>
					</div>
				</div>
			</div>

			<div class="jump">
				<div class="container">
					<div class="row">
						<div class="col-sm-16 col-md-14 col-lg-12" style="padding:0px;">
							<h1 class="text-center">Ready to go<br/>Boating?</h1>
							<p class="text-center">Join BoatDay today!</p>
							<form class="container-fluid sms-form"></form>
							<p class="text-center">
								Download the App for instant,<br/>
								affordable boating with friends.
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>

		<?php include_once('UX.section.footer.php'); ?>
		<?php include_once('UX.scripts.php'); ?>
	</body>
</html>