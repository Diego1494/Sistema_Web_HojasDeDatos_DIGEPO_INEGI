<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Imports\PoblacionProyecciones;
use App\Exports\PoblacionProyeccionesExport;
use App\Models\PoblacionProyeccione;
use Maatwebsite\Excel\Facades\Excel;

class PoblacionProyeccionesController extends Controller
{
    //

    public function index(){
        $poblacionproyecciones = PoblacionProyeccione::get();
        return view('Admin.PoblacionProyecciones', compact('poblacionproyecciones'));

    }
    

    public function importar(){
        Excel::import(new PoblacionProyecciones,request()->file('documento'));
        return back();
    }

    public function exportar() 
    {
        return Excel::download(new PoblacionProyeccionesExport, 'poblacionproyecciones.csv');
        
    }
}
