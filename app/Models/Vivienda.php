<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Vivienda
 * 
 * @property int $id
 * @property int $cvgeo
 * @property float $viviendas_habitadas
 * @property float $aguaentubada_dispone
 * @property float $drenaje_dispone
 * @property float $drenaje_nodispone
 * @property float $drenaje_noesp
 * @property float $electricidad_dispone
 *
 * @package App\Models
 */
class Vivienda extends Model
{
	protected $table = 'Vivienda';
	public $timestamps = false;

	protected $casts = [
		'cvgeo' => 'int',
		'viviendas_habitadas' => 'float',
		'aguaentubada_dispone' => 'float',
		'drenaje_dispone' => 'float',
		'drenaje_nodispone' => 'float',
		'drenaje_noesp' => 'float',
		'electricidad_dispone' => 'float'
	];

	protected $fillable = [
		'cvgeo',
		'viviendas_habitadas',
		'aguaentubada_dispone',
		'drenaje_dispone',
		'drenaje_nodispone',
		'drenaje_noesp',
		'electricidad_dispone'
	];
}
