<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Facultad extends Model
{
   protected $table = 'Facultad';
	protected $primaryKey = 'Id_Facultad';
	public $timestamps = false;
	protected $fillable = ['nombre'];

	public function edificios() {
		return $this->hasMany('App\Edificio', 'Id_Facultad', 'Id_Facultad');
	}
}
