@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
	<div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="card">
		<div class="card-header">		
			<h3>Add New Post</h3>	
		</div>
                <form action="/p" enctype="multipart/form-data" method="post" class="card-body">
			<div class="form-group row">
			    <label for="name" class="col-md-4 col-form-label text-md-right">Post Caption</label>

			    <div class="col-md-6">
				<input id="name" type="text" class="form-control{{ $errors->has('caption') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

				@error('name')
				    <span class="invalid-feedback" role="alert">
					<strong>{{ $message }}</strong>
				    </span>
				@enderror
			    </div>
			</div>
			<div class="form-group row">
			    	<label for="image" class="col-md-4 col-form-label text-md-right">Post Image</label>
				<input type="file", class="form-control-file col-md-8" id="image" name="image">
				@error('image')
				    <span class="invalid-feedback" role="alert">
					<strong>{{ $message }}</strong>
				    </span>
				@enderror
			</div>
			<div c;ass="row pt-4">
				<button style="float: right;">Submit Post</button>
			</div>
                </form>
            </div>
        </div>
	<div class="col-md-2"></div>
    </div>
</div>
@endsection
