@extends('app')

@section('content')
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading"><strong>Edit Map: {{ $map->description }}</strong></div>
				<div class="panel-body">	
					<form method="POST" action="/maps/{{ $map->id }}">
						<input type="hidden" name="_method" value="PATCH">
						<div class="form-group">
							<h4><small><strong>Description</strong></small></h4>
							<input type="text" name="description" class="form-control" value="{{ $map->description }}"></input>
						</div>

						<div class="form-group">
							<h4><small><strong>Version</strong></small></h4>
							<input type="text" name="version" class="form-control" value="{{ $map->version }}"></input>
						</div>

						<div class="form-group">
							<button type="submit" class="btn btn-primary"><strong>Update Node</strong></button>
							<a class="btn btn-danger btn-close" href="{{ URL::previous() }}"><strong>Cancel</strong></a>
						</div>

						<input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
					</form>
				</div>
				<!-- /.panel-body -->
			</div>
			<!-- /.panel panel-default -->
		</div>
		<!-- /.col-md-10 col-md-offset-1 (outer) -->
	</div>
	<!-- /.row -->
@stop