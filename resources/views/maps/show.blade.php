@extends('app')
	
@section('content')
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Map Overview</div>
				<div class="panel-body">
					<h2>Map: {{ $map->description }}</h2>
					<h3>Map Version: {{ $map->version }}</h3>
					<h3>Map Nodes:</h3>
					<ul>
						@foreach ($map->nodes as $node)
							<li>{{ $node->description }}</li>
						@endforeach
					</ul>
					<a class="btn btn-warning btn-block" href="edit/{{ $map->id }}">Edit</a>
					<form method="POST" action="../deletemap/{{ $map->id }}">
					    <input type="hidden" name="_method" value="DELETE">
						<button type="submit" class="btn btn-danger btn-block">Delete</button>
						<input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
					</form>
					<a class="btn btn-info btn-block" href="{{ url('/maps') }}">Go Back</a>
				</div>
				<!-- /.panel-body -->
			</div>
			<!-- /.panel panel-default -->
		</div>
		<!-- /.col-md-10 col-md-offset-1 (outer) -->
	</div>
	<!-- /.row -->	
@stop