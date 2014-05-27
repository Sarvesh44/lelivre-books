@extends('home.master')

@section('content')

<h1>LeLivre Welcome	</h1>
<div class="span8 well">
	<h2>Hello {{ ucwords(Auth::user()-> username ) }}</h2>
	{{ HTML::link('logout','Logout')}}
</div>

@stop