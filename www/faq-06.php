<?php 
	require 'lib.functions.php';
	require 'vendor/autoload.php';

	$backLink = '<a class="back-arrow" href="faq">&#10094;&#10094; back to faq</a>';
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<?php include_once('UX.head.php'); ?>
		<title>BoatDay App - Our mission</title>
	</head>
	<body class="faq">
		<?php include_once('UX.section.header.php'); ?>

		<main>
			<section class="placeholder">
			</section>

			<section class="faq" id="list-faq">
				<div class="container">
					
					<div id="q-1">
						<?php echo $backLink; ?>
						<h5 class="title">What is the Trust &amp; Safety Fee?</h5>
						<p>The safety of all BoatDay passengers is our top priority and is taken into account with everything we do. The Trust &amp; Safety Fee of $4.00 per confirmed BoatDay Guest supports our safety standards, including background checks, insurance and ongoing support. The Trust &amp; Safety fee will always be displayed as before you book your BoatDay.</p>
						<p>Find out more about <a href="faq-04#q-2">how payments work</a> on the BoatDay platform.</p>
						<div class="back-to-top">
							<a href="#list-faq">back <span class="glyphicon glyphicon-chevron-up"></span></a>
						</div>
					</div>

					<div id="q-2">
						<?php echo $backLink; ?>
						<h5 class="title">Can I bring children?</h5>
						<p>Although you must be at least 18 to use BoatDay, and 23 to sign-up as Host, BoatDay supports family-friendly outings.</p>
						<p>Select “children allowed” from the filter options to look for family-friendly BoatDay options. When requesting a seat on board, reserve extra seats for the family, and be sure to notify your Host that you're bringing kids along.</p>
						<p>Note that in order to use the App and join a BoatDay, Guests must be at least 18 years of age. Anyone under 18 must be accompanied by a guardian or parent.</p>
						<div class="back-to-top">
							<a href="#list-faq">back <span class="glyphicon glyphicon-chevron-up"></span></a>
						</div>
					</div>

					<div id="q-3">
						<?php echo $backLink; ?>
						<h5 class="title">How BoatDay and BoatDay Hosts are Classified?</h5>
						<div class="sub-sub-cat">
								<h5>IS BOATDAY A BOAT CHARTER, RENTAL OR TRANSPORTATION SERVICE?</h5>
								<p>BoatDay is not a boat charter, rental or transportation service. BoatDay is a peer-to-peer (or "peer-to-pier") sharing platform, meaning that our Hosts use their boats to host BoatDays with Guests they connect with through the app. Above all, BoatDay is all about trust, community, and safety. Our Hosts go through individual screenings, including background checks, insurance requirements, and boat quality standards. BoatDay does not fit in to the traditional boat charter/rental model, and we have a team dedicated to compliance with and development of regulations that fit the needs and safety of our community.</p>
							</div>
							<div class="sub-sub-cat">
								<h5>ARE BOATDAY HOSTS EMPLOYEES OF BOATDAY?</h5>
								<p>Hosts and Guests are users of the platform and are not employees of Peer-to-Pier Technologies, LLC. As members of the community platform, Hosts and Guests are not entitled to benefits, worker's compensation, or unemployment insurance.</p>
							</div>
						<div class="back-to-top">
							<a href="#list-faq">back <span class="glyphicon glyphicon-chevron-up"></span></a>
						</div>
					</div>

					<div id="q-4">
						<?php echo $backLink; ?>
						<h5 class="title">What is the BoatDay zero-tolerance drug and alcohol policy for Hosts?</h5>
						<p>BoatDay has a zero-tolerance drug and alcohol policy for Hosts. If you suspect that a BoatDay Host is under the influence of drugs or alcohol while on a BoatDay, please contact us.</p>
						<div class="back-to-top">
							<a href="#list-faq">back <span class="glyphicon glyphicon-chevron-up"></span></a>
						</div>
					</div>

					<div id="q-5">
						<?php echo $backLink; ?>
						<h5 class="title">No-Weapons Policy</h5>
						<p>In order to ensure that our users are comfortable, BoatDay maintains a strict "No Weapons" policy. If any Host or Guest possesses a weapon on a BoatDay boat, regardless of whether such possession is legal where they are, they will be removed from the platform.</p>
						<p>We maintain this policy to preserve the best interests of the community, as the presence of a weapon on a BoatDay may make another user uncomfortable or distressed.</p>
						<p>BoatDay reserves sole right to determine what constitutes a "weapon" for the purposes of compliance with this policy.</p>
						<p>If you at any time witness possession of a weapon on a BoatDay boat, please contact us immediately.</p>
						<div class="back-to-top">
							<a href="#list-faq">back <span class="glyphicon glyphicon-chevron-up"></span></a>
						</div>
					</div>

					<div id="q-6">
						<?php echo $backLink; ?>
						<h5 class="title">Using BoatDay with iOS 7 or older</h5>
						<p>In order to keep the BoatDay app running smoothly and bug free, we do not support iOS 7 and below. Don't worry, to enjoy great BoatDays, simply follow the steps below:</p>
						<div class="sub-sub-cat">
							<h5>IF YOU HAVE AN iPHONE 4 OR NEWER:</h5>
							<ul>
								<li>Go into iPhone's Settings app, then tap General</li>
								<li>Tap Software Update to download the latest iOS version</li>
							</ul>
							<p>Once you have updated to the newest version of iOS, you can get the latest BoatDay app by going to the App Store and checking for updates.</p>
						</div>
						<div class="back-to-top">
							<a href="#list-faq">back <span class="glyphicon glyphicon-chevron-up"></span></a>
						</div>
					</div>

					<div id="q-7">
						<?php echo $backLink; ?>
						<h5 class="title">Lost Items</h5>
						<p>If you accidentally leave something behind on a boat, don't worry, let us know and we'll help you find your item. Email us at <a href="mailto:Lostandfound@boatdayapp.com">Lostandfound@boatdayapp.com</a>, tell us what you left behind, the name of your Host and the date of your BoatDay, and we'll do our best to locate your lost item.</p>
						<div class="back-to-top">
							<a href="#list-faq">back <span class="glyphicon glyphicon-chevron-up"></span></a>
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