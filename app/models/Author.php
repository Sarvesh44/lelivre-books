<?php

use Illuminate\Database\Eloquent\ModelNotFoundException;

class Author extends Eloquent {

	protected $table = 'author';
	protected $primaryKey = 'authid';

	public $timestamps = false;

	public function books()
    {
        return $this->belongsToMany('Book', 'book_author', 'authid', 'isbn');
    }


}