<?php

namespace App\Imports;

use App\Models\PoblacionSeleccionado;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class PoblacionSeleccionadoImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new PoblacionSeleccionado([
            //

            'cve_geo' => $row['cve_geo'],
		'rel_hombre_mujer' => $row['rel_hombre_mujer'],
		'r_dep_total' => $row['r_dep_total'],
		'r_dep_infatil'=> $row['r_dep_infantil'],
		'r_dep_vejez'=> $row['r_dep_vejez'],
        ]);
    }
}
