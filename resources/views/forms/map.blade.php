@extends('layout')

@section('content')
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<h3>Add a New Map</h3>

			<form method="POST" action="/map/1">
				<div class="form-group">
					Map version:<input type="text" name="MapVersion" class="form-control"></input>
					
				</div>
				<div class="form-group">
					Map description:<input type="text" name="MapDescription" class="form-control"></input>
				</div>

				<div class="form-group">
					<button type="submit" class="btn btn-primary">Add Map</button>
				</div>
			</form>
		</div>
	</div>
@stop
