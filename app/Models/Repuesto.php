<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Repuesto
 * 
 * @property int $codigo
 * @property string|null $estado
 * @property string|null $ubicacion
 * @property int|null $grupo
 * @property string|null $ordencompra
 * @property string|null $image
 * @property float|null $precio
 *
 * @package App\Models
 */
class Repuesto extends Model
{
	protected $table = 'repuestos';
	protected $primaryKey = 'codigo';
	public $timestamps = false;

	protected $casts = [
		'grupo' => 'int',
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
