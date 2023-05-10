<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Rubro
 * 
 * @property int $id_r
 * @property string $nombre
 * 
 * @property Collection|Empresa[] $empresas
 *
 * @package App\Models
 */
class Rubro extends Model
{
	protected $table = 'rubros';
	protected $primaryKey = 'id_r';
	public $timestamps = false;

	protected $fillable = [
		'nombre'
	];

	public function empresas()
	{
		return $this->hasMany(Empresa::class, 'id_rubro');
	}
}
