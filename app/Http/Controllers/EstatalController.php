<?php

namespace App\Http\Controllers;

use App\Models\Llave;
use App\Models\Poblacion;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;




class EstatalController extends Controller
{
    //
    public function Estatal(){

        return view('Estatal');
    }

    public function graficaPoblacionEstatal(Request $request){
        $estatal = $request->estatal;
        
         $Llave =Llave::join("Poblacion","Poblacion.cve_geo", "=", "Llave.cvgeo")
         ->select(Llave::raw("SUM (Poblacion.hombres) as total_hombres"),
          Llave::raw("SUM (Poblacion.mujeres) as total_mujeres")) 
          ->where("Llave.cvgeo","=",$estatal)->get();
  
          $resultado[]= ["Total Poblacion","Sexo", "Total"];
       
          foreach ($Llave as $row){
            //  foreach($row as $key=> $value){
              $resultado[]=["","Hombres", $row->total_hombres];
              $resultado[]=["","Mujeres", $row->total_mujeres];
          //    }*/
            
          }
          $respuesta="{\"datos\":".json_encode($resultado)."}";
        
  
         return response($respuesta, Response::HTTP_OK);     
      
  
    }
  
    public function graficaSaludEstatal(Request $request){
        $estatal = $request->estatal;
      
      $graficasalud =Llave::join("Salud", "Salud.cve_geo", "=", "Llave.cvgeo")
         ->select(Llave::raw("SUM (Salud.imss) as total_imss"),
          Llave::raw("SUM (Salud.issste) as total_issste"),
          Llave::raw("SUM (Salud.bienestar) as total_bienestar"),
          Llave::raw("SUM (Salud.privada) as total_privada"),
          Llave::raw("SUM (Salud.otra_institucion) as total_otra_institucion"),
          Llave::raw("SUM (Salud.no_afiliada) as total_no_afiliada"))->where("Llave.cvgeo","=",$estatal)->get();
  
         $resultado[]= ["region", ""];
       
          foreach ($graficasalud as $row){
            //  foreach($row as $key=> $value){
              $resultado[]=["IMSS", $row->total_imss];
              $resultado[]=["ISSSTE", $row->total_issste];
              $resultado[]=["Bienestar", $row->total_bienestar];
              $resultado[]=["Privada", $row->total_privada];
              $resultado[]=["Otra Institucion", $row->total_otra_institucion];
              $resultado[]=["No Afiliada", $row->total_no_afiliada];
          //    }*/
            
          }
          $respuesta="{\"datos\":".json_encode($resultado)."}";
        
  
         return response($respuesta, Response::HTTP_OK); 
  
    }
  
    public function graficaProyeccionesEstatal(Request $request){
        $estatal = $request->estatal;
  
      $graficaProyecciones = Llave::join("Poblacion_proyecciones", "Poblacion_proyecciones.cvegeo", "=", "Llave.cvgeo")->select(Llave::raw("SUM (Poblacion_proyecciones.pt2016) as total_proyecciones2016"),Llave::raw("SUM (Poblacion_proyecciones.pt2017) as total_proyecciones2017"),Llave::raw("SUM (Poblacion_proyecciones.pt2018) as total_proyecciones2018"),Llave::raw("SUM (Poblacion_proyecciones.pt2019) as total_proyecciones2019"),Llave::raw("SUM (Poblacion_proyecciones.pt2020) as total_proyecciones2020"),Llave::raw("SUM (Poblacion_proyecciones.pt2021) as total_proyecciones2021"),Llave::raw("SUM (Poblacion_proyecciones.pt2022) as total_proyecciones2022"))->where("Llave.cvgeo","=",$estatal)->get();
  
      $resultado[]= ["Estatal", ""];
  
      foreach ($graficaProyecciones as $row){
        //  foreach($row as $key=> $value){
              $resultado[]=["2016", $row->total_proyecciones2016];
              $resultado[]=["2017", $row->total_proyecciones2017];
              $resultado[]=["2018", $row->total_proyecciones2018];
              $resultado[]=["2019", $row->total_proyecciones2019];
              $resultado[]=["2020", $row->total_proyecciones2020];
              $resultado[]=["2021", $row->total_proyecciones2021];
              $resultado[]=["2022", $row->total_proyecciones2022];
             
      //    }*/
        
      }
      $respuesta="{\"datos\":".json_encode($resultado)."}";
    
  
     return response($respuesta, Response::HTTP_OK); 
  
    }
  
    public function graficaTrabajoEstatal(Request $request){
        $estatal = $request->estatal;
  
      $graficaTrabajo = Llave::join("Trabajo", "Trabajo.cve_geo", "=", "Llave.cvgeo")->select(Llave::raw("SUM (Trabajo.total_eco_activa) as total_eco_activa"), Llave::raw("SUM (Trabajo.no_economicamente_activa) as total_no_eco_activa"))->where("Llave.cvgeo","=",$estatal)->get();
       
      $resultado[]= ["Estatal", $estatal];
  
      foreach ($graficaTrabajo as $row){
        //  foreach($row as $key=> $value){
          $resultado[]=["total economicamente activa", $row->total_eco_activa];
          $resultado[]=["total no economicamente activa", $row->total_no_eco_activa];
             
      //    }*/
        
      }
      $respuesta="{\"datos\":".json_encode($resultado)."}";
    
  
     return response($respuesta, Response::HTTP_OK); 
    }
  
