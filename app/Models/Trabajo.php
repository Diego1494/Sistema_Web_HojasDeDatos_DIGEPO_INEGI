<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Trabajo
 * 
 * @property int $id
 * @property int $cve_geo
 * @property string $sexo
 * @property string $gpo_edad
 * @property float $pob_12_anios_y_mas
 * @property float $total_eco_activa
 * @property float $pob_eco_activa_ocupada
 * @property float $pob_eco_activa_desocupada
 * @property float $no_economicamente_activa
 * @property float $no_especificado
 * @property float $tasa_esp_participacion
 *
 * @package App\Models
 */
class Trabajo extends Model
{
	protected $table = 'Trabajo';
	public $timestamps = false;

	protected $casts = [
		'cve_geo' => 'int',
		'pob_12_anios_y_mas' => 'float',
		'total_eco_activa' => 'float',
		'pob_eco_activa_ocupada' => 'float',
		'pob_eco_activa_desocupada' => 'float',
		'no_economicamente_activa' => 'float',
		'no_especificado' => 'float',
		'tasa_esp_participacion' => 'float'
	];

	protected $fillable = [
		'cve_geo',
		'sexo',
		'gpo_edad',
		'pob_12_anios_y_mas',
		'total_eco_activa',
		'pob_eco_activa_ocupada',
		'pob_eco_activa_desocupada',
		'no_economicamente_activa',
		'no_especificado',
		'tasa_esp_participacion'
	];
}
