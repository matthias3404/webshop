@extends('layouts.master')

@section('content')

<h2>Signup</h2>

<form action="{{ route('user.store') }}" method="post">
	@csrf
	<div class="mb-3">
		@error('firstNameInput') <span class="text-danger">{{ $message }}</span> @enderror
		<label for="firstNameInput" class="form-label">Firstname</label>
		<input type="text" class="form-control" id="firstNameInput" name="firstNameInput">
	</div>
	<div class="mb-3">
		@error('lastNameInput') <span class="text-danger">{{ $message }}</span> @enderror
		<label for="lastNameInput" class="form-label">Lastname</label>
		<input type="text" class="form-control" id="lastNameInput" name="lastNameInput">
	</div>
	<div class="mb-3">
		@error('userNameInput') <span class="text-danger">{{ $message }}</span> @enderror
		<label for="userNameInput" class="form-label">Username</label>
		<input type="text" class="form-control" id="userNameInput" name="userNameInput">
	</div>
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
	<div class="mb-3">
		@error('passwordRepeatInput') <span class="text-danger">{{ $message }}</span> @enderror
		<label for="passwordRepeatInput" class="form-label">Repeat your password</label>
		<input type="password" class="form-control" id="passwordRepeatInput" name="passwordRepeatInput">
	</div>
	<button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection

