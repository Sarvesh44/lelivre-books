<?php
  
class AdvancedSearchController extends BaseController {

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
    echo 'now here';
    $query = DB::table('book');
    
    $byname = (Input::get('byname',''));
    $searchbyname = (Input::get('searchbyname',''));

    $bygenre = (Input::get('bygenre',''));
    $searchbygenre = (Input::get('searchbygenre',''));

    $byauthor = (Input::get('byauthor',''));
    $searchbyauthor = (Input::get('searchbyauthor',''));

    $bypubhouse = (Input::get('bypubhouse',''));
    $searchbypubhouse = (Input::get('searchbypubhouse',''));

    $bytype = (Input::get('bytype',''));
    $byebook = (Input::get('byebook',''));
    $byehp = (Input::get('byehp',''));
    $byesp = (Input::get('byesp',''));

    $byprice = (Input::get('byprice',''));
    $lessthan100 = (Input::get('lessthan100',''));
    $bet100200 = (Input::get('bet100200',''));
    $morethan200 = (Input::get('morethan200',''));
    

     if($byname && $byname != '' && $searchbyname && $searchbyname != ''){
    
        $query->where('title','like','%'.$searchbyname.'%');

     }
     if($byauthor && $byauthor != '' && $searchbyauthor && $searchbyauthor != ''){
        $authquery = DB::table('author')->join('book_author', functions($join){
          $join->on('author.authid', '=', 'book_author.authid')
        })->get();

        $authisbn = DB::table('book_author')

        $bookauthquery = DB::table('author')->join('book_author', functions($join){
          $join->on('author.authid', '=', 'book_author.authid')
        })->first();
    
        $query->authors;

     }
    
    $result = $query->get();

    foreach ($result as $key) {
      echo $key->title;
    }

  }
 
}