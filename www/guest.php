<!DOCTYPE html>
<html lang="en">
	<head>
		<?php include_once('UX.head.php'); ?>
		<title>BoatDay App - Be a Guest</title>
	</head>
	<body class="guests">
		<?php include_once('UX.section.header.php'); ?>

		<main>
			<section class="placeholder">
			</section>

			<section>
				<div class="container">
					<h1>Become a Guest</h1>
					<p>
						Drop any kind of content into a fully flexible and responsive modal!<br/>
						Useful for One Page sites and notifications. Available in five sizes.
					</p>
					<a href="https://www.youtube.com/watch?v=LZW8YKzh-MY" target="_blank" class="btn btn-large">Check out our video</a>
				</div>
			</section>

			<section class="upcoming-boatdays">
				<div class="container">
					<div class="row text-center">
						<h2>Next BoatDays</h2>
					<!--
						<div class="boatdays-swiper">
							<div class="swiper-wrapper">
								<div class="swiper-slide slide-1">1</div>
								<div class="swiper-slide slide-2">2</div>
								<div class="swiper-slide slide-3">3</div>
								<div class="swiper-slide slide-4">4</div>
								<div class="swiper-slide slide-5">5</div>
							</div>
							<div class="swiper-pagination"></div>
						</div>
					-->
					</div>
				</div>
			</section>

			<section class="blured blured-03">
				<div class="container">
					<div class="row text-center">
						<h2>How does it work?</h2>
						
						<div class="col-sm-4">
							<h3>1. Browse</h3>
							<p class="text-small">Browse boats using your custom search filters. Fun, fishing, watersports and more, the app shows you BoatDays when and where you need one.</p>
						</div>
						<div class="col-sm-4">
							<h3>2. Invite</h3>
							<p class="text-small">Found your BoatDay? Request space for yourself, for a group, or reserve the entire boat. Once confirmed by the Host, use the private chat wall to coordinate with your host and other guests.</p>
						</div>
						<div class="col-sm-4">
							<h3>3. Enjoy</h3>
							<p class="text-small">It's that simple! Meet your Host and other Guests at the departure point, then head out for more frequent, friendly, and affordable boating than ever before.</p>
						</div>
					</div>
				</div>
			</section>

			<section class="join-boatday">
				<div class="container">
					<h4>Ready to join?</h4>
					<div class="row">
						<div class="col-sm-6 col-sm-offset-3">
							<div class="box no-top-border">
								<h4>Download the app and get started with the fun!</h4>
								<a class="btn" data-toggle="modal" data-target="#modal-download">Get the app</a>
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