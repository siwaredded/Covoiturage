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
})->name("welcome");

Route::get("/villageois", 'App\Http\Controllers\VillageoisController@index')->name("villageois");
Route::get("/villageois/create", 'App\Http\Controllers\VillageoisController@create')->name("villageois.create");


Route::get("/villageois/create/ajouter", 'App\Http\Controllers\VillageoisController@store')->name("villageois.ajouter");
Route::delete('/villageois/delete/{villageois}', 'App\Http\Controllers\VillageoisController@delete')->name("villageois.supprimer");
Route::post('/villageois/update/{villageois}', 'App\Http\Controllers\VillageoisController@update')->name("villageois.update");

Route::get("/villageois/{villageois}", 'App\Http\Controllers\VillageoisController@edit')->name("villageois.edit");
Route::get("/rechercherTrajet}", 'App\Http\Controllers\TrajetsController@RechercheTrajet')->name("trajets.rechercher");
Route::get("/proposerTrajet}", 'App\Http\Controllers\TrajetsController@ProposerTrajet')->name("trajets.proposer");

Route::get("/login", 'App\Http\Controllers\Auth\LoginController@edit')->name("login");
Route::get("/register", 'App\Http\Controllers\Auth\RegisterController@edit')->name("register");
