@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<div class="panel-body">
				<button type="button" class="btn btn-info btn-block" data-toggle="collapse" data-target="#addstep">Add New Step</button>
			  	<div id="addstep" class="collapse">
					<h3>Add a New Step</h3>

					<form method="POST" action="/step/add">
						<div class="form-group">
							<h4><small>Start Node:</small></h4>
							<select class="form-control" name="StartNode">
								@foreach ($nodes as $node)
									<option value="{{ $node->id }}">{{ $node->KEY_NODE_DESCRIPTION }}</option>
								@endforeach	
							</select>
						</div>

						<div class="form-group">
							<h4><small>End Node:</small></h4>
							<select class="form-control" name="EndNode">
								@foreach ($nodes as $node)
									<option value="{{ $node->id }}">{{ $node->KEY_NODE_DESCRIPTION }}</option>
								@endforeach	
							</select>
						</div>

						<div class="form-group">
							<h4><small>Path Cost:</small></h4>
							<input type="text" name="PathCost" class="form-control"></input>
						</div>

						<div class="form-group">
							<h4><small>Step Order:</small></h4>
							<input type="text" name="StepOrder" class="form-control"></input>
						</div>

						<div class="form-group">
							<h4><small>Step Image:</small></h4>
							<input type="text" name="StepImage" class="form-control disabled"></input>
						</div>

						<div class="form-group">
							<h4><small>Step Description:</small></h4>
							<input type="text" name="StepDescription" class="form-control"></input>
						</div>
						
						<div class="form-group">
							<button type="submit" class="btn btn-primary">Add Step</button>
							<a class="btn btn-danger btn-close" href="{{ route('home') }}">Cancel</a>
						</div>

						<input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@stop
