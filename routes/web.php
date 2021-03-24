<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

use App\Models\Elementos;

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

Route ::get('/', 'App\Http\Controllers\ParcialController@index')->name('parcial.index');

Route ::post('crear', 'App\Http\Controllers\ParcialController@create')->name('parcial.store');

Route::get('agregar', 'App\Http\Controllers\ParcialController@vistaagregar')->name('elementos.agregar');

Route::delete('/{id}', 'App\Http\Controllers\ParcialController@delete' )->name('parcial.destroy');

Route::get('/{id}/editar', 'App\Http\Controllers\ParcialController@edit' )->name('parcial.edit');

Route::put('/{elementos}/editar', 'App\Http\Controllers\ParcialController@update' )->name('parcial.update');