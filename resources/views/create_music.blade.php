@extends('app')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">File Upload</div>
				<div class="panel-body">
					@if (count($errors) > 0)
						<div class="alert alert-danger">
							<strong>Whoops!</strong> There were some problems with your input.<br><br>
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif

					<!-- <form class="form-horizontal" role="form" method="POST" action="{{ url('/upload') }}" enctype="multipart/form-data"> -->
                		<input type="hidden" id="tokenval" name="_token" value="{{ csrf_token() }}">

						 <div id="drag-and-drop-zone" class="uploader">
				            <div>Drag &amp; Drop Images Here</div>
				            <div class="or">-or-</div>
				            <div class="browser">
				              <label>
				                <span>Click to open the file Browser</span>
				                <input type="file" name="files[]" multiple="multiple" title='Click to add Files'>
				              </label>
				            </div>
				          </div>
		
					<!-- </form> -->

					<div class="panel panel-default">
			            <div class="panel-heading">
			              <h3 class="panel-title">Debug</h3>
			            </div>
			            <div class="panel-body demo-panel-debug">
			              <ul id="demo-debug">
			              </ul>
			            </div>
			          </div>
			          <!-- /Debug box -->
			        </div>
			        <!-- / Left column -->

			        <div class="col-md-6">
			          <div class="panel panel-default">
			            <div class="panel-heading">
			              <h3 class="panel-title">Uploads</h3>
			            </div>
			            <div class="panel-body demo-panel-files" id='demo-files'>
			              <span class="demo-note">No Files have been selected/droped yet...</span>
			            </div>
			          </div>
			        </div>
			        <!-- / Right column -->
			      </div>

				</div>
			</div>
		</div>
	</div>
</div>
@endsection