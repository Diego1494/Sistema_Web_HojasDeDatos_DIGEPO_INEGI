<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Imports\PoblacionImport;
use App\Exports\PoblacionExport;
use App\Models\Poblacion;
use Maatwebsite\Excel\Facades\Excel;

class ProductoController extends Controller
{
    //

    public function index(){
        $poblacion = Poblacion::get();
        return view('Admin.Poblacion', compact('poblacion'));

    }
    

    public function importarPoblacion(){
        Excel::import(new PoblacionImport,request()->file('documento'));
        return back();
    }

    public function exportarPoblacion() 
    {
        return Excel::download(new PoblacionExport, 'poblacion.csv');
        
    }
}
