@extends('app')
	
@section('content')
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Map Overview</div>
				<div class="panel-body">

					<hr>

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
						<h5 class="text-danger">There are no nodes available for this map!</h5>

					@endif 

					<hr>

					<a class="btn btn-info btn-block" href="edit/{{ $map->id }}">Edit</a>

					<hr>

					<form method="POST" action="../deletemap/{{ $map->id }}">
					    <input type="hidden" name="_method" value="DELETE">
						<button type="submit" class="btn btn-danger btn-block">Delete</button>
						<input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
					</form>
					
					<hr>

					<a class="btn btn-default btn-block" href="{{ url('/maps') }}">Go Back</a>
				</div>
				<!-- /.panel-body -->
			</div>
			<!-- /.panel panel-default -->
		</div>
		<!-- /.col-md-10 col-md-offset-1 (outer) -->
	</div>
	<!-- /.row -->	
@stop