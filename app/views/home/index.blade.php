@extends('home.master')

@section('content')

<h1>LeLivre Customer Login</h1>

<div class="row">
	<div class="span4 offset1">
		<div class="well">
			{{ Form::open(array('url' => 'login'))}}
@if($errors->any())
<div class="alert alert-error">
	<a href="#" class="close" data-dismiss="alert">&times;</a>
	{{ implode('', $errors-> all('<li class="error">:message</li>'))}}
</div>
@endif

{{ Form::label ('username' , 'Username:') }}
{{ Form::text('username','' )}}
{{ Form::label ('password' , 'Password:') }}
{{ Form::password('password','') }}
{{ Form::submit('Sign In', array('class' => 'btn btn-info')) }}
{{ Form::close() }}

<div align="center"><hr width = "60%"/>
            <div class="new-user"> <i>New User:  {{ HTML::link('register', 'Register', array('class'=> 'btn btn-primary') )}} </i></div>
            </div>			

		</div>
	</div>
</div>


@stop