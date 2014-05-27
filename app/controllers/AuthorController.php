<?php

class AuthorController extends BaseController {

	protected $authors;

	public function __construct(Author $authors) {
		$this->author = $authors;
	}
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
/*	public function index()
	{
		$authors = $this->author->all();
		return View::make('book.index', compact('books'))
			->with('title','List of Books');
	}
*/
	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($isbn)
	{
		echo 'nice : '.$isbn;
		//$authors = Book::find($isbn)->authors;
		$book = Book::where('isbn','=', $isbn)->first();
		
		
		
		return View::make('book.show', compact('book'))
			->with('title','List of Books with Author')
			->with('book', $book);
	}


}