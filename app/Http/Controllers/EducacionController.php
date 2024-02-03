<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Imports\EducacionImport;
use App\Exports\EducacionExport;
use App\Models\Educacion;
use Maatwebsite\Excel\Facades\Excel;

class EducacionController extends Controller
{
    //

    public function index(){
        $educacion = Educacion::get();
        return view('Admin.Educacion', compact('educacion'));

    }
    

    public function importar(){
        Excel::import(new EducacionImport,request()->file('documento'));
        return back();
    }

    public function exportar() 
    {
        return Excel::download(new EducacionExport, 'educacion.csv');
        
    }
}
