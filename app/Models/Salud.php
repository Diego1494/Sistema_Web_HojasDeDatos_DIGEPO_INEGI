<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Salud
 * 
 * @property int $id
 * @property int $cve_geo
 * @property string $sexo
 * @property string $gpo_edad
 * @property float $pob_total
 * @property float $afiliada_total
 * @property float $imss
 * @property float $issste
 * @property float $issste_estatal
 * @property float $pemex_def_mar
 * @property float $bienestar
 * @property float $imss_bienestar
 * @property float $privada
 * @property float $otra_institucion
 * @property float $no_afiliada
 * @property float $no_especificada
 *
 * @package App\Models
 */
class Salud extends Model
{
	protected $table = 'Salud';
	public $timestamps = false;

	protected $casts = [
		'cve_geo' => 'int',
		'pob_total' => 'float',
		'afiliada_total' => 'float',
		'imss' => 'float',
		'issste' => 'float',
		'issste_estatal' => 'float',
		'pemex_def_mar' => 'float',
		'bienestar' => 'float',
		'imss_bienestar' => 'float',
		'privada' => 'float',
		'otra_institucion' => 'float',
		'no_afiliada' => 'float',
		'no_especificada' => 'float'
	];

	protected $fillable = [
		'cve_geo',
		'sexo',
		'gpo_edad',
		'pob_total',
		'afiliada_total',
		'imss',
		'issste',
		'issste_estatal',
		'pemex_def_mar',
		'bienestar',
		'imss_bienestar',
		'privada',
		'otra_institucion',
		'no_afiliada',
		'no_especificada'
	];
}
