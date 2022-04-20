<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreVillageoisRequest;
use App\Models\Entreprise;
use App\Models\user;
use Illuminate\Http\Request;


class VillageoisController extends Controller
{
   public function index()
   { 
      $users =user::orderBy("name", "asc")->get();

      return view("villageois", compact("users"));
   }

  // public function create()
   //{
     // $entreprises = Entreprise::get();

  //    return view("createVillageois", compact("entreprises"));
//   }

  // public function store(StoreVillageoisRequest $request)
   //{
     // user::create($request->all());
      //return back()->with("success", "villageois ajouté avec succés!");
   //}

   //public function edit(user $villageois)
   //{
     // $entreprises = Entreprise::all();
      //return view("EditVillageois", compact("villageois", "entreprises"));
  // }

   public function delete(User $user)
   {
      $user->delete();
      return back()->with("successDelete", "Employé supprimé avec succès!");
   }



   public function makeAdmin(User $user)
   {
      $user->is_admin = 1;
      $user->save();
      return back()->with("success", "employé ajouté à la liste des administrateurs!");
   }

   
   
}

