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
						<h5 class="title">How long is a BoatDay?</h5>
							<!-- <p>The length of each BoatDay is up to the Host, and will be displayed clearly on each BoatDay listing in the app.  If you have specific time requirements, use the search filters to find BoatDays that fit your schedule.</p> -->
							<p>To ensure the safety and comfort of our users, BoatDays are limited to a maximum duration of 12 hours. Overnight trips are not permitted (its a Boat"DAY"), and BoatDay excursions may travel up to a maximum of 12 miles offshore (the distance from the nearest shoreline).</p>
						<div class="back-to-top">
							<a href="#list-faq">back <span class="glyphicon glyphicon-chevron-up"></span></a>
						</div>
					</div>

					<div id="q-2">
						<?php echo $backLink; ?>
						<h5 class="title">How much does a BoatDay cost?</h5>
						<p>The price of each BoatDay is set by the Host. Learn more about <a href="faq-04#q-1">contributions</a> here. Because of our unprecedented per-person pricing, BoatDay is almost always much cheaper (and more fun) than other boating options.</p>
						<div class="sub-sub-cat">
							<h5>CAN I SEE HOW MUCH THE BOATDAY WILL BE BEFORE I JOIN IT?</h5>
							<p>Of Course! The contribution for each BoatDay will be listed on the front of the listing for each BoatDay in the App. It will also be included in the BoatDay details when you click on any specific BoatDay. </p>
						</div>
						<div class="sub-sub-cat">
							<h5>WHAT IS THE TRUST &amp; SAFETY FEE?</h5>
							<p>The safety of all BoatDay passengers is our top priority and is taken into account with everything we do. The Trust &amp; Safety Fee of $4.00 per confirmed BoatDay Guest supports our safety standards, including background checks, insurance and ongoing support. The Trust &amp; Safety fee will always be displayed as before you book your BoatDay.</p>
							<p>Find out more about <a href="faq-04#q-2">how payments work</a> on the BoatDay platform.</p>
						</div>
						<div class="back-to-top">
							<a href="#list-faq">back <span class="glyphicon glyphicon-chevron-up"></span></a>
						</div>
					</div>

					<div id="q-3">
						<?php echo $backLink; ?>
						<h5 class="title">How do I submit a BoatDay request?</h5>
						<p>Its easy, three simple steps and you’re on your way to a great day on the water!</p>
						<div class="sub-sub-cat">
							<h5>1. REQUEST A SEAT</h5>
							<p>Start by clicking the Request a Seat button. You’ll find the button at the bottom of each BoatDay listing. Make sure to enter the number of Seats you would like to request, and confirm the payment method you will be using.</p>
							<p>If you do not want to complete your BoatDay request, either click the back button or close the app entirely.</p>
						</div>
						<div class="sub-sub-cat">
							<h5>2. AGREE TO THE POLICIES AND TERMS</h5>
							<p>You need to agree to the Terms and Conditions at the bottom of the request screen to officially submit your reservation request to a Host.</p>
						</div>
						<div class="sub-sub-cat">
							<h5>3. WAIT FOR THE HOSTS RESPONSE</h5>
							<p>Once you send your seat request, it does not mean your request has been accepted. Hosts have 24 hours to reply to a request.  If the host declines the request or the request expires, you can try requesting a BoatDay for that date with someone else.</p>
							<p>For some listings, you'll be able to book instantly through Instant Booking, which means the Host automatically accepts all BoatDay requests. </p>
						</div>
						<div class="back-to-top">
							<a href="#list-faq">back <span class="glyphicon glyphicon-chevron-up"></span></a>
						</div>
					</div>

					<div id="q-4">
						<?php echo $backLink; ?>
						<h5 class="title">Can I cancel a pending request?</h5>
						<p>You can cancel your reservation request as long as it hasn’t been accepted by the Host. Once a reservation has been accepted, any cancellations will be subject to the terms of the <a href="faq-02#5">cancellation policy</a> selected by the Host.</p>
						<div class="back-to-top">
							<a href="#list-faq">back <span class="glyphicon glyphicon-chevron-up"></span></a>
						</div>
					</div>

					<div id="q-5">
						<?php echo $backLink; ?>
						<h5 class="title">Can I make changes to a pending request?</h5>
						<p>As long as your reservation request has not yet been accepted by the Host, you can cancel the request and submit a new reservation request with the updated details. There’s no way to adjust a reservation request without canceling the original request.</p>
						<div class="back-to-top">
							<a href="#list-faq">back <span class="glyphicon glyphicon-chevron-up"></span></a>
						</div>
					</div>
					
					<div id="q-6">
						<?php echo $backLink; ?>
						<h5 class="title">Can I reserve a BoatDay weeks in advance?</h5>
						<p>Yes! In-app filters allow you to browse BoatDays by date of departure, so if you're looking for a specific day, filter using the calendar to see what's available well in advance. When you find what you're looking for, even if its weeks away, you can request a spot!</p>
						<div class="back-to-top">
							<a href="#list-faq">back <span class="glyphicon glyphicon-chevron-up"></span></a>
						</div>
					</div>

					<div id="q-7">
						<?php echo $backLink; ?>
						<h5 class="title">What is Instant Booking?</h5>
						<p>Instant booking BoatDays don't require approval from the Host before you can confirm a spot on-board. Instead, you will be automatically confirmed once you send your request, and can discuss any day-of plans with the Host through the message function for each BoatDay.</p>
						<p>There is no additional fee for confirming a BoatDay with an instant booking. You can filter your search to only view BoatDays that are available for instant booking.</p>	
						<div class="back-to-top">
							<a href="#list-faq">back <span class="glyphicon glyphicon-chevron-up"></span></a>
						</div>
					</div>

					<div id="q-8">
						<?php echo $backLink; ?>
						<h5 class="title">Can I request multiple seats on a BoatDay?</h5>
						<p>Of course! Even though all BoatDays are priced per-person, you can request and reserve multiple seats on a BoatDay, or event he whole boat, if you have friends you’d like to bring along.</p>
						<!-- <p>If you have reserved more than one seat aboard a BoatDay, you can invite Guests (if they’re also BoatDay users) to fill one of your reserved seats, or split the price with the friends you brought on board.</p> -->
						<div class="back-to-top">
							<a href="#list-faq">back <span class="glyphicon glyphicon-chevron-up"></span></a>
						</div>
					</div>

					<div id="q-9">
						<?php echo $backLink; ?>
						<h5 class="title">How long does a Host have to respond to my BoatDay request?</h5>
						<p>Hosts have 24 hours to accept or decline a BoatDay request. You will receive a notification about the status of your request.  You may not request to join overlapping BoatDays (i.e. two BoatDays taking place at the same time).</p>
						<p>If a Host accepts your request, you will appear as a confirmed Guest and have access to the group messaging board for that BoatDay. If a host declines your request or the request expires, you will be able to request alternative BoatDay’s on that day and time. </p>
						<div class="back-to-top">
							<a href="#list-faq">back <span class="glyphicon glyphicon-chevron-up"></span></a>
						</div>
					</div>

					<div id="q-10">
						<?php echo $backLink; ?>
						<h5 class="title">What if I can't make it to a reserved BoatDay?</h5>
						<p>BoatDay allows hosts to choose among three standardized cancellation policies (Flexible, Moderate, and Strict) that we will enforce to protect both Guests and Hosts alike. Each BoatDay listing and confirmation on our will clearly state the cancellation policy for that BoatDay.</p>
						<ul>
							<li><u>Flexible:</u>&nbsp;Full refund up to 1 day prior to departure time of BoatDay, except fees.</li>
							<li><u>Moderate:</u>&nbsp;Full refund up to 3 days prior to departure time of BoatDay, except fees.</li>
							<li><u>Strict:</u>&nbsp;50% refund up to 5 days prior to departure time of BoatDay, except fees.</li>
						</ul>
						<p>You agree to the Host's cancellation policy by submitting a BoatDay request. We strongly recommend reviewing all cancellation policies before making reservations.</p>
						<p>A BoatDay is officially canceled when the Guest clicks the cancellation button on the cancellation confirmation page, which they can find in App Menu > My BoatDays > Cancel. The Trust &amp; Safety Fee is non-refundable.</p>
						<div class="back-to-top">
							<a href="#list-faq">back <span class="glyphicon glyphicon-chevron-up"></span></a>
						</div>
					</div>

					<div id="q-11">
						<?php echo $backLink; ?>
						<h5 class="title">Ratings and Reviews</h5>
						<div class="sub-sub-cat">
							<h5>WHAT IS THE RATING AND REVIEW SYSTEM?</h5>
							<p>In order to maintain the quality of each BoatDay experience, each BoatDay member, whether they are a Guest or a Host, is expected to maintain BoatDay’s high standards and values.</p>
							<p>After each BoatDay you'll have the opportunity to rate and review your Host, and they will rate and review you. Before a BoatDay, you'll be able to see your Host’s rating and they'll be able to see yours.  Each rating and review you give can have an impact on that Host’s ability to attract Guests to their BoatDay’s, and passengers with a bad ratings and reviews may not have their BoatDay requests accepted as often by Hosts.</p>
						</div>
						<div class="sub-sub-cat">
							<h5>STAR RATINGS</h5>
							<p>The number of stars displayed on a Host’s Profile is an aggregate of the primary scores guests have given for that Host and his/her BoatDays.</p>
							<p>The star rating you give a Host should be based on your interaction with the Host during your BoatDay. When choosing a rating, consider whether your Host was friendly, safe, a good navigator, and whether the BoatDay matched the listing and your expectations.</p>
						</div>
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