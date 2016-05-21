@extends('app')
	
@section('content')
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading"><strong>Node Overview</strong></div>
				<div class="panel-body">
					<h3>Node: <small>{{ $node->description }}</strong></small></h3>

					<hr>

					<h5><strong>Node ID:</strong> {{ $node->id }}</h5>
					<h5><strong>Description:</strong> {{ $node->description }}</h5>
					<h5><strong>Type:</strong> {{ $node->type }}</h5>
					<h5><strong>Building Description:</strong> {{ $node->building_description }}</h5>
					<h5><strong>Floor Description:</strong> {{ $node->floor_description }}</h5>
					<h5><strong>Floor Level:</strong> {{ $node->floor_level }}</h5>
					<h5><strong>Floor Length:</strong> {{ $node->floor_length }}</h5>
					<h5><strong>Floor Width:</strong> {{ $node->floor_width }}</h5>
					<h5><strong>Coordinates:</strong> <small>X:{{ $node->x_pos }}  Y:{{ $node->y_pos }}</small></h5>
				</div>
				<!-- /.panel-body -->

				<hr>

				<div class="panel-body">
					<a class="btn btn-info btn-block" href="/nodes/{{ $node->id }}/edit"><strong>Edit</strong></a>

					<hr>

					<form method="POST" action="/nodes/{{ $node->id }}">
					    <input type="hidden" name="_method" value="DELETE">
						<button type="submit" class="btn btn-danger btn-block"><strong>Delete</strong></button>
						<input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
					</form>

					<hr>

					<a class="btn btn-default btn-block" href="/maps/{{ $node->map_id }}"><strong>Go Back</strong></a>
				</div>
				<!-- /.panel-body -->
			</div>
			<!-- /.panel panel-default -->
		</div>
		<!-- /.col-md-8 col-md-offset-2 (outer) -->
	</div>
	<!-- /.row -->						
@stop