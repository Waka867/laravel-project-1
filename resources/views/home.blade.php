@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><strong>{{ $user->username }}</strong></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
			    {{ session('status') }}
                        </div>
                    @endif


		    <p><strong>Name:</strong> {{ $user->name }}</p>
		    <p><strong>Username:</strong> {{ $user->username }}</p>
			<br>
			<br>
		    <p><strong>User Data Object:</strong> {{ $user }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
