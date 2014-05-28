<?php

use Illuminate\Database\Eloquent\ModelNotFoundException;

class Publisher extends Eloquent {

	protected $table = 'publisher';
	protected $primaryKey = 'pubid';

	public $timestamps = false;

	public function books()
    {
        return $this->hasMany('Book', 'book_publisher', 'pubid', 'isbn');
    }

}