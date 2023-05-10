<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Empresa
 * 
 * @property string $codigo
 * @property int $id_tipo_u
 * @property string $nombre
 * @property string $direccion
 * @property string $nombre_contacto
 * @property int $telefono
 * @property string $correo
 * @property string $contrasena
 * @property int $id_rubro
 * @property float $porcentaje_comision
 * 
 * @property TipoDeUsuario $tipo_de_usuario
 * @property Rubro $rubro
 * @property Collection|Cupone[] $cupones
 * @property Collection|Empleado[] $empleados
 *
 * @package App\Models
 */
class Empresa extends Model
{
	protected $table = 'empresas';
	protected $primaryKey = 'codigo';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id_tipo_u' => 'int',
		'telefono' => 'int',
		'id_rubro' => 'int',
		'porcentaje_comision' => 'float'
	];

	protected $fillable = [
		'id_tipo_u',
		'nombre',
		'direccion',
		'nombre_contacto',
		'telefono',
		'correo',
		'contrasena',
		'id_rubro',
		'porcentaje_comision'
	];

	public function tipo_de_usuario()
	{
		return $this->belongsTo(TipoDeUsuario::class, 'id_tipo_u');
	}

	public function rubro()
	{
		return $this->belongsTo(Rubro::class, 'id_rubro');
	}

	public function cupones()
	{
		return $this->hasMany(Cupone::class, 'cod_empresa');
	}

	public function empleados()
	{
		return $this->hasMany(Empleado::class, 'codigo_empresa');
	}
}
