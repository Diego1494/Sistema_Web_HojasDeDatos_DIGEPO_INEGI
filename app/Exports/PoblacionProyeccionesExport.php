<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use App\Models\PoblacionProyeccione;
use Maatwebsite\Excel\Concerns\WithHeadings;

class PoblacionProyeccionesExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        //
        return PoblacionProyeccione::all();
    }

    public function headings(): array{
        return ["cvegeo",
		"ph2016",
		"pm2016",
		"pt2016",
		"ph2017",
		"pm2017",
		"pt2017",
		"ph2018",
		"pm2018",
		"pt2018",
		"ph2019",
		"pm2019",
		"pt2019",
		"ph2020",
		"pm2020",
		"pt2020",
		"ph2021",
		"pm2021",
		"pt2021",
		"ph2022",
		"pm2022",
		"pt2022",
    ];
    }
}
