@extends('app')

@section('content')
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading"><strong>Edit Node: {{ $node->description }}</strong></div>
				<div class="panel-body">	
					<form method="POST" action="/nodes/{{ $node->id }}">
						<div class="form-group">
							<h4><small><strong>Description</strong></strong></small></h4>
							<input type="text" name="description" class="form-control"></input>
						</div>

						<div class="form-group">
							<h4><small><strong>Type</strong></strong></small></h4>
							<select class="form-control" name="type" value="{{ $node->type }}">
								<option value="QRCode">QRCode</option>
							  	<option value="stairs">Stairs</option>
							  	<option value="elevator">Elevator</option>
							</select>
						</div>						

						<div class="form-group">
							<h4><small><strong>Building Description</strong></strong></small></h4>
							<input type="text" name="building_description" class="form-control" value="{{ $node->building_description }}"></input>
						</div>

						<div class="form-group">
							<h4><small><strong>Floor Description</strong></strong></small></h4>
							<input type="text" name="floor_description" class="form-control" value="{{ $node->floor_description }}"></input>
						</div>

						<div class="form-group">
							<h4><small><strong>Floor Level</strong></strong></small></h4>
							<input type="text" name="floor_level" class="form-control" value="{{ $node->floor_level }}"></input>
						</div>

						<div class="form-group">
							<h4><small><strong>Floor Length</strong></strong></small></h4>
							<input type="text" name="floor_length" class="form-control" value="{{ $node->floor_length }}"></input>
						</div>

						<div class="form-group">
							<h4><small><strong>Floor Width</strong></strong></small></h4>
							<input type="text" name="floor_width" class="form-control" value="{{ $node->floor_width }}"></input>
						</div>

						<div class="form-group">
							<div class="row" id="coordinates_row">
								<h4><small><strong>Coordinates</strong></strong></small></h4>
								<div class="col-xs-2">
									<h4><small><strong>X:</strong></strong></small></h4>
									<input type="text" name="x_pos" class="form-control" value="{{ $node->x_pos }}"></input>
								</div>
								<div class="col-xs-2">
									<h4><small><strong>Y:</strong></strong></small></h4>
									<input type="text" name="y_pos" class="form-control" value="{{ $node->y_pos }}"></input>
								</div>
							</div>
						</div>
						
						<div class="form-group">
							<button type="submit" class="btn btn-primary"><strong>Update Node</strong></button>
							<a class="btn btn-danger btn-close" href="{{ URL::previous() }}"><strong>Cancel</strong></a>
						</div>

						<input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
					</form>
				</div>
				<!-- /.panel-body -->
			</div>
			<!-- /.panel panel-default -->
		</div>
		<!-- /.col-md-8 col-md-offset-2 (outer) -->
	</div>
	<!-- /.row -->
@stop