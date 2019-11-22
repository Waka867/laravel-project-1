@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Profile Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
			    {{ session('status') }}
                        </div>
                    @endif

		    <p>You are logged in!</p>
		    <p><strong>Name:</strong> {{ Auth::user()->name }}</p>
		    <p><strong>Username:</strong> {{ Auth::user()->username }}</p>
			<br>
			<br>
		    <p><strong>User Data Object:</strong> {{ Auth::user() }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
