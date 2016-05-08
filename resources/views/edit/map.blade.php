@extends('layout')

@section('content')
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<h3>Edit Map: {{ $map->KEY_MAP_DESCRIPTION }}</h3>

			<form method="POST" action="/changemap/{{ $map->id }}">
			    <input type="hidden" name="_method" value="PATCH">
				<div class="form-group">
					<h4><small>Map version:</small></h4>
					<input type="text" name="MapVersion" class="form-control" value="{{ $map->KEY_MAP_VERSION }}"></input>
					
				</div>
				<div class="form-group">
					<h4><small>Map description:</small></h4>
					<input type="text" name="MapDescription" class="form-control" value="{{ $map->KEY_MAP_DESCRIPTION }}"></input>
				</div>

				<div class="form-group">
					<button type="submit" class="btn btn-primary">Save Changes</button>
					<a class="btn btn-danger btn-close" href="{{ route('home') }}">Cancel</a>
				</div>

				<input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
			</form>
		</div>
	</div>
@stop