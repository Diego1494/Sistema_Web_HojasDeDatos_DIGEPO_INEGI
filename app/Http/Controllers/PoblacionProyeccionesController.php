<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Imports\PoblacionProyecciones;
use App\Exports\PoblacionProyeccionesExport;
use App\Models\PoblacionProyeccione;
use Maatwebsite\Excel\Facades\Excel;

class PoblacionProyeccionesController extends Controller
{
    //

    public function index(){
        $poblacionproyecciones = PoblacionProyeccione::get();
        return view('Admin.PoblacionProyecciones', compact('poblacionproyecciones'));

    }
    public function getProyeccionData(Request $request)
    {
        if ($request->ajax()) {
            $length = $request->input('length');
            $start = $request->input('start');
    
            $query = PoblacionProyeccione::select('*');
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
        Excel::import(new PoblacionProyecciones,request()->file('documento'));
        return back();
    }

    public function exportar() 
    {
        return Excel::download(new PoblacionProyeccionesExport, 'poblacionproyecciones.csv');
        
    }
}
