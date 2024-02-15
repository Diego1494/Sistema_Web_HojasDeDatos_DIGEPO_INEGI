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

    public function getTicData(Request $request)
    {
        if ($request->ajax()) {
            $length = $request->input('length');
            $start = $request->input('start');
    
            $query = Tic::select('*');
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
        
        Excel::import(new TicsImport,request()->file('documento'));
        return back();
    }

    public function exportar() 
    {
        return Excel::download(new TicsExport, 'tics.csv');
        
    }
}
