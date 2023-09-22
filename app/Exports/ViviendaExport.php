<?php

namespace App\Exports;

use App\Models\Vivienda;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ViviendaExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Vivienda::all();
    }

    public function headings(): array
    {
        return ["cvgeo","viviendas_habitadas","aguaentubada_dispone","drenaje_dispone","drenaje_nodispone","drenaje_noesp","electricidad_dispone"];
    }
}
