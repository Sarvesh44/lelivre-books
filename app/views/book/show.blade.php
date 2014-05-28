@extends('home.master')

@section('content')
<h3>Authors :</h3>
	@foreach ($book->authors as $author) 
				{{ $author->auth_firstname }} {{ $author->auth_lastname }}<br/>

	@endforeach

@stop