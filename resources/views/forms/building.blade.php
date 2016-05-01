@extends('layout')

@section('content')
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<h3>Add a New Building</h3>

			<form method="POST" action="/map/1">
				<div class="form-group">
					Map:
					<input type="text" name="Map" class="form-control"></input>
					
				</div>
				<div class="form-group">
					Building description:
					<input type="text" name="BuildingDescription" class="form-control"></input>
				</div>

				<div class="form-group">
					<button type="submit" class="btn btn-primary">Add Building</button>
					<a class="btn btn-danger btn-close" href="{{ route('home') }}">Cancel</a>
				</div>

				<input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
			</form>
		</div>
	</div>
@stop
