@extends('layouts.master')

@section('content')

<h2>Login</h2>

<form action="{{ route('user.getin') }}" method="post">
	@csrf
	<div class="mb-3">
		@error('emailInput') <span class="text-danger">{{ $message }}</span> @enderror
		<label for="emailInput" class="form-label">Email address</label>
		<input type="email" class="form-control" id="emailInput" aria-describedby="emailHelp" name="emailInput">
	</div>
	<div class="mb-3">
		@error('passwordInput') <span class="text-danger">{{ $message }}</span> @enderror
		<label for="passwordInput" class="form-label">Password</label>
		<input type="password" class="form-control" id="passwordInput" name="passwordInput">
	</div>
	<button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection