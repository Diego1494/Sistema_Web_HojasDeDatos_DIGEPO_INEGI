<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class PoblacionProyeccione
 * 
 * @property int $id
 * @property int $cvegeo
 * @property float $ph2016
 * @property float $pm2016
 * @property float $pt2016
 * @property float $ph2017
 * @property float $pm2017
 * @property float $pt2017
 * @property float $ph2018
 * @property float $pm2018
 * @property float $pt2018
 * @property float $ph2019
 * @property float $pm2019
 * @property float $pt2019
 * @property float $ph2020
 * @property float $pm2020
 * @property float $pt2020
 * @property float $ph2021
 * @property float $pm2021
 * @property float $pt2021
 * @property float $ph2022
 * @property float $pm2022
 * @property float $pt2022
 *
 * @package App\Models
 */
class PoblacionProyeccione extends Model
{
	protected $table = 'Poblacion_proyecciones';
	public $timestamps = false;

	protected $casts = [
		'cvegeo' => 'int',
		'ph2016' => 'float',
		'pm2016' => 'float',
		'pt2016' => 'float',
		'ph2017' => 'float',
		'pm2017' => 'float',
		'pt2017' => 'float',
		'ph2018' => 'float',
		'pm2018' => 'float',
		'pt2018' => 'float',
		'ph2019' => 'float',
		'pm2019' => 'float',
		'pt2019' => 'float',
		'ph2020' => 'float',
		'pm2020' => 'float',
		'pt2020' => 'float',
		'ph2021' => 'float',
		'pm2021' => 'float',
		'pt2021' => 'float',
		'ph2022' => 'float',
		'pm2022' => 'float',
		'pt2022' => 'float'
	];

	protected $fillable = [
		'cvegeo',
		'ph2016',
		'pm2016',
		'pt2016',
		'ph2017',
		'pm2017',
		'pt2017',
		'ph2018',
		'pm2018',
		'pt2018',
		'ph2019',
		'pm2019',
		'pt2019',
		'ph2020',
		'pm2020',
		'pt2020',
		'ph2021',
		'pm2021',
		'pt2021',
		'ph2022',
		'pm2022',
		'pt2022'
	];
}
