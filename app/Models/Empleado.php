<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Empleado
 * 
 * @property int $id_em
 * @property int $id_tipo_u
 * @property string $codigo_empresa
 * @property string $nombre
 * @property string $apellido
 * @property string $correo
 * @property string $contrasena
 * 
 * @property TipoDeUsuario $tipo_de_usuario
 * @property Empresa $empresa
 *
 * @package App\Models
 */
class Empleado extends Model
{
	protected $table = 'empleados';
	protected $primaryKey = 'id_em';
	public $timestamps = false;

	protected $casts = [
		'id_tipo_u' => 'int'
	];

	protected $fillable = [
		'id_tipo_u',
		'codigo_empresa',
		'nombre',
		'apellido',
		'correo',
		'contrasena'
	];

	public function tipo_de_usuario()
	{
		return $this->belongsTo(TipoDeUsuario::class, 'id_tipo_u');
	}

	public function empresa()
	{
		return $this->belongsTo(Empresa::class, 'codigo_empresa');
	}
}
