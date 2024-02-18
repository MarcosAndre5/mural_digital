<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mural extends Model {
    //protected $table = 'mural';

    //protected $primaryKey = 'id';

	//public $timestamps = false;

	protected $fillable = [
		'link', 'video', 'renderizar', 'informativo1', 'informativo2', 'informativo3'
	];

	//protected $guarded = [];
}