<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CuponesComprado
 * 
 * @property string $codigo_canjeo
 * @property int $id_cliente
 * @property int $id_cupon
 * @property int $canjeo
 * 
 * @property Cliente $cliente
 * @property Cupone $cupone
 *
 * @package App\Models
 */
class CuponesComprado extends Model
{
	protected $table = 'cupones_comprados';
	protected $primaryKey = 'codigo_canjeo';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id_cliente' => 'int',
		'id_cupon' => 'int',
		'canjeo' => 'int'
	];

	protected $fillable = [
		'id_cliente',
		'id_cupon',
		'canjeo'
	];

	public function cliente()
	{
		return $this->belongsTo(Cliente::class, 'id_cliente');
	}

	public function cupone()
	{
		return $this->belongsTo(Cupone::class, 'id_cupon');
	}
}
