<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use App\Models\Tic;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class TicsImport implements ToModel, WithHeadingRow
{
   
    public function model(array $row)
    {
        return new Tic([
            'cvegeo'  => $row['cvegeo'],
		'viviendas_habitadas'  => $row['viviendas_habitadas'],
		'compu_dispone' => $row['compu_dispone'],
		'inter_dispone' => $row['inter_dispone'],
		'telefono_dispone' => $row['telefono_dispone'],
		'tvcable_dispone' => $row['tvcable_dispone'],
		'celu_dispone' => $row['celu_dispone'],
		'compu_nodispone' => $row['compu_nodispone'],
		'internet_nodispone' => $row['internet_nodispone'],
		'telefono_nodispone' => $row['telefono_nodispone'],
		'tvcable_nodispone' => $row['tvcable_nodispone'],
		'celu_nodispone' => $row['celu_nodispone'],
		'compu_noesp'=> $row['compu_noesp'],
		'inter_noesp' => $row['inter_noesp'],
		'telefono_noesp' => $row['telefono_noesp'],
		'tvcable_noesp' => $row['tvcable_noesp'],
		'celu_noesp' => $row['celu_noesp'],
        ]);
    }
}
