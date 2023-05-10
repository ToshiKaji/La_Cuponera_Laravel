<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Cliente
 * 
 * @property int $id_cli
 * @property int $id_tipo_u
 * @property string $nombre
 * @property string $apellido
 * @property int $telefono
 * @property string|null $direccion
 * @property string $dui
 * @property string $correo
 * @property string $contrasena
 * @property string $hash_verificar
 * @property int $activada
 * 
 * @property TipoDeUsuario $tipo_de_usuario
 * @property Collection|CuponesComprado[] $cupones_comprados
 *
 * @package App\Models
 */
class Cliente extends Model
{
	protected $table = 'clientes';
	protected $primaryKey = 'id_cli';
	public $timestamps = false;

	protected $casts = [
		'id_tipo_u' => 'int',
		'telefono' => 'int',
		'activada' => 'int'
	];

	protected $fillable = [
		'id_tipo_u',
		'nombre',
		'apellido',
		'telefono',
		'direccion',
		'dui',
		'correo',
		'contrasena',
		'hash_verificar',
		'activada'
	];

	public function tipo_de_usuario()
	{
		return $this->belongsTo(TipoDeUsuario::class, 'id_tipo_u');
	}

	public function cupones_comprados()
	{
		return $this->hasMany(CuponesComprado::class, 'id_cliente');
	}
}
