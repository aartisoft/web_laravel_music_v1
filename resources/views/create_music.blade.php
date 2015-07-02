@extends('app')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-sm-2" style="background-color:lightsteelblue;">.col-sm-4</div>
		<div class="col-sm-10" style="background-color:lightsteelblue; ">
			<div class="row" style="padding:10px">
				<div class="col-sm-2" style="background-color:lightsteelblue;">
					<div class="panel panel-default">
						<div class="panel-heading">File Upload</div>
						<div class="panel-body">
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
						</div>
					</div>
				</div>

				<div class="col-sm-8" style="background-color:lightsteelblue;">
					<div class="panel panel-default">
					            <div class="panel-heading">
					              <h3 class="panel-title">Uploads</h3>
					            </div>
					            <div class="panel-body demo-panel-files" id='demo-files'>
					              <span class="demo-note">No Files have been selected/droped yet...</span>
					            </div>
					          </div>
				</div>

				<div class="col-sm-2" style="background-color:lightsteelblue;">
					<div class="panel panel-default">
			            <div class="panel-heading">
			              <h3 class="panel-title">Debug</h3>
			            </div>
			            <div class="panel-body demo-panel-debug">
			              <ul id="demo-debug">
			              </ul>
			            </div>
					</div>
				</div>


			</div>

			</div>
		</div>
	</div>

</div>
@endsection