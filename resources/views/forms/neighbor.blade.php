@extends('layout')

@section('content')
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<h3>Add a New Floor</h3>

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
					Origin:
					<input type="text" name="Origin" class="form-control"></input>
				</div>

				<div class="form-group">
					Destination:
					<input type="text" name="Destination" class="form-control"></input>
				</div>

				<div class="form-group">
					Path cost:
					<input type="text" name="PathCost" class="form-control"></input>
				</div>

				<div class="form-group">
					Step:
					<input type="text" name="Step" class="form-control" style="width: 80%;"></input>
					<button type="submit" class="btn btn-primary" style="width: 20%;">Add Step</button>
				</div>

				<div class="form-group">
					Set of steps:
					<input type="text" name="StepSet" class="form-control"></input>
					<button type="submit" class="btn btn-primary">Add Image</button>
				</div>

				<div class="form-group">
					<button type="submit" class="btn btn-primary">Add Neighbor</button>
					<a class="btn btn-danger btn-close" href="{{ route('home') }}">Cancel</a>
				</div>

				<input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
			</form>
		</div>
	</div>
@stop
