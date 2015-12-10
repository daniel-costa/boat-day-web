<?php 
	require 'lib.functions.php';
	require 'vendor/autoload.php';

	use Parse\ParseClient;
	use Parse\ParseQuery;
	ParseClient::initialize('8YpQsh2LwXpCgkmTIIncFSFALHmeaotGVDTBqyUv', 'M4t1qE8ZLZ009lVRqX4QFCTQbUqcdNwblB5DfKV4', 'G32GlUu97evll0wt27WwmqaFuGsTbdwCmebvIGZx');
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
						<div class="col-sm-4">
							<h4>Hosts</h4>
							<ul>
								<li><a href="#hosts-1">Can I be a Host?</a></li>
								<li><a href="#hosts-2">How do I sign up?</a></li>
								<li><a href="#hosts-3">Will BoatDay work for my Charter Business?</a></li>
								<li><a href="#hosts-4">Are there any fees to become a Host?</a></li>
								<li><a href="#hosts-5">Host Background Screening</a></li>
								<li><a href="#hosts-6">How do I create a BoatDay?</a></li>
								<li><a href="#hosts-7">Pricing of My BoatDay</a></li>
								<li><a href="#hosts-8">Booking Policy</a></li>
								<li><a href="#hosts-9">How do I manage my BoatDays?</a></li>
								<!-- <li><a href="#hosts-8">How long do I have to respond to a Guest request?</a></li> -->
								<li><a href="#hosts-10">What if a Guest cancels?</a></li>
								<li><a href="#hosts-11">What if I have to cancel a BoatDay?</a></li>
								<li><a href="#hosts-12">Duplicating a BoatDay</a></li>
								<li><a href="#hosts-13">How do I get paid?</a></li>
								<li><a href="#hosts-14">What boat can I use to Host BoatDays?</a></li>
								<li><a href="#hosts-15">Can I use a Captain for my BoatDay?</a></li>
								<li><a href="#hosts-16">Reporting an on-water incident?</a></li>
								<li><a href="#hosts-17">Taking excellent Profile, Boat and Account Photos</a></li>
								<li><a href="#hosts-18">Hosting Standards and Accuracy</a></li>
								<!-- <li><a href="#hosts-18">Charter Hosts?</a></li> -->
								<li><a href="#hosts-19">Host Insurance Coverage</a></li>
							</ul>
						</div>
						<div class="col-sm-4">
							<h4>Guests</h4>
							<ul>
								<li><a href="#guests-1">How much does a BoatDay cost?</a></li>
								<li><a href="#guests-2">How do I submit a BoatDay request?</a></li>
								<li><a href="#guests-3">Can I cancel a pending request?</a></li>
								<li><a href="#guests-4">Can I make changes to a pending request?</a></li>
								<li><a href="#guests-5">Can I reserve a BoatDay weeks in advance?</a></li>
								<li><a href="#guests-6">What is Instant Booking?</a></li>
								<li><a href="#guests-7">Can I request multiple seats on a BoatDay?</a></li>
								<li><a href="#guests-8">How long does a Host have to respond to my BoatDay request?</a></li>
								<li><a href="#guests-9">How do payments work?</a></li>
								<li><a href="#guests-10">What if I can’t make it to a reserved BoatDay?</a></li>
								<li><a href="#guests-11">Payment Issues</a></li>
								<li><a href="#guests-12">Receipts</a></li>
								<li><a href="#guests-13">Lost Items</a></li>
							</ul>

						</div>
						<div class="col-sm-4">
							<h4>General</h4>
							<ul>
								<!-- <li><a href="#general-1">What is a BoatDay?</a></li> -->
								<li><a href="#general-1">What is a "contribution"?</a></li>
								<li><a href="#general-2">How long is a BoatDay?</a></li>
								<li><a href="#general-3">What is the Trust &amp; Safety Fee?</a></li>
								<li><a href="#general-4">Ratings and Reviews</a></li>
								<li><a href="#general-5">Can I bring children?</a></li>
								<li><a href="#general-6">How BoatDay and BoatDay Hosts are Classified</a></li>
								<li><a href="#general-7">Using BoatDay with IOS 7 or older</a></li>
								<li><a href="#safety-1">What are the BoatDay safety features?</a></li>
								<!-- <li><a href="#safety-2">Boater Certifications</a></li> -->
								<li><a href="#safety-2">What is the BoatDay zero-tolerance drug and alcohol policy for Hosts?</a></li>
								<li><a href="#safety-3">I’m a Guest, what are some safety tips I can follow?</a></li>
								<li><a href="#safety-4">Reporting an incident or safety concern?</a></li>
								<li><a href="#safety-5">Emergency Boat Assistance</a></li>
								<li><a href="#safety-6">No-Weapons Policy</a></li>
								</ul>
							</ul>
						</div>
					</div>
				</div>
			</section>

			<section class="faq blured blured-03">
				<div class="container">
					<h2>Hosts</h2>
				</div>
			</section>

			<section class="faq">
				<div class="container">
					<div id="hosts" class="cat">
						<div id="hosts-1" class="sub-cat">
							<h5 id="becomeHost" class="title">Can I be a Host?</h5>
							<p>We're glad you're interested in hosting BoatDays, if you satisfy these basic criteria you are eligible to become a BoatDay Host!</p>
							<div class="sub-sub-cat">
								<h5>REQUIREMENTS FOR BECOMING A HOST?</h5>
								<ul>
									<li>You must be at least 23 years old</li>
									<li>In-state insurance coverage for your boat, minimum coverage of $300,000 combined bodily injury and property protection (per occurrence) with your name on or endorsed on the policy (we automatically provide extra insurance coverage for all Hosts)</li>
									<li>In-state current boat registration</li>
									<li>Successful completion of the BoatDay 
										<a href="#bgScreen">background screening.</a>
									</li>
								</ul>
								<p>If you would like to learn more about our safety measures, please visit our <a href="https://www.boatdayapp.com/safety" target="_blank">safety page</a>.</p>
							</div>
							<div class="back-to-top">
								<a href="#list-faq">back <span class="glyphicon glyphicon-chevron-up"></span></a>
							</div>
						</div>
						<div id="hosts-2" class="sub-cat">
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
									<li>Want someone else to drive while you sit back and enjoy? Add a second captain for your boat! Learn more <a href="#registerCaptain">here</a>.</li>
								</ul>
							</ol>
							<p>Once your registration is complete (after a quick review on our end) you'll be approved and ready to create and Host BoatDays!</p>
							<div class="sub-sub-cat">
								<h5>CAN I EXIT THE SIGN UP-PROCESS AND COME BACK TO FINISH MY REGISTRATION?</h5>
								<p>Your registration information will be saved and available, even if you close your browser completely. Just come back and pick up where you left off!</p>
							</div>
						</div>
						<div id="hosts-3" class="sub-cat">
							<h5 class="title">Will BoatDay work for my Charter Business? </h5>
							<p>Absolutely! Whether your looking to fill that extra space on an existing charter, or just looking to book more trips, BoatDay can seamlessly integrate with your existing boat charter or rental operation. </p>
							<p>Our Host Center allows you to create, book and manage BoatDays directly from the Dashboard, meaning its easier then ever to make your charter trips available to BoatDay’s enthusiastic guests! </p>
							<p>Have a standard weekly trip you’d like to fill? The <a href="#duplicateBoatday">Duplicate a BoatDay</a> feature allows you to create multiple BoatDays in seconds!</p>
						</div>
						<div id="hosts-4" class="sub-cat">
							<h5 class="title">Are there any fees to become a Host?</h5>
							<p>No, signing up as a Host, registering a boat and listing BoatDays on the platform are absolutely free for all Hosts!  There are also no subscription costs or membership fees.  Simply go to www.boatdayhosts.com to create your free Host account and get started.</p>
							<p>To ensure BoatDay’s quality and safety standards, BoatDay does receive a 15% of the per-person contributions made by each Guest who comes aboard, which goes to support and maintain our extra insurance coverage for Hosts, background checks, and easy to use application.</p>
							<div class="back-to-top">
								<a href="#list-faq">back <span class="glyphicon glyphicon-chevron-up"></span></a>
							</div>
						</div>
						<div id="hosts-5" class="sub-cat">
							<h5 class="title" id="bgScreen">Host Background Screening</h5>
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
								<p>If you would like to learn more about our safety measures, please visit our <a href="https://www.boatdayapp.com/safety" target="_blank">safety page.</a></p>
							</div>
							<div class="back-to-top">
								<a href="#list-faq">back <span class="glyphicon glyphicon-chevron-up"></span></a>
							</div>
						</div>
						<div id="hosts-6" class="sub-cat">
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
								<p>Set your custom <a href="#bookingPolicy">booking policy</a> and <a href="#cancellationPolicy">cancellation policy</a>, as well as the departure location (where Guests come on-board), and you’re all set!</p>
								<img src="resources/faq/boatday4.png"/><br>	
							</div>
							<div class="back-to-top">
								<a href="#list-faq">back <span class="glyphicon glyphicon-chevron-up"></span></a>
							</div>
						</div>
						<div id="hosts-7" class="sub-cat">
							<h5 class="title">Pricing of My BoatDay</h5>	
							<p>The price you list for your BoatDay is completely up to you as the Host. Guests will evaluate the value of your BoatDay in deciding whether to come on-board, so be sure to set a price that balances Guest expectations with what your boat and the day’s activities have to offer.</p>
							<div class="back-to-top">
								<a href="#list-faq">back <span class="glyphicon glyphicon-chevron-up"></span></a>
							</div>
						</div>
						<div id="hosts-8" class="sub-cat">
							<h5  class="title" id="bookingPolicy">Booking Policy</h5>
							<p>BoatDay allows Hosts to choose among three policies for accepting Guest requests: Manual Book, Instant Book, and Trusted Book. You will be able set the booking policy for each BoatDay from the “Create a BoatDay” feature accessible from your Host Dashboard.</p>
							<ul>
								<li><u>Manual Book</u>: You want to review each individual seat request for your BoatDay and confirm or deny Guest’s manually.  When selecting this option, don’t forget to respond to requests <a href="#response">before they expire</a>.</li>
								<li><u>Instant Book</u>: Automatically accept all Guest requests to join your BoatDay.  <a href="#instant">Instant Book</a> is a great option if you’re simply looking to fill your BoatDay calendar, and is great for Guests looking for instant or last minute confirmations.</li>
								<li><u>Trusted Book</u> (coming soon): It’s instant book for preferred Guests. Automatically accept bookings from previous Guests aboard your BoatDay, or from Guests above a 4 star rating.</li>
							</ul>
							<div class="back-to-top">
								<a href="#list-faq">back <span class="glyphicon glyphicon-chevron-up"></span></a>
							</div>
						</div>
						<div id="hosts-9" class="sub-cat">
							<h5 class="title" >How do I manage my BoatDays?</h5>
							<p>Your Host Dashboard allows you to manage all aspects of your BoatDay experience.  Create and edit BoatDays, accept or decline Guest requests, and chat directly with your confirmed Guests all from your Dashboard.  You can also view past BoatDays, payment histories, and edit your Account and profile information.</p>
							<img src="resources/faq/boatday5.png"/><br>
							<div class="back-to-top">
								<a href="#list-faq">back <span class="glyphicon glyphicon-chevron-up"></span></a>
							</div>
						</div>
						<!-- <div id="hosts-8" class="sub-cat">
							<h5  class="title" id="response">How long do I have to respond to a Guest request?</h5>	
							<p>You have 24 hours to respond to a Guest’s seat request before it expires, by clicking the Accept or Decline button. Guests appreciate a prompt response, even if you cannot host them.</p>
							<p>If you do not accept or decline a request within the allotted time, it will expire and your placement in search results and Host star rating may be negatively impacted. Expired requests cannot be reactivated.</p>
							<p>To read a request, click on it in from the Pending Requests section of your BoatDay from the dashboard or My BoatDays tab.</p>
							<p>To allow you to respond to reservation requests quickly, we will send you an alert in your Host Dashboard, as well as either by email or text message every time a Guest requests a seat on-board.</p>
							<div class="back-to-top">
								<a href="#list-faq">back <span class="glyphicon glyphicon-chevron-up"></span></a>
							</div>
						</div> -->
						<div id="hosts-10" class="sub-cat">
							<h5 class="title" id="cancellationPolicy">What if a Guest cancels?</h5>
							<p>BoatDay allows Hosts to choose among three standardized cancellation policies (Flexible, Moderate, and Strict) that we will enforce to protect against Guest cancellations. You will be able set the cancellation policy for each BoatDay from the “Create a BoatDay” screen accessible from your Host Dashboard.</p>
							<ul>
								<li><u>Flexible</u>: Full refund up to 1 day prior to departure time of BoatDay, except fees.</li>
								<li><u>Moderate</u>: Full refund up to 3 days prior to departure time of BoatDay, except fees.</li>
								<li><u>Strict</u>: 50% refund up to 5 days prior to departure time of BoatDay, except fees.</li>
							</ul>
							<p>If one of your confirmed Guests cancels a reservation in his or her BoatDay Account, you will be automatically notified by our system and the space will be will be opened on your BoatDay so you can accept other Guests. At the time of cancellation, your Guest will be charged according to your cancellation policy.</p>
							<div class="back-to-top">
								<a href="#list-faq">back <span class="glyphicon glyphicon-chevron-up"></span></a>
							</div>
						</div>
						<div id="hosts-11" class="sub-cat">
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
								<a href="#list-faq">back <span class="glyphicon glyphicon-chevron-up"></span></a>
							</div>
						</div>
						<div id="hosts-12" class="sub-cat">
							<h5 class="title" id="duplicateBoatday">Duplicating a BoatDay</h5>
							<p>Had a great trip you’d like to repeat, or looking to list a standard weekly trip for your business? If you’re a Host looking to create multiple BoatDays, the duplicate BoatDay function allows you to easily create multiple identical listings.</p>
							<p>Simply scroll down to the bottom of the “Details” tab for an existing or past BoatDay and click the “Duplicate” button to create an identical BoatDay.  All of your information (price, departure time, description, category and more) will be automatically filled into your new BoatDay. Select the date for this new BoatDay and you’re all set.</p>
							<img src="resources/faq/dupBoatday.png"/><br>
						</div>
						<div id="hosts-13" class="sub-cat">
							<h5 class="title">How do I get paid?</h5>
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
						<div id="hosts-14" class="sub-cat">
							<h5 class="title">What boat can I use to Host BoatDays?</h5>
							<p>You are only authorized to use the vessel that was submitted to and approved by BoatDay, and that is named or scheduled on your boat insurance policy.</p>
							<div class="back-to-top">
								<a href="#list-faq">back <span class="glyphicon glyphicon-chevron-up"></span></a>
							</div>
						</div>
						<div id="hosts-15" class="sub-cat">
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
								<a href="#list-faq">back <span class="glyphicon glyphicon-chevron-up"></span></a>
							</div>
						</div>
						<div id="hosts-16" class="sub-cat">
							<h5 class="title">Reporting an on-water incident?</h5>
							<p>If you experience an incident while on the water, once all passengers are safely ashore, use the Help Center from your Host Dashboard to report the accident. Upon receiving report of an accident, a member of our Trust and Safety Team should reach out to you to check in and see what action needs to be taken.</p>
							<img src="resources/faq/helpCenter.png"/><br>
							<div class="back-to-top">
								<a href="#list-faq">back <span class="glyphicon glyphicon-chevron-up"></span></a>
							</div>
						</div>
						<div id="hosts-17" class="sub-cat">
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
						<div id="hosts-18" class="sub-cat">
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
								<a href="#list-faq">back <span class="glyphicon glyphicon-chevron-up"></span></a>
							</div>
						</div>
						<!-- <div id="hosts-18" class="sub-cat">
							<h5 class="title" id="charterHost">Charter Hosts?</h5>	
							<p>Already use your boat to carry paying guests? Sign-up as a BoatDay Host to book even more profitable trips!  Great for booking more excursions, or simply filling up any extra room on your existing trips, enjoy the benefits of #betterboating for your business.</p>
							<p>To verify your status as a charter host, select “I already use my boat to carry paying guests” when creating your BoatDay Host account. Simply submit a copy of your captain’s license and charter boat insurance during our quick and easy registration process, and you’re all set. </p>
						</div> -->
						<div id="hosts-19" class="sub-cat">
							<h5 class="title">Host Insurance Coverage</h5>
							<p>To help protect all Hosts and Guests on the platform, BoatDay requires all Hosts to maintain <a href="#proofOfInsurance">boat insurance</a>. But don’t worry, Host’s are also protected by our $500,000 excess liability policy for each BoatDay, covering injury to Guests while on a BoatDay.</p>
							<div class="back-to-top">
								<a href="#list-faq">back <span class="glyphicon glyphicon-chevron-up"></span></a>
							</div>
						</div>
					</div>
				</div>
			</section>

			<section class="faq blured blured-03">
				<div class="container">
					<h2>Guests</h2>
				</div>
			</section>

			<section class="faq">
				<div class="container">
					<div id="guests" class="cat">
						<div id="guests-1" class="sub-cat">
							<h5 class="title">How much does a BoatDay cost?</h5>
							<p>The price of each BoatDay is set by the Host. Learn more about <a href="#contibution">contributions</a> here. Because of our unprecedented per-person pricing, BoatDay is almost always much cheaper (and more fun) than other boating options.</p>
							<div class="sub-sub-cat">
								<h5>CAN I SEE HOW MUCH THE BOATDAY WILL BE BEFORE I JOIN IT?</h5>
								<p>Of Course! The contribution for each BoatDay will be listed on the front of the listing for each BoatDay in the App. It will also be included in the BoatDay details when you click on any specific BoatDay. </p>
							</div>
							<div class="sub-sub-cat">
								<h5>WHAT IS THE TRUST &amp; SAFETY FEE?</h5>
								<p>The safety of all BoatDay passengers is our top priority and is taken into account with everything we do. The Trust &amp; Safety Fee of $4.00 per confirmed BoatDay Guest supports our safety standards, including background checks, insurance and ongoing support. The Trust &amp; Safety fee will always be displayed as before you book your BoatDay.</p>
								<p>Find out more about <a href="#payment">how payments work</a> on the BoatDay platform.</p>
							</div>
							<div class="back-to-top">
								<a href="#list-faq">back <span class="glyphicon glyphicon-chevron-up"></span></a>
							</div>
						</div>
						<div id="guests-2" class="sub-cat">
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
						<div id="guests-3" class="sub-cat">
							<h5 class="title">Can I cancel a pending request?</h5>
							<p>You can cancel your reservation request as long as it hasn’t been accepted by the Host. Once a reservation has been accepted, any cancellations will be subject to the terms of the <a href="#cancellationPolicy">cancellation policy</a> selected by the Host.</p>
							<div class="back-to-top">
								<a href="#list-faq">back <span class="glyphicon glyphicon-chevron-up"></span></a>
							</div>
						</div>
						<div id="guests-4" class="sub-cat">
							<h5 class="title">Can I make changes to a pending request?</h5>
							<p>As long as your reservation request has not yet been accepted by the Host, you can cancel the request and submit a new reservation request with the updated details. There’s no way to adjust a reservation request without canceling the original request.</p>
							<div class="back-to-top">
								<a href="#list-faq">back <span class="glyphicon glyphicon-chevron-up"></span></a>
							</div>
						</div>
						<div id="guests-5" class="sub-cat">
							<h5 class="title">Can I reserve a BoatDay weeks in advance?</h5>
							<p>Yes! In-app filters allow you to browse BoatDays by date of departure, so if you're looking for a specific day, filter using the calendar to see what's available well in advance. When you find what you're looking for, even if its weeks away, you can request a spot!</p>
							<div class="back-to-top">
								<a href="#list-faq">back <span class="glyphicon glyphicon-chevron-up"></span></a>
							</div>
						</div>
						<div id="guests-6" class="sub-cat">
							<h5 class="title" id="instant">What is Instant Booking?</h5>
							<p>Instant booking BoatDays don't require approval from the Host before you can confirm a spot on-board. Instead, you will be automatically confirmed once you send your request, and can discuss any day-of plans with the Host through the message function for each BoatDay.</p>
							<p>There is no additional fee for confirming a BoatDay with an instant booking. You can filter your search to only view BoatDays that are available for instant booking.</p>
							<div class="back-to-top">
								<a href="#list-faq">back <span class="glyphicon glyphicon-chevron-up"></span></a>
							</div>
						</div>
						<div id="guests-7" class="sub-cat">
							<h5 class="title">Can I request multiple seats on a BoatDay?</h5>
							<p>Of course! Even though all BoatDays are priced per-person, you can request and reserve multiple seats on a BoatDay, or event he whole boat, if you have friends you’d like to bring along.</p>
							<!-- <p>If you have reserved more than one seat aboard a BoatDay, you can invite Guests (if they’re also BoatDay users) to fill one of your reserved seats, or split the price with the friends you brought on board.</p> -->
							<div class="back-to-top">
								<a href="#list-faq">back <span class="glyphicon glyphicon-chevron-up"></span></a>
							</div>
						</div>
						<div id="guests-8" class="sub-cat">
							<h5 class="title" id="response">How long does a Host have to respond to my BoatDay request?</h5>	
							<p>Hosts have 24 hours to accept or decline a BoatDay request. You will receive a notification about the status of your request.  You may not request to join overlapping BoatDays (i.e. two BoatDays taking place at the same time).</p>
							<p>If a Host accepts your request, you will appear as a confirmed Guest and have access to the group messaging board for that BoatDay. If a host declines your request or the request expires, you will be able to request alternative BoatDay’s on that day and time. </p>
							<div class="back-to-top">
								<a href="#list-faq">back <span class="glyphicon glyphicon-chevron-up"></span></a>
							</div>
						</div>
						<div id="guests-9" class="sub-cat">
							<h5 class="title" id="payment">How do payments work?</h5>
							<p>When you create your BoatDay Account, you will be asked to input your payment information. From there, making and receiving payments for BoatDays is done quickly and easily through the platform, and is completely cash-free! </p>
							<p>As a Guest, when your BoatDay is over, you will be prompted to confirm payment, and will have 24 hours to finalize your contribution. To show your appreciation for an amazing BoatDay, just hit the payment method and tap "+" to increase the contribution amount!</p>
							<!--<p>Remember, Hosts rely on contributions in welcoming you on-board, and contributions are key to BoatDay's unparalleled per-person prices.</p>-->							
							<div class="sub-sub-cat">
								<h5>CAN BOATDAY HOSTS ACCEPT CASH?</h5>
								<p>It is against BoatDay's Terms and Conditions to accept cash directly from Guests. The platform, and the BoatDay experience, is specifically designed to let Hosts focus on providing and enjoying a great BoatDay with their Guests, and not have to worry about collecting payments. Cash-free payment makes organizing great BoatDays easier for Hosts and Guests, and helps us to keep the community safe.</p>
							</div>
							<div class="sub-sub-cat">
								<h5>DO I HAVE TO PAY RIGHT AWAY?</h5>
								<p>As a Guest, once your BoatDay is complete, you have 24 hours to confirm payment (including any added tip). If you haven't done so after 24 hours, the listed <a href="#contibution">contribution amount</a> for your BoatDay will automatically be charged to your credit card.  </p>
							</div>
							<div class="back-to-top">
								<a href="#list-faq">back <span class="glyphicon glyphicon-chevron-up"></span></a>
							</div>
						</div>
						<div id="guests-10" class="sub-cat">
							<h5 class="title">What if I can’t make it to a reserved BoatDay?</h5>
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
						<div id="guests-11" class="sub-cat">
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
						<div id="guests-12" class="sub-cat">
							<h5 class="title">Receipts</h5>
							<p>You will automatically receive a payment receipt shortly after your payment has been confirmed. If you do not receive a receipt, or would like to have one resent, contact us at <a href="mailto:payments@boatdayapp.com">payments@boatdayapp.com</a>.</p>
							<div class="back-to-top">
								<a href="#list-faq">back <span class="glyphicon glyphicon-chevron-up"></span></a>
							</div>
						</div>
						<div id="guests-13" class="sub-cat">
							<h5 class="title">Lost Items</h5>
							<p>If you accidentally leave something behind on a boat, don't worry, let us know and we'll help you find your item. Email us at <a href="mailto:Lostandfound@boatdayapp.com">Lostandfound@boatdayapp.com</a>, tell us what you left behind, the name of your Host and the date of your BoatDay, and we'll do our best to locate your lost item.</p>
							<div class="back-to-top">
								<a href="#list-faq">back <span class="glyphicon glyphicon-chevron-up"></span></a>
							</div>
						</div>
					</div>
				</div>
			</section>

			<section class="faq blured blured-03">
				<div class="container">
					<h2>General</h2>
				</div>
			</section>

			<section class="faq">
				<div class="container">
					<div id="general" class="cat">
						<!-- <div id="general-1" class="sub-cat">
							<h5>What is a BoatDay?</h5>
							<p>A “BoatDay” is a fun day of boating with a local Host. And the best part, our app and per person pricing make booking a day of boating easier and more affordable than ever. </p>
							<p>Each BoatDay listing in the app will tell you all of the details you want to know. From departure time to location, price, and all of the day’s activities, Hosts provide you with the information you need to pick your perfect BoatDay. Whether you’re looking to fish, sail, cruise and more, use custom search filters to find your ideal BoatDay and request a spot on-board. </p>
							<p>BoatDays are great for groups of all sizes. Whether you’re a small group looking for an affordable way to enjoy boating without the cost of reserving an entire boat, or a big group looking for a private experience, request as many seats as you need on-board.</p>
							<div class="back-to-top">
								<a href="#list-faq">back <span class="glyphicon glyphicon-chevron-up"></span></a>
							</div>
						</div> -->
						<div id="general-1" class="sub-cat">
							<h5 class="title" id="contibution">What is a "contribution"?</h5>
							<p>When a Host creates a BoatDay, they set the price or “contribution" for Guests on-board. This amount will be visible on the front of all BoatDay listings, as well as in the specific details for each BoatDay listed at booking.</p>
							<p>As a Guest, once your BoatDay is finished, you have 24 hours to review your Host and finalize your contribution (including any added tip). If you don't submit your contribution within that time period, we take it as a sign that you enjoyed your BoatDay, and the app will automatically charge the listed contribution amount to your credit card on file.</p>
							<p>Had an amazing time with your Host, or a BoatDay that far exceeded your expectations? You can always show your appreciation to the Host by increasing your contribution.
								For BoatDays with non-charter Hosts, if you feel you must reduce your contribution, be sure to tell us why! Your feedback is valuable to us and the Hosts as we try to provide the best BoatDay experiences. Remember, Hosts rely on contributions in making their boats available to you, and contributions are key to providing BoatDay's unparalleled and affordable per-person prices. 
							</p>
							<div class="back-to-top">
								<a href="#list-faq">back <span class="glyphicon glyphicon-chevron-up"></span></a>
							</div>
						</div>
						<div id="general-2" class="sub-cat">
							<h5 class="title" id="duration">How long is a BoatDay?</h5>
							<!-- <p>The length of each BoatDay is up to the Host, and will be displayed clearly on each BoatDay listing in the app.  If you have specific time requirements, use the search filters to find BoatDays that fit your schedule.</p> -->
							<p>To ensure the safety and comfort of our users, BoatDays are limited to a maximum duration of 12 hours. Overnight trips are not permitted (its a Boat"DAY"), and BoatDay excursions may travel up to a maximum of 12 miles offshore (the distance from the nearest shoreline).</p>
							<div class="back-to-top">
								<a href="#list-faq">back <span class="glyphicon glyphicon-chevron-up"></span></a>
							</div>
						</div>
						<div id="general-3" class="sub-cat">
							<h5 class="title">What is the Trust &amp; Safety Fee?</h5>
							<p>The safety of all BoatDay passengers is our top priority and is taken into account with everything we do. The Trust &amp; Safety Fee of $4.00 per confirmed BoatDay Guest supports our safety standards, including background checks, insurance and ongoing support. The Trust &amp; Safety fee will always be displayed as before you book your BoatDay. </p>
							<p>Find out more about <a href="#payment">how payments work</a> on the BoatDay platform.</p>
							<div class="back-to-top">
								<a href="#list-faq">back <span class="glyphicon glyphicon-chevron-up"></span></a>
							</div>
						</div>
						<div id="general-4" class="sub-cat">
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
						<div id="general-5" class="sub-cat">
							<h5 class="title">Can I bring children?</h5>
							<p>Although you must be at least 18 to use BoatDay, and 23 to sign-up as Host, BoatDay supports family-friendly outings.</p>
							<p>Select “children allowed” from the filter options to look for family-friendly BoatDay options. When requesting a seat on board, reserve extra seats for the family, and be sure to notify your Host that you're bringing kids along.</p>
							<p>Note that in order to use the App and join a BoatDay, Guests must be at least 18 years of age. Anyone under 18 must be accompanied by a guardian or parent.</p>
							<div class="back-to-top">
								<a href="#list-faq">back <span class="glyphicon glyphicon-chevron-up"></span></a>
							</div>
						</div>
						<div id="general-6" class="sub-cat">
							<h5 class="title">How BoatDay and BoatDay Hosts are Classified</h5>
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
						<div id="general-7" class="sub-cat">
							<h5 class="title">Using BoatDay with IOS 7 or older</h5>
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
					</div>
				</div>
			</section>

			<section class="faq blured blured-03">
				<div class="container">
					<h2 id="safetyPage">Safety</h2>
				</div>
			</section>

			<section class="faq">
				<div class="container">
					<div id="safety" class="cat">
						<div id="safety-1" class="sub-cat">
							<h5 class="title">What are the BoatDay safety features?</h5>
							<p>Safety, trust, and reliability are our priorities. Although the BoatDay community is built on a fun shared experience, we emphasize that nothing is more important than the safety of the users in our BoatDay community. From Host <a href="#bgScreen">background screenings</a> to $500,000 in excess personal liability insurance for the Host of every BoatDay, we are committed to maintaining and improving our safety procedures, including:</p>
							<ul>
								<li>Criminal background checks</li>
								<li>Excess liability insurance coverage</li>
								<li>Zero-tolerance Host drug and alcohol policy</li>
								<li>Direct Emergency Services contact links</li>
								<li>Readable reviews and Star ratings</li>
								<li>Mutual social network visibility</li>
								<li>Customer support</li>
							</ul>
							<p>If you would like to learn more about our safety features, please visit our <a href="https://www.boatdayapp.com/safety" target="_blank">safety page</a>.</p>
							<div class="back-to-top">
								<a href="#list-faq">back <span class="glyphicon glyphicon-chevron-up"></span></a>
							</div>
						</div>
						<!-- <div id="safety-2" class="sub-cat">
							<h5 class="title">Boater Certifications</h5>
							<p>Hosts can upload any and all boater certification, licenses and qualifications when creating their Host Profile. These certifications will be displayed as badges on the Host’s profile in the app, allowing Guests to feel more confident in their BoatDay choices.</p>
							<p>New certifications can be added or edited at any time by accessing your account information from your Host Dashboard.</p>
							<div class="back-to-top">
								<a href="#list-faq">back <span class="glyphicon glyphicon-chevron-up"></span></a>
							</div>
						</div> -->
						<div id="safety-2" class="sub-cat">
							<h5 class="title">What is the BoatDay zero-tolerance drug and alcohol policy for Hosts?</h5>
							<p>BoatDay has a zero-tolerance drug and alcohol policy for Hosts. If you suspect that a BoatDay Host is under the influence of drugs or alcohol while on a BoatDay, please contact us.</p>
							<div class="back-to-top">
								<a href="#list-faq">back <span class="glyphicon glyphicon-chevron-up"></span></a>
							</div>
						</div>
						<div id="safety-3" class="sub-cat">
							<h5 class="title">I’m a Guest, what are some safety tips I can follow?</h5>
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
						<div id="safety-4" class="sub-cat">
							<h5 class="title">Reporting an incident or safety concern?</h5>
							<p>If you experience an issue while on a BoatDay that you feel threatens your personal safety, make sure to take the appropriate steps to protect yourself and get to a safe place. Call the authorities if necessary (the “Emergency Services” feature displayed in the app while you are actively on a BoatDay provides a direct link to the Coast Guard emergency line) and, once in a safe place, provide us with the details of the incident.</p>
							<p>Be sure to contact us, or flag the BoatDay and/or user directly through the app's flagging function. We are committed to maintaining your safety and the safety of the entire BoatDay community.</p>
							<div class="back-to-top">
								<a href="#list-faq">back <span class="glyphicon glyphicon-chevron-up"></span></a>
							</div>
						</div>
						<div id="safety-5" class="sub-cat">
							<h5 class="title">Emergency Boat Assistance</h5>
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
						<div id="safety-6" class="sub-cat">
							<h5 class="title">No-Weapons Policy</h5>
							<p>In order to ensure that our users are comfortable, BoatDay maintains a strict "No Weapons" policy. If any Host or Guest possesses a weapon on a BoatDay boat, regardless of whether such possession is legal where they are, they will be removed from the platform.</p>
							<p>We maintain this policy to preserve the best interests of the community, as the presence of a weapon on a BoatDay may make another user uncomfortable or distressed.</p>
							<p>BoatDay reserves sole right to determine what constitutes a "weapon" for the purposes of compliance with this policy.</p>
							<p>If you at any time witness possession of a weapon on a BoatDay boat, please contact us immediately.</p>
							<div class="back-to-top">
								<a href="#list-faq">back <span class="glyphicon glyphicon-chevron-up"></span></a>
							</div>
						</div>
					</div>
					<div class="cat">
						<h5 class="title">More questions?</h5>
						<p>
							<a href="mailto:info@boatdayapp.com">Contact us</a> and we'll do our best to address all of your concerns. 
						</p>
					</div>
				</div>
			</section>

			<?php include_once('UX.section.modals.php'); ?>			
		</main>

		<?php include_once('UX.section.footer.php'); ?>
		<?php include_once('UX.scripts.php'); ?>
	</body>
</html>