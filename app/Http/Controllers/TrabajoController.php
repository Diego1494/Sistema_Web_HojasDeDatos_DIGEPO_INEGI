<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Imports\TrabajoImport;
use App\Exports\TrabajoExport;
use App\Models\Trabajo;
use Maatwebsite\Excel\Facades\Excel;

class TrabajoController extends Controller
{
    //

    public function index(){
        $trabajo = Trabajo::get();
        return view('Admin.Trabajo', compact('trabajo'));

    }
    

    public function importar(){
        Excel::import(new TrabajoImport,request()->file('documento'));
        return back();
    }

    public function exportar() 
    {
        return Excel::download(new TrabajoExport, 'trabajo.csv');
        
    }
}
