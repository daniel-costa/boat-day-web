<?php 
	require 'lib.functions.php';
	require 'vendor/autoload.php';
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<?php include_once('UX.head.php'); ?>
		<title>Book an adventure</title>

		<script type="x-boatday/template" name="boatday-card">
			<div class="col-sm-4">
				<div class="boatday-card bd-<%= boatday.id %>" data-id="<%= boatday.id %>">
					<div class="image">
						<div class="seats-remaining">
							<label>only<br>
							<%= boatday.get("availableSeats") == 1 ? '1 seat' : (boatday.get("availableSeats") + ' seats') %>
							 left</label>
						</div>
						
						<div class="share-boatday">
							<span class="icon bd-share"></span>
						</div>
						
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
							<label class="price">$<%= getGuestPrice(boatday.get('price'), getGuestRate(boatday.get('host').get('type'))) %></label>
						</div>
					</div>
					<div class="details">
						<h1 class="title"><%= boatday.get("name") %></h1>
						<div class="items">
							<div class="item location">
								<div class="icon bd-pin"></div>
								<div class="label"><%= location %></div>
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
				<div class="container">
					<div class="row">	
						<div class="col-md-3 col-sm-6">
							<div class="form-group col-sm-6 date-col-from" >
								<label class="control-label pull-left">From:</label>
								<input type="text" required placeholder="mm/dd/yyyy" class="form-control" id="date-from" name="date-from">
							</div>
							<div class="form-group col-sm-6 date-col-to" >
								<label class="control-label pull-left">To:</label>
								<input type="text" required placeholder="mm/dd/yyyy" class="form-control" id="date-to" name="date-to">
							</div>
						</div>
						<div class="col-md-3 col-sm-6">
							<div class="form-group">
								<label class="control-label pull-left">Activity:</label>
								<select name="category" required class="form-control">
									<option value="all">All</option>
									<option value="leisure" >Leisure</option>
									<option value="fishing" >Fishing</option>
									<option value="sailing" >Sailing</option>
									<option value="sports"  >Water Sports</option>
								</select>
							</div>
						</div>
						<div class="col-md-3 col-sm-6 ">
							<div class="form-group">
								<label class="control-label pull-left">Price:</label>
								<label class="preview-price control-label pull-right">$10 - $250</label>
								<div>
									<input style="width: 100%;" type="text" class="form-control" id="slider-price" name="slider-price"  data-slider-min="10" data-slider-max="250" data-slider-step="5" data-slider-value="[10, 250]">
								</div>
							</div>
						</div>
						<div class="col-md-3 col-sm-6">
							<div class="form-group">
								<label class="control-label pull-left">Departure:</label>
								<label class="preview-departure control-label pull-right">12:00 AM - 11:30 PM</label>
								<div>
									<input style="width: 100%;" type="text" class="form-control" id="slider-departure" name="slider-departure"  data-slider-min="0" data-slider-max="23.5" data-slider-step="0.5" data-slider-value="[0, 23.5]">
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
	
			<section class="upcoming-boatdays">
				<div class="container">
					<div class="row text-center"></div>
				</div>
			</section>

			<?php include_once('UX.section.modals.php'); ?>			
		</main>

		<?php include_once('UX.section.footer.php'); ?>
		<?php include_once('UX.scripts.php'); ?>
	</body>
</html>