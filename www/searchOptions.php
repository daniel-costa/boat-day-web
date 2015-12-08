<div class="container">
	<form id="boatdaySearch" method="post" action="" role="form">
		
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
			
			<div class="col-md-2 col-sm-6">
				<div class="form-group">
					<label class="control-label pull-left">Activity:</label>
					<select name="category" required class="form-control">
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
					<label class="preview-price control-label pull-right">$20 - $500</label>
					<div>
						<input style="width: 100%;" type="text" class="form-control" id="slider-price" name="slider-price"  data-slider-min="10" data-slider-max="1000" data-slider-step="5" data-slider-value="[20, 500]">
					</div>
				</div>
			</div>

			<div class="col-md-4 col-sm-6">
				<div class="form-group">
					<label class="control-label pull-left">Departure Time:</label>
					<label class="preview-departure control-label pull-right">6:00 AM - 10:00 PM</label>
					<div>
						<input style="width: 100%;" type="text" class="form-control" id="slider-departure" name="slider-departure"  data-slider-min="0" data-slider-max="23.5" data-slider-step="0.5" data-slider-value="[6, 22]">
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