<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Poblacion
 * 
 * @property int $id
 * @property int $cve_geo
 * @property string $gpo_edad
 * @property float $total_poblacion
 * @property float $hombres
 * @property float $mujeres
 *
 * @package App\Models
 */
class Poblacion extends Model
{
	protected $table = 'Poblacion';
	public $timestamps = false;

	protected $casts = [
		'cve_geo' => 'int',
		'total_poblacion' => 'float',
		'hombres' => 'float',
		'mujeres' => 'float'
	];

	protected $fillable = [
		'cve_geo',
		'gpo_edad',
		'total_poblacion',
		'hombres',
		'mujeres'
	];
}
