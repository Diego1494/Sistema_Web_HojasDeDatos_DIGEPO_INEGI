<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use App\Models\PoblacionProyeccione;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class PoblacionProyecciones implements ToModel, WithHeadingRow
{
    /**
    * @param Collection $collection
    */
    public function model(array $row)
    {
        return new PoblacionProyecciones([
            //

            'cvegeo' => $row['cvegeo'],
		'ph2016' => $row['ph2016'],
		'pm2016' => $row['pm2016'],
        'pt2016' => $row['pt2016'],
        'ph2017' => $row['ph2017'],
		'pm2017' => $row['pm2017'],
        'pt2017' => $row['pt2017'],
        'ph2018' => $row['ph2018'],
		'pm2018' => $row['pm2018'],
        'pt2018' => $row['pt2018'],
        'ph2019' => $row['ph2019'],
		'pm2019' => $row['pm2019'],
        'pt2019' => $row['pt2019'],
        'ph2020' => $row['ph2020'],
		'pm2020' => $row['pm2020'],
        'pt2020' => $row['pt2020'],
        'ph2021' => $row['ph2021'],
		'pm2021' => $row['pm2021'],
        'pt2021' => $row['pt2021'],
        'ph2022' => $row['ph2022'],
		'pm2022' => $row['pm2022'],
        'pt2022' => $row['pt2022'],
        ]);
    }

}
