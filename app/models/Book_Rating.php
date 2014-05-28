<?php

use Illuminate\Database\Eloquent\ModelNotFoundException;

class Book_Rating extends Eloquent {

	protected $table = 'book_rating';
	//protected $primaryKey = array('isbn','username');

	

	public function customer()
  	{
    	return $this->belongsTo('Customer');
  	}

  	public function book()
  	{
    	return $this->belongsTo('Book');
  	}


}