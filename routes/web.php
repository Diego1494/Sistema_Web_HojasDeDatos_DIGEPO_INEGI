<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DatosController;
use App\Http\Controllers\EstatalController;
use App\Http\Controllers\RegionalController;
use App\Http\Controllers\MunicipalController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\TrabajoController;
use App\Http\Controllers\PoblacionSeleccionadoController;
use App\Http\Controllers\PoblacionProyeccionesController;
use App\Http\Controllers\TicsController;
use App\Http\Controllers\SaludController;
use App\Http\Controllers\EducacionController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function () {
    return view('welcome');
});
Route::get('/welcome', function () {
    return view('welcome');
});

/*
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');*/

Route::get('/Datos', [DatosController::class,'Datos']);

//Route::get('/Estatal', [EstatalController::class,'Estatal']);

Route::get('/Estatal', [EstatalController::class, 'Estatal'])->name('Estatal');

Route::get('/Regional', [RegionalController::class,'Regional']);

Route::get('/Municipal', [MunicipalController::class,'Municipal']);

Route::get('/Descripcion', [MunicipalController::class,'Descripcion']);

Route::get('/graficaPoblacionMunicipal', [MunicipalController::class,'graficaPoblacionMunicipal']);

Route::get('/graficaSaludMunicipal', [MunicipalController::class,'graficaSaludMunicipal']);

Route::get('/graficaProyeccionesMunicipal', [MunicipalController::class,'graficaProyeccionesMunicipal']);

Route::get('/graficaTrabajoMunicipal', [MunicipalController::class,'graficaTrabajoMunicipal']);

Route::get('/graficaViviendaMunicipal', [MunicipalController::class,'graficaViviendaMunicipal']);

Route::get('/graficaTicsMunicipal', [MunicipalController::class,'graficaTicsMunicipal']);

Route::get('/graficaEducacionMunicipal', [MunicipalController::class,'graficaEducacionMunicipal']);
// Version asincrona DIGEPO usar GET para concatenar el value del combo

Route::get('/grafica', [RegionalController::class,'grafica']);

Route::get('/graficaSalud', [RegionalController::class,'graficaSalud']);

Route::get('/graficaProyecciones', [RegionalController::class,'graficaProyecciones']);

Route::get('/graficaTrabajo', [RegionalController::class,'graficaTrabajo']);

Route::get('/graficaVivienda', [RegionalController::class,'graficaVivienda']);

Route::get('/graficaTics', [RegionalController::class,'graficaTics']);

Route::get('/graficaEducacion', [RegionalController::class,'graficaEducacion']);

// Graficas Estatal

Route::get('/graficaPoblacionEstatal', [EstatalController::class,'graficaPoblacionEstatal']);

Route::get('/graficaSaludEstatal', [EstatalController::class,'graficaSaludEstatal']);

Route::get('/graficaProyeccionesEstatal', [EstatalController::class,'graficaProyeccionesEstatal']);

Route::get('/graficaTrabajoEstatal', [EstatalController::class,'graficaTrabajoEstatal']);

Route::get('/graficaViviendaEstatal', [EstatalController::class,'graficaViviendaEstatal']);

Route::get('/graficaTicsEstatal', [EstatalController::class,'graficaTicsEstatal']);

Route::get('/graficaEducacionEstatal', [EstatalController::class,'graficaEducacionEstatal']);

Route::get('/dashboard', [HomeController::class,'dashboard'])->middleware(['auth', 'verified'])->name('dashboard');

Route::get('HojaEstatalPDF', [EstatalController::class, 'generatePDF'])->name('HojaEstatalPDF');

Route::get('edit/{id}', [HomeController::class, 'edit'])
                ->middleware('auth.admin')
                ->name('edit');

Route::post('update/{id}', [HomeController::class, 'update'])->name('update');

Route::get('destroy/{id}', [HomeController::class, 'destroy'])->name('destroy');

Route::get('Admin/Vivienda',[AdminController::class, 'index'])->name('Admin.Vivienda');

Route::get('vivienda-csv',[AdminController::class, 'exportarVivienda'])->name('exportarVi');

Route::post('importar', [AdminController::class, 'importarVivienda'])->name('importar');

Route::get('Admin/Poblacion',[ProductoController::class, 'index'])->name('Admin.Poblacion');

Route::get('poblacion-csv',[ProductoController::class, 'exportarPoblacion'])->name('exportarPO');;

Route::post('importar', [ProductoController::class, 'importarPoblacion'])->name('importar');

Route::get('Admin/Trabajo',[TrabajoController::class, 'index'])->name('Admin.Trabajo');

Route::get('trabajo-csv',[TrabajoController::class, 'exportar'])->name('exportarTr');

Route::post('importar', [TrabajoController::class, 'importar'])->name('importar');

Route::get('Admin/PoblacionSeleccionado',[PoblacionSeleccionadoController::class, 'index'])->name('Admin.PoblacionSeleccionado');

Route::get('exportar',[PoblacionSeleccionadoController::class, 'exportar'])->name('exportar');

Route::post('importar', [PoblacionSeleccionadoController::class, 'importar'])->name('importar');

Route::get('Admin/PoblacionProyecciones',[PoblacionProyeccionesController::class, 'index'])->name('Admin.PoblacionProyecciones');

Route::get('poblacionproyecciones-csv',[PoblacionProyeccionesController::class, 'exportar'])->name('exportarPY');

Route::post('importar', [PoblacionProyeccionesController::class, 'importar'])->name('importar');

Route::get('Admin/Tics',[TicsController::class, 'index'])->name('Admin.Tics');

Route::get('tics-csv',[TicsController::class, 'exportar'])->name('exportarTic');

Route::post('importar', [TicsController::class, 'importar'])->name('importar');

Route::get('Admin/Salud',[SaludController::class, 'index'])->name('Admin.Salud');

Route::get('salud-csv',[SaludController::class, 'exportar'])->name('exportarSA');

Route::post('importar', [SaludController::class, 'importar'])->name('importar');

Route::get('Admin/Educacion',[EducacionController::class, 'index'])->name('Admin.Educacion');

Route::get('educacion-csv',[EducacionController::class, 'exportar'])->name('exportarED');

Route::post('importar', [EducacionController::class, 'importar'])->name('importar');

Route::get('get/educacion/data', [EducacionController::class, 'getEducacionData'])->name('get.educacion.data');

Route::get('get/vivienda/data', [AdminController::class, 'getViviendaData'])->name('get.vivienda.data');

Route::get('get/poblacion/data', [ProductoController::class, 'getPoblacionData'])->name('get.poblacion.data');

Route::get('get/proyeccion/data', [PoblacionProyeccionesController::class, 'getProyeccionData'])->name('get.proyeccion.data');

Route::get('get/seleccionado/data', [PoblacionSeleccionadoController::class, 'getSeleccionadoData'])->name('get.seleccionado.data');

Route::get('get/salud/data', [SaludController::class, 'getSaludData'])->name('get.salud.data');

Route::get('get/tic/data', [TicsController::class, 'getTicData'])->name('get.tic.data');

Route::get('get/trabajo/data', [TrabajoController::class, 'getTrabajoData'])->name('get.trabajo.data');

require __DIR__.'/auth.php';

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
