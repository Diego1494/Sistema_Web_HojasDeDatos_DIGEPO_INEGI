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

    public function getPoblacionData(Request $request)
    {
        if ($request->ajax()) {
            $length = $request->input('length');
            $start = $request->input('start');
    
            $query = Poblacion::select('*');
            $recordsTotal = $query->count();
    
            $data = $query->skip($start)->take($length)->get();
    
            return response()->json([
                'data' => $data,
                'recordsTotal' => $recordsTotal,
                'recordsFiltered' => $recordsTotal, // Para DataTables, puede ser diferente si aplicas algún filtro
            ]);
        }
    }
    

    public function importarPoblacion(Request $request){

        $request->validate([
            'documento' => 'required|mimes:csv,txt|max:10240', // Tamaño máximo de 10 MB
        ]);
        Excel::import(new PoblacionImport,request()->file('documento'));
        return back();
    }

    public function exportarPoblacion() 
    {
        return Excel::download(new PoblacionExport, 'poblacion.csv');
        
    }
}
