<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Imports\TicsImport;
use App\Exports\TicsExport;
use App\Models\Tic;
use Maatwebsite\Excel\Facades\Excel;

class TicsController extends Controller
{
    //
    public function index(){
        $tic = Tic::get();
        return view('Admin.Tic', compact('tic'));

    }
    

    public function importar(){
        Excel::import(new TicsImport,request()->file('documento'));
        return back();
    }

    public function exportar() 
    {
        return Excel::download(new TicsExport, 'tics.csv');
        
    }
}
