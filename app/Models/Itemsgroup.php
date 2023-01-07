<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Itemsgroup
 * 
 * @property int $codigo
 * @property string|null $Identificador
 * @property string|null $Nombre
 * @property string|null $Detalle
 * @property string|null $Marca
 * @property int|null $SReal
 * @property int|null $SMin
 * @property int|null $SMax
 * @property float|null $VUInicial
 * @property float|null $VUActual
 * @property string|null $Rubro
 * @property string|null $SubRubro2
 * @property string|null $SubRubro3
 * @property int|null $SEmpresa
 * @property float|null $VAEmpresa
 * @property float|null $VADeposito
 * @property string|null $itemsgroupscol
 *
 * @package App\Models
 */
class Itemsgroup extends Model
{
	protected $table = 'itemsgroups';
	protected $primaryKey = 'codigo';
	public $timestamps = false;

	protected $casts = [
		'SReal' => 'int',
		'SMin' => 'int',
		'SMax' => 'int',
		'VUInicial' => 'float',
		'VUActual' => 'float',
		'SEmpresa' => 'int',
		'VAEmpresa' => 'float',
		'VADeposito' => 'float'
	];

	protected $fillable = [
		'Identificador',
		'Nombre',
		'Detalle',
		'Marca',
		'SReal',
		'SMin',
		'SMax',
		'VUInicial',
		'VUActual',
		'Rubro',
		'SubRubro2',
		'SubRubro3',
		'SEmpresa',
		'VAEmpresa',
		'VADeposito',
		'itemsgroupscol'
	];
}
