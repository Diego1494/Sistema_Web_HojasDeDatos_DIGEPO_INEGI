<?php

namespace App\Exports;

use App\Models\Poblacion;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class PoblacionExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Poblacion::all();
    }

    public function headings(): array
    {
        return ["cve_geo",
		"gpo_edad",
		"total_poblacion",
		"hombres",
		"mujeres"];
    }
}
