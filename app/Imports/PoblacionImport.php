<?php

namespace App\Imports;

use App\Models\Poblacion;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class PoblacionImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Poblacion([
            'cve_geo'  => $row['cve_geo'],
		'gpo_edad'  => $row['gpo_edad'],
		'total_poblacion'  => $row['total_poblacion'],
		'hombres'  => $row['hombres'],
		'mujeres'  => $row['mujeres'],
        ]);
    }
}
