@extends('app')
	
@section('content')
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading"><strong>Map Overview</strong></div>
				<div class="panel-body">
					<h3>Map: <small>{{ $map->description }}</small></h3>

					<hr>

					<h5>Map Version: {{ $map->version }}</h5>

					@if (count($map->nodes) > 0)
						<h5>Map Nodes:</h5>
						<ul class="list-group">
							@foreach ($map->nodes as $node)
								<li class="list-group-item">{{ $node->description }}</li>
							@endforeach
						</ul>

					@else
						<h5 class="text-danger"><strong>There are no nodes available for this map!</strong></h5>

					@endif 

					<button type="button" class="btn btn-default btn-block" data-toggle="collapse" data-target="#addnode"><strong>Add New Node</strong></button>
				  	<div id="addnode" class="collapse">
				  		@yield('node_form');
					</div>
					<!-- /.collapse id=addnode -->
				</div>
				<!-- /.panel-body -->

				<hr>

				<div class="panel-body">
					<a class="btn btn-info btn-block" href="edit/{{ $map->id }}"><strong>Edit</strong></a>

					<hr>

					<form method="POST" action="../deletemap/{{ $map->id }}">
					    <input type="hidden" name="_method" value="DELETE">
						<button type="submit" class="btn btn-danger btn-block"><strong>Delete</strong></button>
						<input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
					</form>

					<hr>

					<a class="btn btn-default btn-block" href="{{ url('/maps') }}"><strong>Go Back</strong></a>
				</div>
				<!-- /.panel-body -->
			</div>
			<!-- /.panel panel-default -->
		</div>
		<!-- /.col-md-10 col-md-offset-1 (outer) -->
	</div>
	<!-- /.row -->	
@stop