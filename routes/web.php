<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\inicioController;
use App\Http\Controllers\productoController;
use App\Http\Controllers\categoriaController;
use App\Http\Controllers\roleController;
use App\Http\Controllers\profileController;

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
        Route::get('roles', 'principal')->name('roles.principal');
        Route::get('roles/{variable}/mostrar', 'mostrar')->name('roles.mostrar');
    
        route::get('roles/crear', 'crear')->name('roles.crear');
    
        route::post('roles','store')->name('roles.store');
    
    
        Route::get('roles/{producto}/edit', 'editar')->name('roles.editar');
    
        route::put('roles/{producto}', 'update')->name('roles.update');
    
        route::delete('roles/{id}', 'borrar')->name('roles.borrar');
    
        route::get('desactivarROLES/{id}', 'desactivaroles')->name('desactivarol');
    
        route::get('activarROLES/{id}', 'activaroles')->name('activarol');
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

    Route::controller(categoriaController::class)->group(function(){

        route::get('categoria', 'principal')->name('categorias.principal');
    
        route::get('categoria/{variable}/mostrar', 'mostrar')->name('categorias.mostrar');
    
        route::get('categoria/crear', 'crear')->name('categorias.crear');
    
        route::post('categoria','store')->name('categorias.store');
    
    
        Route::get('categoria/{producto}/edit', 'editar')->name('categorias.editar');
    
        route::put('categoria/{producto}', 'update')->name('categorias.update');
    
        route::delete('categoria/{id}', 'borrar')->name('categorias.borrar');
    
        route::get('desactivaCC/{id}', 'desactivacategoria')->name('desactivacat');
    
        route::get('activaCC/{id}', 'activacategoria')->name('activacat');
    });

    Route::controller(profileController::class)->group(function(){

        route::get('profiles', 'principal')->name('profiles.principal');
    
        route::get('profiles/{variable}/mostrar', 'mostrar')->name('profiles.mostrar');
    
        route::get('profiles/crear', 'crear')->name('profiles.crear');
    
        route::post('profiles','store')->name('profiles.store');
    
    
        Route::get('profiles/{producto}/edit', 'editar')->name('profiles.editar');
    
        route::put('profiles/{producto}', 'update')->name('profiles.update');
    
        route::delete('profiles/{id}', 'borrar')->name('profiles.borrar');
    
        route::get('desactivarPerfile/{id}', 'desactivaprofiles')->name('desactivaprofile');
    
        route::get('activarPerfile/{id}', 'activaprofiles')->name('activaprofile');
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
