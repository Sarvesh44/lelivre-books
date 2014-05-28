<?php

use Illuminate\Database\Eloquent\ModelNotFoundException;

class Ebook extends Eloquent {

	protected $table = 'ebook';
	protected $primaryKey = 'isbn';

	public $timestamps = false;

	public function book() {
        return $this->belongsTo('Book', 'isbn'); 
    }

}