    public function graficaViviendaEstatal(Request $request){
        $estatal = $request->estatal;
  
      $graficaVivienda = Llave::join("Vivienda", "Vivienda.cvgeo", "=", "Llave.cvgeo")->select(Llave::raw("SUM (Vivienda.aguaentubada_dispone) as total_aguaentubada_dispone"),Llave::raw("SUM (Vivienda.drenaje_dispone) as total_drenaje_dispone"),Llave::raw("SUM (Vivienda.drenaje_nodispone) as total_drenaje_nodispone"),Llave::raw("SUM (Vivienda.electricidad_dispone) as total_electricidad_dispone"))->where("Llave.cvgeo","=",$estatal)->get();
      
      $resultado[]= ["Estatal", ""];
  
      foreach ($graficaVivienda as $row){
        //  foreach($row as $key=> $value){
          $resultado[]=["Agua Entubada", $row->total_aguaentubada_dispone];
          $resultado[]=["Drenaje", $row->total_drenaje_dispone];
          
          $resultado[]=["Electricidad", $row->total_electricidad_dispone];
      //    }*/
        
      }
      $respuesta="{\"datos\":".json_encode($resultado)."}";
    
  
     return response($respuesta, Response::HTTP_OK);
  
  
    }
  
    public function graficaTicsEstatal(Request $request){
        $estatal = $request->estatal;
  
      $graficaTics = Llave::join("Tics", "Tics.cvgeo", "=", "Llave.cvgeo")->select(Llave::raw("SUM (Tics.compu_dispone) as total_compu_dispone"),Llave::raw("SUM (Tics.compu_nodispone) as total_compu_nodispone"),Llave::raw("SUM (Tics.inter_dispone) as total_inter_dispone"),Llave::raw("SUM (Tics.internet_nodispone) as total_internet_nodispone"),Llave::raw("SUM (Tics.telefono_dispone) as total_telefono_dispone"),Llave::raw("SUM (Tics.telefono_nodispone) as total_telefono_nodispone"), Llave::raw("SUM (Tics.tvcable_dispone) as total_tvcable_dispone"), Llave::raw("SUM (Tics.tvcable_nodispone) as total_tvcable_nodispone"),Llave::raw("SUM (Tics.celu_dispone) as total_celu_dispone"), Llave::raw("SUM (Tics.celu_nodispone) as total_celu_nodispone"))->where("Llave.cvgeo","=",$estatal)->get();
     
      $resultado[]= ["Estatal", ""];
  
      foreach ($graficaTics as $row){
        //  foreach($row as $key=> $value){
          $resultado[]=["Computadora", $row->total_compu_dispone];
                
          $resultado[]=["Internet", $row->total_inter_dispone];
          
          $resultado[]=["Telefono", $row->total_telefono_dispone];
          
          $resultado[]=["TvCable", $row->total_tvcable_dispone];
          
          $resultado[]=["Celular", $row->total_celu_dispone];
      //    }*/
        
      }
      $respuesta="{\"datos\":".json_encode($resultado)."}";
    
  
     return response($respuesta, Response::HTTP_OK);
    }

    public function graficaEducacionEstatal(Request $request){
      //primaria secundaria bachillerato licenciatura posgrado
  
      $estatal = $request->estatal;
      
      $graficaEducacion = Llave::join("Educacion", "Educacion.cve_geo", "=", "Llave.cvgeo")->select(Llave::raw("SUM (Educacion.basico_primaria) as total_primaria"),Llave::raw("SUM (Educacion.basico_secundaria) as total_secundaria"),Llave::raw("SUM (Educacion.media_sup_prepa_bachillerato) as total_bachillerato"),Llave::raw("SUM (Educacion.sup_licenciatura) as total_licenciatura"),Llave::raw("SUM (Educacion.sup_posgrado) as total_posgrado"))->where("Llave.cvgeo","=",$estatal)->get();
      $resultado[]= ["Estatal", ""];
  
      foreach ($graficaEducacion as $row){
        //  foreach($row as $key=> $value){
              $resultado[]=["Primaria", $row->total_primaria];
              
              $resultado[]=["Secundaria", $row->total_secundaria];
              
              $resultado[]=["Bachillerato", $row->total_bachillerato];
              
              $resultado[]=["Licenciatura", $row->total_licenciatura];
              
              $resultado[]=["Posgrado", $row->total_posgrado];
                
      }
  
      $respuesta="{\"datos\":".json_encode($resultado)."}";
    
  
     return response($respuesta, Response::HTTP_OK);
  
    }
  

    
}
