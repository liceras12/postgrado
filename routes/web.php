<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Prueba;
use App\Http\Middleware\VerifySession;
use App\Http\Controllers\ModuloController;
use App\Http\Controllers\MenuPrincipalController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\RolController;
use App\Http\Controllers\RolMenuPrincipalController;
use App\Http\Controllers\UniversidadController;
use App\Http\Controllers\FacultadController;
use App\Http\Controllers\ConfiguracionController;
use App\Http\Controllers\AreaController;
use App\Models\Configuracion;
use App\Models\Universidad;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;


/*Route::get('/', function () {
    //return view('welcome');
    return view('login');
});*/

Route::get('/', [LoginController::class, 'index'])->name('login.index'); // Ruta para mostrar la vista de inicio de sesión
Route::post('/login', [LoginController::class, 'processLogin'])->name('login.process'); // Ruta para procesar el inicio de sesión
Route::get('/logout', [LoginController::class, 'logout'])->name('logout'); // Ruta para cerrar sesión
Route::get('/dashboard', function () {
    return view('dashboard'); // Asume que tienes una vista llamada 'dashboard.blade.php'
})->middleware('auth');

/*
Route::get('login',[LoginController::class,'index']);
Route::post('login',[Prueba::class,'login']);
Route::get('logout',[Prueba::class,'logout']);
Route::get('logout',[Prueba::class,'logout']);

Route::middleware(['verify'])->group(function (){
    Route::get('index',[Prueba::class,'index']);
    Route::get('saludo',[Prueba::class,'saludo']);
    
});

Route::get('users', [UserController::class, 'index'])->name('users.index');

Route::resource('modulos', ModuloController::class);
Route::resource('menus-principales', MenuPrincipalController::class);
Route::resource('menus', MenuController::class);
Route::resource('roles', RolController::class);
Route::resource('roles-menus-principales', RolMenuPrincipalController::class);
Route::resource('universidades', UniversidadController::class);
Route::resource('configuraciones', ConfiguracionController::class);
Route::resource('areas', AreaController::class);//
Route::resource('facultades', FacultadController::class);

Route::get('/areas', [AreaController::class, 'index']);
Route::post('/areas', [AreaController::class, 'store']);
Route::put('/areas/{id_area}', [AreaController::class, 'update']);
Route::delete('/areas/{id_area}', [AreaController::class, 'destroy']);

//Route::resource('Facultad.crud', )
Route::resource('VMenuPrincipal', MenuController::class);


/*Route::get('/', [LoginController::class, 'index'])->name('login.index');
Route::post('/login', [LoginController::class, 'processLogin'])->name('login.process');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/dashboard', function () {return view('dashboard');})->name('dashboard');*/