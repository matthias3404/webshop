@extends('layouts.master')

@section('content')

<h2>Signup</h2>

<form>
	<div class="mb-3">
		<label for="firstNameInput" class="form-label">Firstname</label>
		<input type="text" class="form-control" id="firstNameInput" name="firstNameInput">
	</div>
	<div class="mb-3">
		<label for="lastNameInput" class="form-label">Lastname</label>
		<input type="text" class="form-control" id="lastNameInput" name="lastNameInput">
	</div>
	<div class="mb-3">
		<label for="userNameInput" class="form-label">Username</label>
		<input type="text" class="form-control" id="userNameInput" name="userNameInput">
	</div>
	<div class="mb-3">
		<label for="emailInput" class="form-label">Email address</label>
		<input type="email" class="form-control" id="emailInput" aria-describedby="emailHelp" name="emailInput">
	</div>
	<div class="mb-3">
		<label for="exampleInputPassword1" class="form-label">Password</label>
		<input type="password" class="form-control" id="exampleInputPassword1">
	</div>
	<div class="mb-3">
		<label for="passwordRepeatInput" class="form-label">Repeat your password</label>
		<input type="password" class="form-control" id="passwordRepeatInput" name="passwordRepeatInput">
	</div>
	<button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection

