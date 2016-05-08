@extends('app')

@section('content')
<div class="container">
<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<div class="panel-body">
				<button type="button" class="btn btn-info">Add New Node</button>
				<a class="btn btn-danger btn-close" href="{{ route('deleteMap') }}">Cancel</a>
					<h3>Add a New Node</h3>

					<form method="POST" action="/node/add">
						<div class="form-group">
							<h4><small>Node ID:</small></h4>
							<input type="text" name="NodeID" class="form-control"></input>
						</div>

						<div class="form-group">
							<h4><small>Map:</small></h4>
							<select class="form-control" name="Map">
								@foreach ($maps as $map)
									<option value="{{ $map->id }}">{{ $map->KEY_MAP_DESCRIPTION }}</option>
								@endforeach	
							</select>
						</div>

						<div class="form-group">
							<h4><small>Building:</small></h4>
							<input type="text" name="BuildingDescription" class="form-control"></input>
						</div>

						<div class="form-group">
							<h4><small>Floor Description</small></h4>
							<input type="text" name="FloorDescription" class="form-control"></input>
							<h4><small>Floor Level</small></h4>
							<input type="text" name="FloorLevel" class="form-control"></input>
							<h4><small>Floor Length</small></h4>
							<input type="text" name="FloorLength" class="form-control"></input>
							<h4><small>Floor Width</small></h4>
							<input type="text" name="FloorWidth" class="form-control"></input>
						</div>

						<div class="form-group">
							<h4><small>Node Type:</small></h4>
							<select class="form-control" name="NodeType">
								<option value="qrcode">QRCode</option>
							  	<option value="stairs">Stairs</option>
							  	<option value="elevator">Elevator</option>
							</select>
							<h4><small>Node description:</small></h4>
							<input type="text" name="NodeDescription" class="form-control"></input>
							<h4><small>Node X Coordinate:</small></h4>
							<input type="text" name="NodeX" class="form-control"></input>
							<h4><small>Node Y Coordinate:</small></h4>
							<input type="text" name="NodeY" class="form-control"></input>
						</div>
						
						<div class="form-group">
							<button type="submit" class="btn btn-primary">Add Node</button>
							<a class="btn btn-danger btn-close" href="{{ route('home') }}">Cancel</a>
						</div>

						<input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
					</form>
				</div>
			</div>
		</div>
</div>