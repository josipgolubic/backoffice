@extends('layout')

@section('content')
	@foreach ($users as $user)
		<div>
			{{ $user->name; }}
		</div>
	@endforeach
@stop