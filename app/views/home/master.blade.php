<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title> {{ $title }} </title>
	<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/css/bootstrap-combined.min.css" rel="stylesheet" >
  <link href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet" >
	<style type="text/css">
		table form{margin-bottom: 0px;}
		form ul {margin-left: 0; list-style: none;}
		.error {color: red; font-style: italic;}


	</style>
	{{ HTML::style('css/lelivre-commons.css') }}


  <link href="{{ url('dist/css/selectize.bootstrap3.css') }}" rel="stylesheet">

  <script type="text/javascript" src='//code.jquery.com/jquery-1.10.2.min.js'></script>
  <script type="text/javascript" src='{{ url("dist/js/standalone/selectize.min.js") }}'></script>

  <script type="text/javascript" src='{{ url("js/search-main.js") }}'></script>
</head>
<body>
<script type="text/javascript">
    var root = '{{url("/")}}';
</script>
	<div id="container">
    	<div id="content">
    	<div class = site-header>
         <div><img class="logo" src = 'images/lelivre-logo.png'>
          <span align="center" class="header" >  LELIVRE ONLINE BOOK STORE </span></div></div>
    </div>

{{Form::open(array('url' => 'api/search'))}}
        {{ Form::text ('q', null, array('placeholder' => 'Search Books...'))}}
{{ Form::submit('search') }}
{{ Form::close() }}
    		@yield('content')
    	</div>

<script>
  $(document).ready(function(){
      $('#searchbox').selectize();
  });
</script>


<div class="footer">
	<br/>Lelivre Online Book Store copyright &copy; 2014
</div>
</body>
</html>
