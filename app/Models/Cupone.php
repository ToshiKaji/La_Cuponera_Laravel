<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Cupone
 * 
 * @property int $id_cu
 * @property string $cod_empresa
 * @property string $titulo_oferta
 * @property string $descripcion
 * @property float $precio_regular
 * @property float $porc_oferta
 * @property float $precio_cupon
 * @property Carbon $fecha_ini
 * @property Carbon $fecha_fin
 * @property Carbon $fecha_lim
 * @property int|null $cantidad_lim
 * @property string $imagen
 * @property int $activado
 * 
 * @property Empresa $empresa
 * @property Collection|CuponesComprado[] $cupones_comprados
 *
 * @package App\Models
 */
class Cupone extends Model
{
	protected $table = 'cupones';
	protected $primaryKey = 'id_cu';
	public $timestamps = false;

	protected $casts = [
		'precio_regular' => 'float',
		'porc_oferta' => 'float',
		'precio_cupon' => 'float',
		'fecha_ini' => 'datetime',
		'fecha_fin' => 'datetime',
		'fecha_lim' => 'datetime',
		'cantidad_lim' => 'int',
		'activado' => 'int'
	];

	protected $fillable = [
		'cod_empresa',
		'titulo_oferta',
		'descripcion',
		'precio_regular',
		'porc_oferta',
		'precio_cupon',
		'fecha_ini',
		'fecha_fin',
		'fecha_lim',
		'cantidad_lim',
		'imagen',
		'activado'
	];

	public function empresa()
	{
		return $this->belongsTo(Empresa::class, 'cod_empresa');
	}

	public function cupones_comprados()
	{
		return $this->hasMany(CuponesComprado::class, 'id_cupon');
	}
}
