@extends('app')
	
@section('content')
	<h1>Existing Maps</h1>

	@foreach($maps as $map)
		$map->description;
	@endforeach
@stop