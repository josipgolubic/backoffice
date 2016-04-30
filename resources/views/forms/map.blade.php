@extends('layout')

@section('content')
	<h3>Add a New Map</h3>

	<form method="POST" action="/map/1">
		<div class="form-group">
			Map version:<input type="text" name="MapVersion"></input>
			
		</div>
		<div class="form-group">
			Map description:<input type="text" name="MapDescription"></input>
		</div>

		<div class="form-group">
			<button type="submit" class="btn btn-primary">Add Map</button>
		</div>
	</form>
@stop
