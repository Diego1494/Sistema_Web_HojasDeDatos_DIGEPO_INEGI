<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use App\Models\Educacion;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class EducacionImport implements ToModel, WithHeadingRow
{
    public function model(array $row)
    {
        return new Poblacion([
            'cve_geo'  => $row['cve_geo'],
		'pob_3_anios_y_mas'  => $row['pob_3_anios_y_mas'],
		'sin_escolaridad'  => $row['sin_escolaridad'],
		'basico_preescolar'  => $row['basico_preescolar'],
		'basico_primaria'  => $row['basico_primaria'],
        'basico_secundaria'  => $row['basico_secundaria'],
        'tecnico_comer_primaria'  => $row['tecnico_comer_primaria'],
        'media_sup_tecnico_comer_secundaria'  => $row['media_sup_tecnico_comer_secundaria'],
        'media_sup_prepa_bachillerato'  => $row['media_sup_prepa_bachillerato'],
        'normal_basica'  => $row['normal_basica'],
        'sup_tecnico_comer_prepa'  => $row['sup_tecnico_comer_prepa'],
        'sup_licenciatura'  => $row['sup_licenciatura'],
        'sup_posgrado'  => $row['sup_posgrado'],
        'no_especificado'  => $row['no_especificado'],
        ]);
    }


   }
