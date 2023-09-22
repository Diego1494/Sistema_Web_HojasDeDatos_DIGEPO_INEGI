<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Imports\PoblacionSeleccionadoImport;
use App\Exports\PoblacionSeleccionadoExport;
use App\Models\PoblacionSeleccionado;
use Maatwebsite\Excel\Facades\Excel;

class PoblacionSeleccionadoController extends Controller
{
    //

    public function index(){
        $poblacionselec = PoblacionSeleccionado::get();
        return view('Admin.PoblacionSeleccionado', compact('poblacionselec'));

    }
    

    public function importar(){
        Excel::import(new PoblacionSeleccionadoImport,request()->file('documento'));
        return back();
    }

    public function exportar() 
    {
        return Excel::download(new PoblacionSeleccionadoExport, 'poblacionseleccionado.csv');
        
    }
}
