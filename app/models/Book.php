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

    public function publishers()
    {
        return $this->belongsToMany('Publisher', 'book_publisher', 'isbn', 'pubid');
    }

    public function ebook() {
        return $this->hasOne('Ebook','isbn'); 
    }

    public function hardback() {
        return $this->hasOne('Hardback','isbn'); 
    }

    public function softback() {
        return $this->hasOne('Softback','isbn'); 
    }

    public function ratings()
    {
        return $this->hasMany('Book_Rating');
    }


}