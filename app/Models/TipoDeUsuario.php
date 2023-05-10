<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TipoDeUsuario
 * 
 * @property int $id_t
 * @property string $tipo_nombre
 * 
 * @property Collection|Administrador[] $administradors
 * @property Collection|Cliente[] $clientes
 * @property Collection|Empleado[] $empleados
 * @property Collection|Empresa[] $empresas
 *
 * @package App\Models
 */
class TipoDeUsuario extends Model
{
	protected $table = 'tipo_de_usuarios';
	protected $primaryKey = 'id_t';
	public $timestamps = false;

	protected $fillable = [
		'tipo_nombre'
	];

	public function administradors()
	{
		return $this->hasMany(Administrador::class, 'id_tipo_u');
	}

	public function clientes()
	{
		return $this->hasMany(Cliente::class, 'id_tipo_u');
	}

	public function empleados()
	{
		return $this->hasMany(Empleado::class, 'id_tipo_u');
	}

	public function empresas()
	{
		return $this->hasMany(Empresa::class, 'id_tipo_u');
	}
}
