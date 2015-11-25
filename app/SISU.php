<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SISU extends Model
{
	protected $table = 'SISU';
	protected $primaryKey = 'id_sisu';
	public $timestamps = false;
	protected $fillable = ['usuario', 'password', 'nombre'];

	public function reportes() {
		return $this->hasMany('App\Reporte', 'id_sisu', 'id_sisu');
	}
}
