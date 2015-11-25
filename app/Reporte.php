<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reporte extends Model
{
   protected $table = 'Reporte';
	protected $primaryKey = 'Id_Reporte';
	public $timestamps = false;
	protected $fillable = ['nombre', 'tipo', 'incidente', 'descripcion', 'imagen'];

	public function sisu() {
		return $this->belongsTo('App\SISU', 'id_sisu', 'id_sisu');
	}
}
