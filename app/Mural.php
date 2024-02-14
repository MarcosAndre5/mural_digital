<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mural extends Model {
    protected $table = 'mural';

    protected $primaryKey = 'id';

	public $timestamps = false;

	protected $fillable = ['link', 'informativo', 'panfleto', 'aniversariantes'];

	protected $guarded = [];
}