<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Administrador
 * 
 * @property int $id_admin
 * @property int $id_tipo_u
 * @property string $correo
 * @property string $contrasena
 * 
 * @property TipoDeUsuario $tipo_de_usuario
 *
 * @package App\Models
 */
class Administrador extends Model
{
	protected $table = 'administrador';
	protected $primaryKey = 'id_admin';
	public $timestamps = false;

	protected $casts = [
		'id_tipo_u' => 'int'
	];

	protected $fillable = [
		'id_tipo_u',
		'correo',
		'contrasena'
	];

	public function tipo_de_usuario()
	{
		return $this->belongsTo(TipoDeUsuario::class, 'id_tipo_u');
	}
}
