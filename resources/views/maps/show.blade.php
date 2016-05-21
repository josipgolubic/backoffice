@extends('app')
	
@section('content')
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading"><strong>Map Overview</strong></div>
				<div class="panel-body">
					<h3>Map: <small>{{ $map->description }}</strong></small></h3>

					<hr>

					<h5><strong>Map Version:</strong> {{ $map->version }}</h5>

					@if (count($map->nodes) > 0)
						<h5><strong>Map Nodes:</strong></h5>
						<ul class="list-group">
							@foreach ($map->nodes as $node)
								<a class="list-group-item" href="/nodes/{{ $node->id }}">{{ $node->description }}</a>
							@endforeach
						</ul>

					@else
						<h5 class="text-danger"><strong>There are no nodes available for this map!</strong></h5>

					@endif 

					<button type="button" class="btn btn-default btn-block" data-toggle="collapse" data-target="#addnode"><strong>Add New Node</strong></button>
				  	<div id="addnode" class="collapse">
				  		@include('../nodes/index')
					</div>
					<!-- /.collapse id=addnode -->

					<button type="button" class="btn btn-default btn-block" data-toggle="collapse" data-target="#addstep"><strong>Add Step Between Nodes</strong></button>
				  	<div id="addstep" class="collapse">
				  		<div class="col-md-10 col-md-offset-1">
				  			@if (count($map->nodes) > 1)
								<h3>Add a New Step</h3>

								<form method="POST" action="/steps">
									<div class="form-group">
										<h4><small><strong>Start Node:</strong></small></h4>
										<select class="form-control" name="start_node">
											@foreach ($map->nodes as $node)
												<option value="{{ $node->id }}">{{ $node->description }}</option>
											@endforeach	
										</select>
									</div>

									<div class="form-group">
										<h4><small><strong>End Node:</strong></small></h4>
										<select class="form-control" name="end_node">
											@foreach ($map->nodes as $node)
												<option value="{{ $node->id }}">{{ $node->description }}</option>
											@endforeach	
										</select>
									</div>

									<div class="form-group">
										<h4><small><strong>Path Cost:</strong></small></h4>
										<input type="text" name="path_cost" class="form-control"></input>
									</div>

									<div class="form-group">
										<h4><small><strong>Step Order:</strong></small></h4>
										<input type="text" name="order" class="form-control"></input>
									</div>

									<div class="form-group">
										<h4><small><strong>Step Image:</strong></small></h4>
										<input type="text" name="image" class="form-control" disabled></input>
									</div>

									<div class="form-group">
										<h4><small><strong>Step Description:</strong></small></h4>
										<textarea name="description" class="form-control" rows="4" id="comment"></textarea>
									</div>
									
									<div class="form-group">
										<button type="submit" class="btn btn-primary">Add Step</button>
										<button type="button" class="btn btn-danger btn-close" data-toggle="collapse" data-target="#addstep"><strong>Cancel</strong></button>
									</div>

									<input type="hidden" name="map_id" value="{{ $map->id }}"></input>
									<input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
								</form>

								@else
									@if (!count($map->nodes))
										<h5 class="text-danger"><strong>There are no nodes in this map.</strong></h5>
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
					<a class="btn btn-info btn-block" href="/maps/{{ $map->id }}/edit"><strong>Edit</strong></a>

					<hr>

					<form method="POST" action="/maps/{{ $map->id }}">
					    <input type="hidden" name="_method" value="DELETE">
						<button type="submit" class="btn btn-danger btn-block"><strong>Delete</strong></button>
						<input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
					</form>

					<hr>

					<a class="btn btn-default btn-block" href="/maps"><strong>Go Back</strong></a>
				</div>
				<!-- /.panel-body -->
			</div>
			<!-- /.panel panel-default -->
		</div>
		<!-- /.col-md-8 col-md-offset-2 (outer) -->
	</div>
	<!-- /.row -->	
@stop