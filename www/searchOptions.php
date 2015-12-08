<div class="container">
	<form method="post" action="" role="form">
		
		<div class="row">
			
			<div class="col-md-3 col-sm-6">
				<div class="form-group col-sm-6 date-col-from" >
					<label class="control-label pull-left">From:</label>
					<input type="text" required placeholder="mm/dd/yyyy" class="form-control" id="date-from" name="date-from" value="<?php  echo $dateFrom;  ?>">
				</div>
				<div class="form-group col-sm-6 date-col-to" >
					<label class="control-label pull-left">To:</label>
					<input type="text" required placeholder="mm/dd/yyyy" class="form-control" id="date-to" name="date-to" value="<?php  echo $dateTo;  ?>">
				</div>
			</div>
			
			<div class="col-md-3 col-sm-6">
				<div class="form-group">
					<label class="control-label pull-left">Activity:</label>
					<select name="category" required class="form-control">
						<option value="leisure" <?php if($category == "leisure") { echo "selected"; } ?>>Leisure</option>
						<option value="fishing" <?php if($category == "fishing") { echo "selected"; } ?>>Fishing</option>
						<option value="sailing" <?php if($category == "sailing") { echo "selected"; } ?>>Sailing</option>
						<option value="sports"  <?php if($category == "sports") { echo "selected"; } ?>>Water Sports</option>
					</select>
				</div>
			</div>

			<div class="col-md-3 col-sm-6 ">
				<div class="form-group">
					<label class="control-label pull-left">Price:</label>
					<label class="preview-price control-label pull-right"><?php echo "$".$startPrice ." - $".$endPrice ?></label>
					<div>
						<input style="width: 100%;" type="text" class="form-control" id="slider-price" name="slider-price"  data-slider-min="<?php echo $minPrice; ?>" data-slider-max="<?php echo $maxPrice; ?>" data-slider-step="5" data-slider-value="<?php echo "[".$startPrice.", ".$endPrice."]"; ?>">
						<input type="hidden" name="start-price-hidden" id="start-price-hidden" value="<?php echo $startPrice; ?>"/>
						<input type="hidden" name="end-price-hidden" id="end-price-hidden" value="<?php echo $endPrice; ?>"/>
					</div>
				</div>
			</div>



			<div class="col-md-3 col-sm-6">
				<div class="form-group">
					<label class="control-label pull-left">Departure:</label>
					<label class="preview-departure control-label pull-right"><?php echo departureTimeToDisplayTime($startDepartureTime)." - ".departureTimeToDisplayTime($endDepartureTime); ?></label>
					<div>
						<input style="width: 100%;" type="text" class="form-control" id="slider-departure" name="slider-departure"  data-slider-min="<?php echo $departureMinTime; ?>" data-slider-max="<?php echo $departureMaxTime; ?>" data-slider-step="0.5" data-slider-value="<?php echo "[".$startDepartureTime.", ".$endDepartureTime."]"; ?>">
						<input type="hidden" name="start-departure-hidden" id="start-departure-hidden" value="<?php echo $startDepartureTime; ?>"/>
						<input type="hidden" name="end-departure-hidden" id="end-departure-hidden" value="<?php echo $endDepartureTime; ?>"/>
					</div>
				</div>
			</div>

		</div>

		<div class="row">
			<div class="form-group pull-right">
				<button name="option-submit" type="submit" class="btn">Search</button>
			</div>
		</div>
		
	</form>
</div>