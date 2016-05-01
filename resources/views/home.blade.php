@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Add New</div>

				<div class="panel-body col-md-10 col-md-offset-1">
					<a href="{{ URL::route('map') }}">Map</a>
					<a href="{{ URL::route('building') }}">Building</a>
					<a href="{{ URL::route('floor') }}">Floor</a>
					<a href="{{ URL::route('position') }}">Position</a>
					<a href="{{ URL::route('neighbor') }}">Neighbor</a>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
