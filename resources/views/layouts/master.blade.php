<!doctype html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

	{{-- Custom CSS --}}
	<link rel="stylesheet" href="{{url('/assets/css/style.css')}}">

	{{-- Font Awesome --}}
	<script src="https://kit.fontawesome.com/d05da3d752.js" crossorigin="anonymous"></script>

	<title>Webshop</title>
</head>
<body>
	<header>
		<header class="p-3 bg-dark text-white">
			<div class="container">
				<div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
					<a href="{{ route('pages.index') }}" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
						<h1>Webshop</h1>
					</a>

					<ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
						<li><a href="{{ route('pages.index') }}" class="nav-link @if(Request::is('/')) active @endif px-2">Home</a></li>
						<li><a href="#" class="nav-link @if(Request::is('shop')) active @endif px-2">Shop</a></li>
						<li><a href="#" class="nav-link @if(Request::is('offers')) active @endif px-2">Offers</a></li>
						<li><a href="{{ route('pages.about') }}" class="nav-link @if(Request::is('about')) active @endif px-2">About</a></li>
						<li><a href="{{ route('pages.contact') }}" class="nav-link @if(Request::is('contact')) active @endif px-2">Contact</a></li>
					</ul>

					<form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
						<input type="search" class="form-control form-control-dark" placeholder="Search...">
					</form>

					<div class="text-end">
						<a href="{{ route('user.login') }}" class="btn btn-outline-light me-2">Login</a>
						<a href="{{ route('user.signup') }}" class="btn btn-warning">Sign-up</a>
					</div>
				</div>
			</div>
		</header>
	</header>
	<main>
		<div class="container">
			<div class="content">
				@yield('content')
			</div>
		</div>
	</main>
	<footer>
		<div class="container">
			<div class="info">
				<div class="row">
					<div class="col-md">
						<h3>Adresgegevens</h3>
						<p>Wegstraat 38b</p>
						<p>7239 AZ Nijverheijden</p>
					</div>
					<div class="col-md">
						<h3>Privacy</h3>
						<p>Altijd en overal privacy</p>
						<p>Don't be afraid</p>
					</div>
					<div class="col-md">
						<h3>Social</h3>
						<div class="icons">
							<a href="#">
								<i class="fab fa-facebook"></i>
							</a>
							<a href="#">
								<i class="fab fa-instagram"></i>
							</a>
							<a href="#">
								<i class="fab fa-linkedin-in"></i>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>


	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>