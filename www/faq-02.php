<?php 
	require 'lib.functions.php';
	require 'vendor/autoload.php';

	$faq = isset($_GET['faq']) ? $_GET['faq'] : null;
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
					<div class="row">
						<div class="col-sm-12 faq-col">
							<h4>Hosting with BoatDay</h4>
							<ul class="list-unstyled">
								<li><a href="javascript:scrollToAnchor('#q-1')">How do I create a BoatDay?</a></li>
								<li><a href="javascript:scrollToAnchor('#q-2')">Pricing of My BoatDay</a></li>
								<li><a href="javascript:scrollToAnchor('#q-3')">Booking Policy</a></li>
								<li><a href="javascript:scrollToAnchor('#q-4')">How do I manage my BoatDays?</a></li>
								<li><a href="javascript:scrollToAnchor('#q-5')">What if Guest cancels?</a></li>
								<li><a href="javascript:scrollToAnchor('#q-6')">What if I have to cancel a BoatDay?</a></li>
								<li><a href="javascript:scrollToAnchor('#q-7')">Duplicating a BoatDay</a></li>
								<li><a href="javascript:scrollToAnchor('#q-8')">What boat can I use to Host BoatDays?</a></li>
								<li><a href="javascript:scrollToAnchor('#q-9')">Hosting Standards and Accuracy</a></li>
								<li><a href="javascript:scrollToAnchor('#q-10')">Can I use a Captain for my BoatDay?</a></li>
								<li><a href="javascript:scrollToAnchor('#q-11')">Reporting an on-water incident?</a></li>
							</ul>
						</div>
					</div>
				</div>


				<div class="container">
					
					<div id="q-1">
						<h5 class="title">How do I create a BoatDay?</h5>
							<p>Once you have completed Host Registration, simply click “Create a BoatDay” from the Host Dashboard or Host navigation panel.</p>
							<img src="resources/faq/boatday.png"/>
							<div class="sub-sub-cat">
								<h5>ENTER THE SCHEDULING AND PRICE DETAILS</h5>
								<p>Select the date, time, duration, and price for your BoatDay, and the number of Guests you are looking to bring on board.</p>
								<img src="resources/faq/boatday1.png"/>
							</div>
							<div class="sub-sub-cat">
								<h5>DESCRIBE THE DAY’S ACTIVITIES</h5>
								<p>Add any specific activities or details relevant to your boating excursion.  Be sure to write a detailed description in the custom text field, as it helps Guests to get a full idea of what to expect while on-board.</p>
								<img src="resources/faq/boatday3.png"/><br>
							</div>
							<div class="sub-sub-cat">
								<h5>SELECT A DEPARTURE POINT AND BOOKING POLICIES</h5>
								<p>Set your custom <a href="#q-3">booking policy</a> and <a href="#q-5">cancellation policy</a>, as well as the departure location (where Guests come on-board), and you’re all set!</p>
								<img src="resources/faq/boatday4.png"/><br>	
							</div>
						<div class="back-to-top">
							<a href="faq"><span class="glyphicon glyphicon-chevron-left"></span> back to FAQ's</a>
							- or -
							<a href="#list-faq">top <span class="glyphicon glyphicon-chevron-up"></span></a>
						</div>
					</div>


					<div id="q-2">
						<h5 class="title">Pricing of My BoatDay</h5>
						<p>The price you list for your BoatDay is completely up to you as the Host. Guests will evaluate the value of your BoatDay in deciding whether to come on-board, so be sure to set a price that balances Guest expectations with what your boat and the day’s activities have to offer.</p>
						<div class="back-to-top">
							<a href="faq"><span class="glyphicon glyphicon-chevron-left"></span> back to FAQ's</a>
							- or -
							<a href="#list-faq">top <span class="glyphicon glyphicon-chevron-up"></span></a>
						</div>
					</div>

					<div id="q-3">
						<h5 class="title">Booking Policy</h5>
						<p>BoatDay allows Hosts to choose among three policies for accepting Guest requests: Manual Book, Instant Book, and Trusted Book. You will be able set the booking policy for each BoatDay from the “Create a BoatDay” feature accessible from your Host Dashboard.</p>
							<ul>
								<li><u>Manual Book</u>: You want to review each individual seat request for your BoatDay and confirm or deny Guest’s manually.  When selecting this option, don’t forget to respond to requests <a href="faq01#q-9">before they expire</a>.</li>
								<li><u>Instant Book</u>: Automatically accept all Guest requests to join your BoatDay.  <a href="faq-01#q-7">Instant Book</a> is a great option if you’re simply looking to fill your BoatDay calendar, and is great for Guests looking for instant or last minute confirmations.</li>
								<li><u>Trusted Book</u> (coming soon): It’s instant book for preferred Guests. Automatically accept bookings from previous Guests aboard your BoatDay, or from Guests above a 4 star rating.</li>
							</ul>
						<div class="back-to-top">
							<a href="faq"><span class="glyphicon glyphicon-chevron-left"></span> back to FAQ's</a>
							- or -
							<a href="#list-faq">top <span class="glyphicon glyphicon-chevron-up"></span></a>
						</div>
					</div>

					<div id="q-4">
						<h5 class="title">How do I manage my BoatDays?</h5>
						<p>Your Host Dashboard allows you to manage all aspects of your BoatDay experience.  Create and edit BoatDays, accept or decline Guest requests, and chat directly with your confirmed Guests all from your Dashboard.  You can also view past BoatDays, payment histories, and edit your Account and profile information.</p>
							<img src="resources/faq/boatday5.png"/><br>
						<div class="back-to-top">
							<a href="faq"><span class="glyphicon glyphicon-chevron-left"></span> back to FAQ's</a>
							- or -
							<a href="#list-faq">top <span class="glyphicon glyphicon-chevron-up"></span></a>
						</div>
					</div>

					<div id="q-5">
						<h5 class="title">What if Guest cancels?</h5>
						<p>BoatDay allows Hosts to choose among three standardized cancellation policies (Flexible, Moderate, and Strict) that we will enforce to protect against Guest cancellations. You will be able set the cancellation policy for each BoatDay from the “Create a BoatDay” screen accessible from your Host Dashboard.</p>
							<ul>
								<li><u>Flexible</u>: Full refund up to 1 day prior to departure time of BoatDay, except fees.</li>
								<li><u>Moderate</u>: Full refund up to 3 days prior to departure time of BoatDay, except fees.</li>
								<li><u>Strict</u>: 50% refund up to 5 days prior to departure time of BoatDay, except fees.</li>
							</ul>
							<p>If one of your confirmed Guests cancels a reservation in his or her BoatDay Account, you will be automatically notified by our system and the space will be will be opened on your BoatDay so you can accept other Guests. At the time of cancellation, your Guest will be charged according to your cancellation policy.</p>
						<div class="back-to-top">
							<a href="faq"><span class="glyphicon glyphicon-chevron-left"></span> back to FAQ's</a>
							- or -
							<a href="#list-faq">top <span class="glyphicon glyphicon-chevron-up"></span></a>
						</div>
					</div>

					<div id="q-6" name="q-6">
						<h5 class="title">What if I have to cancel a BoatDay?</h5>
						<p>If you need to cancel a BoatDay for which there are confirmed Guests, it’s important to do so as soon as possible. To cancel a BoatDay, select “Details” for that BoatDay from your Host Dashboard, scroll to the bottom and click the Cancel button.</p>
							<p>Canceling a Guest's reservation, or an entire BoatDay, can have serious implications on their experience, so be sure to include a message filling them in on the details.</p>
							<!-- <p>Host Cancellation Penalties may include:</p> 
							<ul>
								<li>Unavailable/blocked calendar</li>
								<li>An automated review about the cancellation</li>
								<li>A cancellation fee.</li>
							</ul> -->
						<div class="back-to-top">
							<a href="faq"><span class="glyphicon glyphicon-chevron-left"></span> back to FAQ's</a>
							- or -
							<a href="#list-faq">top <span class="glyphicon glyphicon-chevron-up"></span></a>
						</div>
					</div>

					<div id="q-7">
						<h5 class="title">Duplicating a BoatDay</h5>
						<p>Had a great trip you’d like to repeat, or looking to list a standard weekly trip for your business? If you’re a Host looking to create multiple BoatDays, the duplicate BoatDay function allows you to easily create multiple identical listings.</p>
						<p>Simply scroll down to the bottom of the “Details” tab for an existing or past BoatDay and click the “Duplicate” button to create an identical BoatDay.  All of your information (price, departure time, description, category and more) will be automatically filled into your new BoatDay. Select the date for this new BoatDay and you’re all set.</p>
						<img src="resources/faq/dupBoatday.png"/><br>
						<div class="back-to-top">
							<a href="faq"><span class="glyphicon glyphicon-chevron-left"></span> back to FAQ's</a>
							- or -
							<a href="#list-faq">top <span class="glyphicon glyphicon-chevron-up"></span></a>
						</div>
					</div>

					<div id="q-8">
						<h5 class="title">What boat can I use to Host BoatDays?</h5>
						<p>You are only authorized to use the vessel that was submitted to and approved by BoatDay, and that is named or scheduled on your boat insurance policy.</p>
						<div class="back-to-top">
							<a href="faq"><span class="glyphicon glyphicon-chevron-left"></span> back to FAQ's</a>
							- or -
							<a href="#list-faq">top <span class="glyphicon glyphicon-chevron-up"></span></a>
						</div>
					</div>

					<div id="q-9">
						<h5 class="title">Hosting Standards and Accuracy</h5>
							<p>Potential Guests want to get a sense of who you are and what to expect on your BoatDay, before they'll feel comfortable requesting a spot on board. Creating a detailed profile and accurate BoatDay listings will attract guests and set their expectations.</p>
							<div class="sub-sub-cat">
								<h5>YOUR PERSONAL PROFILE </h5>
								<p>Your BoatDay profile is the first opportunity you have to introduce yourself to Guests and get them excited about a day on the water with you. Use a photo that clearly shows your face, share some details about your hosting style, and add some fun facts about yourself.</p>
							</div>
							<div class="sub-sub-cat">
								<h5>YOUR BOATDAY LISTING </h5>
								<p>Use high-quality photos of your Boat, write a detailed description of the day’s activities, select the activity type, and highlight all the amenities and extras your boat and BoatDay include.</p>
							</div>
							<div class="sub-sub-cat">
								<h5>PRICING YOUR BOATDAY</h5>
								<p>Guests will evaluate the value of your BoatDay, so it's important to set a price that balances expectations with what your boat and the day’s activities have to offer.  If you're a first-time Host, consider lowering your rate so that you can get that first booking, gain some experience, and start developing your hosting style.</p>
							</div>
						<div class="back-to-top">
							<a href="faq"><span class="glyphicon glyphicon-chevron-left"></span> back to FAQ's</a>
							- or -
							<a href="#list-faq">top <span class="glyphicon glyphicon-chevron-up"></span></a>
						</div>
					</div>

					<div id="q-10">
						<h5 class="title">Can I use a Captain for my BoatDay?</h5>
						<p>Yes! If you are a Host, and have a someone beside yourself who you trust to operate your Boat, you can register him or her as a Captain of your boat in a few easy steps:</p>
							<div class="sub-sub-cat">
								<h5 id="registerCaptain">HOW TO ADD A CAPTAIN FOR YOUR BOATDAYS</h5>
								<p>When registering a Boat on your Host Account, add the email address of your trusted Captain to invite him/her to join BoatDay and Captain your Boat.</p>
								<img src="resources/faq/addCaptain.png"/><br>
								<p>If the Captain accepts your invitation, creates a BoatDay Account, and passes our screening process, he/she will be approved to Captain your boat.</p>
								<p>Keep in mind, in order to pass the Captain screening process and add a Captain to your boat, you must add the Captain as a named insured on the insurance policy covering your boat, or the Captain must possess current professional Captain’s insurance.</p>
							</div>
							<div class="sub-sub-cat">
								<h5>ADDING YOUR CAPTAIN TO A BOATDAY</h5>
								<p>Once your Captain has been approved, you may select him/her from the “Captains” dropdown menu when creating a BoatDay. Be sure to coordinate all BoatDay details with the Captain, as your Host rating can be negatively affected by delays and miscommunications with your Guests. </p>
							</div>
						<div class="back-to-top">
							<a href="faq"><span class="glyphicon glyphicon-chevron-left"></span> back to FAQ's</a>
							- or -
							<a href="#list-faq">top <span class="glyphicon glyphicon-chevron-up"></span></a>
						</div>
					</div>

					<div id="q-11">
						<h5 class="title">Reporting an on-water incident?</h5>
						<p>If you experience an incident while on the water, once all passengers are safely ashore, use the Help Center from your Host Dashboard to report the accident. Upon receiving report of an accident, a member of our Trust and Safety Team should reach out to you to check in and see what action needs to be taken.</p>
						<img src="resources/faq/helpCenter.png"/><br>
						<div class="back-to-top">
							<a href="faq"><span class="glyphicon glyphicon-chevron-left"></span> back to FAQ's</a>
							- or -
							<a href="#list-faq">top <span class="glyphicon glyphicon-chevron-up"></span></a>
						</div>
					</div>

				</div>
			</section>

			<?php include_once('UX.section.modals.php'); ?>			
		</main>

		<?php include_once('UX.section.footer.php'); ?>
		<?php include_once('UX.scripts.php'); ?>

		<?php if($faq) { ?> 
			<script type="text/javascript">
			$(document).ready(function() {
				setTimeout(function() {
					scrollToAnchor('#<?php echo $faq; ?>');
				}, 600);
			});
			</script>
		<?php } ?>
		
	</body>
</html>