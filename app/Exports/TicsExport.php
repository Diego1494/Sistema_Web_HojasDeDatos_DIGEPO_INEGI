<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use App\Models\Tic;
use Maatwebsite\Excel\Concerns\WithHeadings;

class TicsExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        //
        return Tic::all();

    }

    public function headings () : array{
        return ["cvgeo",
		"viviendas_habitadas",
		"compu_dispone",
		"inter_dispone",
		"telefono_dispone",
		"tvcable_dispone",
		"celu_dispone",
		"compu_nodispone",
		"internet_nodispone",
		"telefono_nodispone",
		"tvcable_nodispone",
		"celu_nodispone",
		"compu_noesp",
		"inter_noesp",
		"telefono_noesp",
		"tvcable_noesp",
		"celu_noesp"];

    }
}
