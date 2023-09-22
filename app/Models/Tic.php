<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Tic
 * 
 * @property int $id
 * @property int $cvgeo
 * @property float $viviendas_habitadas
 * @property float $compu_dispone
 * @property float $inter_dispone
 * @property float $telefono_dispone
 * @property float $tvcable_dispone
 * @property float $celu_dispone
 * @property float $compu_nodispone
 * @property float $internet_nodispone
 * @property float $telefono_nodispone
 * @property float $tvcable_nodispone
 * @property float $celu_nodispone
 * @property float $compu_noesp
 * @property float $inter_noesp
 * @property float $telefono_noesp
 * @property float $tvcable_noesp
 * @property float $celu_noesp
 *
 * @package App\Models
 */
class Tic extends Model
{
	protected $table = 'Tics';
	public $timestamps = false;

	protected $casts = [
		'cvgeo' => 'int',
		'viviendas_habitadas' => 'float',
		'compu_dispone' => 'float',
		'inter_dispone' => 'float',
		'telefono_dispone' => 'float',
		'tvcable_dispone' => 'float',
		'celu_dispone' => 'float',
		'compu_nodispone' => 'float',
		'internet_nodispone' => 'float',
		'telefono_nodispone' => 'float',
		'tvcable_nodispone' => 'float',
		'celu_nodispone' => 'float',
		'compu_noesp' => 'float',
		'inter_noesp' => 'float',
		'telefono_noesp' => 'float',
		'tvcable_noesp' => 'float',
		'celu_noesp' => 'float'
	];

	protected $fillable = [
		'cvgeo',
		'viviendas_habitadas',
		'compu_dispone',
		'inter_dispone',
		'telefono_dispone',
		'tvcable_dispone',
		'celu_dispone',
		'compu_nodispone',
		'internet_nodispone',
		'telefono_nodispone',
		'tvcable_nodispone',
		'celu_nodispone',
		'compu_noesp',
		'inter_noesp',
		'telefono_noesp',
		'tvcable_noesp',
		'celu_noesp'
	];
}
