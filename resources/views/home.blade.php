@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Add New</div>
				<div class="panel-body">
					<a href="{{ URL::route('map') }}" class="btn btn-default btn-block">Map</a>
					<a href="{{ URL::route('building') }}" class="btn btn-default btn-block">Building</a>
					<a href="{{ URL::route('floor') }}" class="btn btn-default btn-block">Floor</a>
					<a href="{{ URL::route('position') }}" class="btn btn-default btn-block">Position</a>
					<a href="{{ URL::route('route') }}" class="btn btn-default btn-block">Route</a>
				</div>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Existing Maps</div>
				<div class="panel-body">
					@foreach ($maps as $map)
						<ul class="list-inline">
	    					<a href="/map/{{ $map->id }}" class="list-group-item"> {{ $map->KEY_MAP_DESCRIPTION }}</a>
	    					<a href="{{ URL::route('route') }}" class="btn btn-danger">Delete</a>
	    				</ul>
					@endforeach
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
