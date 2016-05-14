@extends('app')
	
@section('content')
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Map Overview</div>
				<div class="panel-body">
					<h1>Map: {{ $map->description }}</h1>
					<h2>Map Version: {{ $map->version }}</h2>
				</div>
				<!-- /.panel-body -->
			</div>
			<!-- /.panel panel-default -->
		</div>
		<!-- /.col-md-10 col-md-offset-1 (outer) -->
	</div>
	<!-- /.row -->	
@stop