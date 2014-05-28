@extends('home.master')

@section('content')

<h2>Not Happy with Results!! Try out Advanced Search .. </h2>

{{ Form::open(array('url' => 'api/advanced-search'))}}

<ul>
	<li>
		{{ Form::label ('byname' , 'By Book Name:') }}
		{{ Form::checkbox('byname', 'byname') }}
		{{ Form::text('searchbyname','' )}}
	</li>
	<li>
		{{ Form::label ('bygenre' , 'By Book Genre:') }}
		{{ Form::checkbox('bygenre', 'bygenre') }}
		{{ Form::text('searchbygenre','' )}}
	</li>
	<li>
		{{ Form::label ('byauthor' , 'By Book Author:') }}
		{{ Form::checkbox('byauthor', 'byauthor') }}
		{{ Form::text('searchbyauthor','' )}}
	</li>
	<li>
		{{ Form::label ('bypubhouse' , 'By Book Publisher:') }}
		{{ Form::checkbox('bypubhouse', 'bypubhouse') }}
		{{ Form::text('searchbypubhouse','' )}}
	</li>
	<li>
		{{ Form::label ('bytype' , 'By Book Type:') }}<br/>
		{{ Form::label ('byebook' , 'Ebooks:') }}
		{{ Form::checkbox('byebook', 'byebook') }}
		{{ Form::label ('byebook' , 'Hardback:') }}
		{{ Form::checkbox('byehp', 'byehp') }}
		{{ Form::label ('byebook' , 'Softback:') }}
		{{ Form::checkbox('byesp', 'byesp') }}
	</li>
	<li>
		{{ Form::label ('byprice' , 'By Book Price:') }}<br/>
		{{ Form::label ('lessthan100' , 'Less than $100:') }}
		{{ Form::checkbox('lessthan100', 'lessthan100') }}
		{{ Form::label ('bet100200' , 'Between $100 and $200:') }}
		{{ Form::checkbox('bet100200', 'bet100200') }}
		{{ Form::label ('morethan200' , 'More than $200:') }}
		{{ Form::checkbox('morethan200', 'morethan200') }}
		
	</li>

	<li>
		{{ Form::submit('Search', array('class' => 'btn btn-info')) }}
		
	</li>
</ul>

<br/><br/><br/><br/><br/>


{{ Form::close() }}

@if($data != null)
<h3>Search fetched {{count($data)}} Results.</h3><br/>
@foreach($data as $d)

<!-- isbn value: {{ $d['isbn']}} -->

Click here to go to book : <a href='{{ $d['url']}}'>{{ $d['title']}} - {{ $d['edition']}} Edition</a>
<br/>
@endforeach



@else 
No Books Found
@endif





@stop