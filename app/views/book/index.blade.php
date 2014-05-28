@extends('home.master')

@section('content')

@if($books->count())
	<table class="table table-striped table-bordered able-hovered">
		<thead>
			<tr>
				<th>ISBN</th>
				<th>Title</th>
				<th>Publication Year</th>
				<th>Edition</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($books as $book)
				<tr>
					<td>{{ $book-> isbn }}</td>
					<td>{{ $book-> title }}</td>
					<td>{{ $book-> pub_year }}</td>
					<td>{{ $book-> edition }}</td>
					<td>{{ link_to_route('author.show', 'Show with Authors', array($book->isbn), array('class' => 'btn btn-primary')) }}</td>
					
				</tr>

			@endforeach

		</tbody>

		</table>
{{ $books->links() }}
@else
	There are no books
@endif


@stop