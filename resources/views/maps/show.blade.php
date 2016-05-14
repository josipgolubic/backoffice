@extends('app')
	
@section('content')
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Map Overview</div>
				<div class="panel-body">
					<h2>Map: {{ $map->description }}</h2>
					<h3>Map Version: {{ $map->version }}</h3>
				</div>
				<!-- /.panel-body -->
			</div>
			<!-- /.panel panel-default -->
		</div>
		<!-- /.col-md-10 col-md-offset-1 (outer) -->
	</div>
	<!-- /.row -->	
@stop