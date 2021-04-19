@extends('layouts.master')

@section('content')

<h2>Maak je item</h2>

<ul>
	@if ($errors->any())
	@foreach ($errors->all() as $error)
		<li> {{$error}} </li>
	@endforeach
	@endif
</ul>

<form method="post" action="{{ route('shop.store') }}" enctype='multipart/form-data'>
	@csrf

	<div class="mb-3">
		<label for="product_title" class="form-label">Naam product</label>
		<input type="text" class="form-control" id="product_title" name="product_title">
	</div>

	<div class="form-floating mb-3">
		<textarea class="form-control" placeholder="Leave a comment here" id="product_desc" style="height: 100px" name="product_desc"></textarea>
		<label for="product_desc">Product beschrijving</label>
	</div>

	<div class="mb-3">
		<label for="product_price" class="form-label">Product prijs</label>
		<input type="number" class="form-control" id="product_price" name="product_price">
	</div>

	<div class="mb-3">
		<label for="product_cat" class="form-label">Product categorie</label>
		<input type="text" class="form-control" id="product_cat" name="product_cat">
	</div>

	<div class="mb-3">
		<label for="product_pic" class="form-label">Product afbeelding</label>
		<input class="form-control" type="file" id="product_pic" name="product_pic">
	</div>
	<button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection