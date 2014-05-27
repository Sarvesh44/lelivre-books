<?php

use Illuminate\Database\Eloquent\ModelNotFoundException;

class Book extends Eloquent {

	protected $table = 'book';
	protected $primaryKey = 'isbn';

	public $timestamps = false;

	public function authors()
    {
        return $this->belongsToMany('Author', 'book_author', 'isbn', 'authid');
    }

    public function genres()
    {
        return $this->belongsToMany('Book_Genre', 'book_genre_map', 'isbn', 'genre_name');
    }


}