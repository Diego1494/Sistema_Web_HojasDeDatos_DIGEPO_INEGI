<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Imports\PoblacionSeleccionadoImport;
use App\Exports\PoblacionSeleccionadoExport;
use App\Models\PoblacionSeleccionado;
use Maatwebsite\Excel\Facades\Excel;

class PoblacionSeleccionadoController extends Controller
{
    //

    public function index(){
        $poblacionselec = PoblacionSeleccionado::get();
        return view('Admin.PoblacionSeleccionado', compact('poblacionselec'));

    }

    public function getSeleccionadoData(Request $request)
    {
        if ($request->ajax()) {
            $length = $request->input('length');
            $start = $request->input('start');
    
            $query = PoblacionSeleccionado::select('*');
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
        Excel::import(new PoblacionSeleccionadoImport,request()->file('documento'));
        return back();
    }

    public function exportar() 
    {
        return Excel::download(new PoblacionSeleccionadoExport, 'poblacionseleccionado.csv');
        
    }
}
