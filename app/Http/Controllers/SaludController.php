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

    public function getSaludData(Request $request)
    {
        if ($request->ajax()) {
            $length = $request->input('length');
            $start = $request->input('start');
    
            $query = Salud::select('*');
            $recordsTotal = $query->count();
    
            $data = $query->skip($start)->take($length)->get();
    
            return response()->json([
                'data' => $data,
                'recordsTotal' => $recordsTotal,
                'recordsFiltered' => $recordsTotal, // Para DataTables, puede ser diferente si aplicas algún filtro
            ]);
        }
    }
    

    public function importar(Request $request){

        $request->validate([
            'documento' => 'required|mimes:csv,txt|max:10240', // Tamaño máximo de 10 MB
        ]);
        
        Excel::import(new SaludImport,request()->file('documento'));
        return back();
    }

    public function exportar() 
    {
        return Excel::download(new SaludExport, 'salud.csv');
        
    }
    
}
