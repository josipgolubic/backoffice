@extends('layout')

@section('content')
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<h3>Add a New Map</h3>

			<form method="POST" action="/map/something">
				<div class="form-group">
					<h4><small>Map version:</small></h4>
					<input type="text" name="MapVersion" class="form-control"></input>
					
				</div>
				<div class="form-group">
					<h4><small>Map description:</small></h4>
					<input type="text" name="MapDescription" class="form-control"></input>
				</div>

				<div class="form-group">
					<button type="submit" class="btn btn-primary">Add Map</button>
					<a class="btn btn-danger btn-close" href="{{ route('home') }}">Cancel</a>
				</div>

				<input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
			</form>
		</div>
	</div>
@stop
