<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Imports\SaludImport;
use App\Exports\SaludExport;
use App\Models\Salud;
use Maatwebsite\Excel\Facades\Excel;

class SaludController extends Controller
{
    //
    public function index(){
        $salud = Salud::get();
        return view('Admin.Salud', compact('salud'));

    }
    

    public function importar(){
        Excel::import(new SaludImport,request()->file('documento'));
        return back();
    }

    public function exportar() 
    {
        return Excel::download(new SaludExport, 'salud.csv');
        
    }
    
}
