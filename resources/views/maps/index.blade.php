@extends('app')
	
@section('content')
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Existing Maps</div>
				<div class="panel-body">
					@foreach ($maps as $map)
						<ul class="list-inline">
		    				<a href="/maps/{{ $map->id }}" class="list-group-item"> 
		   					    <h4 class="list-group-item-heading">{{ $map->description }}</h4>
	   							<p class="list-group-item-text">Version: {{ $map->version }}</p>
	    					</a>
	    				</ul>
					@endforeach
				
					<button type="button" class="btn btn-default btn-block" data-toggle="collapse" data-target="#addmap"><strong>Add New Map</strong></button>
	  				<div id="addmap" class="collapse">
						<div class="col-md-10 col-md-offset-1">
							<h3>Add a New Map</h3>

							<form method="POST" action="/map/add">
								<div class="form-group">
									<h4><small><strong>Description</strong></small></h4>
									<input type="text" name="map_description" class="form-control"></input>
								</div>

								<div class="form-group">
									<h4><small><strong>Version</strong></small></h4>
									<input type="text" name="map_version" class="form-control"></input>
								</div>

								<div class="form-group">
									<button type="submit" class="btn btn-primary"><strong>Add Map</strong></button>
									<button type="button" class="btn btn-danger btn-close" data-toggle="collapse" data-target="#addmap"><strong>Cancel</strong></button>
								</div>

								<input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
							</form>

	  					</div>
	  					<!-- /.col-md-10 col-md-offset-1 (inner) -->
					</div>
					<!-- /.collapse id=addmap -->
				</div>
				<!-- /.panel-body -->
			</div>
			<!-- /.panel panel-default -->
		</div>
		<!-- /.col-md-10 col-md-offset-1 (outer) -->
	</div>
	<!-- /.row -->
@stop