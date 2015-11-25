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
								<p>Instant Getaway.</p>
							</div>
						</div>
						<div class="swiper-slide slide-2">
							<div class="container text-right">
								<span>Meanigfull<br/>Conections</span>
							</div>
						</div>
						<div class="swiper-slide slide-3">
							<div class="container text-left">
								<span>Amazing<br/>Experiences</span>
							</div>
						</div>
						<div class="swiper-slide slide-4">
							<div class="container text-right">
								<span>Better<br/>Boating</span>
							</div>
						</div>
						<div class="swiper-slide slide-5">
							<div class="container text-left">
								<span>Unpresedented<br/>Value</span>
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
							<p class="text-small">Let the  host know what you thought of his/her trip. This rating will be displayed in order for users peace of mind and in benefit of the hosts.</p>
						</div>
					</div>
				</div>
			</section>

			<section class="past-boatdays">
				<div class="container">
					<div class="row text-center">
						<h2>Upcoming BoatDays</h2>
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

			<section class="blured blured-02">
				<div>
					<div class="container">
						<img src="resources/products.png" />
					</div>
				</div>
			</section>

			<section class="join-boatday">
				<div class="container">
					<h2>Join BoatDay</h2>
					<div class="row">
						<div class="col-sm-6">
							<img class="heading-for-box" src="resources/join-bd-guest.jpg" />
							<div class="box">
								<h4>Get the app and enjoy your boatdays.</h4>
								<a class="btn" href="#modal-download">Get the app</a>
							</div>
						</div>
						<div class="col-sm-6">
							<img class="heading-for-box" src="resources/join-bd-host.jpg" />
							<div class="box">
								<h4>Take me to the sign up page for host</h4>
								<a class="btn" href="https://www.boatdayhosts.com" target="_blank">Join as a Host</a>
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