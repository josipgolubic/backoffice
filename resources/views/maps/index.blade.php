@extends('app')
	
@section('content')
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading"><strong>Existing Maps</strong></div>
				<div class="panel-body">
					<ul class="list-group">
						@foreach ($maps as $map)
		    				<a href="/maps/{{ $map->id }}" class="list-group-item"> 
		   					    <h4 class="list-group-item-heading">{{ $map->description }}</h4>
	   							<p class="list-group-item-text">Version: {{ $map->version }}</p>
	    					</a>
						@endforeach
					</ul>
				
					<button type="button" class="btn btn-default btn-block" data-toggle="collapse" data-target="#addmap"><strong>Add New Map</strong></button>
	  				@if (!count($errors))
	  					<div id="addmap" class="collapse">

	  				@else
	  					<div id="addmap" class="collapse in">
	  				@endif
						<div class="col-md-10 col-md-offset-1">
							<h3>Add a New Map</h3>

							<form method="POST" action="/maps">
								<div class="form-group">
									<h4><small><strong>Description</strong></small></h4>
									<input type="text" name="description" class="form-control" value="{{ old('description') }}"></input>
								</div>

								<div class="form-group">
									<h4><small><strong>Version</strong></small></h4>
									<input type="text" name="version" class="form-control" value="{{ old('version') }}"></input>
								</div>

								<div class="form-group">
									<button type="submit" class="btn btn-primary"><strong>Add Map</strong></button>
									<button type="button" class="btn btn-danger btn-close" data-toggle="collapse" data-target="#addmap"><strong>Cancel</strong></button>
								</div>

								<input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
							</form>
							@if (count($errors))
								<hr>
								<h4 class="text-danger">There are some errors with the input!</h4>
								<ul class="list-group">
									@foreach ($errors->all() as $error)
										<li class="list-group-item list-group-item-danger"><strong>{{ $error }}</strong></li>
									@endforeach
								</ul>
							@endif
	  					</div>
	  					<!-- /.col-md-10 col-md-offset-1 (inner) -->
					</div>
					<!-- /.collapse id=addmap -->
				</div>
				<!-- /.panel-body -->
			</div>
			<!-- /.panel panel-default -->
		</div>
		<!-- /.col-md-8 col-md-offset-2 (outer) -->
	</div>
	<!-- /.row -->
@stop