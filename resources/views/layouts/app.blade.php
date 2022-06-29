<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>My Wishlist</title>
	<link rel="stylesheet" href="">
	@yield('css')
	@yield('header')
</head>
<body>
	<main>
		@if (session()->has('alert'))
		<p>
			{{ session()->get('alert') }}
		</p>
		@endif
		@yield('content')
	</main>
</body>
</html>