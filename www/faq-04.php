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
						<h5 class="title">What is a "contribution"?</h5>
						<p>When a Host creates a BoatDay, they set the price or “contribution" for Guests on-board. This amount will be visible on the front of all BoatDay listings, as well as in the specific details for each BoatDay listed at booking.</p>
							<p>As a Guest, once your BoatDay is finished, you have 24 hours to review your Host and finalize your contribution (including any added tip). If you don't submit your contribution within that time period, we take it as a sign that you enjoyed your BoatDay, and the app will automatically charge the listed contribution amount to your credit card on file.</p>
							<p>Had an amazing time with your Host, or a BoatDay that far exceeded your expectations? You can always show your appreciation to the Host by increasing your contribution.
								For BoatDays with non-charter Hosts, if you feel you must reduce your contribution, be sure to tell us why! Your feedback is valuable to us and the Hosts as we try to provide the best BoatDay experiences. Remember, Hosts rely on contributions in making their boats available to you, and contributions are key to providing BoatDay's unparalleled and affordable per-person prices. 
							</p>
						<div class="back-to-top">
							<a href="#list-faq">back <span class="glyphicon glyphicon-chevron-up"></span></a>
						</div>
					</div>

					<div id="q-2">
						<h5 class="title">How do payments work?</h5>
						<p>When you create your BoatDay Account, you will be asked to input your payment information. From there, making and receiving payments for BoatDays is done quickly and easily through the platform, and is completely cash-free! </p>
							<p>As a Guest, when your BoatDay is over, you will be prompted to confirm payment, and will have 24 hours to finalize your contribution. To show your appreciation for an amazing BoatDay, just hit the payment method and tap "+" to increase the contribution amount!</p>
							<!--<p>Remember, Hosts rely on contributions in welcoming you on-board, and contributions are key to BoatDay's unparalleled per-person prices.</p>-->							
							<div class="sub-sub-cat">
								<h5>CAN BOATDAY HOSTS ACCEPT CASH?</h5>
								<p>It is against BoatDay's Terms and Conditions to accept cash directly from Guests. The platform, and the BoatDay experience, is specifically designed to let Hosts focus on providing and enjoying a great BoatDay with their Guests, and not have to worry about collecting payments. Cash-free payment makes organizing great BoatDays easier for Hosts and Guests, and helps us to keep the community safe.</p>
							</div>
							<div class="sub-sub-cat">
								<h5>DO I HAVE TO PAY RIGHT AWAY?</h5>
								<p>As a Guest, once your BoatDay is complete, you have 24 hours to confirm payment (including any added tip). If you haven't done so after 24 hours, the listed <a href="#q-1">contribution amount</a> for your BoatDay will automatically be charged to your credit card.  </p>
							</div>
						<div class="back-to-top">
							<a href="#list-faq">back <span class="glyphicon glyphicon-chevron-up"></span></a>
						</div>
					</div>

					<div id="q-3">
						<h5 class="title">How do Hosts get paid?</h5>
						<div class="sub-sub-cat">
							<h5>DIRECT DEPOSIT</h5>
							<p>All Hosts get paid via direct deposit (sorry, no checks). Host deposits will typically appear in your account within 5 to 7 days of payment confirmation by a Guest.</p>
							<p>Your banking information is entered directly when creating your Host Account by entering your routing number, account number, and the name associated with your Bank Account. You can find this information on one of your personal checks, or get it by contacting your bank.</p>
							<img src="resources/faq/deposit.png"/>
						</div>
						<div class="sub-sub-cat">
							<h5>UPDATING YOUR DEPOSIT ACCOUNT</h5>
							<p>If you need to update the information for your deposit account, you can contact us with the updated information through the Help Center accessible from your Host Dashboard.</p>
						</div>
						<div class="back-to-top">
							<a href="#list-faq">back <span class="glyphicon glyphicon-chevron-up"></span></a>
						</div>
					</div>

					<div id="q-4">
						<h5 class="title">Payment Issues</h5>
						<p>Our Payments team is standing by to investigate any payment issues you may have. Please contact us at <a href="mailto:payments@boatdayapp.com">payments@boatdayapp.com</a> with the following information:</p>
							<ul>
								<li>The last four digits of your card number.</li>
								<li>The expiration date of your card.</li>
								<li>The date of the unauthorized charge(s).</li>
								<li>The amount of the unauthorized charge(s).</li>
							</ul>
							<p>Once our team has received this information, they will be able to identify the charge and work with you and your bank to resolve the issue.</p>
							<p>If you believe your credit card was used improperly on the BoatDay platform, be sure to contact your bank and request they look into the charges.</p>
						<div class="back-to-top">
							<a href="#list-faq">back <span class="glyphicon glyphicon-chevron-up"></span></a>
						</div>
					</div>

					<div id="q-5">
						<h5 class="title">Receipts</h5>
						<p>You will automatically receive a payment receipt shortly after your payment has been confirmed. If you do not receive a receipt, or would like to have one resent, contact us at <a href="mailto:payments@boatdayapp.com">payments@boatdayapp.com</a>.</p>
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