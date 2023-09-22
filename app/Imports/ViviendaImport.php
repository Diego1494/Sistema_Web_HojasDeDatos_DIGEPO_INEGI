<?php

namespace App\Imports;

use App\Models\Vivienda;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ViviendaImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Vivienda([
            'cvgeo'     => $row['cvgeo'],
            'viviendas_habitadas'    => $row['viviendas_habitadas'],
            'aguaentubada_dispone'    => $row['aguaentubada_dispone'],
            'drenaje_dispone'    => $row['drenaje_dispone'],
            'drenaje_nodispone'    => $row['drenaje_nodispone'],
            'drenaje_noesp'    => $row['drenaje_noesp'],
            'electricidad_dispone'    => $row['electricidad_dispone'],
        ]);
    }
}
