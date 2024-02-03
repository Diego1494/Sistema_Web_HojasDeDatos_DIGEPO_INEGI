<?php

namespace App\Exports;

use App\Models\Salud;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class SaludExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        //
        return Salud::all();
    }

    public function headings () : array{
        return [
            "cve_geo",
            "sexo",
            "gpo_edad",
            "pob_total",
            "afiliada_total",
            "imss",
            "issste",
            "issste_estatal",
            "pemex_def_mar",
            "bienestar",
            "imss_bienestar",
            "privada",
            "otra_institucion",
            "no_afiliada",
            "no_especificada"
        ];

    }
}
