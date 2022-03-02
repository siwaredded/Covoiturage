<?php

use App\Http\Controllers\TrajetController;
use Illuminate\Support\Facades\Route;

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

Route::get("/villageois", 'App\Http\Controllers\VillageoisController@index')->name("villageois");
Route::get("/villageois/create", 'App\Http\Controllers\VillageoisController@create')->name("villageois.create");
Route::get("/villageois/create/ajouter", 'App\Http\Controllers\VillageoisController@store')->name("villageois.ajouter");

