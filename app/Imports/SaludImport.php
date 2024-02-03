<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use App\Models\Salud;

class SaludImport implements ToCollection
{
    public function model(array $row)
    {
        return new Salud([
            //
            'cve_geo' => $row['cve_geo'],
		'pob_total' => $row['pob_total'],
		'afiliada_total' => $row['afiliada_total'],
		'imss' => $row['imss'],
		'issste' => $row['issste'],
		'issste_estatal' => $row['issste_estatal'],
		'pemex_def_mar' => $row['pemex_def_mar'],
		'bienestar' => $row['bienestar'],
		'imss_bienestar' => $row['imss_bienestar'],
		'privada' => $row['privada'],
		'otra_institucion' => $row['otra_institucion'],
		'no_afiliada' => $row['no_afiliada'],
		'no_especificada' => $row['no_especificada'],
        ]);
    }
}
