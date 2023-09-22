<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Educacion
 * 
 * @property int $id
 * @property int $cve_geo
 * @property string $sexo
 * @property string $gpo_edad
 * @property float $pob_3_anios_y_mas
 * @property float $sin_escolaridad
 * @property float $basico_preescolar
 * @property float $basico_primaria
 * @property float $basico_secundaria
 * @property float $tecnico_comer_primaria
 * @property float $media_sup_tecnico_comer_secundaria
 * @property float $media_sup_prepa_bachillerato
 * @property float $normal_basica
 * @property float $sup_tecnico_comer_prepa
 * @property float $sup_licenciatura
 * @property float $sup_posgrado
 * @property float $no_especificado
 *
 * @package App\Models
 */
class Educacion extends Model
{
	protected $table = 'Educacion';
	public $timestamps = false;

	protected $casts = [
		'cve_geo' => 'int',
		'pob_3_anios_y_mas' => 'float',
		'sin_escolaridad' => 'float',
		'basico_preescolar' => 'float',
		'basico_primaria' => 'float',
		'basico_secundaria' => 'float',
		'tecnico_comer_primaria' => 'float',
		'media_sup_tecnico_comer_secundaria' => 'float',
		'media_sup_prepa_bachillerato' => 'float',
		'normal_basica' => 'float',
		'sup_tecnico_comer_prepa' => 'float',
		'sup_licenciatura' => 'float',
		'sup_posgrado' => 'float',
		'no_especificado' => 'float'
	];

	protected $fillable = [
		'cve_geo',
		'sexo',
		'gpo_edad',
		'pob_3_anios_y_mas',
		'sin_escolaridad',
		'basico_preescolar',
		'basico_primaria',
		'basico_secundaria',
		'tecnico_comer_primaria',
		'media_sup_tecnico_comer_secundaria',
		'media_sup_prepa_bachillerato',
		'normal_basica',
		'sup_tecnico_comer_prepa',
		'sup_licenciatura',
		'sup_posgrado',
		'no_especificado'
	];
}
