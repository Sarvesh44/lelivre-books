<?php

use Illuminate\Database\Eloquent\ModelNotFoundException;

class Hardback extends Eloquent {

	protected $table = 'hardback';
	protected $primaryKey = 'isbn';

	public $timestamps = false;

	public function book() {
        return $this->belongsTo('Book','isbn'); 
    }

}