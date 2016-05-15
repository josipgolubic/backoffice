@extends('app')
	
@section('content')
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading"><strong>Map Overview</strong></div>
				<div class="panel-body">
					<h3>Map: <small>{{ $map->description }}</strong></small></h3>

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
						<h5 class="text-danger"><strong>There are no nodes available for this map!</strong></h5>

					@endif 

					<button type="button" class="btn btn-default btn-block" data-toggle="collapse" data-target="#addnode"><strong>Add New Node</strong></button>
				  	<div id="addnode" class="collapse">
				  		<div class="col-md-10 col-md-offset-1">
							<h3>Add a New Node</h3>

							<form method="POST" action="/nodes">
								<div class="form-group">
									<h4><small><strong>Description</strong></strong></small></h4>
									<input type="text" name="description" class="form-control"></input>
								</div>

								<div class="form-group">
									<h4><small><strong>Building Description</strong></strong></small></h4>
									<input type="text" name="building_description" class="form-control"></input>
								</div>

								<div class="form-group">
									<h4><small><strong>Floor Description</strong></strong></small></h4>
									<input type="text" name="floor_description" class="form-control"></input>
								</div>

								<div class="form-group">
									<h4><small><strong>Floor Level</strong></strong></small></h4>
									<input type="text" name="floor_level" class="form-control"></input>
								</div>

								<div class="form-group">
									<h4><small><strong>Floor Length</strong></strong></small></h4>
									<input type="text" name="floor_length" class="form-control"></input>
								</div>

								<div class="form-group">
									<h4><small><strong>Floor Width</strong></strong></small></h4>
									<input type="text" name="floor_width" class="form-control"></input>
								</div>

								<div class="form-group">
									<h4><small><strong>Type</strong></strong></small></h4>
									<select class="form-control" name="type">
										<option value="qrcode">QRCode</option>
									  	<option value="stairs">Stairs</option>
									  	<option value="elevator">Elevator</option>
									</select>
								</div>

								<div class="form-group">
									<div class="row" id="coordinates_row">
										<h4><small><strong>Coordinates</strong></strong></small></h4>
										<div class="col-xs-2">
											<h4><small><strong>X:</strong></strong></small></h4>
											<input type="text" name="x_pos" class="form-control"></input>
										</div>
										<div class="col-xs-2">
											<h4><small><strong>Y:</strong></strong></small></h4>
											<input type="text" name="y_pos" class="form-control"></input>
										</div>
									</div>
								</div>
								
								<div class="form-group">
									<button type="submit" class="btn btn-primary"><strong>Add Node</strong></button>
									<button type="button" class="btn btn-danger btn-close" data-toggle="collapse" data-target="#addnode"><strong>Cancel</strong></button>
								</div>

								<input type="hidden" name="map_id" value="{{ $map->id }}"></input>
								<input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
							</form>
						</div>
						<!-- /.col-md-10 col-md-offset-1 -->
					</div>
					<!-- /.collapse id=addnode -->

					<button type="button" class="btn btn-info btn-block" data-toggle="collapse" data-target="#addstep">Add Step Between Nodes</button>
				  	<div id="addstep" class="collapse">
				  		<div class="col-md-10 col-md-offset-1">
				  			@if (count($map->nodes) > 1)
								<h3>Add a New Step</h3>

								<form method="POST" action="/step/add">
									<div class="form-group">
										<h4><small><strong>Start Node:</strong></small></h4>
										<select class="form-control" name="start_node">
											@foreach ($map->nodes as $node)
												<option value="{{ $node->id }}">{{ $node->start_node }}</option>
											@endforeach	
										</select>
									</div>

									<div class="form-group">
										<h4><small><strong>End Node:</strong></small></h4>
										<select class="form-control" name="end_node">
											@foreach ($map->nodes as $node)
												<option value="{{ $node->id }}">{{ $node->end_node }}</option>
											@endforeach	
										</select>
									</div>

									<div class="form-group">
										<h4><small><strong>Path Cost:</strong></small></h4>
										<input type="text" name="path_cost" class="form-control"></input>
									</div>

									<div class="form-group">
										<h4><small><strong>Step Order:</strong></small></h4>
										<input type="text" name="step_order" class="form-control"></input>
									</div>

									<div class="form-group">
										<h4><small><strong>Step Image:</strong></small></h4>
										<input type="text" name="step_image" class="form-control" disabled></input>
									</div>

									<div class="form-group">
										<h4><small><strong>Step Description:</strong></small></h4>
										<input type="text" name="step_description" class="form-control"></input>
									</div>
									
									<div class="form-group">
										<button type="submit" class="btn btn-primary">Add Step</button>
										<button type="button" class="btn btn-danger btn-close" data-toggle="collapse" data-target="#addstep"><strong>Cancel</strong></button>
									</div>

									<input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
								</form>

								@else
									@if (count($map->nodes) == 0)
										<h5 class="text-danger"><strong>There are 0 nodes in this map.</strong></h5>
									@else
										<h5 class="text-danger"><strong>There is only 1 node in this map.</strong></h5>
									@endif

									<h5 class="text-danger"><strong>Please ensure that at least 2 nodes exist in this map before adding a step.</strong></h5>

								@endif 
						</div>
						<!-- /.col-md-10 col-md-offset-1 -->
					</div>
					<!-- /.collapse id=addstep -->
				</div>
				<!-- /.panel-body -->

				<hr>

				<div class="panel-body">
					<a class="btn btn-info btn-block" href="edit/{{ $map->id }}"><strong>Edit</strong></a>

					<hr>

					<form method="POST" action="../deletemap/{{ $map->id }}">
					    <input type="hidden" name="_method" value="DELETE">
						<button type="submit" class="btn btn-danger btn-block"><strong>Delete</strong></button>
						<input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
					</form>

					<hr>

					<a class="btn btn-default btn-block" href="{{ url('/maps') }}"><strong>Go Back</strong></a>
				</div>
				<!-- /.panel-body -->
			</div>
			<!-- /.panel panel-default -->
		</div>
		<!-- /.col-md-10 col-md-offset-1 (outer) -->
	</div>
	<!-- /.row -->	
@stop