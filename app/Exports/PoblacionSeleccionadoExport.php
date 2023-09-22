<?php

namespace App\Exports;

use App\Models\PoblacionSeleccionado;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class PoblacionSeleccionadoExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return PoblacionSeleccionado::all();
    }

    public function headings(): array{
        return ["cve_geo",
		"rel_hombre_mujer",
		"r_dep_total",
		"r_dep_infatil",
		"r_dep_vejez"];
    }
}
