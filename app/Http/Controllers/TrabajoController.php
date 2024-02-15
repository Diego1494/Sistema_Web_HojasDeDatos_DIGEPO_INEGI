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

    public function getTrabajoData(Request $request)
    {
        if ($request->ajax()) {
            $length = $request->input('length');
            $start = $request->input('start');
    
            $query = Trabajo::select('*');
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
        
        Excel::import(new TrabajoImport,request()->file('documento'));
        return back();
    }

    public function exportar() 
    {
        return Excel::download(new TrabajoExport, 'trabajo.csv');
        
    }
}
