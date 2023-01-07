<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Movimiento
 * 
 * @property int $id
 * @property string|null $requerimento
 * @property string|null $bien
 * @property string|null $destino
 * @property int|null $nivelurgencia
 * @property string|null $estado
 * @property string|null $remito
 * @property Carbon|null $date1
 * @property string|null $ubicacionanterior
 *
 * @package App\Models
 */
class Movimiento extends Model
{
	protected $table = 'movimientos';
	public $timestamps = false;

	protected $casts = [
		'nivelurgencia' => 'int'
	];

	protected $dates = [
		'date1'
	];

	protected $fillable = [
		'requerimento',
		'bien',
		'destino',
		'nivelurgencia',
		'estado',
		'remito',
		'date1',
		'ubicacionanterior'
	];
}
