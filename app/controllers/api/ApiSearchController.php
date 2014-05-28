<?php
 
class ApiSearchController extends \BaseController {

	public function appendValue($data, $type, $element)
  {
    // operate on the item passed by reference, adding the element and type
    foreach ($data as $key => & $item) {
      $item[$element] = $type;
    }
    return $data;   
  }
 
  public function appendURL($data, $prefix)
  {
    // operate on the item passed by reference, adding the url based on slug
    foreach ($data as $key => & $item) {
      $item['url'] = url($prefix.'/'.$item['isbn']);
    }
    return $data;   
  }

  public function index()
  {
    $query = (Input::get('q',''));
    //echo $query;
 
    if(!$query && $query == '') return Response::json(array(), 400);
 
    $books = Book::where('title','like','%'.$query.'%')
      //->take(5)
      ->get(array('isbn','title', 'edition'))->toArray();
 
  /*
    $categories = Book_Genre::where('genre_name','like','%'.$query.'%')
      ->has('books')
      ->get(array('genre_name'))
      ->toArray();
 */
    // Data normalization
   // $categories = $this->appendValue($categories, url('img/icons/category-icon.png'),'icon');
 
    $books   = $this->appendURL($books, 'books');
    //$categories  = $this->appendURL($categories, 'categories');
 
    // Add type of data to each item of each set of results
    $books = $this->appendValue($books, 'book', 'class');
    //$categories = $this->appendValue($categories, 'genre', 'class');
 
    // Merge all data into one array
  //  $data = array_merge($books, $categories);
    $data = $books;
    
   /* return Response::json(array(
      'data'=>$data
    ));*/
    return View::make('api.search', compact('data'))
      ->with('title','Search Results');

   /* return View::make('api.search', compact('data'))
      ->with('title','Search Results')
      ->with('data', $data);
      */

  }
 
}