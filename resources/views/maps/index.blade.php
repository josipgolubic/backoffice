@extends('app')
	
@section('content')
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Existing Maps</div>
				<div class="panel-body">
					@foreach ($maps as $map)
						<ul class="list-inline">
	    					<a href="/map/{{ $map->id }}" class="list-group-item"> 
	    					    <h4 class="list-group-item-heading">{{ $map->description }}</h4>
      							<p class="list-group-item-text">Version: {{ $map->description }}</p>
	    					</a>
	    				</ul>
					@endforeach
				</div>
				<div class="panel-body">
					<button type="button" class="btn btn-info btn-block" data-toggle="collapse" data-target="#addmap">Add New Map</button>
  					<div id="addmap" class="collapse">
  						<div class="row">
							<div class="col-md-6 col-md-offset-3">
								<h3>Add a New Map</h3>

								<form method="POST" action="/map/add">
									<div class="form-group">
										<h4><small>Map version:</small></h4>
										<input type="text" name="mapVersion" class="form-control"></input>
										
									</div>
									<div class="form-group">
										<h4><small>Map description:</small></h4>
										<input type="text" name="mapDescription" class="form-control"></input>
									</div>

									<div class="form-group">
										<button type="submit" class="btn btn-primary">Add Map</button>
										<a class="btn btn-danger btn-close" href="{{ route('home') }}">Cancel</a>
									</div>

									<input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
								</form>
							</div>
						</div>
  					</div>
				</div>
			</div>
		</div>
	</div>
@stop