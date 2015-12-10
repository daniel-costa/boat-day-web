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
						<h5 class="title">What are the BoatDay safety features?</h5>
						<p>Safety, trust, and reliability are our priorities. Although the BoatDay community is built on a fun shared experience, we emphasize that nothing is more important than the safety of the users in our BoatDay community. From Host <a href="faq-03#q-5">background screenings</a> to $500,000 in excess personal liability insurance for the Host of every BoatDay, we are committed to maintaining and improving our safety procedures, including:</p>
							<ul>
								<li>Criminal background checks</li>
								<li>Excess liability insurance coverage</li>
								<li>Zero-tolerance Host drug and alcohol policy</li>
								<li>Direct Emergency Services contact links</li>
								<li>Readable reviews and Star ratings</li>
								<li>Mutual social network visibility</li>
								<li>Customer support</li>
							</ul>
							<p>If you would like to learn more about our safety features, please visit our <a href="#" data-toggle="modal" data-target="#modal-safety">safety page</a>.</p>
						<div class="back-to-top">
							<a href="#list-faq">back <span class="glyphicon glyphicon-chevron-up"></span></a>
						</div>
					</div>

					<div id="q-2">
						<h5 class="title">I'm a Guest, what are some safety tips I can follow?</h5>
						<div class="sub-sub-cat">
							<h5>1. READ THE PROFILES AND REVIEWS OF HOSTS</h5>
							<p>Check for connected social networks and common friends, star ratings, and be sure to read any reviews left by other BoatDay Guests.</p>
						</div>
						<div class="sub-sub-cat">
							<h5>2. READ BOATDAY DESCRIPTIONS CLOSELY</h5>
							<p>It's a good idea to read everything Hosts have posted about their BoatDay in the description, the activities, and the amenities so there won’t be any surprises. Make sure you understand the Host's cancellation policy before making a reservation request, too.</p>
						</div>
						<div class="sub-sub-cat">
							<h5>3. PAY AND COMMUNICATE ON BOATDAY</h5>
							<p>Paying or communicating outside BoatDay makes it harder for us to protect your information and puts you at greater risk of fraud and other security issues. That's why we prohibit paying for a reservation outside our website in our Terms and Conditions and strongly encourage you to communicate, after booking, using our messaging system.</p>
						</div>
						<div class="sub-sub-cat">
							<h5>4. BE A CONSIDERATE GUEST</h5>
							<p>Whether you're still looking for the perfect BoatDay or are already on your way, being a considerate Guest matters.</p>
							<p><i>Remember: if you ever find yourself in an emergency or feel that your personal safety is threatened, always contact local police and emergency services first.</i></p>
						</div>
						<div class="back-to-top">
							<a href="#list-faq">back <span class="glyphicon glyphicon-chevron-up"></span></a>
						</div>
					</div>

					<div id="q-3">
						<h5 class="title">Reporting an incident or safety concern?</h5>
						<p>If you experience an issue while on a BoatDay that you feel threatens your personal safety, make sure to take the appropriate steps to protect yourself and get to a safe place. Call the authorities if necessary (the “Emergency Services” feature displayed in the app while you are actively on a BoatDay provides a direct link to the Coast Guard emergency line) and, once in a safe place, provide us with the details of the incident.</p>
						<p>Be sure to contact us, or flag the BoatDay and/or user directly through the app's flagging function. We are committed to maintaining your safety and the safety of the entire BoatDay community.</p>
						<div class="back-to-top">
							<a href="#list-faq">back <span class="glyphicon glyphicon-chevron-up"></span></a>
						</div>
					</div>

					<div id="q-4">
						<h5 class="title">Emergency Boat Assistance?</h5>
						<div class="sub-sub-cat">
								<h5>WHAT SHOULD I DO IF THERE IS ANY SORT OF EMERGENCY OR INCIDENT?</h5>
								<p>If there's ever a situation where you feel the safety on a BoatDay does not meet our or your standards, first and foremost, get to a safe place. Immediately request that your Host terminate the BoatDay and call the authorities if necessary. For your convenience, the “Emergency Services” function displayed in the app during BoatDays provides the Coast Guard's contact line and a direct link to other emergency services.</p>
								<p>Once you feel safe, be sure to contact us and tell us about the incident. Use the in-app flagging tool to tell us about any problematic event or users, and/or contact us directly at <a href="mailto:contact@boatayapp.com">contact@boatayapp.com</a>. We are committed to maintaining your safety and the safety of the entire BoatDay community.</p>
							</div>
							<div class="sub-sub-cat">
								<h5>WHAT IF THERE IS AN ACCIDENT WHILE ON A BOATDAY?</h5>
								<p>If the seaworthiness of your boat is compromised, the "Emergency Services" function displayed in the app during BoatDays provides a direct link to the emergency towing services of BoatUS as well as the Coast Guard.</p>
								<p>Once all passengers are safely ashore, use the event-flagging tool for your BoatDay to report the accident. Upon receiving report of an accident, a member of our Trust and Safety Team should reach out to you to check in and see what action needs to be taken.</p>
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