<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use App\Models\Educacion;

class EducacionExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        //
        return Educacion::all();
    }

    public function headings(): array
    {
        return [
            "cve_geo",
            "sexo",
            "gpo_edad",
            "pob_3_anios_y_mas",
            "sin_escolaridad",
            "basico_preescolar",
            "basico_primaria",
            "basico_secundaria",
            "tecnico_comer_primaria",
            "media_sup_tecnico_comer_secundaria",
            "media_sup_prepa_bachillerato",
            "normal_basica",
            "sup_tecnico_comer_prepa",
            "sup_licenciatura",
            "sup_posgrado",
            "no_especificado"
        ];
    }
}
