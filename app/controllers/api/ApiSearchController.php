<?php
 
/**
 * Api/SearchController is used for the "smart" search throughout the site.
 * it returns and array of items (with type and icon specified) so that the selectize.js plugin 
 * can render the search results properly
 **/
 
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
      $item['url'] = url($prefix.'/');
    }
    return $data;   
  }

  public function index()
  {
    $query = e(Input::get('q',''));
    //echo $query;
 
    if(!$query && $query == '') return Response::json(array(), 400);
 
    $products = Book::where('title','like','%'.$query.'%')
      //->take(5)
      ->get(array('isbn','title'))->toArray();
 
  /*
    $categories = Book_Genre::where('genre_name','like','%'.$query.'%')
      ->has('books')
      ->get(array('genre_name'))
      ->toArray();
 */
    // Data normalization
   // $categories = $this->appendValue($categories, url('img/icons/category-icon.png'),'icon');
 
    $products   = $this->appendURL($products, 'books');
    //$categories  = $this->appendURL($categories, 'categories');
 
    // Add type of data to each item of each set of results
    $products = $this->appendValue($products, 'book', 'class');
    //$categories = $this->appendValue($categories, 'genre', 'class');
 
    // Merge all data into one array
  //  $data = array_merge($products, $categories);
    $data = $products;
    
    return Response::json(array(
      'data'=>$data
    ));
  }
 
}