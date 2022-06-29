@extends('layouts.app')

@section('content')

<h1>A list of games on my wishlist</h1>

<p>
	<a href="/games/create">Add a game</a>
</p>

<ul>
	@if(!isset($games) || $games->isEmpty())
	<p>There are no games on your wishlist.</p>
	@else
	@foreach($games as $game)
	<li>
		<a href="/games/{{ $game->id }}/edit">{{ $game->name }}</a> &mdash; <a href="/games/{{ $game->id }}/delete">Remove</a>
	</li>
	@endforeach
	@endif
</ul>

@endsection