@extends('layout')

@section('content')
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<h3>Add a New Position</h3>

			<form method="POST" action="/map/1">
				<div class="form-group">
					Map:
					<input type="text" name="Map" class="form-control"></input>
					
				</div>
				<div class="form-group">
					Building:
					<input type="text" name="Building" class="form-control"></input>
				</div>

				<div class="form-group">
					Floor:
					<input type="text" name="Floor" class="form-control"></input>
				</div>

				<div class="form-group">
					Type:
					<select class="form-control" name="PositionType">
						<option value="qrcode">QRCode</option>
					  	<option value="stairs">Stairs</option>
					  	<option value="elevator">Elevator</option>
					</select>
				</div>

				<div class="form-group">
					Position description:
					<input type="text" name="PositionDescription" class="form-control"></input>
				</div>

				<div class="form-group">
					<button type="submit" class="btn btn-primary">Add Position</button>
				</div>

				<input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
			</form>
		</div>
	</div>
@stop
