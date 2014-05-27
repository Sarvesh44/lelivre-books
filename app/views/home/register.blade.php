@extends('home.master')

@section('content')

<h1>LeLivre Customer Registration</h1>

{{ Form::open(array('url' => 'register'))}}
@if($errors->any())
<div class="alert alert-error">
	<a href="#" class="close" data-dismiss="alert">&times;</a>
	{{ implode('', $errors-> all('<li class="error">:message</li>'))}}
</div>
@endif
<ul>
	<li>
		{{ Form::label ('firstname' , 'Firstname:') }}
		{{ Form::text('firstname') }}

	</li>
	<li>
		{{ Form::label ('lastname' , 'Lastname:') }}
		{{ Form::text('lastname') }}
	</li>
	<li>
		{{ Form::label ('dob' , 'Date of Birth:') }}
		{{ Form::text('dob','') }}
	</li>
	<li>
		{{ Form::label ('email' , 'Email Address:') }}
		{{ Form::text('email','') }}
	</li>
	<li>
		{{ Form::label ('username' , 'Username:') }}
		{{ Form::text('username','') }}
	</li>
	<li>
		{{ Form::label ('password' , 'Password:') }}
		{{ Form::password('password','') }}
	</li>
	<li>
		{{ Form::label ('password_confirmation' , 'Confirm Password:') }}
		{{ Form::password('password_confirmation','') }}
	</li>
	<li>
		{{ Form::submit('Register', array('class' => 'btn btn-info')) }}
		{{ HTML::link('/','Cancel', array('class' => 'btn btn-danger')) }}
	</li>
</ul>
<div align="center"><hr width = "60%"/>
            <div class="new-user"> <i>Already Registered:  {{ HTML::link('/login', 'Sign In', array('class'=> 'btn btn-primary') )}} </i></div>
            </div>			

@stop