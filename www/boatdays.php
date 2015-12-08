<?php 
	require 'lib.functions.php';
	require 'vendor/autoload.php';

?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<?php include_once('UX.head.php'); ?>
		<title>BoatDay App - Upcoming BoatDays</title>


		<script type="x-boatday/template" name="boatday-card">
			<div class="col-sm-4">
				<div class="boatday-card bd-<%= boatday.id %>">
					<div class="image">
						<div class="banner left">
							<div class="host-picture" style="background-image:url(<%= boatday.get("captain").get("profilePicture").url() %>)">
							</div>
							<% if(boatday.get("captain").get("rating")){ %>
								<div class="rating rating-<%= Math.ceil(boatday.get('captain').get('rating')) %> bd-icons">
									<div class="with-empty bd-icons"></div>
								</div>
							<% } else { %>
								<label class="no-rating"><%= boatday.get("captain").get("displayName") %></label>
							<% } %>
						</div>
						<div class="banner right">
							<label class="price">$<%= boatday.get('price') %></label>
						</div>
					</div>
					<div class="details">
						<h1 class="title"><%= boatday.get("name") %></h1>
						<div class="items">
							<div class="item location">
								<div class="icon bd-pin"></div>
								<div class="label">get location</div>
							</div>
							<div class="item date">
								<div class="icon bd-calendar"></div>
								<div class="label"><%= dateToEn %></div>
							</div>
							<div class="item time">
								<div class="icon bd-clock"></div>
								<div class="label"><%= departureTime %></div>
							</div>
							<div class="item seats">
								<div class="bd-person icon"></div>
								<div class="label"><%= (boatday.get("availableSeats") - boatday.get("bookedSeats")) %></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</script>


	</head>
	<body class="boatdays">
		<?php include_once('UX.section.header.php'); ?>

		<main>

			<section class="placeholder">
			</section>

			<section class="options">
				<?php include_once('searchOptions.php') ?>
			</section>

	
			<section class="upcoming-boatdays">
				<div class="container">
					<div class="row text-center">
					</div>
				</div>
			</section>
			


			<?php include_once('UX.section.modals.php'); ?>			
		</main>

		<?php include_once('UX.section.footer.php'); ?>
		<?php include_once('UX.scripts.php'); ?>
	</body>
</html>