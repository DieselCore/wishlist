@extends('layouts.app')

@section('content')

<h1>Edit {{ $game->name }}</h1>

<p>
	<a href="/games">See your wishlist</a>
</p>

<form method="post" action="/games/{{ $game->id }}/update">
	{{ csrf_field() }}
	@method('PUT')

	<div>
		<label for="name">Name</label>
		<input type="text" id="name" name="name" placeholder="The name of a game" value="{{ old('name', $game->name) }}" />
		@error('name')
		<p>{{ $message }}</p>
		@enderror
	</div>

	<div>
		<label for="price">Price</label>
		<input type="text" id="price" name="price" placeholder="The price of a game" value="{{ old('price', $game->price) }}" />
		@error('price')
		<p>{{ $message }}</p>
		@enderror
	</div>

	<div>
		<label for="release_date">Release Date</label>
		<input type="text" id="release_date" name="release_date" placeholder="The release date of a game" value="{{ old('release_date', $game->release_date) }}" />
		@error('release_date')
		<p>{{ $message }}</p>
		@enderror
	</div>

	<button type="submit">Save</button>
</form>

@endsection