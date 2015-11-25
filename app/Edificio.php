<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Edificio extends Model
{
   protected $table = 'Edificio';
	protected $primaryKey = 'Id_Edificio';
	public $timestamps = false;
	protected $fillable = ['nombre'];

	public function facultad() {
		return $this->belongsTo('App\Facultad', 'Id_Facultad', 'Id_Facultad');
	}
}
