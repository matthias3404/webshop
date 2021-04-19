@extends('layouts.master')

@section('content')

<div class="d-flex justify-content-between align-items-center">
	<h2>Overzicht producten</h2>
	<a href="{{ route('shop.create') }}" class="mybtn">Voeg nieuw product toe</a>
</div>

<div class="products">

	@forelse ($products as $product)

	<div class="product-item">
		<img src="{{ url( '../storage/app/public/' . $product->product_pic ) }}" alt="Product image">
		<div class="content">
			<h4>{{ $product->product_title }}</h4>
			<p class="price">€{{ $product->product_price }}</p>
			<p>{{ $product->product_desc }}</p>
		</div>
	</div>

	@empty

	<p>Er zijn nog geen producten...</p>

	@endforelse

</div>

@endsection