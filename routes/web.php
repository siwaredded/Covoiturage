<?php

use App\Http\Livewire\Admin\AdminDashboardComponent;
use App\Http\Livewire\User\UserDashboardComponent;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::group(['namespace' => 'App\Http\Controllers'], function () {
    Route::get("/villageois", 'VillageoisController@index')->name("villageois");
    Route::get("/villageois/create", 'VillageoisController@create')->name("villageois.create");
    
    Route::get("/villageois/create/ajouter", 'VillageoisController@store')->name("villageois.ajouter");
    Route::delete('/villageois/delete/{villageois}', 'VillageoisController@delete')->name("villageois.supprimer");
    Route::post('/villageois/update/{villageois}', 'VillageoisController@update')->name("villageois.update");
    Route::get("/villageois/{villageois}", 'VillageoisController@edit')->name("villageois.edit");


    Route::get("/rechercher_trajet", 'TrajetsController@RechercheTrajet')->name("trajets.rechercher");
    Route::get("/proposer_trajet", 'TrajetsController@ProposerTrajet')->name("trajets.proposer");

    Route::get('/home', 'HomeController@index')->name('home');
});
/* 
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard'); */


//for user or customer 
Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('/user/dashboard', UserDashboardComponent::class)->name('user.dashboard');
});
//for admin 
Route::middleware(['auth:sanctum', 'verified', 'authadmin'])->group(function () {
    Route::get('/admin/dashboard', AdminDashboardComponent::class)->name('admin.dashboard');
});

Auth::routes();


// Route::get("/login", 'Auth\LoginController@edit')->name("login");
// Route::get("/register", 'Auth\RegisterController@edit')->name("register");
