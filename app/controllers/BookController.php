<?php

class BookController extends BaseController {

	protected $books;

	public function __construct(Book $books) {
		$this->book = $books;
	}
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$books = $this->book->all();
		return View::make('book.index', compact('books'))
			->with('title','List of Books');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($isbn)
	{
		echo 'in book';
		$authors = Book::find($isbn)->authors;
		return View::make('book.show', compact('authors'));
	}


}