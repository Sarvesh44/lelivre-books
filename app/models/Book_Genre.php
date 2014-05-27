<?php

use Illuminate\Database\Eloquent\ModelNotFoundException;

class Book_Genre extends Eloquent {

	protected $table = 'book_genre';
	protected $primaryKey = 'genre_name';

	public $timestamps = false;

	public function books()
    {
        return $this->belongsToMany('Book', 'book_genre_map', 'genre_name', 'isbn');
    }


}