<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class PoblacionSeleccionado
 * 
 * @property int $id
 * @property int $cve_geo
 * @property float $rel_hombre_mujer
 * @property float $r_dep_total
 * @property float $r_dep_infatil
 * @property float $r_dep_vejez
 *
 * @package App\Models
 */
class PoblacionSeleccionado extends Model
{
	protected $table = 'Poblacion_seleccionados';
	public $timestamps = false;

	protected $casts = [
		'cve_geo' => 'int',
		'rel_hombre_mujer' => 'float',
		'r_dep_total' => 'float',
		'r_dep_infatil' => 'float',
		'r_dep_vejez' => 'float'
	];

	protected $fillable = [
		'cve_geo',
		'rel_hombre_mujer',
		'r_dep_total',
		'r_dep_infatil',
		'r_dep_vejez'
	];
}
