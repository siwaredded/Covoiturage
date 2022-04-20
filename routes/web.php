<?php

use App\Http\Livewire\Admin\AdminDashboardComponent;
use App\Http\Livewire\User\UserDashboardComponent;
use App\Http\Livewire\User\UserProfileComponent;
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

Route::get('/comment', 'App\http\Controllers\TrajetsController@footer1')->name("comment");

Route::get('/QuiSommesNous', 'App\http\Controllers\TrajetsController@footer2')->name("QuiSommesNous");

Route::get('redirects','App\http\Controllers\HomeController@index');



Route::group(['namespace' => 'App\Http\Controllers'], function () {
 

  Route::put('/villageois/makeAdmin/{user}', 'VillageoisController@makeAdmin')->name("make.admin");
    Route::get("/admin/home/utilisateurs", 'VillageoisController@index')->name("villageois");
   // Route::get("/villageois/create", 'VillageoisController@create')->name("villageois.create");
  
    Route::get("/villageois/create/ajouter", 'VillageoisController@store')->name("villageois.ajouter");
    Route::delete('/villageois/delete/{user}', 'VillageoisController@delete')->name("villageois.supprimer");
   // Route::post('/villageois/update/{villageois}', 'VillageoisController@update')->name("villageois.update");
   // Route::get("/villageois/{villageois}", 'VillageoisController@edit')->name("villageois.edit");
   

   

    Route::get("/rechercher_trajet", 'TrajetsController@RechercheTrajet')->name("trajets.rechercher");
    Route::get("/proposer_trajet", 'TrajetsController@ProposerTrajet')->name("trajets.proposer");
    Route::post("/proposer_trajet/ajouter", 'TrajetsController@store')->name("ajouter.trajet");

    Route::get('/home', 'HomeController@index')->name('user');
    Route::get('/user/dashboard', 'HomeController@userdashboard')->name('user.dashboard');
});


//Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
  //  return view('dashboard');
//})->name('dashboard'); 



//for user or customer 
//Route::middleware(['auth:sanctum', 'verified'])->group(function () {
  //Route::get('/user/dashboard', UserDashboardComponent::class)->name('user.dashboard');
//});
//for admin 
//Route::middleware(['auth:sanctum', 'verified', 'authadmin'])->group(function () {
  // Route::get('/admin/dashboard', AdminDashboardComponent::class)->name('admin.dashboard');
//});

Auth::routes();

route::get('admin/home',[\App\Http\Controllers\HomeController::class,'adminHome'])->name('admin.home')
->middleware('is_admin');
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');



