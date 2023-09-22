<?php

namespace App\Exports;

use App\Models\Trabajo;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class TrabajoExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Trabajo::all();
    }
    
    public function headings () : array{
        return ["cve_geo",
		"sexo",
		"gpo_edad",
		"pob_12_anios_y_mas",
		"total_eco_activa",
		"pob_eco_activa_ocupada",
		"pob_eco_activa_desocupada",
		"no_economicamente_activa",
		"no_especificado",
		"tasa_esp_participacion"];

    }

}
