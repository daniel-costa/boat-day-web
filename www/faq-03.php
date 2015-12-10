<?php 
	require 'lib.functions.php';
	require 'vendor/autoload.php';
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
						<h5 class="title">Can I be a Host?</h5>
							<p>We're glad you're interested in hosting BoatDays, if you satisfy these basic criteria you are eligible to become a BoatDay Host!</p>
							<div class="sub-sub-cat">
								<h5>REQUIREMENTS FOR BECOMING A HOST?</h5>
								<ul>
									<li>You must be at least 23 years old</li>
									<li>In-state insurance coverage for your boat, minimum coverage of $300,000 combined bodily injury and property protection (per occurrence) with your name on or endorsed on the policy (we automatically provide extra insurance coverage for all Hosts)</li>
									<li>In-state current boat registration</li>
									<li>Successful completion of the BoatDay 
										<a href="faq-03#q-5">background screening.</a>
									</li>
								</ul>
								<p>If you would like to learn more about our safety measures, please visit our <a href="#" data-toggle="modal" data-target="#modal-safety">safety page</a>.</p>
							</div>
						<div class="back-to-top">
							<a href="#list-faq">back <span class="glyphicon glyphicon-chevron-up"></span></a>
						</div>
					</div>

					<div id="q-2">
						<h5 class="title">How do I sign up?</h5>
						<p>Hosts can sign up at www.boatdayhosts.com. Once you've created an account and logged in, we’ll guide you through our registration process:</p>
						<ol>
							<li>Step 1: Host Registration</li>
							<ul>
								<li>tell us about you: (address, phone, certifications)</li>
								<li>provide a payment account: tell us where to pay you</li>
								<li>create a BoatDay profile: picture and short “About me” description</li>
							</ul>
							<li>Step 2: Boat Registration</li>
							<ul>
								<li>tell us about your boat: basic boat information (location, length make, age, etc)</li>
								<li>upload some great photos of your boat</li>
								<li>provide proof of insurance: upload your boat insurance information. Learn more  <a href="#proofOfInsurance">here</a>.</li>
							</ul>
							<li>Step 3 (optional): Add another Captain</li>
							<ul>
								<li>Want someone else to drive while you sit back and enjoy? Add a second captain for your boat! Learn more <a href="faq-02#q-10">here</a>.</li>
							</ul>
						</ol>
						<p>Once your registration is complete (after a quick review on our end) you'll be approved and ready to create and Host BoatDays!</p>
						<div class="sub-sub-cat">
							<h5>CAN I EXIT THE SIGN UP-PROCESS AND COME BACK TO FINISH MY REGISTRATION?</h5>
							<p>Your registration information will be saved and available, even if you close your browser completely. Just come back and pick up where you left off!</p>
						</div>
						<div class="back-to-top">
							<a href="#list-faq">back <span class="glyphicon glyphicon-chevron-up"></span></a>
						</div>
					</div>

					<div id="q-3">
						<h5 class="title">Will BoatDay work for my Charter Business?</h5>
							<p>Absolutely! Whether your looking to fill that extra space on an existing charter, or just looking to book more trips, BoatDay can seamlessly integrate with your existing boat charter or rental operation. </p>
							<p>Our Host Center allows you to create, book and manage BoatDays directly from the Dashboard, meaning its easier then ever to make your charter trips available to BoatDay’s enthusiastic guests! </p>
							<p>Have a standard weekly trip you’d like to fill? The <a href="faq-02#q-7">Duplicate a BoatDay</a> feature allows you to create multiple BoatDays in seconds!</p>
						<div class="back-to-top">
							<a href="#list-faq">back <span class="glyphicon glyphicon-chevron-up"></span></a>
						</div>
					</div>

					<div id="q-4">
						<h5 class="title">Are there any fees to become a Host?</h5>
						<p>No, signing up as a Host, registering a boat and listing BoatDays on the platform are absolutely free for all Hosts!  There are also no subscription costs or membership fees.  Simply go to www.boatdayhosts.com to create your free Host account and get started.</p>
						<p>To ensure BoatDay’s quality and safety standards, BoatDay does receive a 15% of the per-person contributions made by each Guest who comes aboard, which goes to support and maintain our extra insurance coverage for Hosts, background checks, and easy to use application.</p>
						<div class="back-to-top">
							<a href="#list-faq">back <span class="glyphicon glyphicon-chevron-up"></span></a>
						</div>
					</div>

					<div id="q-5">
						<h5 class="title">Host Background Screening</h5>
						<p>We’re committed to the safety of your BoatDay experience!</p>
							<p>All BoatDay Hosts (and Captains) must pass BoatDay’s background screening, which includes county, federal and multi-state checks. </p>
							<!-- <div class="sub-sub-cat">
								<h5>REQUIRED HOST QUALIFICATIONS</h5>
								<ul>
									<li>Age 23 or older </li>
									<li>Current boat insurance meeting minimum requirements: $300,000 Bodily Injury and Property Damage Combined Protection and Indemnity (per occurrence)</li>
									<li>In-state current boat registration</li>
									<li>Completion of BoatDay background screening</li>
								</ul>
							</div> -->
							<div class="sub-sub-cat">
								<h5>ALL HOSTS AND CAPTAINS ARE SCREENED AGAINST</h5>
								<ul>
									<li>County courthouse records</li>
									<li>Federal courthouse records</li>
									<li>Multi-State Criminal Database</li>
									<li>National Sex Offender Registry</li>
								</ul>
								<p>If you would like to learn more about our safety measures, please visit our <a href="#" data-toggle="modal" data-target="#modal-safety">safety page.</a></p>
							</div>
						<div class="back-to-top">
							<a href="#list-faq">back <span class="glyphicon glyphicon-chevron-up"></span></a>
						</div>
					</div>

					<div id="q-6">
						<h5 class="title">Taking excellent Profile, Boat and Account Photos</h5>
						<div class="sub-sub-cat">
								<h5>PROFILE PHOTO</h5>
								<p>Your profile photo is one of the first things a Guest sees when looking at your BoatDay listings, so make it a good one!</p>
								<img src="resources/faq/profile.png"/>
								<ul>
									<li><u>No hats or sunglasses.</u> Remove your sunglasses (including glasses with transition lenses) or hats before taking a profile photo.</li>
									<li><u>Make sure to smile!</u> Show off your friendly side by smiling in your photo.</li>
									<li><u>Take your photo head on.</u> Profile and angled photos make it hard to clearly see your face. For the best results, frame your head and top of shoulders in the center of the photo.</li>
								</ul>
							</div>
							<div class="sub-sub-cat">
								<h5>BOAT PHOTO</h5>
								<p>Getting good photos of your boat lets Guests know what to expect when requesting to come aboard. The ideal boat photo shows the full length of the boat.</p>
								<img src="resources/faq/boatphoto.png"/>
								<ul>
									<li><u>Make sure the entire boat is in the frame.</u> Don't cut off any of the boat in-frame, but don't stand too far back. The boat should fill up most of the frame, with a little bit of space around it.</li>
									<li><u>No obstructions.</u> Be sure that there aren't any obstructions in front of the boat when taking the photo.</li>
									<li><u>Show it on the water!</u> Avoid pictures of the boat on a trailer, or in your driveway. It’s a boat, display it doing what it does best.</li>
								</ul>
							</div>
							<div class="sub-sub-cat">
								<h5 id="proofOfInsurance">ACCOUNT PHOTOS: PROOF OF BOAT INSURANCE</h5>
								<p>Your proof of insurance document or photo must clearly display your name on the policy, the make and Hull ID #of the boat, as well as the coverage amounts for your boat - so make sure everything is in included. If you submit proof of insurance as a photo, make sure the photo is in focus and not blurry.</p>
								<img src="resources/faq/pof.png"/><br>
							</div>
						<div class="back-to-top">
							<a href="#list-faq">back <span class="glyphicon glyphicon-chevron-up"></span></a>
						</div>
					</div>

					<div id="q-7">
						<h5 class="title">Host Insurance Coverage</h5>
						<p>To help protect all Hosts and Guests on the platform, BoatDay requires all Hosts to maintain <a href="#proofOfInsurance">boat insurance</a>. But don’t worry, Host’s are also protected by our $500,000 excess liability policy for each BoatDay, covering injury to Guests while on a BoatDay.</p>
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