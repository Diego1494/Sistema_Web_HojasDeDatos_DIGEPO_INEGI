<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Llave
 * 
 * @property int $id
 * @property int $cvgeo
 * @property string $municipio
 * @property string $mun_interno
 * @property int $cvreg
 * @property string $region
 * @property int $cvdis
 * @property string $distrito
 * @property float $lat_dec
 * @property float $lon_dec
 *
 * @package App\Models
 */
class Llave extends Model
{
	protected $table = 'Llave';
	public $timestamps = false;

	protected $casts = [
		'cvgeo' => 'int',
		'cvreg' => 'int',
		'cvdis' => 'int',
		'lat_dec' => 'float',
		'lon_dec' => 'float'
	];

	protected $fillable = [
		'cvgeo',
		'municipio',
		'mun_interno',
		'cvreg',
		'region',
		'cvdis',
		'distrito',
		'lat_dec',
		'lon_dec'
	];
}
