@extends('layout')

@section('content')
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<h3>Add a New Route</h3>

			<form method="POST" action="/map/1">
				<div class="form-group">
					<h4><small>Map:</small></h4>
					<input type="text" name="Map" class="form-control"></input>
					
				</div>
				<div class="form-group">
					<h4><small>Building:</small></h4>
					<input type="text" name="Building" class="form-control"></input>
				</div>

				<div class="form-group">
					<h4><small>Floor:</small></h4>
					<input type="text" name="Floor" class="form-control"></input>
				</div>

				<div class="form-group">
					<h4><small>Origin:</small></h4>
					<input type="text" name="Origin" class="form-control"></input>
				</div>

				<div class="form-group">
					<h4><small>Destination:</small></h4>
					<input type="text" name="Destination" class="form-control"></input>
				</div>

				<div class="form-group">
					<h4><small>Path cost:</small></h4>
					<input type="text" name="PathCost" class="form-control"></input>
				</div>

				<div class="form-group">
					<h4><small>Step:</small></h4>
					<textarea name="Step" class="form-control"></textarea>
					<button type="submit" class="btn btn-info btn-block">Add Step</button>
				</div>

				<div class="form-group">
					<h4><small>Set of steps:</small></h4>
					<input type="text" name="StepSet" class="form-control"></input>
					<button type="submit" class="btn btn-info btn-block">Add Image</button>
				</div>

				<div class="form-group">
					<button type="submit" class="btn btn-primary">Add Route</button>
					<a class="btn btn-danger btn-close" href="{{ route('home') }}">Cancel</a>
				</div>

				<input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
			</form>
		</div>
	</div>
@stop
