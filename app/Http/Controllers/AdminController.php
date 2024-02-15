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

    public function getViviendaData(Request $request)
    {
        if ($request->ajax()) {
            $length = $request->input('length');
            $start = $request->input('start');
    
            $query = Vivienda::select('*');
            $recordsTotal = $query->count();
    
            $data = $query->skip($start)->take($length)->get();
    
            return response()->json([
                'data' => $data,
                'recordsTotal' => $recordsTotal,
                'recordsFiltered' => $recordsTotal, // Para DataTables, puede ser diferente si aplicas algún filtro
            ]);
        }
    }


    public function importarVivienda(Request $request){

        $request->validate([
            'documento' => 'required|mimes:csv,txt|max:10240', // Tamaño máximo de 10 MB
        ]);
        Excel::import(new ViviendaImport,request()->file('documento'));
        return back();
    }

    public function exportarVivienda() 
    {
        return Excel::download(new ViviendaExport, 'vivienda.csv');
        
    }

    


}
