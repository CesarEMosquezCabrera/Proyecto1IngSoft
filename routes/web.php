<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\inicioController;
use App\Http\Controllers\productoController;
use App\Http\Controllers\roleController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', inicioController::class);



// Route::controller(productoController::class)->group(function(){

//     route::get('producto', 'principal')->name('producto.principal');

//     route::get('producto/{variable}/mostrar', 'mostrar')->name('producto.mostrar');

//     route::get('producto/crear', 'crear')->name('producto.crear');

//     route::post('producto','store')->name('producto.store');


//     Route::get('producto/{producto}/edit', 'editar')->name('producto.editar');

//     route::put('producto/{producto}', 'update')->name('producto.update');

//     route::delete('producto/{id}', 'borrar')->name('producto.borrar');

//     route::get('desactiva/{id}', 'desactivaproducto')->name('desactivapro');

//     route::get('activa/{id}', 'activaproducto')->name('activapro');
// });
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {

    Route::get('/dashboard', function () {
    return view('dashboard');
    })->name('dashboard');

    Route::controller(roleController::class)->group(function(){
        route::get('roles', 'principal')->name('roles.principal');
        route::get('roles/{variable}/mostrar', 'mostrar')->name('roles.mostrar');
    
        route::get('roles/crear', 'crear')->name('roles.crear');
    
        route::post('roles','store')->name('roles.store');
    
    
        Route::get('roles/{producto}/edit', 'editar')->name('roles.editar');
    
        route::put('roles/{producto}', 'update')->name('roles.update');
    
        route::delete('roles/{id}', 'borrar')->name('roles.borrar');
    
        route::get('desactiva/{id}', 'desactivaproducto')->name('desactivapro');
    
        route::get('activa/{id}', 'activaproducto')->name('activapro');
    });

    Route::controller(productoController::class)->group(function(){

        route::get('producto', 'principal')->name('producto.principal');
    
        route::get('producto/{variable}/mostrar', 'mostrar')->name('producto.mostrar');
    
        route::get('producto/crear', 'crear')->name('producto.crear');
    
        route::post('producto','store')->name('producto.store');
    
    
        Route::get('producto/{producto}/edit', 'editar')->name('producto.editar');
    
        route::put('producto/{producto}', 'update')->name('producto.update');
    
        route::delete('producto/{id}', 'borrar')->name('producto.borrar');
    
        route::get('desactiva/{id}', 'desactivaproducto')->name('desactivapro');
    
        route::get('activa/{id}', 'activaproducto')->name('activapro');
    });
});


// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified',
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });
