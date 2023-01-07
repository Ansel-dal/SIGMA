<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Activo
 * 
 * @property int $codigo
 * @property string|null $estado
 * @property string|null $ubicacion
 * @property string|null $grupo
 * @property string|null $ordencompra
 * @property string|null $image
 * @property float|null $precio
 *
 * @package App\Models
 */
class Activo extends Model
{
	protected $table = 'activos';
	protected $primaryKey = 'codigo';
	public $timestamps = false;

	protected $casts = [
		'precio' => 'float'
	];

	protected $fillable = [
		'estado',
		'ubicacion',
		'grupo',
		'ordencompra',
		'image',
		'precio'
	];
}
