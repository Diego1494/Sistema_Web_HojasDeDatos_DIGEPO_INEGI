<?php

namespace App\Imports;

use App\Models\Trabajo;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class TrabajoImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Trabajo([
            //
            'cve_geo' => $row['cve_geo'],
		'sexo' => $row['sexo'],
		'gpo_edad' => $row['gpo_edad'],
		'pob_12_anios_y_mas' => $row['pob_12_anios_y_mas'],
		'total_eco_activa' => $row['total_eco_activa'],
		'pob_eco_activa_ocupada' => $row['pob_eco_activa_ocupada'],
		'pob_eco_activa_desocupada' => $row['pob_eco_activa_desocupada'],
		'no_economicamente_activa' => $row['no_economicamente_activa'],
		'no_especificado' => $row['no_especificado'],
		'tasa_esp_participacion' => $row['tasa_esp_participacion'],
        ]);
    }
}
