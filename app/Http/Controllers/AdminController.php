<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Imports\ViviendaImport;
use App\Exports\ViviendaExport;
use App\Models\Vivienda;
use Maatwebsite\Excel\Facades\Excel;

class AdminController extends Controller
{
    //

    public function index(){
        $vivienda = Vivienda::get();
        return view('Admin.Archivos', compact('vivienda'));
    }

    public function importarVivienda(){
        Excel::import(new ViviendaImport,request()->file('documento'));
        return back();
    }

    public function exportarVivienda() 
    {
        return Excel::download(new ViviendaExport, 'vivienda.csv');
        
    }

    


}
