<?php 
	require 'lib.functions.php';
	require 'vendor/autoload.php';
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<?php include_once('UX.head.php'); ?>
		<title>BoatDay - Find an adventure</title>

		<script type="x-boatday/template" name="boatday-card">
			<div class="col-sm-6 col-lg-4">
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
		<script type="x-boatday/template" name="boatday-empty">
			<p>
				Looks like your perfect BoatDay is still at the dock. <br>
			 	Tell us what you’re looking for and we’ll update you when a matching BoatDay is available.
			 </p>
			 <button data-toggle="modal" data-target="#find-boatday" class="btn host-log-in">Find me a BoatDay</button>
		</script>
		<script type="x-boatday/template" name="boatday-thank">
			<div class="text-center thanks">
				<h1>Thanks <%= name %>!</h1>
				<p>
					We will let you know when your perfect BoatDay is ready to set sail.
					<br>
					In the meantime, download the app to stay updated on the latest BoatDays:
				</p>
				<div class="dls">
					<div class="col-sm-6 apple-store">
						<a href="https://itunes.apple.com/us/app/boatday/id953574487?mt=8" target="_blank"><img src="resources/dl-apple.png" class="dl" /></a>
					</div>
					<div class="col-sm-6 play-store">
						<a href="https://play.google.com/store/apps/details?id=com.boat.day" target="_blank"><img src="resources/dl-google.png" class="dl" /></a>
					</div>
				</div>
			</div>
		</script>
		<script type="x-boatday/template" name="boatday-find-form">
			<form class="form-horizontal" name="find-boatday" role="form">
				<div class="form-group">
				    <label class="control-label col-sm-2" for="mdl-name">Name:</label>
				    <div class="col-sm-10">
				      <input type="text" class="form-control" name="mdl-name" id="mdl-name" placeholder="Name" required>
				    </div>
				  </div>
			  
			  	<div class="form-group">
				    <label class="control-label col-sm-2" for="mdl-email">Email:</label>
				    <div class="col-sm-10"> 
				      <input type="email" class="form-control" id="mdl-email" name="mdl-email" placeholder="Email" required>
				    </div>
			  	</div>
			  	
			  	<div class="form-group">
				    <label class="control-label col-sm-2" for="mdl-activity">Activity:</label>
				    <div class="col-sm-10"> 
			      		<select name="mdl-activity" id="mdl-activity" required class="form-control">
							<option value="all" 	<%= activity=="all" 	? "selected": "" %>>All</option>
							<option value="leisure" <%= activity=="leisure" ? "selected": "" %> >Leisure</option>
							<option value="fishing" <%= activity=="fishing" ? "selected": "" %>>Fishing</option>
							<option value="sailing" <%= activity=="sailing" ? "selected": "" %>>Sailing</option>
							<option value="sports"  <%= activity=="sports" 	? "selected": "" %>>Water Sports</option>
						</select>
				    </div>
			  	</div>

			  	<div class="form-group">
				    <label class="control-label col-sm-2" for="mdl-location">Location:</label>
				    <div class="col-sm-10"> 
		      			<select name="mdl-location" id="mdl-location" class="form-control">
		      				<option <%= location=="everywhere" 	? "selected": "" %> value="everywhere" lat="0" lng="0">Everywhere</option>
							<option <%= location=="wpb-fl" 		? "selected": "" %> value="wpb-fl" lat="26.713361" lng="-80.048790">West Palm Beach, FL</option>
							<option <%= location=="ftl-fl" 		? "selected": "" %> value="ftl-fl" lat="26.119363" lng="-80.129802">Ft. Lauderdale, FL</option>
							<option <%= location=="mia-fl" 		? "selected": "" %> value="mia-fl" lat="25.774382" lng="-80.185515">Miami, FL</option>
						</select>
				    </div>
			  	</div>

			  	<div class="form-group">
				    <label class="control-label col-sm-2" for="mdl-price">Price:</label>
				    <div class="col-sm-10">
				    	<label class="preview-mdl-price-st control-label pull-left">$<%= price[0] %></label>
				    	<label class="preview-mdl-price-ed control-label pull-right">$<%= price[1] %></label>
				    	<div class="price-slider">
							<input style="width: 100%;" type="text" class="form-control" id="mdl-slider-price" name="mdl-slider-price"  data-slider-min="10" data-slider-max="250" data-slider-step="5" data-slider-value="<%= "["+price+"]" %>">
						</div>
				    </div>
			  	</div>
			  	
			  	<div class="form-group">
		
				  		<div class="col-sm-10">
				  			<p class="send-text text-center">Send us your BoatDay preference and we’ll let you know when a match is available.</p>
				  		</div>
					    <div class="col-sm-2">
					      <button type="submit" class="btn host-log-in pull-right testtest">Send</button>
					    </div>
					 
			  	</div>
			</form>
		</script>

	</head>
	<body class="boatdays">
		<?php include_once('UX.section.header.php'); ?>

		<main>

			<section class="placeholder">
			</section>

			<section class="options">
				<div class="container">
					<h1 class="text-center book-adventure">Find an adventure</h1>
					<div class="row">
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
						<div class="col-md-3 col-sm-6">
							<div class="form-group">
								<label class="control-label pull-left">Location:</label>
								<select name="location" class="form-control">
									<option value="everywhere" lat="0" lng="0">Everywhere</option>
									<option value="mia-fl" lat="25.774382" lng="-80.185515">Miami, FL</option>
									<option value="ftl-fl" lat="26.119363" lng="-80.129802">Ft. Lauderdale, FL</option>
									<option value="wpb-fl" lat="26.713361" lng="-80.048790">West Palm Beach, FL</option>
								</select>
							</div>
						</div>
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
						<div class="col-md-3 col-sm-6 ">
							<div class="form-group">
								<label class="control-label pull-left">Price:</label>
								<label class="preview-price control-label pull-right">$10 - $250</label>
								<div class="price-slider">
									<input style="width: 100%;" type="text" class="form-control" id="slider-price" name="slider-price"  data-slider-min="10" data-slider-max="250" data-slider-step="5" data-slider-value="[10, 250]">
								</div>
							</div>
						</div>
						<!--
							<div class="col-md-3 col-sm-6">
							<div class="form-group">
								<label class="control-label pull-left">Departure:</label>
								<label class="preview-departure control-label pull-right">12:00 AM - 11:30 PM</label>
								<div>
									<input style="width: 100%;" type="text" class="form-control" id="slider-departure" name="slider-departure"  data-slider-min="0" data-slider-max="23.5" data-slider-step="0.5" data-slider-value="[0, 23.5]">
								</div>
							</div>
						</div>
						-->
					</div>
					<div class="row">

					</div>
				</div>
			</section>
	
			<section class="upcoming-boatdays">
				<div class="container">
					<div class="row text-center"></div>
					<button class="btn host-log-in show-more">Show More</button>
				</div>
			</section>

			<?php include_once('UX.section.modals.php'); ?>			
		</main>

		<?php include_once('UX.section.footer.php'); ?>
		<?php include_once('UX.scripts.php'); ?>
	</body>
</html>