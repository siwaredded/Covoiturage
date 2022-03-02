<?php

namespace App\Http\Controllers;

use App\Models\Entreprise;
use App\Models\villageois;
use Illuminate\Http\Request;


class VillageoisController extends Controller
{
    public function index () {

        $villageois = villageois::orderBy("nom","asc") ->get();
        return view("villageois",compact("villageois"));
     }

     public function create() {

        $entreprises = Entreprise::all();
        return view("createVillageois",compact("entreprises"));
     }
     public function store(Request $request) {

      $request->validate([
         "nom"=>"required",
         "prenom"=>"required",
         "email"=>"required",
         "telephone"=>"required",
         "entreprise_id"=>"required",
      ]);
      Villageois::create($request->all());
      return back() ->with("success","villageois ajouté avec succés!");
   }
}
