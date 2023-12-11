<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControllerMascotas;
use App\Http\Controllers\ControllerUsuario;

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

Route::post('/registrar-mascota', [ControllerMascotas::class, 'registrarMascota'])->name('registrar-mascota');

Route::delete('/eliminar-mascota', [ControllerMascotas::class, 'eliminarMascota'])->name('eliminar-mascota');

Route::put('/actualizar-mascota', [ControllerMascotas::class, 'actualizarMascotaPorNombre'])->name('actualizar-mascota-por-nombre');

Route::get('/mostrar-tabla', [ControllerMascotas::class, 'mostrarTabla'])->name('mostrar-tabla');

Route::post('/registrar-usuario', [ControllerUsuario::class, 'registrarUsuario'])->name('registrar-usuario');

Route::get('/Datos', function () {
    return view('Datos_Clínicos_G');
})->name('Datos');
Route::get('/carnet1', function () {
    return view('carnet');
})->name('carnet');


Route::get('/vacunas', function () {
    return view('vacunas');
})->name('vacunas');

Route::get('/vacunas2', function () {
    return view('vacunas2');
})->name('vacunas');



Route::get('/', function () {
    return view('Inicio_Sesion');
})->name('Login');
 

Route::get('/Perfil_U', function () {
    return view('Perfil_Usuario');
})->name('Perfil_Usuario');

Route::get('/Perros-Perfil', function () {
    return view('Perros/Perfil');
})->name('Perfil');

Route::get('/Perros-Registro', function () {
    return view('Perros/Registro');
})->name('Registro');
 

 
Route::get('/registrou', function () {
    return view('registrou');
})->name('registrou');
 

Route::get('/Actualizar', function () {
    return view('Actualizar');
})->name('actualizar');

Route::get('/Eliminar', function () {
 return view('Eliminar');
})->name('eliminar');

Route::get('/carnet1', function () {
    return view('carnet1');
})->name('carnet1');

Route::get('/tabla', function () {
    return view('tabla');
})->name('tabla');


Route::get('/Bienvenida', function () {
    return view('Bienvenida');
})->name('Bienvenida');
