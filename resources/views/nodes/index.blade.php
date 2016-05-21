<div class="col-md-10 col-md-offset-1">
	<h3>Add a New Node</h3>

	<form method="POST" action="/nodes">
		<div class="form-group">
			<h4><small><strong>Description</strong></strong></small></h4>
			<input type="text" name="description" class="form-control"></input>
		</div>

		<div class="form-group">
			<h4><small><strong>Type</strong></strong></small></h4>
			<select class="form-control" name="type">
				<option value="QRCode">QRCode</option>
			  	<option value="stairs">Stairs</option>
			  	<option value="elevator">Elevator</option>
			</select>
		</div>						

		<div class="form-group">
			<h4><small><strong>Building Description</strong></strong></small></h4>
			<input type="text" name="building_description" class="form-control"></input>
		</div>

		<div class="form-group">
			<h4><small><strong>Floor Description</strong></strong></small></h4>
			<input type="text" name="floor_description" class="form-control"></input>
		</div>

		<div class="form-group">
			<h4><small><strong>Floor Level</strong></strong></small></h4>
			<input type="text" name="floor_level" class="form-control"></input>
		</div>

		<div class="form-group">
			<h4><small><strong>Floor Length</strong></strong></small></h4>
			<input type="text" name="floor_length" class="form-control"></input>
		</div>

		<div class="form-group">
			<h4><small><strong>Floor Width</strong></strong></small></h4>
			<input type="text" name="floor_width" class="form-control"></input>
		</div>

		<div class="form-group">
			<div class="row" id="coordinates_row">
				<h4><small><strong>Coordinates</strong></strong></small></h4>
				<div class="col-xs-2">
					<h4><small><strong>X:</strong></strong></small></h4>
					<input type="text" name="x_pos" class="form-control"></input>
				</div>
				<div class="col-xs-2">
					<h4><small><strong>Y:</strong></strong></small></h4>
					<input type="text" name="y_pos" class="form-control"></input>
				</div>
			</div>
		</div>
		
		<div class="form-group">
			<button type="submit" class="btn btn-primary"><strong>Add Node</strong></button>
			<button type="button" class="btn btn-danger btn-close" data-toggle="collapse" data-target="#addnode"><strong>Cancel</strong></button>
		</div>

		<input type="hidden" name="map_id" value="{{ $map->id }}"></input>
		<input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
	</form>
</div>
<!-- /.col-md-10 col-md-offset-1 -->