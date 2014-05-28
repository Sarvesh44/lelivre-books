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
		$books = Book::paginate(5);
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

	public function getDetails($isbn)
	{
		// echo 'in book bookDetails : '.$isbn;
		$book = Book::where('isbn','=',$isbn)->get(array('isbn','title', 'edition', 'pub_year'))->toArray();
		echo '<b>Title : </b>'.$book[0]['title'].'<br/>';
		echo '<b>Edition : </b>'.$book[0]['edition'].'<br/>';
		echo '<b>Publication Year : </b>'.$book[0]['pub_year'].'<br/><br/>';

		$authors = Book::find($isbn)->authors;
		//echo $authors;
		foreach ($authors as $author) {
			echo '<b>Author : </b>'.$author['auth_firstname'].' '.$author['auth_lastname'].'<br/>';
		}

		$publishers = Book::find($isbn)->publishers;
		foreach ($publishers as $publisher) {
			echo '<b>Publication House : </b>'.$publisher['name'].' '.$publisher['country'].'<br/>';
		}

		echo ' <br/> <br/><b>E Book Details :</b> <br/>';

		$spbook = Book::where('isbn','=',$isbn)->first();
		$ebook = $spbook->ebook;
		echo '<b>Price :</b> $'.$ebook->price.'<br/>';
		echo '<b>Quantity :</b>'.$ebook->quantity.'<br/>';

		echo ' <br/> <br/><b>Hardback Details :</b> <br/>';
		$hardback = $spbook->hardback;
		echo '<b>Price :</b> $'.$hardback->price.'<br/>';
		echo '<b>Quantity :</b>'.$hardback->quantity.'<br/>';

		echo ' <br/> <br/><b>Softback Details :</b> <br/>';
		$softback = $spbook->softback;
		echo '<b>Price :</b> $'.$softback->price.'<br/>';
		echo '<b>Quantity :</b>'.$softback->quantity.'<br/>';

		


/*
 Code for Reviews
*/

 		//$reviews = Book_Rating::where('isbn','=',$isbn);

 		$reviews = Book_Rating::where('isbn','=', $isbn)->get();
 		
 		
		$book_details_array = array(
			'title' => $book[0]['title'],
			'edition' => $book[0]['edition'],
			'pub_year' => $book[0]['pub_year'],
			'reviews' => $reviews
		);  		

		return View::make('book.details', compact('book_details_array'))
			->with('title','Details of Books');

		
	}

			


}