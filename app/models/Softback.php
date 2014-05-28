<?php

use Illuminate\Database\Eloquent\ModelNotFoundException;

class Softback extends Eloquent {

	protected $table = 'softback';
	protected $primaryKey = 'isbn';

	public $timestamps = false;

	public function book() {
        return $this->belongsTo('Book','isbn'); 
    }

}