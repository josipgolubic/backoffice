@extends('app')
	
@section('content')
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading"><strong>Node Overview</strong></div>
				<div class="panel-body">
					<h3>Node: <small>{{ $node->description }}</strong></small></h3>

					<hr>

					<h5>Node ID: {{ $node->id }}</h5>
					<h5>Description: {{ $node->description }}</h5>
					<h5>Type: {{ $node->type }}</h5>
					<h5>Building Description {{ $node->building_description }}</h5>
					<h5>Floor Description {{ $node->floor_description }}</h5>
					<h5>Floor Level {{ $node->floor_level }}</h5>
					<h5>Floor Length {{ $node->floor_length }}</h5>
					<h5>Floor Width {{ $node->floor_width }}</h5>
					<h5>Coordinates: <small>X: {{ $node->x_pos }} Y: {{ $node->y_pos }}</small></h5>
				</div>
				<!-- /.panel-body -->
			</div>
			<!-- /.panel panel-default -->
		</div>
		<!-- /.col-md-8 col-md-offset-2 (outer) -->
	</div>
	<!-- /.row -->						
@stop