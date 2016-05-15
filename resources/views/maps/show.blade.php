@extends('app')
	
@section('content')
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Map Overview</div>
				<div class="panel-body">

					<hr>

					<h3>Map: <small>{{ $map->description }}</small></h3>

					<hr>

					<h5>Map Version: {{ $map->version }}</h5>

					@if (count($map->nodes) > 0)
						<h5>Map Nodes:</h5>
						<ul class="list-group">
							@foreach ($map->nodes as $node)
								<li class="list-group-item">{{ $node->description }}</li>
							@endforeach
						</ul>

					@else
						<h5 class="text-danger">There are no nodes available for this map!</h5>

					@endif 

					<button type="button" class="btn btn-info btn-block" data-toggle="collapse" data-target="#addnode">Add New Node</button>
				  	<div id="addnode" class="collapse">
				  		<div class="col-md-10 col-md-offset-1">
							<h3>Add a New Node</h3>

							<form method="POST" action="/node/add">
								<div class="form-group">
									<h4><small>Building Description</h4></small>
									<input type="text" name="building_description" class="form-control"></input>
								</div>

								<div class="form-group">
									<h4><small>Floor Description</h4></small>
									<input type="text" name="floor_description" class="form-control"></input>
								</div>

								<div class="form-group">
									<h4><small>Floor Level</h4></small>
									<input type="text" name="floor_level" class="form-control"></input>
								</div>

								<div class="form-group">
									<h4><small>Floor Length</h4></small>
									<input type="text" name="floor_length" class="form-control"></input>
								</div>

								<div class="form-group">
									<h4><small>Floor Width</h4></small>
									<input type="text" name="floor_width" class="form-control"></input>
								</div>

								<div class="form-group">
									<h4><small>Type</h4></small>
									<select class="form-control" name="type">
										<option value="qrcode">QRCode</option>
									  	<option value="stairs">Stairs</option>
									  	<option value="elevator">Elevator</option>
									</select>
								</div>

								<div class="form-group">
									<h4><small>Description</h4></small>
									<input type="text" name="description" class="form-control"></input>
								</div>

								<div class="form-group">
									<h4><small>Coordinates</h4></small>
									<div class="row" id="coordinates_row">
										<div class="col-xs-2">
											<h4><small>X:</h4></small>
											<input type="text" name="x_pos" class="form-control"></input>
										</div>
										<div class="col-xs-2">
											<h4><small>Y:</h4></small>
											<input type="text" name="y_pos" class="form-control"></input>
										</div>
									</div>
								</div>
								
								<div class="form-group">
									<button type="submit" class="btn btn-primary">Add Node</button>
									<button type="button" class="btn btn-danger btn-close" data-toggle="collapse" data-target="#addnode">Cancel</button>
								</div>

								<input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
							</form>
						</div>
						<!-- /.col-md-10 col-md-offset-1 -->
					</div>
					<!-- /.collapse id=addnode -->
				</div>
				<!-- /.panel-body -->

				<hr>

				<div class="panel-body">
					<a class="btn btn-info btn-block" href="edit/{{ $map->id }}">Edit</a>

					<hr>

					<form method="POST" action="../deletemap/{{ $map->id }}">
					    <input type="hidden" name="_method" value="DELETE">
						<button type="submit" class="btn btn-danger btn-block">Delete</button>
						<input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
					</form>

					<hr>

					<a class="btn btn-default btn-block" href="{{ url('/maps') }}">Go Back</a>
				</div>
				<!-- /.panel-body -->
			</div>
			<!-- /.panel panel-default -->
		</div>
		<!-- /.col-md-10 col-md-offset-1 (outer) -->
	</div>
	<!-- /.row -->	
@stop