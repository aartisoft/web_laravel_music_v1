
@extends('app')

@section('content')
    <div class="container">
        <div class="well well-sm">Create Sub Category</div>
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

            <form class="form-horizontal" role="form" method="POST" action="{{ url('/create_sub') }}" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="form-group">
                    <label class="col-md-4 control-label">Name</label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-4 control-label">Select Type</label>
                    <div class="col-md-6">
                        <?php //print_r($categories); ?>
                        <select name="sub_category_name" class="form-control" data-style="btn-primary">
                        <?php foreach ($categories as $key => $value) { ?>
                           
                            <option class="lead" value="<?php echo  $value->id; ?>"><?php echo  $value->name; ?></option>
                        <?php } ?>    
                      </select>
                        <!-- <input type="text" class="form-control" name="sub_category_name" value="{{ old('sub_category_name') }}"> -->
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-4 control-label">Photo</label>
                    <div class="col-md-6">
                        <input type="file" class="form-control" name="image" value="{{ old('image') }}">
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-6 col-md-offset-4">
                        <button type="submit" class="btn btn-primary">
                            Save
                        </button>
                    </div>
                </div>
            </form>

        </div>
    </div>
@endsection