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

    public function getEducacionData(Request $request)
    {
        if ($request->ajax()) {
            $length = $request->input('length');
            $start = $request->input('start');
    
            $query = Educacion::select('*');
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
        Excel::import(new EducacionImport,request()->file('documento'));
        return back();
    }

    public function exportar() 
    {
        return Excel::download(new EducacionExport, 'educacion.csv');
        
    }
}
