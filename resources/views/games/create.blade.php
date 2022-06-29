@extends('layouts.app')

@section('content')

<h1>Add a game to your wishlist</h1>

<p>
	<a href="/games">See your wishlist</a>
</p>

<form method="post" action="/games/create">
	{{ csrf_field() }}

	<div>
		<label for="name">Name</label>
		<input type="text" id="name" name="name" placeholder="The name of a game" value="{{ old('name') }}" />
		@error('name')
		<p>{{ $message }}</p>
		@enderror
	</div>

	<div>
		<label for="price">Price</label>
		<input type="text" id="price" name="price" placeholder="The price of a game" value="{{ old('price') }}" />
		@error('price')
		<p>{{ $message }}</p>
		@enderror
	</div>

	<div>
		<label for="release_date">Release Date</label>
		<input type="text" id="release_date" name="release_date" placeholder="The release date of a game" value="{{ old('release_date') }}" />
		@error('release_date')
		<p>{{ $message }}</p>
		@enderror
	</div>

	<button type="submit">Add a game</button>
</form>

@endsection