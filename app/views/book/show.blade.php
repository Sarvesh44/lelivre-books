@extends('home.master')

@section('content')

@foreach ($book->authors as $author) 
			{{ $author->auth_firstname }} {{ $author->auth_lastname }}

@endforeach

@stop